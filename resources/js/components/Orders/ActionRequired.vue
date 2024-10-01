<template>
    <div v-if="actionToggle" class="w-full justify-center items-center my-3 overflow-auto">
        <table class="mx-auto w-full">
            <thead>
                <tr>
                    <th v-for="(tableHead, index) in actionTabHeaders" :key="index"
                        class="p-2.5 text-left text-[#173D6B]">
                        {{ tableHead }}
                    </th>
                </tr>
            </thead>
            <tbody class="">
                <tr v-for="(actDetails, index) in actionDetails" :key="index"
                    class="border border-slate-500 border-opacity-20">
                    <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                        {{ actDetails.isp_ref }}
                    </td>
                    <td class="p-2.5 border-l w-8/12 border-slate-500 border-opacity-20 text-[#173D6B]">
                        {{ actDetails.fno_notes }}
                    </td>
                    <td class=" p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                        <div class="flex items-center justify-center">
                            <button @click="toggleAction(actDetails)"
                                class="bg-[#3380F5] rounded-[30px] text-white w-32 py-1.5">Action</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div v-if="!actionToggle" class="w-full justify-center items-center p-2 overflow-auto">
        <div class="flex px-2 flex-row gap-x-10">
            <h2 class="font-bold text-[#173D6B]">ISP Reference</h2>
            <h2 class="font-bold text-[#173D6B]">FNO Notes</h2>
        </div>
        <div class="flex flex-row items-center gap-x-10 bg-[#173D6B] bg-opacity-10 p-2 py-3">
            <div>
                <h2 class="font-semibold text-[#173D6B]">{{ selectedRow.isp_ref }}</h2>
            </div>
            <div class="ml-[52px] flex flex-col">
                <h2 class="text-[#173D6B]">{{ selectedRow.fno_notes }}</h2>
                <h2 class="font-bold text-[#173D6B] italic"> Agent: <span class="text-[#3380F5]">Samantha
                        Victor</span></h2>
            </div>
        </div>
        <div class="mt-6 mb-5">
            <div class="flex flex-col space-y-1 col-span-1">
                <div class="flex flex-row space-x-2">
                    <button @click="$refs.singleImageUpload.click()"
                        class="border w-36 xl:w-44 py-1.5 bg-[#54BFF5] text-white rounded-[30px]">
                        Upload Document
                    </button>
                    <input type="file" id="single-image-upload" @change="handleDocumentUpload" ref="singleImageUpload"
                        style="display: none;" />
                    <button @click="$refs.bulkDocumentUpload.click()"
                        class="border-[#173D6B] text-[#173D6B] border w-36 xl:w-44 rounded-[30px] py-1.5">Bulk
                        Upload</button>
                    <input type="file" id="bulk-image-upload" @change="handleBulkUpload" ref="bulkDocumentUpload"
                        style="display: none;" multiple />
                </div>
                <span class="text-sm text-[#173D6B] text-opacity-50 pl-2">Max size 10MB</span>
            </div>
        </div>
        <div class="space-y-2 mb-4">
            <h2 class="mx-5 text-[#173D6B] font-bold text-sm">Make a Note</h2>
            <textarea name="" id="" class="rounded-[50px] text-sm px-5 !h-16 py-1 w-full bg-opacity-60 bg-white"
                placeholder="Type your note here"></textarea>
        </div>
        <div class="flex justify-end gap-x-4">
            <button @click="$emit('update:actionToggle', !actionToggle)"
                class="border border-[#173D6B] py-1.5 px-8 rounded-[30px]">Back</button>
            <button @click="submitDocuments" class="bg-[#3380F5] text-white py-1.5 px-8 rounded-[30px]">Submit</button>
        </div>
    </div>
</template>

<script>
export default {
    emits: ['toggleAction', 'handleDocumentUpload', 'handleBulkUpload', 'update:actionToggle'],
    props: {
        selectedRow: {
            type: Object,
            required: false
        },
        actionTabHeaders: {
            type: Object,
            required: false
        },
        actionDetails: {
            type: Object,
            required: false
        },
        actionToggle: {
            type: Boolean,
            default: false
        }
    },
    data() {
        return {

        }
    },
    methods: {
        toggleAction(actDetails) {
            // implement the logic for toggleAction here
            this.$emit('toggleAction', actDetails);
        },
        handleDocumentUpload(event) {
            // implement the logic for handleDocumentUpload here
            this.$emit('handleDocumentUpload', event);
        },
        handleBulkUpload(event) {
            // implement the logic for handleBulkUpload here
            this.$emit('handleBulkUpload', event);
        }
    }
}
</script>

<style></style>