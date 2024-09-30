@extends('Layouts.App')
@section('content')


<section>
    <is-providers />
    <div class="overflow-x-auto">
        <table class="min-w-full table-auto border-collapse text-left text-sm">
            <!-- Table headers -->
            <thead class="bg-gray-200 text-gray-600 uppercase text-xs">
                <tr>
                    {{-- <th v-for="(header, index) in headers" :key="index"
                        class="px-4 py-3 sm:px-6 sm:py-4 border-b border-gray-300 whitespace-nowrap">
                        {{ header }}
                    </th> --}}
                    <th class="px-4 py-3 sm:px-6 sm:py-4 border-b border-gray-300 whitespace-nowrap">ISP Name</th>
                    <th class="px-4 py-3 sm:px-6 sm:py-4 border-b border-gray-300 whitespace-nowrap">Coverage Area</th>
                    <th class="px-4 py-3 sm:px-6 sm:py-4 border-b border-gray-300 whitespace-nowrap">Customer Rating
                    </th>
                </tr>
            </thead>
            <!-- Table content -->
            <tbody class="text-gray-700">
                {{-- <tr v-for="(row, rowIndex) in content" :key="rowIndex" class="hover:bg-gray-100 transition-colors">
                    <td v-for="(cell, cellIndex) in row" :key="cellIndex"
                        class="px-4 py-3 sm:px-6 sm:py-4 border-b border-gray-300 whitespace-nowrap">
                        {{ cell }}
                    </td>
                </tr> --}}
                <tr class="hover:bg-gray-100 transition-colors">
                    <td class="px-4 py-3 sm:px-6 sm:py-4 border-b border-gray-300 whitespace-nowrap"></td>
                    <td class="px-4 py-3 sm:px-6 sm:py-4 border-b border-gray-300 whitespace-nowrap"></td>
                    <td class="px-4 py-3 sm:px-6 sm:py-4 border-b border-gray-300 whitespace-nowrap"></td>
                </tr>
            </tbody>
        </table>
</section>
@endsection