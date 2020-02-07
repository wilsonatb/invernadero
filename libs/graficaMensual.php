<script>
    Highcharts.chart('container1', {

        title: {
            text: 'Tempratura ultimos 7 meses'
        },

        subtitle: {
            text: ''
        },

        yAxis: {
            title: {
                text: 'Temperatura ºC'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        xAxis: {
            title: {
                text: 'Días'
            },
            categories: [
                <?php

                foreach ($this->promedios_mes as $promedio) {
                    $originalDate = $promedio->dia;
                    echo "'$originalDate',";
                }

                ?>
            ]
        },

        series: [{
            name: 'Temp(ºC)',
            data: [
                <?php
                foreach ($this->promedios_mes as $promedio) {
                    echo  $promedio->promedioTemp . ',';
                }

                ?>
            ]
        }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }

    });

    Highcharts.chart('container2', {

        title: {
            text: 'HR ultimos 7 meses'
        },

        subtitle: {
            text: ''
        },

        yAxis: {
            title: {
                text: '%Humedad Relativa'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        xAxis: {
            title: {
                text: 'Días'
            },
            categories: [
                <?php

                foreach ($this->promedios_mes as $promedio) {
                    $originalDate = $promedio->dia;
                    echo "'$originalDate',";
                }

                ?>
            ]
        },

        series: [{
            name: 'HR(%)',
            data: [
                <?php
                foreach ($this->promedios_mes as $promedio) {
                    echo  $promedio->promedioHR . ',';
                }

                ?>
            ]
        }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }

    });

    Highcharts.chart('container3', {

        title: {
            text: 'Humedad ultimos 7 meses'
        },

        subtitle: {
            text: ''
        },

        yAxis: {
            title: {
                text: '%Humedad Suelo'
            }
        },

        xAxis: {
            title: {
                text: 'Días'
            },
            categories: [1, 2, 3, 4, 5, 6, 7, 8,9,10,11,12]
        },

        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        series: [{
            name: 'Humedad Suelo(%)',
            data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175, 97031, 119931, 137133, 154175]
        }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }

    });
</script>