<template>
<div class="mt-12 xl:mt-20 text-[#173D6B] space-y-3">
    <div class="flex flex-row truncate">
        <h2 class="font-bold text-3xl">Create A New User </h2>
    </div>
    <div class="pt-8 xl:pt-14">
        <h2 class="text-xl font-medium text-[#3380F5]">Profile Information</h2>
    </div>
    <div class="grid grid-cols-2 xl:grid-cols-4 gap-4 xl:gap-8">
        <div class="space-y-2 flex flex-col">
            <label class="font-bold ml-4" for="firstname">First Name</label>
            <input id="firstname" v-model="createUser.firstname" class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2" placeholder="Bob " type="text">
        </div>
        <div class="space-y-2 flex flex-col">
            <label class="font-bold ml-4" for="surname">Surname</label>
            <input id="surname" v-model="createUser.surname" class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2" placeholder="Marley" type="text">
        </div>
        <div class="space-y-2 flex flex-col">
            <label class="font-bold ml-4" for="jobdescription">Job Description</label>
            <input id="jobdescription" v-model="createUser.jobdescription" class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2" placeholder="Credit Controller" type="text">
        </div>
        <div class="space-y-2 flex flex-col">
            <label class="font-bold ml-4" for="role-select">Role</label>
            <select class="rounded-[30px] py-2 w-full pl-4 bg-transparent border border-[#173D6B] border-opacity-10" id="role-select" name="role" v-model="createUser.role">
                <option v-for="(role, index) in roles" :key="index" :value="role">
                    {{ role }}
                </option>
            </select>
        </div>
        <div class="space-y-2 flex flex-col">
            <label class="font-bold ml-4" for="email">Email Address</label>
            <input id="email" v-model="createUser.email" class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2" placeholder="Bob@vodacom.co.za" type="email">
        </div>
        <div class="space-y-2 flex flex-col">
            <label class="font-bold ml-4" for="contactNumber">Contact Number</label>
            <input id="contactNumber" v-model="createUser.contactNumber" class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2" placeholder="084 676 9900" type="text">
        </div>
        <div class="space-y-2 flex flex-col">
            <label class="font-bold ml-4" for="password">Password</label>
            <input id="password" v-model="createUser.password" class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2" placeholder="8 characters" type="password">
        </div>
        <div class="flex justify-center items-end space-y-2 gap-x-2 mb-1">
            <button @click="generatePassword" class="border border-[#173D6B] rounded-[30px] w-3/5 py-1.5">Generate
                Password</button>
            <button @click="createNewUser" class="bg-[#3380F5] text-white rounded-[30px] w-2/5 py-1.5">Create</button>
        </div>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            createUser: {
                firstname: '',
                surname: '',
                jobdescription: '',
                email: '',
                role: '',
                password: '',
                contactNumber: '',
            },
            roles: [
                'Super Admin', 'Sales', 'Support', 'Finance'
            ],
        }
    },
    methods: {
        generatePassword() {
            const passwordLength = 8;
            const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%&';

            let password = '';
            while (password.length < passwordLength) {
                const randomIndex = Math.floor(Math.random() * chars.length);
                password += chars[randomIndex];
            }

            const hasLowercase = /[a-z]/.test(password);
            const hasUppercase = /[A-Z]/.test(password);
            const hasDigit = /\d/.test(password);
            const hasSpecialChar = /[!@#$%^&*()_+-=]/.test(password);

            if (!(hasLowercase && hasUppercase && hasDigit && hasSpecialChar)) {
                password = this.generatePassword();
            }

            this.createUser.password = password;
        },
        createNewUser() {
            // axios
            //     .post('http://localhost:3000/api/users', this.createUser)
            //     .then((response) => {
            //         console.log(response);
            //     })
            //     .catch((error) => {
            //         console.log(error);
            //     });
            if (this.createUser.firstname.length !== 0 && this.createUser.surname.length !== 0 && this.createUser.jobdescription.length !== 0 &&
                this.createUser.email.length !== 0 && this.createUser.role.length !== 0 && this.createUser.password.length !== 0 && this.createUser.contactNumber.length !== 0) {
                alert('User created');
            } else {
                alert('Please fill in all fields');
            }
        }
    }
}
</script>
