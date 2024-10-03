<template>
<div>
    <Chart type="bar" :data="chartData" :options="chartOptions" />
</div>
</template>

<script>
import Chart from 'primevue/chart';

export default {
    components: {
        Chart,
    },
    props: {
        labels: {
            type: Array,
            required: true,
        },
        datasets: {
            type: Array,
            required: true,
        },
        title: {
            type: String,
            default: '',
        },
    },
    data() {
        return {
            chartData: {
                labels: this.labels,
                datasets: this.datasets,
            },
            chartOptions: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                        position: 'top',
                    },
                    title: {
                        display: false,
                        text: this.title,
                    },
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: false,
                        },
                        ticks: {
                            display: false,
                        }
                    },
                    x: {
                        grid: {
                            display: false,
                        },
                    },
                },
            },
        };
    },
};
</script>

<style scoped>
div {
    height: 350px;
    width: 100%;
}
</style>