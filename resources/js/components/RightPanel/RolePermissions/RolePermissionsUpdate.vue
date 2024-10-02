<template>
<div class="w-full">
    <div class="w-full">
        <p class="text-[#173D6B] font-bold text-3xl">Update Role Permission</p>
    </div>
    <div class="mt-14 flex">
        <div v-for="(option, index) in roleOptions" :key="index" :class="[selectedTab === index ? 'bg-[#173D6B] text-white' : 'bg-[#e8eaec] text-[#173D6B]']" class="font-semibold xl:font-bold justify-between mx-auto grid grid-cols-4 px-4 lg:px-10 2xl:px-24 py-2 border border-white rounded-[50px] p-2 cursor-pointer" @click="selectedTab = index">
            <div class="flex text-sm xl:text-sm items-start justify-center col-span-4">
                <span class="truncate">{{ option }}</span>
            </div>
        </div>
    </div>
    <div v-if="selectedTab === 0 " class="bg-white bg-opacity-40 h-fit -z-4 rounded-[30px] -mt-8">
        <!-- temporary vif -->
        <!-- <div v-if="selectedTab === 0 " class="grid grid-cols-1 lg:grid-cols-2 p-6 mt-3 py-14"> -->
        <div class="grid grid-cols-1 lg:grid-cols-2 p-6 mt-3 py-14">
            <table class="h-fit">
                <thead class="w-full">
                    <th v-for="(tableHeading, index) in tableHeadings" :key="index" class="text-left px-4 py-2 text-sm font-bold text-[#173D6B]">{{ tableHeading }}</th>
                </thead>
                <tbody v-for="(roleUpdate, index) in roleUpdates" :key="index" class="">
                    <td class="text-md  border border-[#00000029] font-bold text-[#173D6B] px-4 py-3">
                        <tr>{{ roleUpdate.portal_access }}</tr>
                    </td>
                    <td class="text-md border border-[#00000029] font-light text-[#173D6B] px-4 py-3">
                        <tr class="">{{ roleUpdate.description }}</tr>
                    </td>
                    <td class="text-center text-md border border-[#00000029] font-light text-[#173D6B] px-4 py-3">
                        <tr class="text-md font-bold flex justify-center rounded-full px-8 py-2">
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="checkbox" v-model="roleUpdate.permissions" :value="roleUpdate.permissions" class="sr-only peer">
                                <div class="relative w-[50px] h-6 bg-transparent peer-checked:before:bg-[#173D6B] border-[#173D6B] border rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full after:content-[''] after:absolute after:top-[0.5px] after:start-[0px] after:bg-white after:border after:rounded-full after:h-5 after:w-6 after:transition-all peer-checked:bg-[#54BFF5] peer-checked:border-[#54BFF5]">
                                </div>
                            </label>
                        </tr>
                    </td>
                </tbody>
            </table>
            <table class="h-fit">
                <thead class="w-full">
                    <th v-for="(tableHeading, index) in tableHeadings" :key="index" class="text-left px-4 py-2 text-sm font-bold text-[#173D6B]">{{ tableHeading }}</th>
                </thead>
                <tbody v-for="(secondRoleUpdate, index) in secondRoleUpdates" :key="index" class="">
                    <td class="text-md  border border-[#00000029] font-bold text-[#173D6B] px-4 py-3">
                        <tr>{{ secondRoleUpdate.portal_access }}</tr>
                    </td>
                    <td class="text-md border border-[#00000029] font-light text-[#173D6B] px-4 py-3">
                        <tr class="">{{ secondRoleUpdate.description }}</tr>
                    </td>
                    <td class="text-center text-md border border-[#00000029] font-light text-[#173D6B] px-4 py-3">
                        <tr class="text-md font-bold flex justify-center rounded-full px-8 py-2">
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="checkbox" v-model="secondRoleUpdate.permissions" :value="secondRoleUpdate.permissions" class="sr-only peer">
                                <div class="relative w-[50px] h-6 bg-transparent peer-checked:before:bg-[#173D6B] border-[#173D6B] border rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full after:content-[''] after:absolute after:top-[0.5px] after:start-[0px] after:bg-white after:border after:rounded-full after:h-5 after:w-6 after:transition-all peer-checked:bg-[#54BFF5] peer-checked:border-[#54BFF5]">
                                </div>
                            </label>
                        </tr>
                    </td>
                </tbody>
            </table>
        </div>
        <div class="flex flex-row justify-end items-end p-6 -mt-16">
            <button class="bg-[#3380F5] text-white px-8 rounded-[30px] py-1.5 my-2">Update</button>
        </div>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            toggleState: true,
            tableHeadings: ['Portal Access', 'Description', 'Permission'],
            roleOptions: ['Super Admin', 'Sales', 'Support', 'Finance'],
            selectedTab: localStorage.getItem('selectedTab') ? parseInt(localStorage.getItem('selectedTab')) : 0,
            roleUpdates: [{
                    portal_access: 'Quick Search',
                    description: 'Search for Services',
                    permissions: true
                },
                {
                    portal_access: 'Coverage Map',
                    description: 'Download KMZ File',
                    permissions: false
                },
                {
                    portal_access: '',
                    description: 'Check Coverage',
                    permissions: false
                },
                {
                    portal_access: 'Order',
                    description: 'Place an Order',
                    permissions: true
                },
                {
                    portal_access: '',
                    description: 'View Orders in Progress',
                    permissions: true
                },
                {
                    portal_access: '',
                    description: 'View Actions Required',
                    permissions: true
                },
                {
                    portal_access: '',
                    description: 'Upgrade/Downgrade Services',
                    permissions: true
                },
                {
                    portal_access: '',
                    description: 'Cancel Orders',
                    permissions: true
                },
                {
                    portal_access: 'User Profiles',
                    description: 'Add New Profile',
                    permissions: false
                },
                {
                    portal_access: '',
                    description: 'Edit Profile',
                    permissions: false
                },
                {
                    portal_access: '',
                    description: 'View Profile',
                    permissions: false
                },
            ],
            secondRoleUpdates: [{
                    portal_access: 'Active Services',
                    description: 'Search for Services',
                    permissions: true
                },
                {
                    portal_access: '',
                    description: 'Download Documents',
                    permissions: true
                },
                {
                    portal_access: '',
                    description: 'Export',
                    permissions: true
                },
                {
                    portal_access: 'Support',
                    description: 'Log a Ticket',
                    permissions: false
                },
                {
                    portal_access: '',
                    description: 'View Tickets',
                    permissions: false
                },
                {
                    portal_access: '',
                    description: 'View Outages',
                    permissions: false
                },
                {
                    portal_access: '',
                    description: 'View Planned Maintenance',
                    permissions: false
                },
                {
                    portal_access: 'Resources',
                    description: 'Download Resources',
                    permissions: true
                },
                {
                    portal_access: 'Role Permissions',
                    description: 'Update Permissions',
                    permissions: false
                },
                {
                    portal_access: '',
                    description: 'View Planned Maintenance',
                    permissions: false
                },
            ]
        }
    },
    methods: {

    },
    watch: {
        selectedTab(newVal) {
            localStorage.setItem('selectedTab', newVal);
        }
    }
}
</script>

<style></style>
