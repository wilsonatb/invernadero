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
                    $ano = $promedio->ano;
                    echo "'$originalDate/$ano',";
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
                    $ano = $promedio->ano;
                    echo "'$originalDate/$ano',";
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
            categories: [
                <?php

                foreach ($this->promedios_mes as $promedio) {
                    $originalDate = $promedio->dia;
                    $ano = $promedio->ano;
                    echo "'$originalDate/$ano',";
                }

                ?>
            ]
        },

        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        series: [{
            name: 'Humedad Suelo(%)',
            data: [
                <?php
                foreach ($this->promedios_mes as $promedio) {
                    echo  $promedio->promedioHum . ',';
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
</script>