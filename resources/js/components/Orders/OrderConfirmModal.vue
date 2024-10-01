<template>
    <modal>
        <template v-slot:title>
            <div class="modal-title text-[#173D6B] text-2xl xl:text-4xl font-bold">Confirm Order</div>
        </template>
        <template v-slot:body>
            <div class="space-y-4 mx-0 xl:mx-16 items-start justify-center">
                <div class="block text-left ">
                    <p class="text-[#173D6B] text-sm xl:text-lg font-bold">FTTH Service Available at:</p>
                    <p class="text-[#3380F5] text-sm font-bold">{{ placeOrderAddress.searchAddress }}</p>
                    <p class="text-[#3380F5] text-sm font-bold">{{ placeOrderAddress.buildingName }}</p>
                    <p class="text-[#3380F5] text-sm font-bold">{{ placeOrderAddress.suiteNumber }}</p>
                </div>
                <div class="block py-2 w-full">
                    <p class="text-[#173D6B] text-left text-sm xl:text-lg font-bold">Contact Information</p>
                    <table>
                        <tbody class="flex justify-between w-full">
                            <tr class="w-full text-left">
                                <td class="text-[#173D6B]">{{ placeOrderContact.name }} {{ placeOrderContact.surname }}
                                </td>
                            </tr>
                            <tr class="w-full text-left">
                                <td class="text-[#173D6B]">{{ placeOrderContact.email }}</td>
                            </tr>
                            <tr class="w-full text-left">
                                <td class="text-[#173D6B]">{{ placeOrderContact.mobileNum }}</td>
                            </tr>
                            <tr class="w-full text-left">
                                <td class="text-[#173D6B]">{{ placeOrderContact.idNumber }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="block py-2 w-full">
                    <p class="text-[#173D6B] text-left text-sm xl:text-lg font-bold">Alternate Contact</p>
                    <table>
                        <tbody class="flex justify-between w-full">
                            <tr class="w-full text-left">
                                <td class="text-[#173D6B]">{{ placeOrderAltContact.name }} {{
                                    placeOrderAltContact.surname }}</td>
                            </tr>
                            <tr class="w-full text-left">
                                <td class="text-[#173D6B]">{{ placeOrderAltContact.email }}</td>
                            </tr>
                            <tr class="w-full text-left">
                                <td class="text-[#173D6B]">{{ placeOrderAltContact.mobileNum }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="block py-2 w-full">
                    <p class="text-[#173D6B] text-left text-sm xl:text-lg font-bold">Service</p>
                    <table>
                        <tbody class="flex justify-between w-full">
                            <tr class="w-full text-left">
                                <td class="text-[#173D6B]">{{ placeOrderService.service }}</td>
                            </tr>
                            <tr class="w-full text-left">
                                <td class="text-[#173D6B]">{{ placeOrderService.ispRefNum }}</td>
                            </tr>
                            <tr class="w-full text-left">
                                <td class="text-[#173D6B]"><b>Comment:</b> {{ placeOrderService.comment }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex justify-center items-center">
                    <button @click="placeOrder"
                        class="flex text-white bg-[#3380F5] border rounded-[30px] px-8 py-1.5">Confirm</button>
                </div>
            </div>
        </template>
    </modal>
</template>

<script>
export default {
    props: {
        placeOrderService: {
            type: Object,
            required: false
        },
        placeOrderAltContact: {
            type: Object,
            required: false
        },
        placeOrderContact: {
            type: Object,
            required: false
        },
        placeOrderAddress: {
            type: Object,
            required: false
        },
    },
    data() {
        return {

        }
    },
    methods: {
        placeOrder() {
            alert('Successfully joined event');
            // this.isOpen = !this.isOpen
        },
    }
}
</script>

<style scoped></style>