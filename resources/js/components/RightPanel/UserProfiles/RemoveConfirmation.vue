<template>
<modal>
    <template v-slot:title>
        <div class="modal-title text-[#173D6B] text-2xl font-bold">Are you sure you want to remove this user?</div>
    </template>
    <template v-slot:body>
        <div class="flex flex-col items-center space-y-4">
            <div class="flex flex-row mb-7">
                <p class="text-[#173D6B] text-sm font-bold">
                    <span class="text-[#3380F5] text-sm font-bold ml-1">You cannot undo this step. The
                        user will need to be recreated.</span>
                </p>
            </div>
            <div class="">
                <button @click="removeUser" class="flex text-white bg-[#3380F5] border rounded-[30px] px-6 py-1.5">Confirm</button>
            </div>
        </div>
    </template>
</modal>
</template>

<script>
export default {
    props: {
        userProfile: {
            type: Object,
            required: false
        }
    },
    data() {
        return {

        }
    },
    methods: {
        removeUser() {
            alert('User has been successfully removed and no longer have access');
            // this.isOpen = !this.isOpen
        }
    }
}
</script>

<style scoped></style>
