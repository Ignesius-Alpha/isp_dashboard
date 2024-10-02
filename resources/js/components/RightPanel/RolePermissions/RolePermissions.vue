<template>
<div class="w-full">
    <div class="mt-8">
        <p class="text-[#173D6B] font-bold text-3xl">Role Permissions</p>
    </div>
    <div class="w-full justify-center items-center my-3 overflow-auto">
        <table class="w-full">
            <thead class="w-full">
                <th v-for="(tableHeading, index) in tableHeadings" :key="index" class="text-left px-4 py-2 text-sm font-bold text-[#173D6B]">{{ tableHeading }}</th>
            </thead>
            <tbody v-for="(rolePermission, index) in rolePermissions" :key="index" class="border border-slate-500 border-opacity-20">
                <td class="w-[15%] p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                    <tr>{{ rolePermission.role }}</tr>
                </td>
                <td class="w-[70%] p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                    <tr class="text-wrap">{{ rolePermission.portal_access }}</tr>
                </td>
                <td class="w-[15%] p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                    <div class="justify-center flex items-center">
                        <a :href="rolePermission.route" class="bg-[#3380F5] text-white text-md font-bold rounded-[30px] px-8 py-1.5">{{rolePermission.permissions}}</a>
                    </div>
                </td>
            </tbody>
        </table>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            tableHeadings: ['Role', 'Portal Access', 'Permissions'],
            rolePermissions: [{
                    role: 'Super Admin',
                    portal_access: 'Quick Search, Coverage Map, Orders, Active Services, Support, Resources, CA News, Marketing, User Profiles, Role Permissions, Finance, Audit Trail',
                    route: 'role-permissions/update',
                    permissions: 'Update'
                },
                {
                    role: 'Sales',
                    portal_access: 'Quick Search, Coverage Map, Orders, Active Services, Resources, CA News, Marketing',
                    route: 'role-permissions/update',
                    permissions: 'Update'
                },
                {
                    role: 'Support',
                    portal_access: 'Quick Search, Coverage Map, Orders, Active Services, Resources, Support',
                    route: 'role-permissions/update',
                    permissions: 'Update'
                },
                {
                    role: 'Finance',
                    portal_access: 'Quick Search, Coverage Map, Active Services, Support, Resources, CA News, Finance, Audit Trail',
                    route: 'role-permissions/update',
                    permissions: 'Update'
                },
            ]
        }
    }
}
</script>

<style lang="scss" scoped></style>
