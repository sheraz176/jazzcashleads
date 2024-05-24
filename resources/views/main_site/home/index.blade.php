@extends('main_site.layouts.app')

@section('title')
    <title>Dashboard</title>
@endsection

@section('content')
 <!-- Body Content Wrapper -->
 <div class="ms-content-wrapper">
    <div class="row">
        <!-- Notifications Widgets -->

        <div class="col-xl-3 col-md-6 col-sm-6">
            <a href="#">
                <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                    <div class="ms-card-body media">
                        <div class="media-body">
                            <h6>Jazz Leadset</h6>
                            <p class="ms-card-change"> 4567</p>
                        </div>
                    </div>
                    <i class="fas fa-stethoscope ms-icon-mr"></i>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-md-6 col-sm-6">
            <a href="#">
                <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                    <div class="ms-card-body media">
                        <div class="media-body">
                            <h6>Tsm Leadset</h6>
                            <p class="ms-card-change"> 4567</p>
                        </div>
                    </div>
                    <i class="fas fa-user-plus ms-icon-mr"></i>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-md-6 col-sm-6">
            <a href="#">
                <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                    <div class="ms-card-body media">
                        <div class="media-body">
                            <h6 class="bold">Abacus</h6>
                            <p class="ms-card-change"> 4567</p>
                        </div>
                    </div>
                    <i class="fa fa-wheelchair ms-icon-mr"></i>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-md-6 col-sm-6">
            <a href="#">
                <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                    <div class="ms-card-body media">
                        <div class="media-body">
                            <h6 class="bold">Ibex</h6>
                            <p class="ms-card-change"> 4567</p>
                        </div>
                    </div>
                    <i class="fas fa-briefcase-medical ms-icon-mr"></i>
                </div>
            </a>
        </div>




    </div>
</div>




@endsection

@push('scripts')
<!-- Page Specific Scripts Finish -->
<script src="{{asset('admin/assets/js/calendar.js')}}"></script>
 <!-- Page Specific Scripts Start -->
 <script src="{{asset('admin/assets/js/slick.min.js')}}"> </script>
 <script src="{{asset('admin/assets/js/moment.js')}}"> </script>
 <script src="{{asset('admin/assets/js/jquery.webticker.min.js')}}"> </script>
 <script src="{{asset('admin/assets/js/Chart.bundle.min.js')}}"> </script>
 <script src="{{asset('admin/assets/js/index-chart.js')}}"> </script>
@endpush
