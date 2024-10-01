<template>
<div class="text-[#173D6B] space-y-3">
    <h2 class="font-bold text-2xl">Quick Link Search</h2>
    <p class="text-md font-medium pb-7">This Interface allows you to search for Links based on the criteria
        specified below.</p>
    <form class="flex w-full lg:flex-row md:justify-between md:space-x-1 space-y-5 md:space-y-0">
        <div class="flex flex-col w-[24%]">
            <label class="font-medium lg:font-bold ml-6 truncate" for="custName">Customer Full Name</label>
            <input v-model="custName" id="custName" :disabled="ispOrderNum !== ''" :class="ispOrderNum !== '' ? 'border-[#ff3a3a] border-opacity-50 placeholder:text-[#ff3a3a]' : 'border-[#173D6B] border-opacity-10'" class="rounded-[30px] mt-2 py-2 bg-transparent border pl-6" :placeholder="ispOrderNum !== '' ? 'Disabled' : 'Peter Parker'" type="text">
        </div>

        <div class="flex justify-center w-[4%]">
            <p class="mt-10 text-center">or</p>
        </div>

        <div class="flex flex-col w-[24%]">
            <label class="font-medium lg:font-bold ml-6 truncate" for="ispOrderNum">ISP Order Number</label>
            <input v-model="ispOrderNum" id="ispOrderNum" :disabled="custName !== ''" :class="custName !== '' ? 'border-[#ff3a3a] border-opacity-50 placeholder:text-[#ff3a3a]' : 'border-[#173D6B] border-opacity-10'" class="rounded-[30px] mt-2 py-2 bg-transparent border pl-6" :placeholder="custName !== '' ? 'Disabled' : 'V5678'" type="text">
        </div>

        <div class="flex flex-col w-[24%]">
            <label :class="{ 'text-red-500': searchActive && !estateName }" class="font-medium lg:font-bold ml-6 truncate" for="estateName">
                {{ searchActive && !estateName ? 'Estate Name *' : 'Estate Name' }}
            </label>
            <input v-model="estateName" id="estateName" class="rounded-[30px] mt-2 py-2 bg-transparent border border-[#173D6B] border-opacity-10 pl-6" placeholder="Country Life" type="text">
        </div>

        <div class="flex flex-col w-[24%]">
            <label :class="{ 'text-red-500': searchActive && !unitNum }" class="font-medium lg:font-bold ml-6 truncate" for="unitNum">
                {{ searchActive && !unitNum ? 'Unit Number *' : 'Unit Number' }}
            </label>
            <input v-model="unitNum" id="unitNum" class="rounded-[30px] mt-2 py-2 bg-transparent border border-[#173D6B] border-opacity-10 pl-6" placeholder="12" type="text">
        </div>
    </form>
    <div class="pt-5 w-full flex justify-end">
        <button @click="search" class="py-1.5 text-white rounded-[30px] shadow-sm px-14 bg-[#3380F5]">Search</button>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            custName: '',
            ispOrderNum: '',
            estateName: '',
            unitNum: '',
            searchActive: false,
            disabled: true
        }
    },
    methods: {
        search() {
            this.searchActive = true;
            if (this.custName !== '' || this.ispOrderNum !== '' && this.estateName !== '' && this.unitNum !== '') {
                console.log(this.custName, this.ispOrderNum, this.estateName, this.unitNum);
            } else {
                alert('Please fill in all the fields');
            }
        },
    }
};
</script>

<style scoped></style>
