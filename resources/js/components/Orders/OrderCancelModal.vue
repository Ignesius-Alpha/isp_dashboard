<template>
    <modal>
        <template v-slot:title>
            <div class="modal-title text-[#173D6B] text-2xl font-bold">Are you sure you want to cancel this service:
            </div>
        </template>
        <template v-slot:body>
            <div class="flex flex-col space-y-5 justify-center items-center mt-5">
                <p class="text-[#173D6B] text-sm font-bold">
                    {{ cancelServiceData.clientAddressSearch }} ({{ cancelServiceData.ispRefSearch }}):
                    <span class="text-[#54BFF5] text-sm font-bold ml-1">
                        Cancel service - {{ cancelServiceData.cancellationReason }}</span> - <span
                        class="text-[#54BFF5] text-sm font-bold"> Effective {{
                            cancelServiceData.effectiveDate }}</span>
                </p>
                <div class="mb-7">
                    <button @click="cancelService"
                        class="flex text-white bg-[#54BFF5] border rounded-[30px] px-6 py-1.5">Confirm</button>
                </div>
                <p class="text-[#173D6B] text-sm font-bold">
                    Please note: Cancellation Effective Date - 1 Calendar month.
                </p>
            </div>
        </template>
    </modal>
</template>

<script>
export default {
    props: {
        cancelServiceData: {
            type: Object,
            required: false
        },
    },
    data() {
        return {

        }
    },
    methods: {
        cancelService() {
            alert('Service successfully Cancelled');
            // this.isOpen = !this.isOpen
        },
    }
}
</script>

<style scoped></style>