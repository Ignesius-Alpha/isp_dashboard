<template>
    <div class="w-full">
        <div class="flex gap-x-8 xl:gap-x-24">
            <div class="w-1/5 flex justify-start items-end">
                <h2 class="text-xl xl:text-3xl truncate font-bold text-[#173D6B]">Audit Trail</h2>
            </div>
            <div class="w-4/5 flex flex-row gap-4 justify-between">
                <div class="flex w-2/5 flex-col space-y-2">
                    <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold">Filter
                        by</label>
                    <select
                        class="w-full rounded-[30px] border border-[#173D6B] border-opacity-20 bg-transparent pl-4 py-2">
                        <option class="bg-[#00000029]">Date - Newest to Oldest</option>
                        <option class="bg-[#00000029]">Field - A - Z</option>
                        <option class="bg-[#00000029]">Field - Z - A</option>
                    </select>
                </div>
                <div class="flex w-2/5 flex-col space-y-2">
                    <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold">Search for
                        User</label>
                    <input v-model="search_user" placeholder="Search"
                        class="rounded-[30px] border border-[#173D6B] border-opacity-20 bg-transparent w-full pl-4 py-2">
                </div>
                <div class="flex w-1/5 place-items-end mb-0.5">
                    <button
                        class="rounded-[30px] w-full py-1.5 font-bold text-[#173D6B] border border-[#173D6B]">Export</button>
                </div>
            </div>
        </div>
        <div class="w-full mt-8">
            <div class="w-full justify-center items-center my-3 overflow-auto">
                <table class="mx-auto w-full">
                    <thead class="">
                        <th v-for="(tableHeading, index) in tableHeadings" :key="index"
                            class="p-2.5 text-left text-[#173D6B]">{{ tableHeading }}</th>
                    </thead>
                    <tbody class="">
                        <tr v-for="(auditTrail, index) in auditTrails" :key="index" class="border border-[#00000029]">
                            <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                                {{ auditTrail.user_id }}
                            </td>
                            <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                                {{ auditTrail.date_time }}
                            </td>
                            <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                                {{ auditTrail.username }}
                            </td>
                            <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                                {{ auditTrail.field }}
                            </td>
                            <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                                {{ auditTrail.action }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            search_user: '',
            tableHeadings: ['User ID', 'Date & Time', 'Username', 'Field', 'Action'],
            auditTrails: [
                {
                    user_id: 'V001',
                    date_time: '12 July 2024 - 10:54',
                    username: 'Johnsoap',
                    field: 'Support',
                    action: 'Logged ticket'
                },
                {
                    user_id: 'V002',
                    date_time: '12 July 2024 - 10:54',
                    username: 'Johnsoap',
                    field: 'Support',
                    action: 'Logged ticket'
                },
                {
                    user_id: 'V003',
                    date_time: '12 July 2024 - 10:54',
                    username: 'Johnsoap',
                    field: 'Orders',
                    action: 'Cancelled Service'
                },
                {
                    user_id: 'V004',
                    date_time: '12 July 2024 - 10:54',
                    username: 'Johnsoap',
                    field: 'Support',
                    action: 'Logged ticket'
                },
                {
                    user_id: 'V005',
                    date_time: '12 July 2024 - 10:54',
                    username: 'Johnsoap',
                    field: 'Quick Search',
                    action: 'Searched for FTTB Link'
                },
                {
                    user_id: 'V005',
                    date_time: '12 July 2024 - 10:54',
                    username: 'Johnsoap',
                    field: 'Quick Search',
                    action: 'Searched for FTTB Link'
                },
                {
                    user_id: 'V005',
                    date_time: '12 July 2024 - 10:54',
                    username: 'Johnsoap',
                    field: 'Quick Search',
                    action: 'Searched for FTTB Link'
                },
                {
                    user_id: 'V005',
                    date_time: '12 July 2024 - 10:54',
                    username: 'Johnsoap',
                    field: 'Quick Search',
                    action: 'Searched for FTTB Link'
                },
                {
                    user_id: 'V005',
                    date_time: '12 July 2024 - 10:54',
                    username: 'Johnsoap',
                    field: 'Quick Search',
                    action: 'Searched for FTTB Link'
                },
            ]
        }
    }
}
</script>

<style lang="scss" scoped></style>