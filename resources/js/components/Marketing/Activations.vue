<template>
    <div class="w-full justify-center items-center my-3 overflow-auto">
        <table class="mx-auto w-full">
            <thead>
                <tr>
                    <th v-for="(tableHead, index) in activationTitles" :key="index"
                        class="p-2.5 text-left text-[#173D6B]">
                        {{ tableHead }}
                    </th>
                </tr>
            </thead>
            <tbody class="">
                <tr v-for="(activationDetail, index) in activationDetails" :key="index"
                    class="border border-slate-500 border-opacity-20">
                    <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                        {{ activationDetail.date }}
                    </td>
                    <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                        <div class="flex flex-row justify-center items-center">
                            {{ activationDetail.start_time }} - {{ activationDetail.end_time }}
                        </div>
                    </td>
                    <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B] text-wrap">
                        {{ activationDetail.serviceLocation }} - {{ activationDetail.type }}
                    </td>
                    <td
                        class="p-2.5 border-l justify-center items-center border-slate-500 border-opacity-20 text-[#173D6B]">
                        <div class="flex flex-row justify-center items-center">
                            {{ activationDetail.avail_slots }}
                        </div>
                    </td>
                    <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                        {{ activationDetail.cut_off_date }}
                    </td>
                    <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                        <div class="flex flex-row justify-center gap-x-1 items-center">
                            <marketing-view-modal class="" :marketingData="activationDetail"
                                :buttonText="activationDetail.btnView" :buttonTextColor="'#173D6B'"
                                :buttonBorder="'#173D6B'" />
                            <button class="bg-[#54BFF5] text-white rounded-[30px] w-32 px-3 py-1.5">{{
                                activationDetail.btnDownload }}</button>
                        </div>
                    </td>
                    <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                        <div class="flex flex-row justify-center items-center">
                            <marketing-join-modal :marketingData="activationDetail"
                                :buttonText="activationDetail.btnJoin" buttonTextColor="white" buttonColor="#3380F5" />
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    props: {
        activationTitles: {
            type: Object,
            required: false
        },
        activationDetails: {
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

<style></style>