<template>
<div class="">
    <h1 class="text-2xl font-bold text-[#173D6B] mb-4">Internet Service Providers</h1>
    <table-layout :headers="tableHeaders" :content="tableContent" />
</div>
</template>

  
<script>
export default {
    data() {
        return {
            tableHeaders: ['ISP Name', 'Admin Full Name', 'Contact', 'Email'],
            tableContent: [
                ['Accelerit', 'Tshepo Maseko', '012 554 9985', 'tshepom@mweb.co.za'],
                ['Afrihost', 'Tshepo Maseko', '012 554 9985', 'tshepom@Afrihost.co.za'],
                ['Axxess', 'Tshepo Maseko', '012 554 9985', 'tshepom@mweb.co.za'],
                ['Bridgenet', 'Tshepo Maseko', '012 554 9985', 'tshepom@mweb.co.za'],
                ['Bulldog', 'Tshepo Maseko', '012 554 9985', 'tshepom@mweb.co.za'],
                ['Cell C', 'Tshepo Maseko', '012 554 9985', 'tshepom@mweb.co.za'],
                ['Coolideas', 'Tshepo Maseko', '012 554 9985', 'tshepom@mweb.co.za'],
                ['CrispFibre', 'Tshepo Maseko', '012 554 9985', 'tshepom@mweb.co.za'],
                ['FibreStream', 'Tshepo Maseko', '012 554 9985', 'tshepom@mweb.co.za'],
                ['Imagine', 'Tshepo Maseko', '012 554 9985', 'tshepom@mweb.co.za'],
                ['Konekt', 'Tshepo Maseko', '012 554 9985', 'tshepom@mweb.co.za'],
                ['LaserNet', 'Tshepo Maseko', '012 554 9985', 'tshepom@mweb.co.za'],
                ['MetroFibre', 'Tshepo Maseko', '012 554 9985', 'tshepom@mweb.co.za'],
                ['MWEB', 'Tshepo Maseko', '012 554 9985', 'tshepom@mweb.co.za'],
                ['Netmetrix', 'Tshepo Maseko', '012 554 9985', 'tshepom@mweb.co.za'],
                ['Octopi', 'Tshepo Maseko', '012 554 9985', 'tshepom@mweb.co.za'],
                ['Oxygn', 'Tshepo Maseko', '012 554 9985', 'tshepom@mweb.co.za'],
                ['PacketSky', 'Tshepo Maseko', '012 554 9985', 'tshepom@mweb.co.za'],
                ['Supersonic', 'Tshepo Maseko', '012 554 9985', 'tshepom@mweb.co.za'],
                ['Tech5', 'Tshepo Maseko', '012 554 9985', 'tshepom@mweb.co.za'],
                ['Userverse', 'Tshepo Maseko', '012 554 9985', 'tshepom@mweb.co.za'],
                ['Vodacom', 'Tshepo Maseko', '012 554 9985', 'tshepom@mweb.co.za'],
                ['WebAfrica', 'Tshepo Maseko', '012 554 9985', 'tshepom@mweb.co.za'],
            ]
        };
    }
};
</script>
