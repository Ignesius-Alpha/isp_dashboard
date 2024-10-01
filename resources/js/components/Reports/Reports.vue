<template>
    <div class="">
        <div class="flex justify-between gap-x-3">
            <div class="w-1/5 flex justify-start items-end">
                <h2 class="text-xl xl:text-3xl truncate font-bold text-[#173D6B]">Reports</h2>
            </div>
            <div class="flex w-1/5 flex-col space-y-2">
                <label class=" font-bold text-[#173D6B] pl-4">Filter by</label>
                <select
                    class="rounded-full py-2 pl-4 text-[#173D6B] bg-transparent border border-[#173D6B] border-opacity-10"
                    name="" id="">
                    <option value="name" class=" mx-2">View-Support</option>
                    <option value="name">Sales</option>
                    <option value="name">Support</option>
                    <option value="name">Finance</option>
                </select>
            </div>
            <div class="flex w-2/5 flex-col space-y-2">
                <label class=" font-bold text-[#173D6B] pl-4 ">Filter by</label>
                <div class="flex justify-evenly">
                    <select
                        class=" w-full rounded-full py-2 pl-4 text-[#173D6B] bg-transparent border border-[#173D6B] border-opacity-10"
                        name="" id="">
                        <option value="name" class="">Select a date</option>
                    </select>
                    <label for="" class="p-2 text-[#173D6B]">to</label>
                    <select
                        class="w-full rounded-full py-2 pl-4 text-[#173D6B] bg-transparent border border-[#173D6B] border-opacity-10"
                        name="" id="">
                        <option value="name" class="">Select a date</option>
                    </select>
                </div>
            </div>
            <div class="flex w-1/5 flex-col space-y-2">
                <label class=" font-bold text-[#173D6B] pl-4">View</label>
                <select
                    class="rounded-full py-2 pl-4 text-[#173D6B] bg-transparent border border-[#173D6B] border-opacity-10"
                    name="" id="">
                    <option value="name" class=" mx-2">Last 30 days</option>
                    <option value="name">Last 60 days</option>
                    <option value="name">Last 90 days</option>
                    <option value="name">Last 120 days</option>
                </select>
            </div>
            <div class="flex w-1/5 place-items-end mb-0.5">
                <button
                    class="rounded-[30px] w-full py-1.5 font-bold text-[#173D6B] border border-[#173D6B]">Export</button>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4 xl:gap-12 mt-12">
            <div v-for="(data, index) in chartData" :key="index"
                class="flex border-2 border-white rounded-[50px] text-center py-10 bg-white bg-opacity-20 justify-center">
                <div class="text-center w-3/4">
                    <h3 class="font-bold font-quicksand text-9xl text-[#3380F5]">{{ data.services }}</h3>
                    <p class="text-[#173D6B] text-lg mb-3 lg:mb-8">{{ data.serviceTitle }}</p>
                    <div class="">
                        <bar-graph :data="data.chartData" :categories="data.chartCategories"></bar-graph>
                    </div>
                    <button class=" px-6 border text-[#173D6B] rounded-[30px]  border-[#173D6B] ">Export</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            chartData: [
                {
                    services: 156,
                    serviceTitle: 'Active Services',
                    chartData: [16, 34, 12, 20, 0,],
                    chartCategories: ['April', 'May', 'Jun', 'Jul', 'Aug']
                },
                {
                    services: 9,
                    serviceTitle: 'Cancelled Services',
                    chartData: [5, 2, 3, 9, 0],
                    chartCategories: ['April', 'May', 'Jun', 'Jul', 'Aug']
                }
            ]
        }
    }
}
</script>

<style lang="scss" scoped></style>