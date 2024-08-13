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

document.addEventListener("DOMContentLoaded", function (event) {

    const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId)

        // Validate that all variables exist
        if (toggle && nav && bodypd && headerpd) {
            toggle.addEventListener('click', () => {
                // show navbar
                nav.classList.toggle('show')
                // change icon
                toggle.classList.toggle('bx-x')
                // add padding to body
                bodypd.classList.toggle('body-pd')
                // add padding to header
                headerpd.classList.toggle('body-pd')
            })
        }
    }

    showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')
  
    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')

    function colorLink() {
        if (linkColor) {
            linkColor.forEach(l => l.classList.remove('active'))
            this.classList.add('active')
        }
    }
    linkColor.forEach(l => l.addEventListener('click', colorLink))

    // Your code to run since DOM is loaded and ready
});