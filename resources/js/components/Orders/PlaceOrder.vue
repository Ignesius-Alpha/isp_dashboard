<template>
    <div class="grid grid-cols-3 xl:grid-cols-8 gap-8">
        <div class="flex flex-col space-y-2 col-span-1 xl:col-span-4">
            <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold"
                :for="search.searchAddress">Type to search for installation
                address</label>
            <input :id="search.searchAddress" v-model="search.searchAddress"
                class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2"
                placeholder="Example: 123 Country Life Retirement Village" type="text">
        </div>
        <div class="flex flex-col space-y-2 col-span-1 xl:col-span-2">
            <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold"
                :for="search.buildingName">Estate Name</label>
            <input :id="search.buildingName" v-model="search.buildingName"
                class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2"
                placeholder="Example: Country Life" type="text">
        </div>
        <div class="flex flex-col space-y-2 col-span-1 xl:col-span-2">
            <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold"
                :for="search.suiteNumber">Unit Number</label>
            <input :id="search.suiteNumber" v-model="search.suiteNumber"
                class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2"
                placeholder="Example: 12B" type="text">
        </div>
    </div>
    <div class="py-2">
        <p class="font-medium text-[#3380F5] ml-4 my-2">Contact Information </p>
        <div class="grid grid-cols-3 xl:grid-cols-8 gap-8">
            <div class="flex flex-col space-y-2 col-span-1 xl:col-span-2">
                <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold"
                    :for="contactInfo.name">Name</label>
                <input :id="contactInfo.name" v-model="contactInfo.name"
                    class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2"
                    placeholder="Example: John" type="text">
            </div>
            <div class="flex flex-col space-y-2 col-span-1 xl:col-span-2">
                <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold"
                    :for="contactInfo.surname">Surname</label>
                <input :id="contactInfo.surname" v-model="contactInfo.surname"
                    class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2"
                    placeholder="Example: Smith" type="text">
            </div>
            <div class="flex flex-col space-y-2 col-span-1 xl:col-span-2">
                <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold"
                    :for="contactInfo.email">Email Address</label>
                <input :id="contactInfo.email" v-model="contactInfo.email"
                    class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2"
                    placeholder="Example: name@email.co.za" type="text">
            </div>
            <div class="flex flex-col space-y-2 col-span-1 xl:col-span-2">
                <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold"
                    :for="contactInfo.retypeAddress">Retype Email Address</label>
                <input :id="contactInfo.retypeAddress" v-model="contactInfo.retypeAddress"
                    class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2"
                    placeholder="Retype" type="text">
            </div>
        </div>
    </div>
    <div class="grid grid-cols-3 xl:grid-cols-8 gap-8">
        <div class="flex flex-col space-y-2 col-span-1 xl:col-span-2">
            <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold"
                :for="contactInfo.mobileNum">Mobile Number</label>
            <input :id="contactInfo.mobileNum" v-model="contactInfo.mobileNum"
                class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2"
                placeholder="Example: 0822228789" type="text">
        </div>
        <div class="flex flex-col space-y-2 col-span-1 xl:col-span-2">
            <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold"
                :for="contactInfo.idNumber">ID Number</label>
            <input :id="contactInfo.idNumber" v-model="contactInfo.idNumber"
                class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2"
                placeholder="ID" type="text">
        </div>
        <div class="flex flex-col space-y-2 col-span-1 xl:col-span-2">
            <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold"
                :for="contactInfo.passportID">Passport Number</label>
            <input :id="contactInfo.passportID" v-model="contactInfo.passportID"
                class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2"
                placeholder="Passport Number" type="text">
        </div>
    </div>
    <div class="py-2">
        <p class="font-medium text-[#3380F5] ml-4 my-2">Alternative Contact </p>
        <div class="grid grid-cols-3 xl:grid-cols-8 gap-8">
            <div class="flex flex-col space-y-2 col-span-1 xl:col-span-2">
                <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold"
                    :for="alternativeContact.name">Name</label>
                <input :id="alternativeContact.name" v-model="alternativeContact.name"
                    class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2"
                    placeholder="Example: John" type="text">
            </div>
            <div class="flex flex-col space-y-2 col-span-1 xl:col-span-2">
                <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold"
                    :for="alternativeContact.surname">Surname</label>
                <input :id="alternativeContact.surname" v-model="alternativeContact.surname"
                    class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2"
                    placeholder="Example: Smith" type="text">
            </div>
            <div class="flex flex-col space-y-2 col-span-1 xl:col-span-2">
                <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold"
                    :for="alternativeContact.email">Email Address</label>
                <input :id="alternativeContact.email" v-model="alternativeContact.email"
                    class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2"
                    placeholder="Example: name@email.co.za" type="text">
            </div>
            <div class="flex flex-col space-y-2 col-span-1 xl:col-span-2">
                <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold"
                    :for="alternativeContact.mobileNum">Mobile Number</label>
                <input :id="alternativeContact.mobileNum" v-model="alternativeContact.mobileNum"
                    class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2"
                    placeholder="Example: 0822228789" type="text">
            </div>
        </div>
    </div>
    <div class="py-2">
        <p class="font-medium text-[#3380F5] ml-4 my-2">Service </p>
        <div class="grid grid-cols-5 xl:grid-cols-8 gap-4 xl:gap-8 items-center justify-center">
            <div class="flex flex-col space-y-2 col-span-1 xl:col-span-2">
                <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold"
                    :for="service.service">Select FTTH Service</label>
                <select v-model="service.service"
                    class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2"
                    :placeholder="service.service ? '' : 'Example: Preon 25Mbps'">
                    <option v-for="(option, index) in serviceOptions" :key="index" :value="option.value">
                        {{ option.label }}
                    </option>
                </select>
            </div>
            <div class="flex flex-col space-y-2 col-span-1 xl:col-span-2">
                <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold"
                    :for="service.ispRefNum">ISP Reference</label>
                <input :id="service.ispRefNum" v-model="service.ispRefNum"
                    class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2"
                    placeholder="Example: Preon 25Mbps" type="text">
            </div>
            <div class="flex flex-col space-y-2 col-span-2 xl:col-span-3">
                <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold"
                    :for="service.comment">Comment</label>
                <input :id="service.comment" v-model="service.comment"
                    class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2"
                    placeholder="Type your comment here" type="text">
            </div>
            <div class="flex flex-col mt-6 justify-end items-end space-y-2 col-span-1">
                <place-order-modal :placeOrderAddress="search" :placeOrderContact="contactInfo"
                    :placeOrderAltContact="alternativeContact" :placeOrderService="service" :buttonText="'Place Order'"
                    buttonTextColor="white" buttonColor="#3380F5" />
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        search: {
            type: Object,
            required: false
        },
        contactInfo: {
            type: Object,
            required: false
        },
        alternativeContact: {
            type: Object,
            required: false
        },
        service: {
            type: Object,
            required: false
        },
        serviceOptions: {
            type: Object,
            required: false
        },
    },
    data() {
        return {

        }
    },
    methods: {

    },
}
</script>

<style></style>