<template>
    <div class="bg-[#173D6B] bg-opacity-5 w-full p-4 text-[#173D6B]">
        <p>There are currently no outages to report.</p>
    </div>
</template>

<script>
export default {
    props: {
        outages: {
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

<style></style>