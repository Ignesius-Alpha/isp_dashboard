<template>
<div class="">
    <div class="flex justify-between gap-x-2">
        <div class="w-1/5 flex justify-start items-end">
            <h2 class="text-xl xl:text-3xl truncate font-bold text-[#173D6B]">Reports</h2>
        </div>
        <div class="flex w-[15%] flex-col space-y-2">
            <label class="font-bold text-[#173D6B] pl-4">Sort by</label>
            <select v-model="sortValue" class="rounded-full py-2.5 pl-4 text-[#173D6B] bg-transparent border border-[#173D6B] border-opacity-10" name="" id="">
                <option selected disabled value="" class="mx-2">Sorting Options</option>
                <option v-for="(sortoption, index) in sortingOptions" :key="index" :value="sortoption.value">{{
                        sortoption.name }}</option>
            </select>
        </div>
        <div class="flex w-3/5 2xl:w-2/5 flex-col space-y-2">
            <label class="font-bold text-[#173D6B] pl-4">Date From, To</label>
            <div class="flex gap-x-1 justify-evenly">
                <DatePicker v-model="selectedDate" />
                <DatePicker v-model="selectedRange" />
            </div>
        </div>
        <div class="flex w-[15%] flex-col space-y-2">
            <label class="font-bold text-[#173D6B] pl-4">View Range</label>
            <select v-model="rangeValue" class="rounded-full py-2.5 pl-4 text-[#173D6B] bg-transparent border border-[#173D6B] border-opacity-10" name="" id="">
                <option selected disabled value="" class="mx-2">Select Date Range</option>
                <option v-for="(range, index) in rangeOptions" :key="index" :value="range.value">{{ range.name }}
                </option>
            </select>
        </div>
        <div class="flex w-[15%] place-items-end mb-0.5">
            <button class="rounded-[30px] w-full py-1.5 font-bold text-[#173D6B] border border-[#173D6B]">Export</button>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 xl:gap- mt-12">
        <div v-for="(data, index) in chartData" :key="index" class="flex border-2 border-white rounded-[50px] text-center py-10 bg-white bg-opacity-20 justify-center">
            <div class="text-center w-3/4">
                <h3 class="font-bold font-quicksand text-9xl text-[#3380F5]">{{ data.services }}</h3>
                <p class="text-[#173D6B] text-lg mb-3 lg:mb-8">{{ data.serviceTitle }}</p>
                <div class="flex justify-center w-full mb-3">
                    <bar-graph class="w-full" :labels="data.chartCategories" :datasets="[{
                            label: data.serviceTitle,
                            backgroundColor: data.backgroundColor,
                            data: data.chartData,
                        }]" :title="data.serviceTitle" />
                </div>
                <button class="px-6 border text-[#173D6B] rounded-[30px] border-[#173D6B]">Export</button>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            rangeValue: '',
            sortValue: '',
            selectedDate: null,
            selectedRange: null,
            rangeOptions: [{
                    name: 'Last 30 Days',
                    value: 30
                },
                {
                    name: 'Last 60 Days',
                    value: 60
                },
                {
                    name: 'Last 90 Days',
                    value: 90
                },
                {
                    name: 'Last 120 Days',
                    value: 120
                }
            ],
            sortingOptions: [{
                    name: 'Support',
                    value: 'Support'
                },
                {
                    name: 'Services',
                    value: 'Services'
                },
                {
                    name: 'Sales',
                    value: 'Sales'
                },
            ],
            chartData: [{
                    services: 156,
                    serviceTitle: 'Active Services',
                    chartData: [34, 12, 20, 15, 44],
                    chartCategories: ['Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                    backgroundColor: ['#173D6B', '#3380F5', '#54BFF5']
                },
                {
                    services: 9,
                    serviceTitle: 'Cancelled Services',
                    chartData: [2, 3, 9, 25, 15],
                    chartCategories: ['Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                    backgroundColor: ['#173D6B', '#3380F5', '#54BFF5']
                },
            ],
        };
    },
    methods: {
    },
};
</script>

<style lang="css">
</style>
