<template>
    <div class="w-full flex flex-row gap-3">
        <div class="flex flex-col w-[10%] lg:w-[20%]"></div>
        <div class="flex flex-col w-[30%] lg:w-[20%] space-y-2">
            <p class="text-[#173D6B] text-md pl-4 font-bold">Filter by</p>
            <select class="border w-full bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2"
                name="" id="filterAlphabets" v-model="filterAlphabets">
                <option value="Alphabetical Order: A-Z">Alphabetical Order: A-Z</option>
                <option value="Alphabetical Order: Z-A">Alphabetical Order: Z-A</option>
            </select>
        </div>
        <div class="flex flex-col space-y-2 w-[45%] lg:w-[50%]">
            <p class="text-[#173D6B] text-md pl-4 font-bold">Search for estate</p>
            <input type="text" id="estateSearch" v-model="estateSearch"
                class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2 "
                placeholder="Type estate name">
        </div>
        <div class="flex flex-col justify-center mt-7 items-end space-y-2 w-[15%] lg:w-[10%]">
            <button class="border-2 border-[#173D6B] rounded-[30px] w-full py-1.5">Export</button>
        </div>
    </div>
    <div class="w-full justify-center items-center my-2">
        <table class="mx-auto w-full">
            <thead>
                <tr>
                    <th v-for="(tableHead, index) in estateTitles" :key="index" class="p-2.5 text-left text-[#173D6B]">
                        {{ tableHead }}
                    </th>
                </tr>
            </thead>
            <tbody class="">
                <tr v-for="(estateDetail, index) in filterUptakes" :key="index"
                    class="border border-slate-500 border-opacity-20">
                    <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                        {{ estateDetail.est_name }}
                    </td>
                    <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                        {{ estateDetail.location }}
                    </td>
                    <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                        <div class="flex flex-row justify-center items-center">
                            {{ estateDetail.uptake }}
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    props: {
        estateTitles: {
            type: Object,
            required: false
        },
        estateDetails: {
            type: Object,
            required: false
        }
    },
    data() {
        return {
            estateSearch: '',
            filterAlphabets: ''
        }
    },
    computed: {
        filterUptakes() {
            let estates = this.estateDetails;
            if (this.filterAlphabets) {
                if (this.filterAlphabets === 'Alphabetical Order: A-Z') {
                    estates = estates.sort((a, b) => a.est_name.localeCompare(b.est_name));
                } else if (this.filterAlphabets === 'Alphabetical Order: Z-A') {
                    estates = estates.sort((a, b) => b.est_name.localeCompare(a.est_name));
                }
            }
            if (this.estateSearch) {
                estates = estates.filter(estate => {
                    return (
                        estate.est_name && estate.est_name.toLowerCase().includes(this.estateSearch.toLowerCase())
                    );
                });
            }
            return estates;
        },
    }
}
</script>

<style></style>