<template>
<div class="grid grid-cols-5 gap-x-20">
    <div class="flex flex-col space-y-2 col-span-3">
        <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold" for="address">Type
            to search for installation
            address:</label>
        <input type="text" v-model="address" id="address" autocomplete="street-address" class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2 " placeholder="26 Victoria Link, Route 21 Business Park, Centurion, 0178">
    </div>
    <div class="flex flex-col space-y-2 col-span-2">
        <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold" for="ipsRefNum">ISP
            Reference Number</label>
        <input type="text" v-model="ipsRefNum" id="ipsRefNum" autocomplete="off" class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2 " placeholder="REF146">
    </div>
</div>
<div class="grid grid-cols-8 justify-between gap-x-5">
    <div class="flex flex-col space-y-2 col-span-4">
        <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold" for="ticketReason">Reason for Ticket</label>
        <input type="text" v-model="ticketReason" id="ticketReason" autocomplete="off" class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2 " placeholder="Type your message here.">
    </div>
    <div class="flex flex-col space-y-2 col-span-2">
        <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold" for="siteContactName">Onsite Contact
            Name</label>
        <input type="text" v-model="siteContactName" id="siteContactName" autocomplete="name" class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2 " placeholder="REF146">
    </div>
    <div class="flex flex-col space-y-2 col-span-2">
        <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold" for="siteContactNumber">Onsite Contact
            Number</label>
        <input type="text" v-model="siteContactNumber" id="siteContactNumber" autocomplete="tel" class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2 " placeholder="012 579 9985">
    </div>
</div>
<div class="flex flex-row gap-x-5">
    <div class="flex flex-col space-y-1 col-span-1">
        <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold" for="">Confirm the
            following:</label>
        <div class="flex flex-row checkbox-group ml-5 space-x-10">
            <div v-for="(selection, index) in ticketType.selections" :key="index" class="grid grid-cols-1">
                <div class="truncate">
                    <input type="checkbox" class="size-4" name="precincttypes" :id="selection.selectionID" :value="selection.selectionID" v-model="ticketType.selected">
                    <label :for="selection.selectionID" class="px-2 text-[#173D6B] text-sm">{{ selection.selectionName }}</label>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col space-y-1 col-span-1">
        <label class="text-[#173D6B] text-sm xl:text-md pl-2 font-medium xl:font-bold" for="">Optional
            Uploads</label>
        <div class="flex flex-row space-x-2">
            <button @click="$refs.singleImageUpload.click()" class="border w-32 xl:w-36 py-1.5 bg-[#54BFF5] text-white rounded-[30px]">
                Upload Image
            </button>
            <input type="file" id="single-image-upload" @change="handleImageUpload" ref="singleImageUpload" style="display: none;" />
            <button @click="$refs.bulkImageUpload.click()" class="border-[#173D6B] text-[#173D6B] border w-32 xl:w-36 rounded-[30px] py-1.5">Bulk
                Upload</button>
            <input type="file" id="bulk-image-upload" @change="handleBulkUpload" ref="bulkImageUpload" style="display: none;" multiple />
        </div>
        <span class="text-sm text-[#173D6B] text-opacity-50 pl-2">Max size 10MB</span>
    </div>
</div>
<div class="flex justify-end items-center">
    <button @click="logTicket" type="submit" class="flex items-center bg-[#3380F5] text-white px-12 rounded-[30px] py-2">Log
        Ticket</button>
</div>
</template>

<script>
export default {
    data() {
        return {
            uploadedImage: null,
            uploadedImages: [],
            address: '',
            ipsRefNum: '',
            ticketReason: '',
            siteContactName: '',
            siteContactNumber: '',
            ticketType: {
                "id": 1,
                "selected": [],
                "selections": [{
                        "selectionID": 1,
                        "selectionName": "Power On"
                    },
                    {
                        "selectionID": 2,
                        "selectionName": "LOS Light / Link Light"
                    }
                ]
            },
        }
    },
    methods: {
        handleImageUpload(event) {
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = () => {
                this.uploadedImage = reader.result;
            };
            reader.readAsDataURL(file);
        },
        handleBulkUpload() {
            const bulkImageUpload = this.$refs.bulkImageUpload;
            if (bulkImageUpload) {
                const files = bulkImageUpload.files;
                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    const reader = new FileReader();
                    reader.onload = () => {
                        this.uploadedImages.push(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
            }
        },
        logTicket() {
            if (this.address === '' || this.ipsRefNum === '' || this.ticketReason === '' || this.siteContactName === '' || this.siteContactNumber === '' || this.ticketType === '') {
                alert('Input fields cannot be empty!');
            } else {
                alert('Ticket logged successfully')
            }
        }
    },
}
</script>

<style ></style>
