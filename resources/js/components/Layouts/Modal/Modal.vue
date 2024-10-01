<!-- PopupModal.vue -->
<template>
    <div>
        <button @click="isOpen = true"
            :class="`bg-[${buttonColor}] hover:bg-[${buttonColor}] text-white py-2 px-8 rounded-[30px] mt-[${marginTop}]`">
            {{ buttonText }}
        </button>

        <!-- Modal -->
        <div class="fixed top-0 left-0 w-full h-full z-50 flex items-center justify-center" v-if="isOpen">
            <div class="absolute w-full h-full bg-[#173D6B] opacity-95"></div>
            <div class="modal-container h-9/12 bg-white w-9/12 mx-auto rounded-[91px] shadow-lg z-50 pb-10 overflow-y-auto">
                <div class="flex justify-end text-[#173D6B] items-center mr-9 lg:mr-20 mt-10">
                    <button @click="isOpen = !isOpen">
                        <span class="material-symbols-outlined text-[#173D6B] text-4xl">close</span>
                    </button>
                </div>
                <!-- Modal content -->
                <div class="modal-content flex flex-col items-center text-center px-6">
                    <!-- Title -->
                    <div class="modal-header">
                        
                        <slot name="title">
                            <div class="modal-title text-lg font-semibold">Modal Title</div>
                        </slot>
                        <button @click="isOpen = false"
                            class="modal-close-btn text-black opacity-50 hover:opacity-100 absolute top-0 right-0 mt-4 mr-4">
                            &times;
                        </button>
                    </div>
                    <!-- Body -->
                    <div class="modal-body w-full text-wrap px-24 pt-2.5">
                        <slot name="body">
                            <p>Modal body text goes here.</p>
                        </slot>
                    </div>
                    <!-- Footer -->
                    <div class="modal-footer">
                        <slot name="footer">
                            <button @click="isOpen = false"
                                class="bg-${buttonColor}-500 hover:bg-${buttonColor}-700 text-white font-bold py-2 px-4 rounded">
                                Close
                            </button>
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
            default: 'blue'
        }
    },
    data() {
        return {
            isOpen: false
        };
    }
};
</script>

<style>
/* Add Tailwind CSS styles here */
</style>