<template>
<div class="w-full mb-6">
    <!-- Temporal -->
    <img src="/public/images/map.png" class="-mt-[52px] w-full h-[445px]">
    <!-- End Temporal -->
    <div class="absolute bg-white bg-opacity-75 rounded-bl-[96px] w-56 lg:w-72 h-52 lg:h-60 top-16 right-0 space-y-0.5">
        <div class="ml-8 mr-5 lg:mr-10 px-1 m-4 space-y-2 lg:space-y-4">
            <span class="text-xl lg:text-3xl font-semibold lg:font-bold text-[#3380F5] flex justify-left items-left">Legend</span>
            <hr>
            <span class="flex justify-left items-center text- lg:text-lg">
                <span class="material-symbols-outlined text-[#3380F5] mr-2">
                    location_on
                </span>CA Live Areas</span>
            <span class="flex justify-left items-center text- lg:text-lg">
                <span class="material-symbols-outlined text-lime-400 mr-2">
                    location_on
                </span>Active Services</span>
            <span class="flex justify-left items-center text- lg:text-lg">
                <span class="material-symbols-outlined text-orange-300 mr-2">
                    location_on
                </span>Pending Services</span>
        </div>
    </div>
    <div class="absolute top-72 lg:top-96 right-8 space-y-1">
        <button class="bg-white hover:bg-[#173D6B] hover:bg-opacity-20 hover:text-white rounded-tr-[15px] rounded-tl-[15px] pt-3 px-1 pb-4 flex justify-center items-center">
            <span class="text-lg border-2 border-[#173D6B] flex justify-center items-center w-6 h-6 rounded-full">+</span>
        </button>
        <button class="bg-white hover:bg-[#173D6B] hover:bg-opacity-20 hover:text-white rounded-br-[15px] rounded-bl-[15px] pt-4 px-1 pb-3 flex justify-center items-center">
            <span class="text-lg border-2 border-[#173D6B] flex justify-center items-center w-6 h-6 rounded-full">-</span>
        </button>
    </div>
</div>
<div class="w-full text-[#173d6b]">
    <h1 class="text-2xl lg:text-3xl font-semibold text-[#173d6b] mb-5">Coverage Map</h1>
    <div class="w-full rounded-lg">
        <div class="flex flex-col lg:flex-row items-center justify-between space-y-6 lg:space-y-0">
            <div class="w-full lg:w-[35%]">
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
                <button class=" w-full lg:w-auto bg-[#3380f5] text-white rounded-[30px] px-10 py-1.5 shadow-sm font-medium">
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
