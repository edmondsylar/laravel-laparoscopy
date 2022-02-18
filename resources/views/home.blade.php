@extends('layouts.app')

@section('content')

<div class="row">
    <!--[ daily sales section ] start-->
    <div class="col-md-6 col-xl-4">
        <div class="card daily-sales">
            <div class="card-block">
                <h6 class="mb-4">Average Score</h6>
                <div class="row d-flex align-items-center">
                    
                    <div class="col-9">
                        <h3 class="f-w-300 d-flex align-items-center m-b-0">
                        <i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i> 0 </h3>
                    </div>

                </div>
                <div class="progress m-t-30" style="height: 7px;">
                    <div class="progress-bar progress-c-theme" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!--[ daily sales section ] end-->
    <!--[ Monthly  sales section ] starts-->
    <div class="col-md-6 col-xl-4">
        <div class="card Monthly-sales">
            <div class="card-block">
                <h6 class="mb-4">Most Recent Score</h6>
                <div class="row d-flex align-items-center">
                    <div class="col-9">
                        <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i> 0 </h3>
                    </div>
                </div>
                <div class="progress m-t-30" style="height: 7px;">
                    <div class="progress-bar progress-c-theme2" role="progressbar" style="width: 100%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!--[ Monthly  sales section ] end-->
    <!--[ year  sales section ] starts-->
    <div class="col-md-12 col-xl-4">
        <div class="card yearly-sales">
            <div class="card-block">
                <h6 class="mb-4">grading Submissions</h6>
                <div class="row d-flex align-items-center">

                    <div class="col-9">
                        <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i> 0 </h3>
                    </div>

                </div>
                <div class="progress m-t-30" style="height: 7px;">
                    <div class="progress-bar progress-c-theme" role="progressbar" style="width: 100%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!--[ year  sales section ] end-->
    <!--[ Recent Users ] start-->
    <div class="col-xl-8 col-md-6">
        <div class="card Recent-Users">
            <div class="card-header">
                <h5>Latest Modules</h5>
            </div>
            <div class="card-block px-0 py-3">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tbody>

                            @foreach ($modules as $module)
                                <tr class="unread">
                                    <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td>
                                    <td>
                                        <h6 class="mb-1">{{ $module->name }}</h6>
                                        {{-- <p class="m-0">Lorem Ipsum is simply…</p> --}}
                                    </td>
                                    <td>
                                        <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i>Created: {{ $module->created_at }}</h6>
                                    </td>
                                    <td><a href="#!" class="label theme-bg2 text-white f-12">Use Module</a><a href="#!" class="label theme-bg text-white f-12">Deactivate</a></td>
                                </tr>
                            @endforeach                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--[ Recent Users ] end-->

    <!-- [ statistics year chart ] start -->
    <div class="col-xl-4 col-md-6">
        <div class="card card-event">
            <div class="card-block">
                <div class="row align-items-center justify-content-center">
                    <div class="col">
                        <h5 class="m-0">Session Attempted</h5>
                    </div>
                    <div class="col-auto">
                        {{-- <label class="label theme-bg2 text-white f-14 f-w-400 float-right">34%</label> --}}
                    </div>
                </div>
                <h2 class="mt-3 f-w-300">{{ $no_sessions }}<sub class="text-muted f-14"> Sessions</sub></h2>
                {{-- <h6 class="text-muted mt-4 mb-0">You can participate in event </h6>
                <i class="fab fa-angellist text-c-purple f-50"></i> --}}
            </div>
        </div>
        <div class="card">
            <div class="card-block border-bottom">
                <div class="row d-flex align-items-center">
                    <div class="col-auto">
                        <i class="feather icon-zap f-30 text-c-green"></i>
                    </div>
                    <div class="col">
                        <h3 class="f-w-300">0</h3>
                        <span class="d-block text-uppercase">TIME SPEND PRACTICING</span>
                    </div>
                </div>
            </div>
            <div class="card-block">
                <div class="row d-flex align-items-center">
                    <div class="col-auto">
                        <i class="feather icon-map-pin f-30 text-c-blue"></i>
                    </div>
                    <div class="col">
                        <h3 class="f-w-300">0</h3>
                        <span class="d-block text-uppercase">MODULES COMPLETED</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--[social-media section] end-->
    <!-- [ rating list ] starts-->
    <div class="col-xl-4 col-md-6">
        <div class="card user-list">
            <div class="card-header">
                <h5>Module Rating By Usage</h5>
            </div>
            <div class="card-block">
                <div class="row align-items-center justify-content-center m-b-20">
                    <div class="col-6">
                        <h2 class="f-w-300 d-flex align-items-center float-left m-0">4.7 <i class="fas fa-star f-10 m-l-10 text-c-yellow"></i></h2>
                    </div>
                    <div class="col-6">
                        <h6 class="d-flex  align-items-center float-right m-0">0.4 <i class="fas fa-caret-up text-c-green f-22 m-l-10"></i></h6>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <h6 class="align-items-center float-left"><i class="fas fa-star f-10 m-r-10 text-c-yellow"></i>5</h6>
                        <h6 class="align-items-center float-right">{{ module_rating_by_usage() }}</h6>
                        <div class="progress m-t-30 m-b-20" style="height: 6px;">
                            <div class="progress-bar progress-c-theme" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- [ rating list ] end-->
    <div class="col-xl-8 col-md-12 m-b-30">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Top Users</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link active show" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">This Week</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">All</a>
            </li> --}}
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th> <b> User Name</b></th>
                            <th><b>Module</b></th>
                            <th><b>Score</b></th>
                            <th><b>Action</b></th>
                            <th class="text-right"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="assets/images/user/avatar-2.jpg" alt="activity-user">Albert Andersen</h6>
                            </td>
                            <td>
                                <h6 class="m-0">Jumps over the lazy</h6>
                            </td>
                            <td>
                                <h6 class="m-0">2:37 PM</h6>
                            </td>
                            <td>
                                <h6 class="m-0 text-c-red">Missed</h6>
                            </td>
                            <td class="text-right"><i class="fas fa-circle text-c-red f-10"></i></td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="m-0"><img class="rounded-circle m-r-10" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user">Ida Jorgensen</h6>
                            </td>
                            <td>
                                <h6 class="m-0">The quick brown fox</h6>
                            </td>
                            <td>
                                <h6 class="m-0">3:28 PM</h6>
                            </td>
                            <td>
                                <h6 class="m-0 text-c-green">Done</h6>
                            </td>
                            <td class="text-right"><i class="fas fa-circle text-c-green f-10"></i></td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user">Ida Jorgensen</h6>
                            </td>
                            <td>
                                <h6 class="m-0">The quick brown fox</h6>
                            </td>
                            <td>
                                <h6 class="m-0">4:28 PM</h6>
                            </td>
                            <td>
                                <h6 class="m-0 text-c-green">Done</h6>
                            </td>
                            <td class="text-right"><i class="fas fa-circle text-c-green f-10"></i></td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="assets/images/user/avatar-3.jpg" alt="activity-user">Silje Larsen</h6>
                            </td>
                            <td>
                                <h6 class="m-0">Dog the quick brown</h6>
                            </td>
                            <td>
                                <h6 class="m-0">10:23 AM</h6>
                            </td>
                            <td>
                                <h6 class="m-0 text-c-purple">Delayed</h6>
                            </td>
                            <td class="text-right"><i class="fas fa-circle text-c-purple f-10"></i></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            
        </div>
    </div>

</div>

@endsection
