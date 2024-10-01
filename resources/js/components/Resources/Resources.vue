<template>
    <div class="text-[#173D6B]">
      <h2 class="text-[#173D6B] text-2xl font-semibold mb-4">Resources</h2>
      <table class="w-full py-4">
        <thead>
          <tr>
            <th v-for="(header, index) in resourceHeader" :key="index" class="text-left py-3 px-4 font-semibold">
              {{ header }}
            </th>
          </tr>
        </thead>
        <tbody class="border border-[#00000029]">
          <tr v-for="(resource, index) in resources" :key="index" class="border-b border- border-gray-200">
            <td class="border border-[#00000029] py-3 px-4 w-[65%] xl:w-[75%]">{{ resource.name }}</td>
            <td class="border border-[#00000029] py-3 px-4 w-[35%] xl:w-[25%] text-center">
                <div class="flex justify-evenly">
                    <button href="#" class="text-white bg-[#3380f5] py-1.5 px-5 rounded-[30px] mr-2">View</button>
                    <button href="#" class="text-white bg-[#3380f5] py-1.5 px-5 rounded-[30px]">Download</button>
                </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        resourceHeader: ['Resource','Action'],
        resources: [
          { name: 'Clear Access ISP Portal Manual' },
          { name: 'Support Escalation Matrix' },
          { name: 'Sales Escalation Matrix' },
          { name: 'FTTH Pricelist' },
          { name: 'FTTB Pricelist' },
          { name: 'SLA Agreement' },
          { name: 'Clear Access Corporate Identity Document' },
          { name: 'Clear Access Logos' },
        ],
      };
    },
  };
  </script>