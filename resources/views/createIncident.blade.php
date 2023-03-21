@push('styles')
    <link rel="stylesheet" href="{{ asset('/assets/plugins/multi-select/css/multi-select.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/plugins/bootstrap-select/css/bootstrap-select.css') }}">
@endpush
@push('script')
    <script src="{{ asset('/assets/plugins/multi-select/js/jquery.multi-select.js') }}"></script>
@endpush

<x-app-layout>

    <section class="content home">
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
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <h4>Create new incident</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-3">
                    <h2>What's going on?</h2>
                    <p>Please describe what's going on including steps to reproduce the issue. The more specific you
                        are, the easier it's going to be for your colleagues to locate the issue and resolve the
                        incident.</p>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div class="card">
                        {{--                        <div class="header">--}}
                        {{--                            <h2> INPUT <small>Different sizes and widths</small> </h2>--}}
                        {{--                        </div>--}}
                        <form method="POST" action="">
                            @csrf
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-10">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control">
                                                <label class="form-label">Incident Title</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="4" class="form-control no-resize" placeholder="In-depth description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-8 col-md-12">
                                        <p> <b>Impacted Service</b> </p>
                                        <select class="form-control show-tick" data-live-search="true" multiple>
                                            <option>Truck</option>
                                            <option>SAP</option>
                                            <option>Circuito de camiones</option>
                                            <option>Foxtrot</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <p> <b>Impact</b> </p>
                                        <select class="form-control show-tick">
                                            <option>None</option>
                                            <option>Minor</option>
                                            <option>Mayor</option>
                                            <option>Critical</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row clearfix" style="margin-top:25px;">
                                    <div class="col-lg-6 col-md-12">
                                        <p> <b>Impacted Zone</b> </p>
                                        <select class="form-control show-tick" data-live-search="true" multiple>
                                            <option>Argentina</option>
                                            <option>Bolivia</option>
                                            <option>Brasil</option>
                                            <option>Chile</option>
                                            <option>Paraguay</option>
                                            <option>Uruguay</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p> <b>Impact</b> </p>
                                        <select class="form-control show-tick" multiple>
                                            <optgroup label="Argentina">
                                                <option>Quilmes</option>
                                                <option>Mercado Central</option>
                                                <option>Estructura Central</option>
                                            </optgroup>
                                            <optgroup label="Bolivia">
                                                <option>La Paz</option>
                                                <option>Cochabamba</option>
                                                <option>Santa Cruz</option>
                                            </optgroup>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="row clearfix" style="margin:25px 0 25px 25px;">
                                <button type="button" class="btn btn-raised bg-green waves-effect"> <i class="material-icons">save</i> SAVE</button>
                                <button type="button" class="btn btn-raised bg-pink waves-effect" style="margin-left: 10px"> <i class="material-icons">report_problem</i> CANCEL </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
