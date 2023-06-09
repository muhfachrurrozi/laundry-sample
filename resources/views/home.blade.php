@extends('layouts.apphome')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <!--Stats-->
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                <div class="dash-widget">
                    <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>1072</h3>
                        <span class="widget-title2">Patients <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                <div class="dash-widget">
                    <span class="dash-widget-bg3"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>72</h3>
                        <span class="widget-title3">Attend <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                <div class="dash-widget">
                    <span class="dash-widget-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>618</h3>
                        <span class="widget-title4">Pending <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <!--Upcoming Appointments-->
        <div class="row">
            <div class="col-12 col-md-6 col-lg-8 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title d-inline-block">Upcoming Appointments</h4> <a href="appointments.html" class="btn btn-primary float-right">View all</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="d-none">
                                    <tr>
                                        <th>Patient Name</th>
                                        <th>Doctor Name</th>
                                        <th>Timing</th>
                                        <th class="text-right">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="min-width: 200px;">
                                            <a class="avatar" href="profile.html">B</a>
                                            <h2><a href="profile.html">Bernardo Galaviz <span>New York, USA</span></a></h2>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Appointment With</h5>
                                            <p>Dr. Cristina Groves</p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Timing</h5>
                                            <p>7.00 PM</p>
                                        </td>
                                        <td class="text-right">
                                            <a href="appointments.html" class="btn btn-outline-primary take-btn">Take up</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 200px;">
                                            <a class="avatar" href="profile.html">B</a>
                                            <h2><a href="profile.html">Bernardo Galaviz <span>New York, USA</span></a></h2>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Appointment With</h5>
                                            <p>Dr. Cristina Groves</p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Timing</h5>
                                            <p>7.00 PM</p>
                                        </td>
                                        <td class="text-right">
                                            <a href="appointments.html" class="btn btn-outline-primary take-btn">Take up</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 200px;">
                                            <a class="avatar" href="profile.html">B</a>
                                            <h2><a href="profile.html">Bernardo Galaviz <span>New York, USA</span></a></h2>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Appointment With</h5>
                                            <p>Dr. Cristina Groves</p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Timing</h5>
                                            <p>7.00 PM</p>
                                        </td>
                                        <td class="text-right">
                                            <a href="appointments.html" class="btn btn-outline-primary take-btn">Take up</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 200px;">
                                            <a class="avatar" href="profile.html">B</a>
                                            <h2><a href="profile.html">Bernardo Galaviz <span>New York, USA</span></a></h2>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Appointment With</h5>
                                            <p>Dr. Cristina Groves</p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Timing</h5>
                                            <p>7.00 PM</p>
                                        </td>
                                        <td class="text-right">
                                            <a href="appointments.html" class="btn btn-outline-primary take-btn">Take up</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 200px;">
                                            <a class="avatar" href="profile.html">B</a>
                                            <h2><a href="profile.html">Bernardo Galaviz <span>New York, USA</span></a></h2>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Appointment With</h5>
                                            <p>Dr. Cristina Groves</p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Timing</h5>
                                            <p>7.00 PM</p>
                                        </td>
                                        <td class="text-right">
                                            <a href="appointments.html" class="btn btn-outline-primary take-btn">Take up</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection
