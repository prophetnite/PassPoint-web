@extends('layouts.master')

@section('content')

    <!-- Main content-->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="view-header">
                        <div class="pull-right text-right" style="line-height: 14px">
                            <small>App Pages<br>Basic<br> <span class="c-white">Timeline</span></small>
                        </div>
                        <div class="header-icon">
                            <i class="pe page-header-icon pe-7s-date"></i>
                        </div>
                        <div class="header-title">
                            <h3>Timeline</h3>
                            <small>
                                Present your events in timeline style.
                            </small>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>

            <div class="row">

                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                            Timeline example
                        </div>
                        <div class="panel-body">


                            <div class="v-timeline vertical-container">
                                <div class="vertical-timeline-block">
                                    <div class="vertical-timeline-icon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="vertical-timeline-content">
                                        <div class="p-sm">
                                            <span class="vertical-date pull-right"> Saturday <br/> <small>12:17:43 PM</small> </span>

                                            <h2>It is a long established fact</h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                            </p>
                                        </div>
                                        <div class="panel-footer">
                                            It is a long established fact that
                                        </div>
                                    </div>
                                </div>
                                <div class="vertical-timeline-block">
                                    <div class="vertical-timeline-icon ">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="vertical-timeline-content">
                                        <div class="p-sm">
                                            <span class="vertical-date pull-right"> Saturday <br/> <small>12:17:43 PM</small> </span>

                                            <h2>There are many variations</h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                            </p>
                                        </div>
                                        <div class="panel-footer">
                                            It is a long established fact that
                                        </div>
                                    </div>
                                </div>
                                <div class="vertical-timeline-block">
                                    <div class="vertical-timeline-icon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="vertical-timeline-content">
                                        <div class="p-sm">
                                            <span class="vertical-date pull-right"> Saturday <br/> <small>12:17:43 PM</small> </span>

                                            <h2>Contrary to popular belief</h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                            </p>
                                        </div>
                                        <div class="panel-footer">
                                            It is a long established fact that
                                        </div>
                                    </div>
                                </div>
                                <div class="vertical-timeline-block">
                                    <div class="vertical-timeline-icon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="vertical-timeline-content">
                                        <div class="p-sm">
                                            <span class="vertical-date pull-right"> Saturday <br/> <small>12:17:43 PM</small> </span>

                                            <h2>The generated Lorem Ipsum</h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                            </p>
                                        </div>
                                        <div class="panel-footer">
                                            It is a long established fact that
                                        </div>
                                    </div>
                                </div>
                                <div class="vertical-timeline-block">
                                    <div class="vertical-timeline-icon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="vertical-timeline-content">
                                        <div class="p-sm">
                                            <span class="vertical-date pull-right"> Saturday <br/> <small>12:17:43 PM</small> </span>

                                            <h2>The standard chunk</h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                            </p>
                                        </div>
                                        <div class="panel-footer">
                                            It is a long established fact that
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End main content-->

@endsection
