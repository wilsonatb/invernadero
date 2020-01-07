

<script>

    Highcharts.chart('container1', {

    title: {
        text: 'Tempratura ultimos 7 días'
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
           
                foreach ($this->promtemp as $temp) 
                {
                    $originalDate = $temp->dia;
                    $newDate = date("d/m/Y", strtotime($originalDate));
                    echo "'$newDate',";
                }
            
            ?>
        ]
    },

    series: [{
        name: 'Temp(ºC)',
        data: [
            <?php
            foreach ($this->promtemp as $temp) 
            {
                echo  $temp->promedio . ',';
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
    text: 'HR ultimos 7 días'
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
        categories: [1.1, 2, 3, 4, 5, 6, 7, 8]
    },

series: [{
    name: 'HR(%)',
    data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
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
    text: 'Humedad ultimos 7 días'
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
        categories: [1, 2, 3, 4, 5, 6, 7, 8]
    },

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

series: [{
    name: 'Humedad Suelo(%)',
    data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
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
		