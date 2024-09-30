<template>
<header class="w-screen z-30 fixed flex flex-row top-0 h-18 shadow-md">
    <nav class="bg-[#173D6B] w-3/4 lg:w-[80%] xl:w-[84%] flex py-4 justify-between">
        <div class="flex justify-between px-4 place-items-center ">
            <a href="Dashboard" class="ml-10">
                <img src="../../../../public/assets/logo/Clear_Access.png" alt="Avatar" class="">
            </a>
        </div>
        <select class="bg-transparent border w-54 px-4 text-white p-2 rounded-[30px] mr-5">
            <option selected class="text-black">Select an ISP</option>
            <option v-for="(isp, index) in isps" :key="index" :value="isp" class="text-black">
                {{ isp }}
            </option>
        </select>
    </nav>
    <button @click="isOpen = !isOpen" :class="isOpen ? 'bg-[#3380f5]' : 'bg-[#173D6B]'" class="bg-[#173D6B] w-1/4 lg:w-[20%] xl:w-[16%] flex justify-between px-2 lg:px-4 xl:px-6 py-4 items-center relative">
        <img src="../../../../public/assets/logo/Vodacom_Icon.png" alt="Avatar" class="w-8 h-8">
        <h2 class="text-white">{{ userID.name }}</h2>
        <span class="material-symbols-outlined text-white">settings</span>
    </button>
</header>
<div v-if="isOpen" class="absolute z-20 top-12 w-1/4 lg:w-[20%] xl:w-[16%] right-0  bg-[#3380F5] text-white py-7 p-4 space-y-4 h-screen">
    <div class=" h-5/6 xl:h-[85%] space-y-4">
        <a v-for="(navItem, index) in navItems" :key="index" :href="navItem.link" class="block px-4 py-2 text-white text-opacity-85 hover:text-white active:text-bold">
            {{ navItem.name }}
        </a>
    </div>
    <div class="">
        <hr class="border mx-4 border-white border-opacity-50">
        <h2 class="block text-md xl:text-xl px-4 py-2 text-white text-opacity-85 hover:text-white active:text-bold">Account ID:
            {{ userID.id }}</h2>
    </div>
</div>
</template>

<script>
export default {
    props: {
        class: {
            type: String,
                default: ''
        }
    },
    data() {
        return {
            userID: {
                id: 'V002',
                name: 'Jaco Minnaar'
            },
            navItems: [{
                    name: 'Company Profile',
                    link: '/company-profile'
                },
                {
                    name: 'Your Account',
                    link: '/account'
                },
                {
                    name: 'User Profiles',
                    link: '/user-profiles'
                },
                {
                    name: 'Role Permissions',
                    link: '/role-permissions'
                },
                {
                    name: 'Finance',
                    link: '/finance'
                },
                {
                    name: 'Audit Trail',
                    link: '/audit-trail'
                }
            ],
            isps: [
                'Accelerit',
                'Afrihost',
                'Axxess',
                'Bridgenet',
                'Bulldog',
                'Cell C',
                'Coolideas',
                'CrispFibre',
                'FibreStream',
                'Imagine',
                'Konekt',
                'LaserNet',
                'MetroFibre',
                'MWEB',
                'Netmetrix',
                'Octopi',
                'Oxygn',
                'PacketSky',
                'Supersonic',
                'Tech5',
                'Userverse',
                'Vodacom',
                'WebAfrica',
            ],
            isOpen: false
        }
    }
}
</script>

<style lang="scss" scoped></style>
