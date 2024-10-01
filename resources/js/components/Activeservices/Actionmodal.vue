<template>
    <modal>
        <template v-slot:title>
            <div class="modal-title text-[#173D6B] text-2xl font-bold">Please select an action:</div>
        </template>
        <template v-slot:body>
            <div class="flex justify-between items-center mt-5">
                <button @click="updateService" class="text-white bg-[#54BFF5] border rounded-[30px] px-6 py-1.5">Update
                    Service</button>
                <button @click="logTicket" class="text-white bg-[#173D6B] border rounded-[30px] px-6 py-1.5">Log a
                    Ticket</button>
                <button @click="cancelService"
                    class="text-[#173D6B] border border-[#173D6B] rounded-[30px] px-6 py-1.5">Cancel
                    Service</button>
            </div>
        </template>
    </modal>
</template>

<script>
export default {
    props: {
        serviceData: {
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
        logTicket() {
            alert('Ticket successfully Logged');
            // this.isOpen = !this.isOpen
        },
        cancelService() {
            alert('Service successfully Cancelled');
            // this.isOpen = !this.isOpen
        },
    }
}
</script>

<style scoped></style>