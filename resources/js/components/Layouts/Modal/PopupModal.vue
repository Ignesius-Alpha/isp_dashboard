<!-- PopupModal.vue -->
<template>
    <div>
        <button @click="isOpen = true"
            :class="`bg-[${buttonColor}] border border-[${buttonBorder}] text-[${buttonTextColor}] hover:bg-[${buttonColor}] py-1.5 px-3.5 xl:px-8 rounded-[30px]`">
            {{ buttonText }}
        </button>

        <!-- Modal -->
        <div class="fixed top-0 left-0 w-full h-full flex items-center justify-center z-50" v-if="isOpen">
            <div class="absolute w-full h-full bg-[#173D6B] z-50 opacity-95"></div>
            <div class="modal-container h-9/12 bg-white w-9/12 mx-auto rounded-[91px] shadow-lg z-50 overflow-y-auto">
                <div class="flex justify-end text-[#173D6B] items-center mr-9 lg:mr-20 mt-10">
                    <button @click="isOpen = !isOpen">
                        <span class="material-symbols-outlined text-[#173D6B] text-4xl">close</span>
                    </button>
                </div>
                
                <div class="modal-content pt-4 pb-20 flex flex-col items-center text-center px-6">
                    
                    <div class="modal-header">
                        <slot name="title">
                            <div class="modal-title text-lg font-semibold">Modal Title</div>
                        </slot>
                    </div>
                    
                    <div class="modal-body w-full text-wrap px-14 xl:px-24 pt-2.5 pb-4">
                        <slot name="body">
                            <p>Modal body text goes here.</p>
                        </slot>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        buttonText: {
            type: String,
            default: 'Open Modal'
        },
        buttonColor: {
            type: String,
            default: ''
        },
        buttonBorder: {
            type: String,
            default: ''
        },
        buttonTextColor: {
            type: String,
            default: ''
        },
    },
    data() {
        return {
            isOpen: false
        };
    }
};
</script>

<style>
</style>