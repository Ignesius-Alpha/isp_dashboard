<template>
    <div class="w-full space-y-4 max-h-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 xl:gap-5">
            <div
                class="flex border-2 border-white rounded-[50px] text-center py-16 p-5 bg-white bg-opacity-20 justify-center">
                <div class="text-center">
                    <h3 class="font-quicksand font-bold text-7xl xl:text-9xl text-[#3380F5]">156</h3>
                    <p class="text-[#173D6B] text-lg mb-3 lg:mb-8">Active Services</p>
                    <a href="/Activeservices"
                        class="border-2 border-[#173D6B] rounded-[30px] px-8 font-medium py-1.5 text-[#173D6B]">View</a>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-x-2 xl:gap-x-5">
                <a href="" class="flex col-span-1 justify-center items-center rounded-[50px] py-16 p-5 bg-[#3380F5]">
                    <div class="text-center">
                        <h3 class="font-quicksand font-bold text-7xl xl:text-9xl text-white">153</h3>
                        <p class="text-white text-lg">Online Services</p>
                    </div>
                </a>
                <a href="" class="flex col-span-1 justify-center items-center rounded-[50px] py-16 p-5 bg-[#173D6B]">
                    <div class="text-center">
                        <h3 class="font-quicksand font-bold text-7xl xl:text-9xl text-white">3</h3>
                        <p class="text-white text-lg">Offline Services</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 xl:gap-5">
            <div class="border-2 col-span-1 border-white rounded-[50px] p-4 py-12 bg-white bg-opacity-20">
                <div class="flex justify-between items-center mx-9 mb-4 xl:mb-5 -mt-5">
                    <div class="justify-start">
                        <p class="text-sm xl:text-lg text-[#173D6B]">Services Ordered</p>
                    </div>
                    <div class="justify-end">
                        <a href="/Reports"
                            class="border-2 px-6 py-1.5 font-medium rounded-[30px] border-[#173D6B]">Reports</a>
                    </div>
                </div>
                <div class="items-center justify-center flex">
                    <line-graph ></line-graph>
                </div>
            </div>
            <div class="rounded-[50px] flex col-span-1 text-center py-12 bg-[#3380F5] justify-center">
                <div class="flex flex-col justify-center items-center place-items-center text-center">
                    <h3 class="font-quicksand font-bold text-7xl xl:text-9xl text-white">12</h3>
                    <p class="text-white text-lg mb-3 lg:mb-8">Pending Orders</p>
                    <a href="/Activeservices"
                        class="border-2 border-white rounded-[30px] px-8 font-medium py-1.5 text-white">View</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {

        }
    }
}
</script>

<style lang="scss" scoped></style>