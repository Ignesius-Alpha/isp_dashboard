<template>
    <div class="flex flex-col justify-center mb-12 mt-8">
        <div class="w-full">
            <p class="text-[#173D6B] font-bold text-3xl">Hello {{ tableData.firstName }} {{ tableData.surname }}</p>
            <span class="text-[#3380F5] font-bold">Super Admin</span>
        </div>
        <div class="w-full justify-center items-center mb-3 overflow-auto mt-5">
            <table class="mx-auto w-full">
                <thead>
                    <tr>
                        <th v-for="(tableHeading, index) in tableHeadings" :key="index" class="p-2.5 text-left text-[#173D6B]">{{ tableHeading }}</th>
                    </tr>
                </thead>
                <tbody class="border border-[#00000029]">
                    <tr>
                        <td v-for="(value, key) in tableData" :class="value === 'Active' ? 'text-[#3380F5] font-bold' : ''" :key="key" class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">{{ value }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="w-full justify-start items-center my-3 overflow-auto mt-10 flex">
            <table class="w-[60%]">
                <thead>
                    <tr>
                        <th v-for="(userLabel, index) in userLabels" :key="index" class="p-2.5 text-left text-[#173D6B]">{{ userLabel }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(user, index) in userDetails" :key="index">
                        <td v-for="(value, key) in user" :key="key" class="p-2.5 text-[#173D6B] text-md font-light">{{ value }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="flex justify-center mt-3">
                <button class="bg-[#3380F5] text-white font-bold py-1.5 w-24 xl:w-32 rounded-[30px]">Update</button>
            </div>
        </div>
        <div class="w-full justify-center items-center my-3 overflow-auto mt-16">
            <div class="w-full">
                <p class="text-[#173D6B] font-bold text-3xl">ISP Portal Settings</p>
                <span class="text-[#173D6B] font-bold">Only Super Admins will see these settings</span>
            </div>
            <div class="w-[100%] flex space-x-11">
                <div class="w-[20%] xl:w-[15%] my-14">
                    <img class="w-full size-56" src="../../../../../public/assets/logo/Vodacom_Logo.png" alt="">
                </div>
                <div class="w-[80%] xl:w-[85%] my-14 space-y-6">
                    <div class="grid grid-cols-3 xl:grid-cols-6 gap-y-4 justify-between items-start">
                        <div class="space-y-1">
                            <p class="text-[#173D6B] font-bold text-lg">ISP Name</p>
                            <h2>{{ companyDetails.ispName }}</h2>
                        </div>
                        <div class="space-y-1">
                            <p class="text-[#173D6B] font-bold text-lg">User Profiles</p>
                            <h2>{{ companyDetails.userProfiles }}</h2>
                        </div>
                        <div class="space-y-1">
                            <p class="text-[#173D6B] font-bold text-lg">Support Email</p>
                            <h2>{{ companyDetails.emails.support }}</h2>
                        </div>
                        <div class="space-y-1">
                            <p class="text-[#173D6B] font-bold text-lg">Sales Email</p>
                            <h2>{{ companyDetails.emails.sales }}</h2>
                        </div>
                        <div class="space-y-1">
                            <p class="text-[#173D6B] font-bold text-lg">Finance Email</p>
                            <h2>{{ companyDetails.emails.finance }}</h2>
                        </div>
                        <div class="space-y-1">
                            <p class="text-[#173D6B] font-bold text-lg">Marketing Email</p>
                            <h2>{{ companyDetails.emails.finance }}</h2>
                        </div>
                    </div>
                    <div class="flex w-[100%]">
                        <div class="w-[65%] xl:w-[31%] grid grid-cols-2 space-x-2">
                            <div class="space-y-1">
                                <p class="text-[#173D6B] font-bold text-lg">Physical Address</p>
                                <h2 v-for="(value, key) in companyDetails.physicalAddress" :key="key">{{ value }}</h2>
                            </div>
                            <div class="space-y-1">
                                <p class="text-[#173D6B] font-bold text-lg">Call Centre Number</p>
                                <h2>{{ companyDetails.callCentreNum }}</h2>
                            </div>
                        </div>
                        <div class="w-[35%] xl:w-[69%] flex justify-end items-end">
                            <button class="border-2 border-[#173D6B] rounded-[30px] px-8 py-1.5">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </template>
    
    <script>
    export default {
        data() {
            return {
                tableHeadings: ['ID', 'First Name', 'Surname', 'Role', 'ISP Name', 'Status', 'Job Description'],
                tableData: {
                    id: 'V002',
                    firstName: 'John',
                    surname: 'Soap',
                    role: 'Super Admin',
                    ispName: 'Vodacom',
                    status: 'Active',
                    jobDesc: 'Support Manager'
                },
                userLabels: ['Username', 'Contact Number', 'Email Address', 'Password'],
                userDetails: [{
                    username: 'JohnSoapAdmin',
                    contactNum: '084 676 9900',
                    email: 'johns@vodacom.co.za',
                    password: '*********'
                }],
                companyDetails: {
                    ispName: 'Vodacom',
                    userProfiles: 8,
                    emails: {
                        support: 'support@vodacom.co.za',
                        sales: 'sales@vodacom.co.za',
                        finance: 'finance@vodacom.co.za',
                        marketing: 'marketing@vodacom.co.za'
                    },
                    physicalAddress: {
                        street: '26 Victoria Link',
                        street2: 'Route 21 Business Park',
                        city: 'Centurion',
                        code: '0178'
                    },
                    callCentreNum: '011 100 0210'
                }
            }
        }
    }
    </script>
    
    <style lang="scss" scoped></style>
    