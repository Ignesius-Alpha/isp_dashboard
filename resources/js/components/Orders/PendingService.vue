<template>
    <div>
        <button type="button"
            class="flex items-center justify-between w-full p-5 font-medium text-right text-[#173D6B] border border-[#173D6B] gap-3"
            @click="isOpen = !isOpen" :aria-expanded="isOpen" aria-controls="accordion-collapse-body-1">
            <span>{{ upgradeDowngradeDetails.length > 0 ? 'View pending services.' :
                'There are no pending services.' }}</span>
            <svg v-if="upgradeDowngradeDetails.length > 0" :class="{ 'rotate-180': isOpen }" data-accordion-icon
                class="w-3 h-3 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 5 5 1 1 5" />
            </svg>
        </button>
        <div id="accordion-collapse-body-1" :class="{ 'hidden': !isOpen || upgradeDowngradeDetails.length < 1 }">
            <div class="w-full justify-center items-center my-3 overflow-auto">
                <table class="mx-auto w-full bg-[#173D6B] bg-opacity-5">
                    <tbody class="">
                        <tr v-for="(upDownDetails, index) in upgradeDowngradeDetails" :key="index"
                            class="border border-slate-500 border-opacity-20">
                            <td class="px-5 p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                                {{ upDownDetails.isp_ref }}
                            </td>

                            <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                                {{ upDownDetails.customer_details }}: <b>{{ upDownDetails.servicesChange
                                    }}</b>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="flex justify-between place-items-end mt-12 gap-x-2 xl:gap-x-1">
        <div class="w-full space-y-2">
            <label :for="upgradeDowngradeInputs.clientAddressSearch"
                class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold block">Search
                for client:</label>
            <div class="flex place-items-center">
                <input :id="upgradeDowngradeInputs.clientAddressSearch"
                    v-model="upgradeDowngradeInputs.clientAddressSearch"
                    class="rounded-[30px] pl-4 w-full px-4 py-2 bg-transparent border border-[#173D6B] border-opacity-10"
                    placeholder="Example: Client Name / Installation Address" type="text">
            </div>
        </div>
        <div class="mb-3.5 space-y-2">
            <p class="text-[#173D6B] text-xs font-bold">OR</p>
        </div>
        <div class="w-full space-y-2">
            <label :for="upgradeDowngradeInputs.ispRefSearch"
                class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold block">ISP
                Reference</label>
            <div class="space-x-2 flex flex-row">
                <input id="upgradeDowngradeInputs.ispRefSearch" v-model="upgradeDowngradeInputs.ispRefSearch"
                    class="rounded-[30px] pl-4 w-full px-4 py-2 bg-transparent border border-[#173D6B] border-opacity-10"
                    placeholder="Example: REF123" type="text">
            </div>
        </div>
        <div class="mb-0.5">
            <button
                class="bg-transparent rounded-[30px] border border-[#173D6B] text-[#173D6B] w-32 py-1.5">Search</button>
        </div>
    </div>
    <div class="flex justify-between place-items-end mt-4">
        <div class="flex flex-row w-[80%] gap-x-3 xl:gap-x-3">
            <div class="w-fit space-y-2">
                <label :for="upgradeDowngradeInputs.updateService"
                    class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold block">Update
                    service to:</label>
                <div class="w-full flex place-items-center">
                    <select :id="upgradeDowngradeInputs.updateService" v-model="upgradeDowngradeInputs.updateService"
                        class="w-80 border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2"
                        placeholder="Example: Preon 25Mbps">
                        <option value="Preon 25Mbps">Preon 25Mbps</option>
                        <option value="Preon 50Mbps">Preon 50Mbps</option>
                        <option value="Preon 75Mbps">Preon 75Mbps</option>
                        <option value="Preon 100Mbps">Preon 100Mbps</option>
                    </select>
                </div>
            </div>
            <div class="w-60 space-y-2">
                <label :for="upgradeDowngradeInputs.effectiveDate"
                    class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold block">Effective
                    Date</label>
                <div class="space-x-2 flex flex-row">
                    <div class="w-full relative max-w-sm">
                        <input :id="upgradeDowngradeInputs.effectiveDate" v-model="upgradeDowngradeInputs.effectiveDate"
                            type="date"
                            class="w-full rounded-[30px] py-2 bg-transparent border border-[#173D6B] border-opacity-10 px-4" />
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-0.5 flex ml-5 space-y-2">
            <order-update-modal :updateServiceData="upgradeDowngradeInputs" :buttonText="'Submit'"
                buttonTextColor="white" buttonColor="#3380F5" />
        </div>
    </div>
</template>

<script>
export default {
    props: {
        upgradeDowngradeDetails: {
            type: Object,
            required: false
        },
        upgradeDowngradeInputs: {
            type: Object,
            required: false
        },
    },
    data() {
        return {
            isOpen: false
        }
    }
}
</script>

<style></style>