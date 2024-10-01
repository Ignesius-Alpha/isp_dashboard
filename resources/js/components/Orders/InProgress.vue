<template>
    <div class="grid grid-cols-3 xl:grid-cols-8 gap-8">
        <div class="flex flex-col space-y-2 col-span-1 xl:col-span-2">
            <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold"
                for="dateFilter">Filter by
                Date</label>
            <div class="relative max-w-sm">
                <input id="dateFilter" :value="selected" @input="$emit('update:selected', $event.target.value)"
                    type="date"
                    class="w-full rounded-[30px] py-2 bg-transparent border border-[#173D6B] border-opacity-10 px-4" />
            </div>
        </div>
        <div class="flex flex-col space-y-2 col-span-1 xl:col-span-2">
            <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold"
                for="statusFilter">Filter by
                Status</label>
            <select id="statusFilter" v-model="statusFilter"
                class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2">
                <option value="">All</option>
                <option value="Waiting on CA">Waiting on CA</option>
                <option value="Waiting on ISP">Waiting on ISP</option>
            </select>
        </div>
        <div class="flex flex-col space-y-2 col-span-1 xl:col-span-4">
            <label class="text-[#173D6B] truncate text-sm xl:text-md pl-4 font-medium xl:font-bold"
                for="orderSearch">Search for
                order</label>
            <input id="orderSearch" v-model="orderSearch"
                class="border bg-transparent border-[#173D6B] border-opacity-20 rounded-[30px] pl-4 py-2"
                placeholder="REF126" type="text">
        </div>
    </div>
    <div class="w-full justify-center items-center my-3 overflow-auto">
        <table class="mx-auto w-full">
            <thead>
                <tr>
                    <th v-for="(tableHead, index) in ordersProgressHeaders" :key="index"
                        class="p-2.5 text-left text-[#173D6B]">
                        {{ tableHead }}
                    </th>
                </tr>
            </thead>
            <tbody class="">
                <tr v-for="(orderDetails, index) in filteredOrders" :key="index"
                    class="border border-slate-500 border-opacity-20">
                    <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                        {{ orderDetails.isp_ref }}
                    </td>
                    <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                        {{ orderDetails.service_location }}
                    </td>
                    <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                        {{ orderDetails.type }}
                    </td>
                    <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                        {{ orderDetails.customer_details }}
                    </td>
                    <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                        {{ orderDetails.current_phase }}
                    </td>
                    <td class="p-2.5 border-l border-slate-500 border-opacity-20 text-[#173D6B]">
                        {{ orderDetails.status }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    props: {
        ordersProgressHeaders: {
            type: Object,
            required: false
        },
        orderProgressDetails: {
            type: Object,
            required: false
        },
        selected: {
            type: String,
            required: false
        }
    },
    data() {
        return {
            statusFilter: '',
            orderSearch: ''
        }
    },
    computed: {
        filteredOrders() {
            let orders = this.orderProgressDetails;
            if (this.statusFilter) {
                orders = orders.filter(order => order.status.toLowerCase().includes(this.statusFilter.toLowerCase()));
            }
            if (this.orderSearch) {
                orders = orders.filter(
                    order => {
                        return (
                            order.isp_ref && order.isp_ref.toLowerCase().includes(this.orderSearch.toLowerCase()) ||
                            order.customer_details && order.customer_details.toLowerCase().includes(this.orderSearch.toLowerCase()) ||
                            order.service_location && order.service_location.toLowerCase().includes(this.orderSearch.toLowerCase())
                        );
                    });
            }
            return orders;
        }
    }
}
</script>

<!-- <style></style -->