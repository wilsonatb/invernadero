


<script>
    
    var chartTemp; // global
    var chartHumed;
    var chartAire;

    

    function requestData() {
        $.ajax({
            //Cambiar a type: POST si necesario
            type: "POST",
            // Formato de datos que se espera en la respuesta
            dataType: "json",
            // URL a la que se enviará la solicitud Ajax
            url: '<?php echo constant('URL'); ?>arduino/datosGraficarTemp',
            success: function(point) {
                var series = chartTemp.series[0],
                    shift = series.data.length > 10; // shift if the series is   
                                                        // longer than 20  
                // add the point
                chartTemp.series[0].addPoint(point, true, shift);
                
                // call it again after one second
                setTimeout(requestData, 3000);    
            },
            cache: false
        });
    }
    
    function requestData2() {
            $.ajax({
                //Cambiar a type: POST si necesario
                type: "POST",
                // Formato de datos que se espera en la respuesta
                dataType: "json",
                // URL a la que se enviará la solicitud Ajax
                url: '<?php echo constant('URL'); ?>arduino/datosGraficarHumd',
                success: function(point) {
                    var series = chartHumed.series[0],
                        shift = series.data.length > 10; // shift if the series is   
                                                            // longer than 20  
                    // add the point
                    chartHumed.series[0].addPoint(eval(point) , true, shift);
                    
                    // call it again after one second
                    setTimeout(requestData2, 3000);    
                },
                cache: false
            });
        }

        function requestData3() {
            $.ajax({
                //Cambiar a type: POST si necesario
                type: "POST",
                // Formato de datos que se espera en la respuesta
                dataType: "json",
                // URL a la que se enviará la solicitud Ajax
                url: '<?php echo constant('URL'); ?>arduino/datosGraficarAire',
                success: function(point) {
                    var series = chartAire.series[0],
                        shift = series.data.length > 10; // shift if the series is   
                                                            // longer than 20  
                    // add the point
                    chartAire.series[0].addPoint(eval(point) , true, shift);
                    
                    // call it again after one second
                    setTimeout(requestData3, 3000);    
                },
                cache: false
            });
        }

    document.addEventListener('DOMContentLoaded', function() {
        chartTemp = Highcharts.chart('container1', {
            chart: {
                type: 'spline',
                events: {
                    load: requestData
                }
            },
            title: {
                text: 'Temperatura Actual'
            },
            xAxis: {
                type: 'datetime',
                tickPixelInterval: 150,
                maxZoom: 20 * 1000
            },
            yAxis: {
                minPadding: 0.2,
                maxPadding: 0.2,
                title: {
                    text: 'Magnitud',
                    margin: 20
                }
            },
            series: [{
                name: 'Temperatura',
                data: []
            }]
        })   
        
        chartHumed = new Highcharts.chart('container2', {
                chart: {
                    type: 'spline',
                    events: {
                        load: function() {
                        chartHumed = this; // `this` is the reference to the chart
                        requestData2();
                        }   
                    }
                },
                title: {
                    text: 'HR Actual'
                },
                xAxis: {
                    type: 'datetime',
                    tickPixelInterval: 150,
                    maxZoom: 20 * 1000
                },
                yAxis: {
                    minPadding: 0.2,
                    maxPadding: 0.2,
                    title: {
                        text: 'Magnitud',
                        margin: 20
                    }
                },
                series: [{
                    name: 'HR(%)',
                    data: []
                }]
            })   

            chartAire = new Highcharts.chart('container3', {
                chart: {
                    type: 'spline',
                    events: {
                        load: function() {
                        chartAire = this; // `this` is the reference to the chart
                        requestData3();
                        }   
                    }
                },
                title: {
                    text: 'Grafica tiempo real 3'
                },
                xAxis: {
                    type: 'datetime',
                    tickPixelInterval: 150,
                    maxZoom: 20 * 1000
                },
                yAxis: {
                    minPadding: 0.2,
                    maxPadding: 0.2,
                    title: {
                        text: 'Magnitud',
                        margin: 20
                    }
                },
                series: [{
                    name: 'Valores aleatorios',
                    data: []
                }]
            })
    })
	    
    </script>   


    