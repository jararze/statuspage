@push('styles')
    <link rel="stylesheet" href="{{ asset('/assets/css/inbox.css') }}">
@endpush
<x-app-layout>
        <section class="content inbox">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Incident
                            <small class="text-muted">Welcome to RedAlert Application</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="/dashboard"><i class="zmdi zmdi-home"></i> RedAlert</a>
                            </li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Incident</a></li>
                            <li class="breadcrumb-item active">Create new incident</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card widget_2">
                <ul class="row clearfix list-unstyled m-b-0">
                    <li class="col-lg-3 col-md-6 col-sm-12">
                        <div class="body">
                            <div class="row">
                                <div class="col-7">
                                    <h5 class="m-t-0">All open incidents</h5>
                                    <small class="text-small">4% higher than last month</small>
                                </div>
                                <div class="col-5 text-right">
                                    <h2 class="">{{$countIncidentsOpened}}</h2>
                                    <small class="info">of {{$countIncidentsAllTime}}</small>
                                </div>
                                <div class="col-12">
                                    <div class="progress m-t-20">
                                        <div class="progress-bar l-green" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-6 col-sm-12">
                        <div class="body">
                            <div class="row">
                                <div class="col-7">
                                    <h5 class="m-t-0">Incidents with War Room</h5>
                                    <small class="text-small">6% higher than last month</small>
                                </div>
                                <div class="col-5 text-right">
                                    <h2 class="">12%</h2>
                                    <small class="info">of 1Tb</small>
                                </div>
                                <div class="col-12">
                                    <div class="progress m-t-20">
                                        <div class="progress-bar l-blush" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-6 col-sm-12">
                        <div class="body">
                            <div class="row">
                                <div class="col-7">
                                    <h5 class="m-t-0">Active comunnication</h5>
                                    <small class="text-small">Total Registered email</small>
                                </div>
                                <div class="col-5 text-right">
                                    <h2 class="">39</h2>
                                    <small class="info">of 100</small>
                                </div>
                                <div class="col-12">
                                    <div class="progress m-t-20">
                                        <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100" style="width: 39%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-6 col-sm-12">
                        <div class="body">
                            <div class="row">
                                <div class="col-7">
                                    <h5 class="m-t-0">SMS/Mails send</h5>
                                    <small class="text-small">Total registered Domain</small>
                                </div>
                                <div class="col-5 text-right">
                                    <h2 class="">8</h2>
                                    <small class="info">of 10</small>
                                </div>
                                <div class="col-12">
                                    <div class="progress m-t-20">
                                        <div class="progress-bar l-blue" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card action_bar m-t-15">
                            <div class="row">
                                <div class="col-lg-1 col-md-2 col-3">
                                    <div class="checkbox m-t-20 m-l-15">
                                        <input type="checkbox" id="basic_checkbox_0">
                                        <label for="basic_checkbox_0"></label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-3 hidden-sm-down">
                                    <div class="input-group m-t-10"> <span class="input-group-addon"> <i class="zmdi zmdi-search"></i></span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Search...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-9 text-right d-flex justify-content-end align-items-center">
                                    <div class="btn-group hidden-sm-down" role="group">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle text-muted" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-folder"></i> <span class="caret"></span> </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);">Important</a></li>
                                                <li><a href="javascript:void(0);">Social</a></li>
                                                <li><a href="javascript:void(0);">Bank Statements</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="javascript:void(0);">Create a folder</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle text-muted" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-label"></i> <span class="caret"></span> </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);">Family</a></li>
                                                <li><a href="javascript:void(0);">Work</a></li>
                                                <li><a href="javascript:void(0);">Google</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="javascript:void(0);">Create a Label</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle text-muted" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> <span class="caret"></span> </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);">Unread</a></li>
                                                <li><a href="javascript:void(0);">Unimportant</a></li>
                                                <li><a href="javascript:void(0);">Add star</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="javascript:void(0);">Mute</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-default waves-effect col-green"><i class="zmdi zmdi-archive"></i></button>
                                        <button type="button" class="btn btn-default waves-effect col-amber"><i class="zmdi zmdi-alert-circle"></i></button>
                                        <button type="button" class="btn btn-default waves-effect col-red"><i class="zmdi zmdi-delete"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="mail_list list-group list-unstyled">
                            @foreach ($incidents as $incident)
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="pull-left">
                                        <div class="controls">
                                            <div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_{{$incident->id}}">
                                                <label for="basic_checkbox_{{$incident->id}}"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-heading">
                                            <a href="/incidents/singleIncident/{{$incident->id}}" class="m-r-10">{{$incident->title}}</a>
                                            <span class="badge badge-warning bg-red">Sev 1 - Critical</span>
                                            <small class="float-right text-muted"><time class="hidden-sm-down" datetime="2017">{{$incident->incident_reported_at->format('H:i:s')}}</time><i class="zmdi zmdi-alarm"></i> </small>
                                        </div>
                                        <p class="msg">{{$incident->description}}</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
{{--                <div class="row">--}}
{{--                    <div class="col-lg-12">--}}
{{--                        <ul class="pagination m-t-20">--}}
{{--                            <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>--}}
{{--                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">2</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </section>

</x-app-layout>
