<template>
    <div>
        <LineChart :data="chartData" :options="chartOptions" />
    </div>
</template>


<script>
import {
    Line
} from "vue-chartjs";
import {
    Chart as ChartJS,
    Title,
    Tooltip,
    Legend,
    LineElement,
    PointElement,
    CategoryScale,
    LinearScale,
} from "chart.js";

// Register required components
ChartJS.register(Title, Tooltip, Legend, LineElement, PointElement, CategoryScale, LinearScale);

export default {
    name: "LineChartExample",
    components: {
        LineChart: Line,
    },
    data() {
        return {
            chartData: {
                labels: ['NOV', 'DEC', 'JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG'],
                datasets: [{
                    label: "Services Ordered",
                    borderColor: "#173D6B",
                    borderWidth: 1.5,
                    data: [8, 19, 3, 45, 47, 25, 55, 23, 36, 2],
                    pointBackgroundColor: "#00509d",
                    pointBorderColor: "#00509d",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "#00509d",
                    pointRadius: 5,
                    pointHoverRadius: 6,
                    tension: 0,
                }],
            },
            chartOptions: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false, // Hide the legend
                    },
                    tooltip: {
                        enabled: true,
                        callbacks: {
                            label: function (context) {
                                return `Services: ${context.raw}`;
                            },
                        },
                    },
                },
                scales: {
                    x: {
                        grid: {
                            display: false,
                        },
                    },
                    y: {
                        beginAtZero: true,
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
