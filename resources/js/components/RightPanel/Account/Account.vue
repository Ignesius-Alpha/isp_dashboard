<template>
    <div class="w-full mt-28">
        <div class="w-full">
            <p class="text-[#173D6B] font-bold text-3xl">Hello Bob Marley</p>
            <span class="text-[#3380F5] font-bold">Finance</span>
        </div>
        <div class="w-full justify-center items-center my-3 overflow-auto mt-8">
            <table class="mx-auto w-full">
                <thead class="">
                    <th v-for="(tableHeading, index) in tableHeadings" :key="index"
                        class="p-2.5 text-left text-[#173D6B]">{{ tableHeading }}</th>
                </thead>
                <tbody class="border border-[#00000029]">
                    <tr v-for="(tableData, index) in tableData" :key="index"
                        class="border border-slate-500 border-opacity-20">
                        <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                            {{ tableData.id }}
                        </td>
                        <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                            {{ tableData.firstName }}
                        </td>
                        <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                            {{ tableData.surname }}
                        </td>
                        <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                            {{ tableData.role }}
                        </td>
                        <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                            {{ tableData.ispName }}
                        </td>
                        <td class="p-2.5 border-l font-bold border-slate-500 border-opacity-20 text-[#173D6B]"
                            :class="tableData.status === 'Active' ? 'text-[#3380F5]' : ''">
                            {{ tableData.status }}
                        </td>
                        <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                            {{ tableData.jobDesc }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class=" w-11/12 xl:w-2/3 justify-center items-center my-3 overflow-auto mt-20 flex">
            <table class=" w-full">
                <thead class="">
                    <th v-for="(userLabel, index) in userLabels" :key="index" class="p-2.5 text-left text-[#173D6B]">{{
                        userLabel }}</th>
                </thead>
                <tbody class="">
                    <tr v-for="(user, index) in userDetails" :key="index" class="">
                        <td class="p-2.5 text-[#173D6B] text-md font-light">
                            {{ user.username }}
                        </td>
                        <td class="p-2.5 text-[#173D6B] text-md font-light">
                            {{ user.contactNum }}
                        </td>
                        <td class="p-2.5 text-[#173D6B] text-md font-light">
                            {{ user.email }}
                        </td>
                        <td class="p-2.5 text-[#173D6B] text-md font-light">
                            {{ user.password }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class=" place-items-center">
                <button class="bg-[#3380F5] text-white font-bold py-1.5 w-24 xl:w-32 rounded-[30px]">Update</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            tableHeadings: ['ID', 'First Name', 'Surname', 'Role', 'ISP Name', 'Status', 'Job Description'],
            tableData:
                [
                    {
                        id: 'V002',
                        firstName: 'Bob',
                        surname: 'Marley',
                        role: 'Finance',
                        ispName: 'Vodacom',
                        status: 'Active',
                        jobDesc: 'Credit Controller'

                    }
                ],
            userLabels: ['Username', 'Contact Number', 'Email Address', 'Password'],
            userDetails: [
                {
                    username: 'JohnSoapAdmin',
                    contactNum: '084 676 9900',
                    email: 'johns@vodacom.co.za',
                    password: '*********'
                }
            ]
        }
    }
}
</script>

<style lang="scss" scoped></style>