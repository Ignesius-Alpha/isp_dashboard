<template>
    <modal>
        <template v-slot:title>
            <div class="modal-title text-[#173D6B] text-2xl font-bold">Are you sure you want to update this client:
            </div>
        </template>
        <template v-slot:body>
            <div class="flex flex-col space-y-5 justify-center items-center mt-5">
                <p class="text-[#173D6B] text-sm font-bold">
                    {{ updateServiceData.clientAddressSearch }} ({{ updateServiceData.ispRefSearch }}):
                    Downgrade from Quark 100 Mbps to <span class="text-[#54BFF5] text-sm font-bold ml-1">
                        {{ updateServiceData.updateService }}</span> - <span class="text-[#54BFF5] text-sm font-bold">
                        Effective {{
                            updateServiceData.effectiveDate }}</span>
                </p>
                <div class="mb-7">
                    <button @click="updateService"
                        class="flex text-white bg-[#54BFF5] border rounded-[30px] px-6 py-1.5">Confirm</button>
                </div>
                <p class="text-[#173D6B] text-sm font-bold">
                    Please note: Downgrade Effective Date - 1 Calendar month.
                </p>
            </div>
        </template>
    </modal>
</template>

<script>
export default {
    props: {
        updateServiceData: {
            type: Object,
            required: false
        },
    },
    data() {
        return {

        }
    },
    methods: {
        updateService() {
            alert('Service successfully Updated');
            // this.isOpen = !this.isOpen
        },
    }
}
</script>

<style scoped></style>