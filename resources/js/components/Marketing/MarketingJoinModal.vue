<template>
    <modal>
        <template v-slot:title>
            <div class="modal-title text-[#173D6B] text-2xl font-bold">Thank you for joining us at our activation!</div>
        </template>
        <template v-slot:body>
            <p class="text-[#3380F5] text-sm font-semibold">@{{ marketingData.serviceLocation }} - {{
                marketingData.cut_off_date }} | {{ marketingData.start_time }} - {{ marketingData.end_time }}</p>
            <button @click="joinEvent" class="my-7 py-1.5 bg-[#3380F5] px-8 text-white rounded-[30px]">Complete</button>
            <p class="text-[#173D6B] text-sm font-bold">An email will be sent to our activations team who will be in
                touch. For any further questions please email kerryo@clearaccess.co.za</p>
        </template>
    </modal>
</template>

<script>
export default {
    props: {
        marketingData: {
            type: Object,
            required: false
        },
    },
    data() {
        return {
        }
    },
    methods: {
        joinEvent() {
            alert('Successfully joined event');
            // this.isOpen = !this.isOpen
        },
    }
}
</script>

<style scoped></style>