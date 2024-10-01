<template>
    <div class="grid grid-cols-3 gap-x-2 xl:gap-x-14">
        <div class="py-16 p-5 border-2 border-slate-200 rounded-[50px] justify-center items-center">
            <div class="text-center w-full">
                <h2 class="text-5xl md:text-6xl lg:text-7xl font-quicksand font-bold text-[#3380F5]">{{ ticketDetails.length }}</h2>
                <p class="text-lg lg:text-xl lg:text-[#173D6B] mt-4">Pending Tickets</p>
            </div>
        </div>
        <div class="py-16 p-5 border-2 border-slate-200 rounded-[50px] justify-center items-center">
            <div class="text-center w-full">
                <p class="text-5xl md:text-6xl lg:text-7xl font-quicksand font-bold text-[#173D6B]">{{ outages.length }}</p>
                <p class="text-lg lg:text-xl lg:text-[#173D6B] mt-4">Current Outages Reported</p>
            </div>
        </div>
        <div class="py-16 p-5 border-2 border-slate-200 rounded-[50px] justify-center items-center">
            <div class="text-center w-full">
                <p class="text-5xl md:text-6xl lg:text-7xl font-quicksand font-bold text-[#54BFF5]">{{ plannedMaintenance.length }}</p>
                <p class="text-lg lg:text-xl lg:text-[#173D6B] mt-4">Planned Maintenance</p>
            </div>
        </div>
    </div>

    <div class="mt-8 flex">
        <div v-for="(option, index) in supportOptions" :key="index"
            :class="[selectedTab === index ? 'bg-[#173D6B] text-white' : 'bg-[#e8eaec] text-[#173D6B]']"
            class="font-semibold xl:font-bold justify-between mx-auto grid grid-cols-4 px-4 lg:px-10 2xl:px-24 py-2 border border-white rounded-[50px] p-2 cursor-pointer"
            @click="selectedTab = index">
            <div class="flex text-sm xl:text-sm items-start justify-center col-span-4">
                <span class="truncate">{{ option }}</span>
            </div>
        </div>
    </div>

    <div class="bg-white bg-opacity-40 h-fit -z-4 rounded-[30px] -mt-5 py-6">
        <!-- Log Tickets -->
        <div v-if="selectedTab === 0" class="space-y-2 py-5 p-6">
            <log-ticket />
        </div>
        <!-- Tickets -->
        <div v-else-if="selectedTab === 1" class="py-5 p-6 ">
            <all-tickets :ticketDetails="ticketDetails" :tableHeaders="tableHeaders" />
        </div>
        <!-- Outages -->
        <div v-else-if="selectedTab === 2" class="py-5 p-16">
            <link-outages :outages="outages"/>
        </div>
        <!-- Planned Maintenance -->
        <div v-else-if="selectedTab === 3" class="py-5 p-16">
            <planned-maintenance :plannedMaintenance="plannedMaintenance"/>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            supportOptions: [
                "Log Tickets",
                "Tickets",
                "Outages",
                "Planned Maintenance"
            ],
            tableHeaders: [
                "ISP Reference",
                "Service Location",
                "Customer Details",
                "Status"
            ],
            ticketDetails: [
                {
                    isp_ref: 'REF123',
                    serviceLocation: '123 Country Life',
                    custDetails: 'Kerry Olckers: Preon 25 Mbps',
                    status: 'Waiting on CA'
                },
                {
                    isp_ref: 'REF124',
                    serviceLocation: '34 Parkview',
                    custDetails: 'Jack Nick: Quark 100 Mbps',
                    status: 'Agent Responded'
                },
                {
                    isp_ref: 'REF125',
                    serviceLocation: '89 Thornbrook',
                    custDetails: 'Kerry Olckers: Preon 25 Mbps',
                    status: 'Agent Responded'
                },
            ],
            outages: [],
            plannedMaintenance: [],
            selectedTab: localStorage.getItem('selectedTab') ? parseInt(localStorage.getItem('selectedTab')) : 0,
        }
    },
    methods: {

    },
    watch: {
        selectedTab(newVal) {
            localStorage.setItem('selectedTab', newVal);
        }
    }
}
</script>

<style lang="scss" scoped></style>