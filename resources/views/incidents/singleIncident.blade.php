@push('styles')
    <link rel="stylesheet" href="{{ asset('/assets/css/timer.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('/assets/plugins/multi-select/css/multi-select.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/plugins/bootstrap-select/css/bootstrap-select.css') }}">
@endpush
@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.js"></script>
    <script src="{{ asset('/assets/plugins/multi-select/js/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('/assets/js/timer.js') }}"></script>
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
                        <li class="breadcrumb-item active">Incident</li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-9">
                    <div id="alertt">

                    </div>
                    <div class="card">
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <strong>Incident # {{ $incident->id }}</strong>
                                    <h5 style="margin:10px 0 20px 0;">{{ $incident->title }}</h5>
                                    <button type="button" style="margin: 15px 10px 0 0; align-items: center" class="btn  btn-raised bg-teal waves-effect">War Room Opened?</button>
                                    <button type="button" style="margin: 15px 10px 0 0; align-items: center" class="btn  btn-raised bg-lime waves-effect">Acknowledge</button>
                                    <button type="button" style="margin: 15px 10px 0 0; align-items: center" class="btn  btn-raised bg-teal waves-effect">Affects SLO</button>
                                    <button type="button" style="margin: 15px 10px 0 0; align-items: center" class="btn  btn-raised bg-teal waves-effect">Update StatusPage / Timeline</button>
                                    <button type="button" style="margin: 15px 10px 0 0; align-items: center" class="btn  btn-raised bg-green waves-effect">Resolved</button>
                                </div>
                                <div class="col-lg-4">

                                    <p><strong><a href="#" class="dataTypePromt" ddddata-type="prompt" data-toggle="modal" data-target="#defaultModal"><i class="zmdi zmdi-edit"></i></a> Status: </strong> <span class="statusPrincipal">{{ $incident->status }}</span><span id="route"></span></p>
                                    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="defaultModalLabel">Change Incident Status</h4>
                                                </div>
                                                <form method="POST" action="{{ route('updateStatus') }}" id="updateStatusForm">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <p>Here you can change the incident - {{ $incident->title }} </p>
                                                        <p>Current status: <strong>{{ $incident->status }}</strong></p>
                                                    </div>
                                                    <div class="col-lg-8 col-md-12">
                                                        <p> <b>Impacted Service</b> </p>
                                                        <input type="hidden" id="CSRF" value="{{csrf_token()}}">
                                                        <input type="hidden" id="idIncident" value="{{ $incident->id }}" name="idIncident">
                                                        <select class="form-control show-tick" name="updateStatus" id="newStatus">
                                                            <option value="Investigating">Investigating</option>
                                                            <option value="Identified">Identified</option>
                                                            <option value="Monitoring">Monitoring</option>
                                                            <option value="Resolved">Resolved</option>
                                                        </select>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" id="ennvv" class="btn btn-link waves-effect">SAVE CHANGES</button>
                                                        <button type="button" id="closeModal" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <p><strong>Duration:</strong> {{ $timeSince }}</p>
                                    <p><strong>Time elapsed:</strong></p>
                                    <div class="time">
                                        <div class="time-colon">
                                            <div class="time-text">
                                                <span class="num hour_num">00</span>
                                                <span class="text">Hours</span>
                                            </div>
                                            <span class="colon">:</span>
                                        </div>
                                        <div class="time-colon">
                                            <div class="time-text">
                                                <span class="num min_num">00</span>
                                                <span class="text">Minutes</span>
                                            </div>
                                            <span class="colon">:</span>
                                        </div>
                                        <div class="time-colon">
                                            <div class="time-text">
                                                <span class="num sec_num">00</span>
                                                <span class="text">Seconds</span>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="datete"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="body">
                            <h5>Details</h5>
{{--                            <p><strong><i class="zmdi zmdi-edit"></i> Created by:</strong> {{$userName}}</p>--}}
{{--                            <p><strong><i class="zmdi zmdi-alert-triangle"></i> Alert source:</strong> MDA</p>--}}
{{--                            <p><strong><i class="zmdi zmdi-input-composite"></i> Affected Service:</strong> SAP</p>--}}
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <tbody>
                                        <tr>
                                            <td style="padding: 0.5rem 0; border-bottom: 1px solid #dee2e6"><strong><i class="zmdi zmdi-edit"></i> Created by:</strong></td>
                                            <td style="padding: 0.5rem 0; border-bottom: 1px solid #dee2e6">
                                                {{$userName}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0.5rem 0; border-bottom: 1px solid #dee2e6"><strong><i class="zmdi zmdi-alert-triangle"></i> Alert source:</strong></td>
                                            <td style="padding: 0.5rem 0; border-bottom: 1px solid #dee2e6">
                                                MDA
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0.5rem 0; border-bottom: 1px solid #dee2e6"><strong><i class="zmdi zmdi-input-composite"></i> Affected Service:</strong></td>
                                            <td style="padding: 0.5rem 0; border-bottom: 1px solid #dee2e6">
                                                SAP
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="body">
                            <h5>Responsiveness</h5>
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <tbody>
                                    <tr>
                                        <td style="padding: 0.5rem 0; border-bottom: 1px solid #dee2e6"><strong><i class="zmdi zmdi-watch"></i> Created:</strong></td>
                                        <td style="padding: 0.5rem 0; border-bottom: 1px solid #dee2e6">
                                            {{ $timeSince }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0.5rem 0; border-bottom: 1px solid #dee2e6"><strong><i class="zmdi zmdi-watch"></i> TTA :</strong></td>
                                        <td style="padding: 0.5rem 0; border-bottom: 1px solid #dee2e6">
                                            MDA
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0.5rem 0; border-bottom: 1px solid #dee2e6"><strong><i class="zmdi zmdi-watch"></i> Elapsed time:</strong></td>
                                        <td style="padding: 0.5rem 0; border-bottom: 1px solid #dee2e6">
                                            {{ $timeSince2 }}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="body">
                            <h5>Activity Timeline</h5>
                            <div class="table-responsive">

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
</x-app-layout>
