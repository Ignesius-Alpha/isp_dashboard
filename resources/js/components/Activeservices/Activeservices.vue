<template>
<div class="grid grid-cols-3 gap-x-1 lg:gap-x-8 mb-8">
    <div v-for="(service, index) in services" :key="index" class="py-10 p-5 border-2 border-slate-200 rounded-[50px] justify-center items-center">
        <div class="flex flex-col justify-center items-center text-center w-full">
            <a class="text-8xl font-quicksand font-bold text-[#3380F5]">{{ service.num_services }}</a>
            <p class="text-[#173D6B] text-lg mt-3.5 mb-3.5 text-wrap">Services Activated - <b>{{ service.activated_date }}</b></p>
            <button class="border border-[#173D6B] text-[#173D6B] px-5 rounded-[30px] py-1.5">Reports</button>
        </div>
    </div>
</div>
<div class="flex flex-wrap space-y-6 xl:flex-row xl:flex-nowrap items-center justify-between text-[#173D6B]">
    <div class="flex items-center justify-start w-1/2 xl:w-1/4">
        <h2 class="font-bold text-2xl text-[#173D6B]">Active Services</h2>
    </div>
    <div class=" w-11/12 grid grid-cols-8 gap-x-2 lg:gap-x-4 xl:gap-x-2">
        <div class=" col-span-3 -mt-3">
            <label class="ml-5 mb-1.5 font-bold" for="filterby">Filter by</label>
            <select class="rounded-[30px] py-2.5 w-full px-4 bg-transparent border border-slate-400" name="" v-model="filterby" id="filterby">
                <option value="">All</option>
                <option v-for="(option, index) in filterOptions" :key="index" :value="option.value">
                    {{ option.text }}
                </option>
            </select>
        </div>
        <div class=" col-span-4 -mt-3">
            <label class="ml-7 mb-1.5 font-bold" for="clientSearch">Search for client:</label>
            <input id="clientSearch" v-model="clientSearch" class="rounded-[30px] py-2 w-full px-6 bg-transparent border border-slate-400" placeholder="Client Name / Installation Address / ISP Reference" type="text">
        </div>
        <div class=" col-span-1 justify-end items-center flex">
            <button class="border border-[#173D6B] px-7 lg:px-9 xl:px-9 2xl:px-11 rounded-[30px] -mr-16 xl:-mr-2 2xl:mr-0 mt-2 py-1.5">Export</button>
        </div>
    </div>
</div>
<div class="w-full justify-center items-center my-7 overflow-auto">
    <table class="mx-auto w-full">
        <thead>
            <tr>
                <th v-for="(tableHead, index) in tableHeaders" :key="index" class="p-2.5 text-left text-[#173D6B]">
                    {{ tableHead }}
                </th>
            </tr>
        </thead>
        <tbody class="">
            <tr v-for="(serviceDetails, index) in filteredServices" :key="index" class="border border-slate-600 border-opacity-20">
                <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                    {{ serviceDetails.isp_ref }}
                </td>
                <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                    {{ serviceDetails.status }}
                </td>
                <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                    {{ serviceDetails.service_Location }}
                </td>
                <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                    {{ serviceDetails.type }}
                </td>
                <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                    {{ serviceDetails.customer }}
                </td>
                <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                    {{ serviceDetails.live_date }}
                </td>
                <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                    <div class="flex items-center justify-center">
                        <button class="border border-[#173D6B] px-6 py-1.5 rounded-[30px]">{{ serviceDetails.button1
                                }}</button>
                    </div>
                </td>
                <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                    <div class="flex items-center justify-center">
                        <action-modal :serviceData="serviceDetails" :buttonText="serviceDetails.button2" buttonTextColor="white" buttonColor="#3380F5" />
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</template>

<script>
export default {
    data() {
        return {
            services: [{
                    activated_date: 'July 2024',
                    num_services: '2',
                },
                {
                    activated_date: 'June 2024',
                    num_services: '10',
                },
                {
                    activated_date: 'May 2024',
                    num_services: '9',
                },
            ],
            tableHeaders: [
                "ISP Ref",
                "Status",
                "Service Location",
                "Type",
                "Customer",
                "Live Date",
                "Handover Document",
                "Actions"
            ],
            servicesTable: [{
                    isp_ref: 'REF123',
                    status: 'Active',
                    service_Location: '123 Country Life Retirement Estate',
                    type: 'FTTH',
                    customer: 'Kerry Olckers',
                    service: 'Preon 25 Mbps',
                    live_date: '1 Feb 2024',
                    button1: 'Download',
                    button2: 'Action'
                },
                {
                    isp_ref: 'REF124',
                    status: 'Active',
                    service_Location: 'Unit 34 Parkview',
                    type: 'FTTH',
                    customer: 'Jack Nick',
                    service: 'Quark 100 Mbps',
                    live_date: '28 Feb 2023',
                    button1: 'Download',
                    button2: 'Action'
                },
                {
                    isp_ref: 'REF125',
                    status: 'Inactive',
                    service_Location: '89 Thornbrook Golf Estate',
                    type: 'FTTB',
                    customer: 'Kerry Olckers',
                    service: 'Preon 25 Mbps',
                    live_date: '11 Mar 2022',
                    button1: 'Download',
                    button2: 'Action'
                },
                {
                    isp_ref: 'REF456',
                    status: 'Active',
                    service_Location: '56 Country Life Retirement Estate',
                    type: 'FTTH',
                    customer: 'Peter Parket',
                    service: 'Preon 50 Mbps',
                    live_date: '22 Apr 2021',
                    button1: 'Download',
                    button2: 'Action'
                },
                {
                    isp_ref: 'REF456',
                    status: 'Inactive',
                    service_Location: '5 Arlon Place',
                    type: 'FTTB',
                    customer: 'Jack Nick',
                    service: 'Quark 100 Mbps',
                    live_date: '16 Jul 2020',
                    button1: 'Download',
                    button2: 'Action'
                },
            ],
            filterby: '',
            filterOptions: [{
                    text: 'Date: Newest to Oldest',
                    value: 'Date: Newest to Oldest'
                },
                {
                    text: 'Date: Oldest to Newest',
                    value: 'Date: Oldest to Newest'
                },
                {
                    text: 'Customer: A to Z',
                    value: 'Customer: A to Z'
                },
                {
                    text: 'Customer: Z to A',
                    value: 'Customer: Z to A'
                },
                {
                    text: 'Status: Active',
                    value: 'Status: Active'
                },
                {
                    text: 'Status: InActive',
                    value: 'Status: InActive'
                },
            ],
            clientSearch: ''
        }
    },
    computed: {
        filteredServices() {
            let services = this.servicesTable;
            if (this.filterby) {
                if (this.filterby === 'Date: Newest to Oldest') {
                    services = services.sort((a, b) => new Date(b.live_date) - new Date(a.live_date));
                } else if (this.filterby === 'Date: Oldest to Newest') {
                    services = services.sort((a, b) => new Date(a.live_date) - new Date(b.live_date));
                } else if (this.filterby === 'Customer: A to Z') {
                    services = services.sort((a, b) => a.customer.localeCompare(b.customer));
                } else if (this.filterby === 'Customer: Z to A') {
                    services = services.sort((a, b) => b.customer.localeCompare(a.customer));
                } else if (this.filterby === 'Status: Active') {
                    services = services.filter(service => service.status === 'Active');
                } else if (this.filterby === 'Status: InActive') {
                    services = services.filter(service => service.status === 'Inactive');
                }
            }
            if (this.clientSearch) {
                services = services.filter(service => {
                    return (
                        service.customer && service.customer.toLowerCase().includes(this.clientSearch.toLowerCase()) ||
                        service.service_Location && service.service_Location.toLowerCase().includes(this.clientSearch.toLowerCase()) ||
                        service.isp_ref && service.isp_ref.toLowerCase().includes(this.clientSearch.toLowerCase()) ||
                        service.status && service.status.toLowerCase().includes(this.clientSearch.toLowerCase())
                    );
                });
            }
            return services;
        }
    }
}
</script>

<style>
table {
    table-layout: auto;
    width: 100%;
}

th,
td {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 150px;
    /* adjust this value to fit your needs */
}

/* make the table responsive */
@media only screen and (max-width: 768px) {
    table {
        font-size: 0.8em;
    }

    th,
    td {
        padding: 5px;
    }
}

@media only screen and (max-width: 480px) {
    table {
        font-size: 0.6em;
    }

    th,
    td {
        padding: 2px;
    }
}
</style>
