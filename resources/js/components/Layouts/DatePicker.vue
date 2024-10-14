<template>
<div class="relative inline-block" ref="datepickerWrapper">
    <div class="relative flex justify-center items-center">
        <input type="text" placeholder="Date" :value="formattedDate" @focus="toggleDatepicker" class="rounded-full w-64 py-2 pl-5 text-[#173D6B] bg-transparent border border-[#173D6B] border-opacity-10 cursor-pointer" />
        <span class="absolute right-2 text-[#173D6B] material-symbols-outlined ">
            calendar_month
        </span>
    </div>
    <div v-if="isOpen" class="absolute w-full z-10 mt-2 bg-white bg-opacity-80 shadow-lg rounded-[30px] p-4 border border-gray-200">
        <div class="flex justify-between items-center mb-2">
            <button @click="prevMonth" class="text-[#173D6B] text-xl font-bold font-quicksand hover:text-gray-700">
                &lt;
            </button>
            <span class="text-[#173D6B] text-xl font-quicksand font-bold">{{ monthNames[currentMonth] }} {{ currentYear }}</span>
            <button @click="nextMonth" class="text-[#173D6B] text-xl font-bold font-quicksand hover:text-gray-700">
                &gt;
            </button>
        </div>

        <div class="grid grid-cols-7 gap-1 pt-1.5">
            <span v-for="day in dayNames" :key="day" class="text-center text-[#173D6B]">{{ day }}</span>

            <span v-for="n in firstDayOfMonth" :key="'empty' + n" class="py-1"></span>

            <button v-for="(date, index) in daysInMonth" :key="index" :class="[{
                  'py-1 rounded-lg text-center': true,
                  'bg-[#173D6B] text-white font-semibold': isSelected(date),
                  'hover:bg-[#173D6B] hover:bg-opacity-80 hover:text-white': !isSelected(date),
                }]" @click="selectDate(date)">
                {{ date.getDate() }}
            </button>
        </div>
    </div>
</div>
</template>

    
<script>
export default {
    props: {
        modelValue: {
            type: [Date, String],
            default: null
        }
    },
    data() {
        return {
            isOpen: false,
            selectedDate: this.convertModelValueToDate(this.modelValue),
            currentMonth: new Date().getMonth(),
            currentYear: new Date().getFullYear(),
            dayNames: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
            monthNames: [
                'January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December',
            ],
        };
    },
    computed: {
        firstDayOfMonth() {
            return new Date(this.currentYear, this.currentMonth, 1).getDay();
        },
        daysInMonth() {
            const days = [];
            const start = new Date(this.currentYear, this.currentMonth, 1);
            const end = new Date(this.currentYear, this.currentMonth + 1, 0);

            for (let day = start; day <= end; day.setDate(day.getDate() + 1)) {
                days.push(new Date(day));
            }
            return days;
        },
        formattedDate() {
            return this.formatDate(this.selectedDate);
        }
    },
    watch: {
        modelValue: {
            immediate: true,
            handler(newVal) {
                this.selectedDate = this.convertModelValueToDate(newVal);
            }
        }
    },
    methods: {
        toggleDatepicker() {
            this.isOpen = !this.isOpen;
        },
        selectDate(date) {
            this.selectedDate = date;
            this.isOpen = false;
            this.$emit('update:modelValue', this.formatDate(this.selectedDate));
        },
        prevMonth() {
            if (this.currentMonth === 0) {
                this.currentYear--;
                this.currentMonth = 11;
            } else {
                this.currentMonth--;
            }
        },
        nextMonth() {
            if (this.currentMonth === 11) {
                this.currentYear++;
                this.currentMonth = 0;
            } else {
                this.currentMonth++;
            }
        },
        isSelected(date) {
            if (this.selectedDate instanceof Date) {
                return (
                    this.selectedDate.getDate() === date.getDate() &&
                    this.selectedDate.getMonth() === date.getMonth() &&
                    this.selectedDate.getFullYear() === date.getFullYear()
                );
            }
            return false;
        },
        formatDate(date) {
            if (!(date instanceof Date)) return '';
            return `${date.getFullYear()}/${String(date.getMonth() + 1).padStart(2, '0')}/${String(date.getDate()).padStart(2, '0')}`;
        },
        convertModelValueToDate(value) {
            if (typeof value === 'string') {
                const parts = value.split('/');
                return new Date(parts[0], parts[1] - 1, parts[2]);
            } else if (value instanceof Date) {
                return value;
            }
            return null;
        },
        handleClickOutside(event) {
            if (!this.$refs.datepickerWrapper.contains(event.target)) {
                this.isOpen = false;
            }
        },
    },
    mounted() {
        document.addEventListener('click', this.handleClickOutside);
    },
    beforeUnmount() {
        document.removeEventListener('click', this.handleClickOutside);
    },
};
</script>
