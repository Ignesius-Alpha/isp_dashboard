<template>
    <div class="w-full justify-center items-center my-3 overflow-auto">
        <table class="mx-auto w-full">
            <thead>
                <tr>
                    <th v-for="(tableHead, index) in tableHeaders" :key="index" class="p-2.5 text-left text-[#173D6B]">
                        {{ tableHead }}
                    </th>
                </tr>
            </thead>
            <tbody class="">
                <tr v-for="(ticketDetail, index) in ticketDetails" :key="index"
                    class="border border-slate-500 border-opacity-20">
                    <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                        {{ ticketDetail.isp_ref }}
                    </td>
                    <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                        {{ ticketDetail.serviceLocation }}
                    </td>
                    <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                        {{ ticketDetail.custDetails }}
                    </td>
                    <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                        {{ ticketDetail.status }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    props: {
        tableHeaders: {
            type: Object,
            required: false
        },
        ticketDetails: {
            type: Object,
            required: false
        }
    },
    data() {
        return {
        }
    },
    methods: {

    },
}
</script>

<style></style>