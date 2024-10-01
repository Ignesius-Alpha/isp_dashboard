<template>
    <div>
        <button type="button"
            class="flex items-center justify-between w-full p-5 font-medium text-right text-[#173D6B] border border-[#173D6B] gap-3"
            @click="isOpen = !isOpen" :aria-expanded="isOpen" aria-controls="accordion-collapse-body-1">
            <span>{{ cancellationDetails.length > 0 ? 'View pending cancellations.' :
                'There are no services pending cancellation.' }}</span>
            <svg v-if="cancellationDetails.length > 0" :class="{ 'rotate-180': isOpen }" data-accordion-icon
                class="w-3 h-3 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 5 5 1 1 5" />
            </svg>
        </button>
        <div id="accordion-collapse-body-1" :class="{ 'hidden': !isOpen || cancellationDetails.length < 1 }">
            <div class="w-full justify-center items-center my-3 overflow-auto">
                <table class="mx-auto w-full bg-[#173D6B] bg-opacity-10">
                    <tbody class="">
                        <tr v-for="(cancellation, index) in cancellationDetails" :key="index"
                            class="border border-slate-500 border-opacity-20">
                            <td class="px-5 p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                                {{ cancellation.isp_ref }}
                            </td>

                            <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                                {{ cancellation.customer_details }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="flex justify-between place-items-end mt-12">
        <div class="w-3/5 space-y-2">
            <label :for="cancellationInputs.clientAddressSearch"
                class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold block">Search
                for client:</label>
            <div class="flex place-items-center">
                <input :id="cancellationInputs.clientAddressSearch" v-model="cancellationInputs.clientAddressSearch"
                    class="rounded-[30px] pl-4 w-full px-4 py-2 bg-transparent border border-[#173D6B] border-opacity-10"
                    placeholder="Example: Client Name / Installation Address" type="text">
            </div>
        </div>
        <div class="mb-3.5">
            <p class="text-[#173D6B] text-xs font-bold">OR</p>
        </div>
        <div class=" space-y-2">
            <label :for="cancellationInputs.ispRefSearch"
                class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold block">ISP
                Reference</label>
            <div class="space-x-2 flex flex-row">
                <input :id="cancellationInputs.ispRefSearch" v-model="cancellationInputs.ispRefSearch"
                    class="rounded-[30px] pl-4 w-96 px-4 py-2 bg-transparent border border-[#173D6B] border-opacity-10"
                    placeholder="Example: REF123" type="text">
            </div>
        </div>
        <div class="mb-1">
            <button
                class="bg-transparent rounded-[30px] border border-[#173D6B] text-[#173D6B] w-32 py-1.5">Search</button>
        </div>
    </div>
    <div class="flex justify-between place-items-end mt-4 gap-x-6">
        <div class="w-3/4 space-y-2">
            <label :for="cancellationInputs.cancellationReason"
                class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold block">Reason
                for cancellation</label>
            <div class="flex place-items-center">
                <select :id="cancellationInputs.cancellationReason" v-model="cancellationInputs.cancellationReason"
                    class="border w-full bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2"
                    placeholder="Example: Preon 25Mbps">
                    <option selected>Moving Residence</option>
                    <option value="Preon 25Mbps">Preon 25Mbps</option>
                    <option value="Preon 50Mbps">Preon 50Mbps</option>
                    <option value="Preon 75Mbps">Preon 75Mbps</option>
                    <option value="Preon 100Mbps">Preon 100Mbps</option>
                </select>
            </div>
        </div>

        <div class="w-full space-y-2">
            <label :for="cancellationInputs.note"
                class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold block">Make
                a Note</label>
            <div class="space-x-2">
                <input :id="cancellationInputs.note" v-model="cancellationInputs.note"
                    class="rounded-[30px] pl-4 w-full px-4 py-2 bg-transparent border border-[#173D6B] border-opacity-10"
                    placeholder="Type your note here:" type="text">
            </div>
        </div>
        <div class="w-full space-y-2">
            <label :for="cancellationInputs.effectiveDate"
                class="text-[#7597c0] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold block">Effective
                Date</label>
            <div class="space-x-2 flex flex-row">
                <div class="w-full relative max-w-sm">
                    <input :id="cancellationInputs.effectiveDate" v-model="cancellationInputs.effectiveDate" type="date"
                        class="w-full rounded-[30px] py-2 bg-transparent border border-[#173D6B] border-opacity-10 px-4" />
                </div>
            </div>
        </div>
        <div class="flex justify-end items-end  mb-0.5">
            <order-cancel-modal :cancelServiceData="cancellationInputs" :buttonText="'Submit'" buttonTextColor="white"
                buttonColor="#3380F5" />
        </div>
    </div>
</template>

<script>
export default {
    props: {
        cancellationDetails: {
            type: Object,
            required: false
        },
        cancellationInputs: {
            type: Object,
            required: false
        },
    },
    data() {
        return {
            isOpen: false,
        }
    }
}
</script>

<style></style>