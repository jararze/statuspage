@push('styles')
    <link rel="stylesheet" href="{{ asset('/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/plugins/morrisjs/morris.css') }}">
@endpush
@push('script')
    <script src="{{ asset('/assets/bundles/jvectormap.bundle.js') }}"></script>
    <script src="{{ asset('/assets/bundles/morrisscripts.bundle.js') }}"></script>
    <script src="{{ asset('/assets/bundles/sparkline.bundle.js') }}"></script>
    <script src="{{ asset('/assets/bundles/knob.bundle.js') }}"></script>
    <script src="{{ asset('/assets/js/pages/index.js') }}"></script>
    <script src="{{ asset('/assets/js/pages/charts/jquery-knob.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>
    <script src="{{ asset('/assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/morrisjs/morris.js') }}"></script>
    <script src="{{ asset('/assets/js/pages/iot.js') }}"></script>
@endpush

<x-app-layout>
    {{--    <!-- Main Content -->--}}
        <section class="content home">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Dashboard
                            <small class="text-muted">Welcome to  RedAlert  Application</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i>  RedAlert </a></li>
                            <li class="breadcrumb-item active">Home</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-2 col-md-6 col-sm-12 text-center">
                        <div class="card tasks_report">
                            <div class="body">
                                <input type="text" class="knob dial1" value="6" data-width="70" data-height="70" data-thickness="0.2" data-fgColor="#00ced1" readonly>
                                <h6 class="m-t-20">Open incidents</h6>
                                <small class="displayblock">47% Average <i class="zmdi zmdi-trending-up"></i></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 text-center">
                        <div class="card tasks_report">
                            <div class="body">
                                <input type="text" class="knob dial2" value="26" data-width="70" data-height="70" data-thickness="0.2" data-fgColor="#ffa07a" readonly>
                                <h6 class="m-t-20">Total incidents</h6>
                                <small class="displayblock">13% Average <i class="zmdi zmdi-trending-down"></i></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 text-center">
                        <div class="card tasks_report">
                            <div class="body">
                                <input type="text" class="knob dial3" value="76" data-width="70" data-height="70" data-thickness="0.2" data-fgColor="#8fbc8f" readonly>
                                <h6 class="m-t-20">Triggered</h6>
                                <small class="displayblock">75% Average <i class="zmdi zmdi-trending-up"></i></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 text-center">
                        <div class="card tasks_report">
                            <div class="body">
                                <input type="text" class="knob dial4" value="88" data-width="70" data-height="70" data-thickness="0.2" data-fgColor="#00adef" readonly>
                                <h6 class="m-t-20">Acknowledged</h6>
                                <small class="displayblock">54% Average <i class="zmdi zmdi-trending-up"></i></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 text-center">
                        <div class="card tasks_report">
                            <div class="body">
                                <input type="text" class="knob dial4" value="88" data-width="70" data-height="70" data-thickness="0.2" data-fgColor="#00adef" readonly>
                                <h6 class="m-t-20">Resolved</h6>
                                <small class="displayblock">54% Average <i class="zmdi zmdi-trending-up"></i></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 text-center">
                        <div class="card tasks_report">
                            <div class="body">
                                <input type="text" class="knob dial4" value="88" data-width="70" data-height="70" data-thickness="0.2" data-fgColor="#00acef" readonly>
                                <h6 class="m-t-20">Maintenances</h6>
                                <small class="displayblock">54% Average <i class="zmdi zmdi-trending-up"></i></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-md-12">
                        <div class="card">
                            <div class="body">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <h6 class="mb-0">Report Incident</h6>
                                    </div>
                                    <div class="float-right">
                                        <a href="/createIncident" class="btn btn-outline-danger" type="button">Open</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-md-12">
                        <div class="card">
                            <div class="body">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <h6 class="mb-0">Report Maintenances</h6>
                                    </div>
                                    <div class="float-right">
                                        <a href="/createMaintenances" class="btn btn-outline-danger " type="button">Open</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2>Incidents by week - DAY / NIGHT</h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                            aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">All On</a></li>
                                            <li><a href="javascript:void(0);">All Off</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div id="bar_chart" class="graph"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.footer')

        </section>
</x-app-layout>
