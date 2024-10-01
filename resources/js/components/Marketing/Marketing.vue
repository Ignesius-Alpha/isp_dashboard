<template>
<div class="mb-4">
    <div class="flex flex-row items-center justify-between text-[#173D6B] mb-5">
        <h2 class="font-bold text-2xl text-[#173D6B]">Marketing</h2>
    </div>
    <div class="border-2 border-white rounded-[50px] p-5 bg-white bg-opacity-20">
        <div class="grid grid-cols-8 gap-x-8">
            <div class="flex flex-col col-span-4 border-gray-300 px-4">
                <div class="flex text-3xl text-[#173D6B] gap-x-4 font-bold flex-row justify-between items-center mb-4">
                    <button @click="changeMonth(-1)" class="text-xl font-semibold px-2">
                        <span class="material-symbols-outlined">
                            keyboard_double_arrow_left
                        </span>
                    </button>
                    <div class="font-quicksand font-bold text-2xl text-center">
                        {{ currentMonthName }} {{ currentYear }}
                    </div>
                    <button @click="changeMonth(1)" class="text-xl font-semibold px-2">
                        <span class="material-symbols-outlined">
                            double_arrow
                        </span>
                    </button>
                </div>

                <div class="grid grid-cols-7 gap-x-3 gap-y-3 text-[#173D6B] font-semibold">
                    <div v-for="(day, index) in daysOfWeek" :key="index" class="text-center p-1">
                        {{ day }}
                    </div>
                </div>

                <div class="grid grid-cols-7 gap-x-3 gap-y-3">
                    <div v-for="index in firstDayOfMonthOffset" :key="index" class="text-center rounded-[10px] p-1">
                    </div>
                    <div v-for="(day, index) in daysInMonth" :key="index" class="text-center rounded-[10px] border text-[#173D6B] border-[#173D6B] p-1 lg:p-2" :class="{ 'bg-[#3380F5] border-none text-white': day === todayDate && isCurrentMonth }">
                        {{ day }}
                    </div>
                </div>
            </div>
            <div class="col-span-4 text-center my-auto">
                <a href="/Marketing">
                    <h1 class="font-bold text-wrap text-[#173D6B] text-2xl xl:text-4xl">Upcoming Activations</h1>
                    <a href="" class="text-[#3380F5] text-wrap text-sm font-bold"> {{ activationDetails[0].date }} -
                        {{
                                activationDetails[0].serviceLocation }} - {{ activationDetails[0].type }}</a>
                </a>
            </div>
        </div>
    </div>
    <div class="mt-8 flex">
        <div v-for="(option, index) in marketingOptions" :key="index" :class="[selectedTab === index ? 'bg-[#173D6B] text-white' : 'bg-[#e8eaec] text-[#173D6B]']" class="font-semibold xl:font-bold justify-between mx-auto grid grid-cols-4 px-4 lg:px-10 2xl:px-24 py-2 border border-white rounded-[50px] p-2 cursor-pointer" @click="selectedTab = index">
            <div class="flex text-sm xl:text-sm items-start justify-center col-span-4">
                <span class="truncate">{{ option }}</span>
            </div>
        </div>
    </div>
    <div class="bg-white bg-opacity-40 h-fit selection:-z-4 rounded-[30px] -mt-5 p-9">
        <div v-if="selectedTab === 0" class="space-y-4">
            <activations :activationTitles="activationTitles" :activationDetails="activationDetails" />
        </div>
        <div v-else-if="selectedTab === 1" class="space-y-4">
            <uptakes :estateTitles="estateTitles" :estateDetails="estateDetails" />
        </div>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            daysOfWeek: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
            todayDate: new Date().getDate(),
            currentMonth: new Date().getMonth(),
            currentYear: new Date().getFullYear(),
            marketingOptions: [
                "Activations",
                "Estate Uptake"
            ],
            activationTitles: [
                "Date",
                "Time",
                "Location",
                "Slots Available",
                "Cut-Off Date",
                "Details",
                "Join"
            ],
            estateTitles: [
                "Clear Access Estate",
                "Location",
                "Uptake %"
            ],
            activationDetails: [{
                    date: '26 July 2024',
                    start_time: '10:00',
                    end_time: '15:00',
                    serviceLocation: 'Thornbrook Golf Estate',
                    type: 'Activation',
                    avail_slots: '2/3',
                    cut_off_date: '19 July 2024',
                    btnView: 'View',
                    btnDownload: 'Download',
                    btnJoin: 'Join'
                },
                {
                    date: '1 August 2024',
                    start_time: '10:00',
                    end_time: '15:00',
                    serviceLocation: 'Vivini Estate',
                    type: 'Fun Day',
                    avail_slots: '1/5',
                    cut_off_date: '26 July 2024',
                    btnView: 'View',
                    btnDownload: 'Download',
                    btnJoin: 'Join'
                },
                {
                    date: '13 August 2024',
                    start_time: '10:00',
                    end_time: '15:00',
                    serviceLocation: 'Blue Hills Golf Estate',
                    type: 'Activation',
                    avail_slots: '2/3',
                    cut_off_date: '3 August 2024',
                    btnView: 'View',
                    btnDownload: 'Download',
                    btnJoin: 'Join'
                },
            ],
            estateDetails: [{
                    est_name: 'Altura',
                    location: '42 Viljoen Road, Ruimsig Country Estate, Krugersdorp, Johannesburg, 1732',
                    uptake: '50%'
                },
                {
                    est_name: 'Asmara Mews',
                    location: '310 Reitz Road, Grobler Park, Roodepoort, 1724',
                    uptake: '75%'
                },

                {
                    est_name: 'Zanzou, Westwood Estate',
                    location: 'Flame Thorn Drive, Westwood, Sherwood, KwaZulu-Natal, 3630',
                    uptake: '78%'
                },
                {
                    est_name: 'Arlon Place',
                    location: '1229 South Street, Hatfield, Pretoria, 0028',
                    uptake: '13%'
                },
                {
                    est_name: 'Amarosa Retirement Village',
                    location: '30 Totius Road, Ruimsig, Roodepoort, 1724',
                    uptake: '22%'
                },
                {
                    est_name: 'Aloe Terrace, Westwood Estate',
                    location: 'Flame Thorn Drive, Westwood, Sherwood, KwaZulu-Natal, 3630',
                    uptake: '78%'
                },
            ],
            selectedTab: localStorage.getItem('selectedTab') ? parseInt(localStorage.getItem('selectedTab')) : 0,
        };
    },
    mounted() {
        this.generateCalendar();
    },
    methods: {
        changeMonth(offset) {
            this.currentMonth += offset;
            if (this.currentMonth > 11) {
                this.currentMonth = 0;
                this.currentYear++;
            } else if (this.currentMonth < 0) {
                this.currentMonth = 11;
                this.currentYear--;
            }
        },
        generateCalendar() {
            const currentDate = new Date();
            const firstDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
            const lastDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);

            const days = [];
            let date = firstDayOfMonth;

            while (date <= lastDayOfMonth) {
                days.push({
                    date: new Date(date),
                    day: date.getDate(),
                    dayOfWeek: date.getDay(),
                });
                date.setDate(date.getDate() + 1);
            }

            this.days = days;
        },
    },
    computed: {
        daysInMonth() {
            const date = new Date(this.currentYear, this.currentMonth + 1, 0);
            return date.getDate();
        },
        firstDayOfMonthOffset() {
            const firstDayOfMonth = new Date(this.currentYear, this.currentMonth, 1);
            return firstDayOfMonth.getDay();
        },
        isCurrentMonth() {
            const today = new Date();
            return this.currentMonth === today.getMonth() && this.currentYear === today.getFullYear();
        },
        currentMonthName() {
            return new Date(this.currentYear, this.currentMonth).toLocaleString('default', {
                month: 'long'
            });
        },
    },

    watch: {
        selectedTab(newVal) {
            localStorage.setItem('selectedTab', newVal);
        }
    }
};
</script>

<style lang="scss" scoped></style>
