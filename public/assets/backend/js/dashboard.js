var myDoughnut;
$(document).ready(function () {
    var ctx = document.getElementById('myChart');
    function createChart (data) {
        if (myDoughnut) {
            myDoughnut.destroy();
        }
        myDoughnut = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Total Books', 'My Books'],
                datasets: [{
                    label: 'Books Borrowed and My books',
                    data: data,
                    backgroundColor: [
                        'rgb(232, 141, 103)',
                        'rgb(0, 92, 120)',
                    ],
                    hoverOffset: 4,
                }]
            },
            // options: {
            //     scales: {
            //         y: {
            //             beginAtZero: true
            //         }
            //     }
            // }
        });
    }

    $.ajax({
        type:'POST',
        headers: {
            'X-CSRF-TOKEN': _token
        },
        url: "dashboard/chart",
        success: function (data) {
            createChart(data);
        }
    });
});