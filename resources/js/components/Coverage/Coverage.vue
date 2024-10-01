<template>
<div class="w-full text-[#173d6b]">
    <h1 class="text-2xl lg:text-3xl font-semibold text-[#173d6b] mb-5">Coverage Map</h1>
    <div class="w-full rounded-lg">
        <div class="flex flex-col lg:flex-row items-center justify-between space-y-6 lg:space-y-0">
            <div class="w-full lg:w-1/2">
                <label class="block text-[#173d6b] font-semibold mb-2">Search via Address</label>
                <input type="text" placeholder="Example: 26 Victoria Link, Route 21 Business Park, Centurion, 0178" class="w-full p-2.5 rounded-[30px] bg-transparent border border-[#173D6B] border-opacity-10 pl-6 text-sm text-gray-500 focus:outline-none">
            </div>
            <div class="pt-8 text-[#173d6b] font-semibold text-sm px-2">OR</div>
            <div class="w-full lg:w-1/2 flex space-x-4">
                <div class="w-full">
                    <label class="block text-[#173d6b] font-semibold mb-2">Latitude</label>
                    <input type="text" placeholder="Latitude" class="w-full p-2.5 rounded-[30px] bg-transparent border border-[#173D6B] border-opacity-10 pl-6 text-sm text-gray-500 focus:outline-none">
                </div>
                <div class="w-full">
                    <label class="block text-[#173d6b] font-semibold mb-2">Longitude</label>
                    <input type="text" placeholder="Longitude" class="w-full p-2.5 rounded-[30px] bg-transparent border border-[#173D6B] border-opacity-10 pl-6 text-sm text-gray-500 focus:outline-none">
                </div>
            </div>
            <div class="flex w-full lg:w-auto pt-6 text-center">
                <button class=" w-full lg:w-auto bg-[#3380f5] text-white rounded-[30px] px-6 py-1.5 shadow-sm font-medium">
                    Search
                </button>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between mt-8 space-y-3">
            <div class="">
                <div class="mb-2">
                    <label class="text-[#173D6B] font-bold block">Precinct Types:</label>
                </div>
                <div v-for="(selection, index) in precincttypes.selections" :key="index" class="grid grid-cols-1">
                    <div class="">
                        <input type="radio" class="" name="precincttypes" :id="selection.selectionID" :value="selection.selectionID" :v-model="precincttypes.selected">
                        <label :for="selection.selectionID" class="px-4 text-[#173D6B]">{{ selection.selectionName
                                }}</label>
                    </div>
                </div>
            </div>
            <div class="flex space-x-4 justify-end items-end">
                <button class="bg-[#3380f5] text-white rounded-[30px] px-6 py-1.5 font-medium">Download FTTH
                    KMZ</button>
                <button class="bg-[#3380f5] text-white rounded-[30px] px-6 py-1.5 font-medium">Download FTTB
                    KMZ</button>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            address: '',
            latitude: '',
            longitude: '',
            precincttypes: {
                "id": 1,
                "selected": 2,
                "selections": [{
                        "selectionID": 1,
                        "selectionName": "Residential (FTTH)"
                    },
                    {
                        "selectionID": 2,
                        "selectionName": "Business (FTTB)"
                    }
                ]
            }
        };
    }
}
</script>

<style scoped></style>
