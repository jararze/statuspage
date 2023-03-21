$(function () {
    "use strict";
    initSparkline();
    // getMorris('donut', 'donut_chart');
    getMorris('bar', 'bar_chart');
});


//=======
function initSparkline() {
    $(".sparkline").each(function () {
        var $this = $(this);
        $this.sparkline('html', $this.data());
    });
}

function drawDocSparklines() {
    // Bar + line composite charts
    $('#compositebar').sparkline('html', { type: 'bar', barColor: '#aaf' });
    $('#compositebar').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
        { composite: true, fillColor: false, lineColor: 'red' });

    // Bar charts using inline values
    $('.sparkbar').sparkline('html', { type: 'bar' });

    $('.barformat').sparkline([1, 3, 5, 3, 8], {
        type: 'bar',
        tooltipFormat: '{{value:levels}} - {{value}}',
        tooltipValueLookups: {
            levels: $.range_map({ ':2': 'Low', '3:6': 'Medium', '7:': 'High' })
        }
    });
}

function getMorris(type, element) {
    if (type === 'bar') {
        Morris.Bar({
            element: element,
            data: [{
                x: 'Mon',
                y: 7,
                z: 3
            }, {
                x: 'Tue',
                y: 6,
                z: 3
            }, {
                x: 'Wed',
                y: 6,
                z: 3
            }, {
                x: 'Thu',
                y: 8,
                z: 2
            }, {
                x: 'Fri',
                y: 10,
                z: 4
            }, {
                x: 'Sat',
                y: 11,
                z: 2
            }, {
                x: 'Sun',
                y: 0,
                z: 1
            }],

            xkey: 'x',
            ykeys: ['y', 'z'],
            labels: ['Night', 'Day'],
            barColors: ['#40b988', '#f67a82'],
        });
    } else if (type === 'donut') {
        Morris.Donut({
            element: element,
            data: [{
                label: 'Night',
                value: 70
            }, {
                label: 'Day',
                value: 30
            }],
            colors: ['#f67a82', '#40b988'],
            formatter: function (y) {
                return y + '%'
            }
        });
    }
}
