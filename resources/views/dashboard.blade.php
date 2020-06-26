@extends('layouts.app')

@section('title', 'Dashboard')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <main role="main" class="container-fluid">
    <div class="row pt-4">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header-primary d-flex justify-content-between align-items-center">
                    <span>Tickets</span>
                </div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>New</span>
                            <span> 1 </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Open</span>
                            <span> 1 </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Pending</span>
                            <span> 1 </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Other</span>
                            <span> 1 </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Resolved</span>
                            <span> 1 </span>
                        </li>
                    </ul>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <span>Create</span>
                    <span>View All</span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header-primary d-flex justify-content-between align-items-center">
                    <span>My Tickets</span>
                </div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>New</span>
                            <span> 1 </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Open</span>
                            <span> 1 </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Pending</span>
                            <span> 1 </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Other</span>
                            <span> 1 </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Resolved</span>
                            <span> 1 </span>
                        </li>
                    </ul>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <span>Create</span>
                    <span>View All</span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header-primary">Recent Actions</div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>New User Created: Lyle</span>
                            <span></span>
                            <span >6.23.2020 at 05:34 P.M.</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Resolved Ticket: 100935</span>
                            <span >6.22.2020 at 02:30 P.M.</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Customer Response Ticket: 42392
                            <span >6.22.2020 at 12:34 P.M.</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Ticket Closed: 98766
                            <span >6.22.2020 at 10:30 A.M.</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">

                            System Error: 32442
                            <span >6.21.2020 at 09:45 A.M.</span>
                        </li>
                    </ul>
                </div>
                <div class="card-footer d-flex align-items-right">
                    <span>View More</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header-primary">
                    <span>Solution Areas</span>
                </div>
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                        <tr hidden>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Laptops</td>
                            <td>Desktop</td>
                            <td>Phones</td>
                        </tr>
                        <tr>
                            <td>I-Pads</td>
                            <td>Android</td>
                            <td>Chromebooks</td>
                        </tr>
                        <tr>
                            <td>Google Classroom</td>
                            <td>Microsoft Teams</td>
                            <td>I-Ready</td>
                        </tr>
                        <tr>
                            <td>Internet</td>
                            <td>Zoom</td>
                            <td>Email</td>
                        </tr>
                        <tr>
                            <td>Enrollment</td>
                            <td>3D Printing</td>
                            <td>Password/Login</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <span>Create</span>
                    <span>View All</span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header-primary">
                    <span>Metrics</span>
                </div>
                <div class="card-body" style="position: relative; width:100%">
                    {{-- Sizes of Charts cannot be changed through the canvas --}}
                    <canvas id="myChart" style="width: 500; height: 500; display: block;"></canvas>
                    <script>
                        var ctx = document.getElementById('myChart').getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ['Waste Pickup', 'Use Regulation', 'Signage', 'Utility', 'Dilapidated ', 'Junk Vehicle'],
                                datasets: [{
                                    label: '# of Active Tickets',
                                    data: [12, 19, 3, 5, 2, 3],
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgba(255, 99, 132, 1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true,
                                            stepSize: 5,
                                        }
                                    }]
                                }
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection

