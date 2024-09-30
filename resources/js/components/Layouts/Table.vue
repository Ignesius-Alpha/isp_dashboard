<template>
<div class="overflow-x-auto">
    <table class="w-full table-auto border-collapse text-left text-sm">
        <!-- Table headers -->
        <thead class="bg-transparent shadow-lg text-[#173D6B] uppercase border border-gray-400 text-xs">
            <tr>
                <th v-for="(header, index) in headers" :key="index" class="px-4 border-l py-3 sm:px-6 sm:py-4 border-b border-gray-400 whitespace-nowrap">
                    {{ header }}
                </th>
            </tr>
        </thead>

        <!-- Table content -->
        <tbody class="text-gray-700">
            <tr v-for="(row, rowIndex) in content" :key="rowIndex" class="border border-slate-500 border-opacity-20 hover:bg-gray-100 hover:bg-opacity-30 transition-colors">
                <td v-for="(cell, cellIndex) in row" :key="cellIndex" class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B] px-4 py-3 sm:px-6 sm:py-4 border-b whitespace-nowrap">
                    {{ cell }}
                </td>
            </tr>
        </tbody>
    </table>
</div>
</template>

<script>
export default {
    props: {
        headers: {
            type: Array,
            required: true
        },
        content: {
            type: Array,
            required: true
        }
    },
    data() {
        return {}
    }
};
</script>

<style scoped>
  </style>
