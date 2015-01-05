$(function () {
        $('#container').highcharts({
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Etudes'
            },
            xAxis: {
                categories: [' ']
            },
            yAxis: {
                min: 2011,
                title: {
                    text: ''
                }
            },
            legend: {
                reversed: true
            },
            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },
                series: [{
                name: 'EXIA',
                data: [1]
            }, {
                name: 'BAC S',
                data: [2013]
            }]
        });
    $('#container1').highcharts({
        chart: {
//            plotBackgroundColor: null,
//            plotBorderWidth: 1,//null,
//            plotShadow: false
        },
        title: {
            text: ''
        },
        tooltip: {
    	    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Valeur',
            data: [
                ['Réseau',   10.0],
                ['Système',       45.0],
                ['Développement',       45.0]
            ]
        }]
    });
});






    

