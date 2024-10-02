<template>
<div class="mt-12 xl:mt-20 text-[#173D6B] space-y-3">
    <div class="flex flex-row truncate">
        <h2 class="font-bold text-3xl">Update User Profile: </h2>
        <h2 class="font-bold text-3xl text-[#3380F5] px-2">Bob Marley</h2>
    </div>
    <div class="pt-8 xl:pt-14">
        <h2 class="text-xl font-medium text-[#3380F5]">Profile Information</h2>
    </div>
    <div class="grid grid-cols-2 xl:grid-cols-4 gap-4 xl:gap-8">
        <div class="space-y-2 flex flex-col">
            <label class="font-bold ml-4" for="firstname">First Name</label>
            <input id="firstname" v-model="userProfileUpdate.firstname" class="rounded-[30px] py-2 bg-transparent border border-[#173D6B] border-opacity-10 pl-4 " placeholder="Bob " type="text">
        </div>
        <div class="space-y-2 flex flex-col">
            <label class="font-bold ml-4" for="surname">Surname</label>
            <input id="surname" v-model="userProfileUpdate.surname" class="rounded-[30px] py-2 bg-transparent border border-[#173D6B] border-opacity-10 pl-4" placeholder="Marley" type="text">
        </div>
        <div class="space-y-2 flex flex-col">
            <label class="font-bold ml-4" for="jobdescription">Job Description</label>
            <input id="jobdescription" v-model="userProfileUpdate.jobdescription" class="rounded-[30px] py-2 bg-transparent border border-[#173D6B] border-opacity-10 pl-4" placeholder="Credit Controller" type="text">
        </div>
        <div class="space-y-2 flex flex-col">
            <label class="font-bold ml-4" for="role-select">Role</label>
            <select class="rounded-[30px] py-2 w-full pl-4 bg-transparent border border-[#173D6B] border-opacity-10" id="role-select" name="role" v-model="userProfileUpdate.role">
                <option v-for="(role, index) in roles" :key="index" :value="role">
                    {{ role }}
                </option>
            </select>
        </div>
        <div class="space-y-2 flex flex-col">
            <label class="font-bold ml-6" for="email">Email Address</label>
            <input id="email" v-model="userProfileUpdate.email" class="rounded-[30px] py-2 bg-transparent border border-[#173D6B] border-opacity-10 pl-4" placeholder="Bob@vodacom.co.za" type="email">
        </div>
        <div class="space-y-2 flex flex-col">
            <label class="font-bold ml-6" for="contactNumber">Contact Number</label>
            <input id="contactNumber" v-model="userProfileUpdate.contactNumber" class="rounded-[30px] py-2 bg-transparent border border-[#173D6B] border-opacity-10 pl-6" placeholder="084 676 9900" type="text">
        </div>
        <div class="space-y-2 flex flex-col">
            <label class="font-bold ml-6" for="status-select">Status</label>
            <select class="rounded-[30px] py-2 w-full pl-4 bg-transparent border border-[#173D6B] border-opacity-10" id="status-select" name="status" v-model="userProfileUpdate.status">
                <option v-for="(statusVal, index) in status" :key="index" :value="statusVal">
                    {{ statusVal }}
                </option>
            </select>
        </div>
        <div class="flex justify-end items-end">
            <button @click="updateProfile" class=" text-white rounded-[30px] w-32 py-1.5 bg-[#3380F5]">Update</button>
        </div>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            userProfileUpdate: [{
                firstname: '',
                surname: '',
                jobdescription: '',
                email: '',
                role: '',
                status: '',
                contactNumber: '',
            }],
            roles: [
                'Super Admin', 'Sales', 'Support', 'Finance'
            ],
            status: [
                'Active', 'Inactive', 'Suspended'
            ]
        }
    },
    methods: {
        updateProfile() {
            console.log(this.userProfileUpdate)
        }
    }
}
</script>
