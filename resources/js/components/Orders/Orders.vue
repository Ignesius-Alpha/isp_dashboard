<template>
    <section class="mx-auto">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 items-center justify-center">
            <div class="py-12 p-5 border-2 border-slate-200 rounded-[50px] justify-center items-center">
                <div class="text-center w-full">
                    <h1 class="text-5xl md:text-6xl lg:text-8xl font-quicksand font-bold text-[#3380F5]">{{ orderProgressDetails.length
                        }}</h1>
                    <p class="text-[#173D6B] text-lg xl:text-xl mt-2"> Pending Orders </p>
                </div>
            </div>
            <div class="py-12 p-5 border-2 border-slate-200 rounded-[50px] justify-center items-center">
                <div class="text-center w-full">
                    <h1 class="text-5xl md:text-6xl lg:text-8xl font-quicksand font-bold text-[#54BFF5]">{{ actionDetails.length }}
                    </h1>
                    <p class="text-[#173D6B] text-lg xl:text-xl mt-2">Actions Required </p>
                </div>
            </div>
            <div class="py-12 p-5 border-2 border-slate-200 rounded-[50px] justify-center items-center">
                <div class="text-center w-full">
                    <h1 class="text-5xl md:text-6xl lg:text-8xl font-quicksand font-bold text-[#3380F5]">{{
                        upgradeDowngradeDetails.length }}</h1>
                    <p class="text-[#173D6B] text-lg xl:text-xl mt-2"> Pending Upgrade/Downgrade</p>
                </div>
            </div>
            <div class="py-12 p-5 border-2 border-slate-200 rounded-[50px] justify-center items-center">
                <div class="text-center w-full">
                    <h1 class="text-5xl md:text-6xl lg:text-8xl font-quicksand font-bold text-[#173D6B]">{{ cancellationDetails.length
                        }}</h1>
                    <p class="text-[#173D6B] text-lg xl:text-xl mt-2"> Pending Cancellations</p>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full">
        <div class="mt-8 flex">
            <div v-for="(option, index) in orderTabs" :key="index"
                :class="[selectedTab === index ? 'bg-[#173D6B] text-white' : 'bg-[#e8eaec] text-[#173D6B]']"
                class="font-semibold xl:font-bold justify-between mx-auto grid grid-cols-4 px-4 lg:px-10 py-2 border border-white rounded-[50px] p-2 cursor-pointer"
                @click="selectedTab = index">
                <div class="flex text-sm xl:text-sm items-start justify-center col-span-4">
                    <span class="truncate">{{ option }}</span>
                </div>
            </div>
        </div>

        <div class="bg-white bg-opacity-40 h-fit -z-4 rounded-[30px] -mt-5 py-4">
            <div class="p-5 " v-if="selectedTab === 0">
                <place-order :search="search" :contactInfo="contactInfo" :alternativeContact="alternativeContact"
                    :service="service" :serviceOptions="serviceOptions" />
            </div>
            <div class="p-5 " v-else-if="selectedTab === 1">
                <in-progress @update:selected="selected = $event" :ordersProgressHeaders="ordersProgressHeaders"
                    :orderProgressDetails="orderProgressDetails" :selected="selected" />
            </div>
            <div class="p-5 " v-else-if="selectedTab === 2">
                <action-required :selectedRow="selectedRow" :actionTabHeaders="actionTabHeaders" :actionDetails="actionDetails" @toggleAction="toggleAction"
                    @handleDocumentUpload="handleDocumentUpload" @handleBulkUpload="handleBulkUpload"
                    :actionToggle="actionToggle" @update:actionToggle="actionToggle = $event" />

            </div>
            <div class="p-5 " v-else-if="selectedTab === 3">
                <pending-service :upgradeDowngradeDetails="upgradeDowngradeDetails"
                    :upgradeDowngradeInputs="upgradeDowngradeInputs" />
            </div>
            <div class="p-5 " v-else-if="selectedTab === 4">
                <cancel-service :cancellationDetails="cancellationDetails" :cancellationInputs="cancellationInputs" />
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            isOpen: false,
            uploadedDocument: null,
            uploadedDocuments: [],
            selected: '',
            orderTabs: [
                "Place an Order",
                "Orders in Progress",
                "Action Required",
                "Upgrade/Downgrade",
                "Cancel Service"
            ],
            ordersProgressHeaders: [
                "ISP Reference",
                "Service Location",
                "Type",
                "customer_details",
                "Current Phase",
                "Status"
            ],
            actionTabHeaders: [
                "ISP Reference",
                "FNO Notes",
                "Required"
            ],
            search: [
                {
                    searchAddress: '',
                    buildingName: '',
                    suiteNumber: ''
                }
            ],
            companyDetails: [
                {
                    companyName: '',
                    vatRegistration: ''
                }
            ],
            contactInfo: [
                {
                    name: '',
                    surname: '',
                    email: '',
                    retypeAddress: '',
                    mobileNum: '',
                    idNumber: '',
                    passportID: '',
                }
            ],
            alternativeContact: [
                {
                    name: '',
                    surname: '',
                    email: '',
                    mobileNum: '',
                }
            ],
            service: [
                {
                    service: '',
                    ispRefNum: '',
                    comment: '',
                }
            ],
            serviceOptions: [
                { value: 'Preon 25Mbps', label: 'Preon 25Mbps' },
                { value: 'Preon 29Mbps', label: 'Preon 29Mbps' },
                { value: 'Preon 25Mbps', label: 'Preon 25Mbps' },
                { value: 'Preon 54Mbps', label: 'Preon 54Mbps' },
                { value: 'Preon 25Mbps', label: 'Preon 25Mbps' },
                { value: 'Preon 25Mbps', label: 'Preon 25Mbps' }
            ],
            orderProgressDetails: [
                {
                    isp_ref: 'REF123',
                    service_location: '123 Country Life',
                    type: 'FTTH',
                    customer_details: 'Kerry Olckers: Preon 25 Mbps',
                    current_phase: 'In build Scheduled',
                    status: 'Waiting on CA.'

                },
                {
                    isp_ref: 'REF124',
                    service_location: '34 Parkview',
                    type: 'FTTH',
                    customer_details: 'Jack Nick Quark 100 Mbps',
                    current_phase: 'Reschedule',
                    status: 'Waiting on ISP.'

                },
                {
                    isp_ref: 'REF125',
                    service_location: '89 Thornbrook',
                    type: 'FTTH',
                    customer_details: 'Kerry Olckers: Preon 25 Mbps',
                    current_phase: 'In build Scheduled',
                    status: 'Waiting on ISP.'

                },
                {
                    isp_ref: 'REF126',
                    service_location: '56 Country Life',
                    type: 'FTTH',
                    customer_details: 'Peter Parket Preon 50 Mbps',
                    current_phase: 'ONU Scheduled',
                    status: 'Waiting on CA.'

                },
                {
                    isp_ref: 'REF127',
                    service_location: '5 Arlon Place',
                    type: 'FTTB',
                    customer_details: 'Jack Nick Quark 100 Mbps',
                    current_phase: 'In build Scheduled',
                    status: 'Waiting on CA.'

                },
            ],
            actionDetails: [
                {
                    isp_ref: 'REF123',
                    fno_notes: 'Please provide proof of residence',
                    required: ''

                },
                {
                    isp_ref: 'REF124',
                    fno_notes: 'There is an already an active client at this address',
                    required: ''

                },
                {
                    isp_ref: 'REF125',
                    fno_notes: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
                    required: ''

                },
                {
                    isp_ref: 'REF127',
                    fno_notes: 'Lorem ipsum dolor sit amet.',
                    required: ''

                },
                {
                    isp_ref: 'REF126',
                    fno_notes: 'Please provide proof of copy of ID',
                    required: ''

                },
            ],
            upgradeDowngradeDetails: [
                {
                    isp_ref: 'REF123',
                    customer_details: 'Kerry Olckers: Preon 25 Mbps',
                    servicesChange: 'Upgrade to Quark 100 Mbps'
                },
                {
                    isp_ref: 'REF124',
                    customer_details: 'Jack Nick Quark 100 Mbps',
                    servicesChange: 'Downgrade to Quark 200 Mbps'
                },
            ],
            upgradeDowngradeInputs: [
                {
                    clientAddressSearch: '',
                    ispRefSearch: '',
                    updateService: '',
                    effectiveDate: ''
                }
            ],
            cancellationDetails: [
            ],
            cancellationInputs: [
                {
                    clientAddressSearch: '',
                    ispRefSearch: '',
                    cancellationReason: '',
                    note: '',
                    effectiveDate: ''
                }
            ],
            selectedTab: localStorage.getItem('selectedTab') ? parseInt(localStorage.getItem('selectedTab')) : 0,
            actionToggle: true,
            selectedRow: null,
        }
    },
    watch: {
        selectedTab(newVal) {
            localStorage.setItem('selectedTab', newVal);
        },
    },
    methods: {
        toggleAction(actDetails) {
            this.actionToggle = !this.actionToggle;
            this.selectedRow = actDetails;
        },
        handleDocumentUpload(event) {
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = () => {
                this.uploadedDocument = reader.result;
            };
            reader.readAsDataURL(file);
        },
        handleBulkUpload() {
            const bulkDocumentUpload = this.$refs.bulkDocumentUpload;
            if (bulkDocumentUpload) {
                const files = bulkDocumentUpload.files;
                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    const reader = new FileReader();
                    reader.onload = () => {
                        this.uploadedDocuments.push(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
            }
        },
    },
}
</script>

<style lang="scss" scoped></style>