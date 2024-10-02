<template>
<div w-full>
    <div class="flex flex-row items-center justify-between text-[#173D6B] mt-10">
        <h2 class="font-bold text-3xl text-[#173D6B]">Finance </h2>
    </div>

    <table class="w-full mt-12">
        <thead>
            <tr>
                <th v-for="(tableheader, index ) in Tableheaders" :key="index" class="px-3.5 text-left text-[#173068]">
                    {{ tableheader }}
                </th>
            </tr>
        </thead>
        <tbody v-for="(Finance, index) in Finances" :key="index" class="border border-[#00000029]">
            <td class=" border border-[#00000029] px-4 w-3/5 xl:w-3/4">
                <tr class="text-[#173068]">
                    {{ Finance.month }} <span :class="Finance.status === 'Outstanding' ? 'text-blue-600 font-bold' : ''"> {{
                Finance.status }}</span>
                </tr>
            </td>
            <td class=" w-2/5 xl:w-1/4">
                <tr class=" py-2 text-[#173068] flex items-center justify-center space-x-4">
                    <button class=" border text-[#173068] border-[#173068] px-7 py-1.5 rounded-[30px]">{{ Finance.buttonview
                }}</button>
                    <button @click="toggleButton(index)" class=" text-white bg-[#3380f5] px-7 py-1.5 rounded-[30px]">{{
                Finance.buttondownload }}
                        <div v-if="activeIndex === index" id="dropdown" class="rounded-xl text-[#173068] bg-white w-36 mt-2.5 py-2 flex flex-col right-7 absolute">
                            <button @click="pdfDownload()" class="hover:bg-[#3380f5] hover:bg-opacity-15 hover:rounded-[30px] mx-5 py-1.5">PDF</button>
                            <button @click="csvDownload" class="hover:bg-[#3380f5] hover:bg-opacity-15 hover:rounded-[30px] mx-5 py-1.5">.CSV</button>
                        </div>
                    </button>
                </tr>
            </td>
        </tbody>
    </table>
</div>
</template>

  
<script>
export default {
    data() {
        return {
            Tableheaders: ["Document", "Action"],
            Finances: [{
                    month: "July 2024 Invoice ",
                    buttonview: "View",
                    buttondownload: "Download",
                    status: "Outstanding",
                },
                {
                    month: "June 2024 Statement",
                    buttonview: "View",
                    buttondownload: "Download",
                    status: "",
                },
                {
                    month: "June 2024 Invoice",
                    buttonview: "View",
                    buttondownload: "Download",
                    status: "",
                },
                {
                    month: "May 2024 Statement",
                    buttonview: "View",
                    buttondownload: "Download",
                    status: "",
                },
                {
                    month: "May 2024 Invoice",
                    buttonview: "View",
                    buttondownload: "Download",
                    status: "",
                },
            ],
            activeIndex: null,
        }
    },
    methods: {
        toggleButton(index) {
            if (this.activeIndex === index) {
                this.activeIndex = null;
            } else {
                this.activeIndex = index;
            }
        },
        pdfDownload() {
            alert(".PDF Download initiated");
            console.log(".PDF Download initiated")
        },
        csvDownload() {
            alert(".CSV Download initiated");
            console.log(".CSV Download initiated");
        }

    },

}
</script>
