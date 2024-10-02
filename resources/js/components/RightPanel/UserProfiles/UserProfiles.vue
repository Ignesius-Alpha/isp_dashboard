<template>
<div class="w-full ">
    <div class="flex justify-between">
        <div class="">
            <h2 class="text-2xl xl:text-3xl font-semibold truncate xl:font-bold text-[#173D6B]">User Profiles</h2>
        </div>
        <div class="flex space-x-3">
            <div>
                <button class="bg-[#54BFF5] text-white rounded-full w-24 xl:w-32 py-1.5"><a href="/user-profiles/create-user">New
                        User</a></button>
            </div>
            <div>
                <button @click="$refs.bulkImageUpload.click()" class="border-[#173D6B] text-[#173D6B] border w-28 xl:w-36 rounded-[30px] py-1.5">Bulk
                    Uploads</button>
                <input type="file" id="bulk-image-upload" @change="handleBulkUpload" ref="bulkImageUpload" style="display: none;" multiple />
            </div>
            <div>
                <button @click="downloadCSV" class="text-[#3380F5] truncate underline py-2">Download CSV</button>
            </div>
        </div>
    </div>
    <div class="mt-8 w-full justify-center items-center my-3 overflow-auto">
        <table class="mx-auto w-full">
            <thead class="">
                <tr>
                    <th v-for="(tableHeading, index) in tableHeadings" :key="index" class="p-2.5 text-left text-[#173D6B]"> {{ tableHeading }}
                    </th>
                </tr>
            </thead>
            <tbody v-for="(userProfile, index) in userProfiles" :key="index" class="border">
                <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">{{ userProfile.id }}
                </td>
                <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">{{
                        userProfile.first_name }}</td>
                <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">{{ userProfile.surname
                        }}</td>
                <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">{{ userProfile.role }}
                </td>
                <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B] font-bold">
                    <span :class="userProfile.status === 'Active' ? 'text-[#3380F5] ' : userProfile.status === 'Inactive' ? 'text-[#173D6B]' : userProfile.status === 'Suspended' ? 'text-[#54BFF5]' : ''">{{
                                userProfile.status }}</span>
                </td>
                <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">{{
                        userProfile.job_description }}</td>
                <td class="p-2.5 border-l w-fit border-slate-500 border-opacity-20 text-[#173D6B]">
                    <div class="flex w-fit justify-center mx-2 xl:mx-2 items-center gap-x-3">
                        <button :userProfile="userProfiles[index]" class="bg-[#3380F5] text-white rounded-full w-24 xl:w-28 px-2 py-1.5"><a href="/user-profiles/update-user">Update</a> </button>
                        <remove-confirmation-modal :userProfile="userProfiles" :buttonText="'Remove'" buttonTextColor="white" buttonColor="#173D6B" />
                    </div>
                </td>
            </tbody>
        </table>
    </div>
    <div class="text-[#54BFF5] italic font-bold mt-3">
        <p>*Suspended profiles are users who have not used the portal in 3 months +</p>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            tableHeadings: ['ID', 'First Name', 'Surname', 'Role', 'Status', 'Job Description', 'Action'],
            userProfiles: [{
                    id: 'V001',
                    first_name: 'Able',
                    surname: 'Parker',
                    role: 'Super Admin',
                    status: 'Active',
                    job_description: 'Accounts Manager',
                    action: 'download',
                },
                {
                    id: 'V002',
                    first_name: 'John',
                    surname: 'Soap',
                    role: 'Super Admin',
                    status: 'Active',
                    job_description: 'Credit Controller',
                    action: 'download',
                },
                {
                    id: 'V003',
                    first_name: 'Chantell',
                    surname: 'Peach',
                    role: 'Super Admin',
                    status: 'Suspended',
                    job_description: 'ISP & FNO Relations',
                    action: 'download',
                },
                {
                    id: 'V004',
                    first_name: 'Able',
                    surname: 'Parker',
                    role: 'Super Admin',
                    status: 'Active',
                    job_description: 'Accounts Manager',
                    action: 'download',
                },
                {
                    id: 'V005',
                    first_name: 'Peter',
                    surname: 'Smith',
                    role: 'Sales',
                    status: 'Inactive',
                    job_description: 'Marketing Designer',
                    action: 'download',
                },
                {
                    id: 'V006',
                    first_name: 'Able',
                    surname: 'Parker',
                    role: 'Super Admin',
                    status: 'Active',
                    job_description: 'Credit Controller',
                    action: 'download',
                },
                {
                    id: 'V007',
                    first_name: 'Simone',
                    surname: 'Parker',
                    role: 'Super Admin',
                    status: 'Active',
                    job_description: 'Operations Administrator',
                    action: 'download',
                },
                {
                    id: 'V008',
                    first_name: 'Samantha',
                    surname: 'Parker',
                    role: 'Super Admin',
                    status: 'Active',
                    job_description: 'Operations Administrator',
                    action: 'download',
                },
            ],
            uploadedImages: [],
        }
    },
    methods: {
        handleBulkUpload() {
            const bulkImageUpload = this.$refs.bulkImageUpload;
            if (bulkImageUpload) {
                const files = bulkImageUpload.files;
                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    const reader = new FileReader();
                    reader.onload = () => {
                        this.uploadedImages.push(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
            }
        },
        downloadCSV() {
            const csvContent = this.userProfiles.map(userProfile => {
                return `${userProfile.id},${userProfile.first_name},${userProfile.surname},${userProfile.role},${userProfile.status},${userProfile.job_description}` // add more columns as needed
            }).join('\n')
            const blob = new Blob([csvContent], {
                type: 'text/csv;charset=utf-8;'
            })
            const link = document.createElement('a')
            link.href = URL.createObjectURL(blob)
            link.download = 'user_profiles.csv'
            link.click()
        }
    }
}
</script>
