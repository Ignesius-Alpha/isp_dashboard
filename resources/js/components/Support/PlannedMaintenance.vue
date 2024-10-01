<template>
    <div class="bg-[#173D6B] bg-opacity-5 w-full p-4 text-[#173D6B]">
        <p>There is currently no maintenance planned for this month.</p>
    </div>
</template>

<script>
export default {
    props: {
        plannedMaintenance: {
            type: Object,
            required: false
        }
    },
    data() {
        return {
        }
    },
}
</script>

<style lang="scss" scoped></style>