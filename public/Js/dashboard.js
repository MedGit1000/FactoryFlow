document.addEventListener('DOMContentLoaded', function() {
    // Chart.js Configuration
    Chart.defaults.global.defaultFontFamily = 'Nunito';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Function to initialize all charts
    function initializeCharts() {
        // Main Chart
        const mainCtx = document.getElementById('chartBig1');
        if (mainCtx) {
            new Chart(mainCtx, {
                type: 'line',
                data: {
                    labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"],
                    datasets: [{
                        label: "Orders",
                        fill: true,
                        backgroundColor: "rgba(29,140,248,0.2)",
                        borderColor: "#1f8ef1",
                        borderWidth: 2,
                        borderDash: [],
                        borderDashOffset: 0.0,
                        pointBackgroundColor: "#1f8ef1",
                        pointBorderColor: "rgba(255,255,255,0)",
                        pointHoverBackgroundColor: "#1f8ef1",
                        pointBorderWidth: 20,
                        pointHoverRadius: 4,
                        pointHoverBorderWidth: 15,
                        pointRadius: 4,
                        data: window.chartData || Array(12).fill(0)
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    tooltips: {
                        backgroundColor: '#f5f5f5',
                        titleFontColor: '#333',
                        bodyFontColor: '#666',
                        bodySpacing: 4,
                        xPadding: 12,
                        mode: "nearest",
                        intersect: 0,
                        position: "nearest"
                    },
                    scales: {
                        yAxes: [{
                            barPercentage: 1.6,
                            gridLines: {
                                drawBorder: false,
                                color: 'rgba(29,140,248,0.0)',
                                zeroLineColor: "transparent",
                            },
                            ticks: {
                                padding: 20,
                                fontColor: "#9a9a9a"
                            }
                        }],
                        xAxes: [{
                            barPercentage: 1.6,
                            gridLines: {
                                drawBorder: false,
                                color: 'rgba(29,140,248,0.1)',
                                zeroLineColor: "transparent",
                            },
                            ticks: {
                                padding: 20,
                                fontColor: "#9a9a9a"
                            }
                        }]
                    }
                }
            });
        }

        // Stock Status Chart
        const stockCtx = document.getElementById('chartLineGreen');
        if (stockCtx) {
            new Chart(stockCtx, {
                type: 'doughnut',
                data: {
                    labels: ["Low Stock", "Normal", "High Stock"],
                    datasets: [{
                        data: [
                            window.stockStatus?.low || 0,
                            window.stockStatus?.normal || 0,
                            window.stockStatus?.high || 0
                        ],
                        backgroundColor: ['#ff6384', '#36a2eb', '#4bc0c0'],
                        hoverBackgroundColor: ['#ff6384', '#36a2eb', '#4bc0c0']
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutoutPercentage: 70,
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            });
        }
    }

    // Initialize charts
    initializeCharts();

    // Real-time updates
    function updateDashboardData() {
        fetch('/api/dashboard-data')
            .then(response => response.json())
            .then(data => {
                // Update counters
                document.getElementById('totalProducts').textContent = data.totalProducts;
                document.getElementById('pendingOrders').textContent = data.pendingOrders;
                document.getElementById('completedOrders').textContent = data.completedOrders;

                // Update recent orders table
                updateRecentOrders(data.orders);
            })
            .catch(error => console.error('Error updating dashboard:', error));
    }

    // Update recent orders table
    function updateRecentOrders(orders) {
        const tbody = document.getElementById('recentOrdersBody');
        if (!tbody) return;

        tbody.innerHTML = orders.map(order => `
            <tr>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="">
                            <span class="form-check-sign">
                                <span class="check"></span>
                            </span>
                        </label>
                    </div>
                </td>
                <td>
                    <p class="title">Order #${order.id}</p>
                    <p class="text-muted">${order.customer_name} - ${order.created_at}</p>
                </td>
                <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="View Order" class="btn btn-link">
                        <i class="tim-icons icon-zoom-split"></i>
                    </button>
                </td>
            </tr>
        `).join('');
    }

    // Update dashboard data every minute
    setInterval(updateDashboardData, 60000);
});