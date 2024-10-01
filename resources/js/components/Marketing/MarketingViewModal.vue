<template>
    <modal>
        <template v-slot:title>
            <div class="modal-title text-[#173D6B] text-2xl font-bold">CA Marketing Activations!</div>
        </template>
        <template v-slot:body class="space-y-4">
            <p class="text-[#3380F5] text-sm font-semibold text-wrap">
                Date:
                <span class="text-[#173D6B] text-lg font-bold">{{ marketingData.date }}</span>
            </p>
            <p class="text-[#3380F5] text-sm font-semibold text-wrap">
                Start & End Time:
                <span class="text-[#173D6B] text-lg font-bold">{{ marketingData.start_time }} -
                    {{ marketingData.end_time }}</span>
            </p>
            <p class="text-[#3380F5] text-sm font-semibold text-wrap">
                Location:
                <span class="text-[#173D6B] text-lg font-bold">{{ marketingData.serviceLocation
                    }}</span>
            </p>
            <p class="text-[#3380F5] text-sm font-semibold text-wrap">
                Activity Type:
                <span class="text-[#173D6B] text-lg font-bold">{{ marketingData.type
                    }}</span>
            </p>
            <p class="text-[#3380F5] text-sm font-semibold text-wrap">
                Closing Date:
                <span class="text-[#173D6B] text-lg font-bold">{{ marketingData.cut_off_date }}</span>
            </p>
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
    }
}
</script>

<style scoped></style>