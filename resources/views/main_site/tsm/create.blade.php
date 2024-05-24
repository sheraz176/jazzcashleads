@extends('main_site.layouts.app')

@section('title')
    <title>LeadSet</title>
@endsection

@section('content')
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="{{route('tsm.Deshbaord.index')}}"><i class="material-icons">home</i> Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('tsm.leadset.show')}}">Leadset</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Leadsets</li>
                </ol>
            </nav>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="ms-panel">
                <div class="ms-panel-header ms-panel-custome">
                    <h6>Add Leadsets</h6>
                    @if (session('success'))
                    <div>{{ session('success') }}</div>
                @endif

                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <a href="{{route('tsm.leadset.show')}}" class="ms-text-primary">Leadsets List</a>
                </div>
                <div class="ms-panel-body">

                        <form action="{{ route('tsm.leadset') }}" method="POST" class="needs-validation"  enctype="multipart/form-data">
                            @csrf

                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom0001">Choosie a File</label>
                                <div class="input-group">
                                    <input type="file" class="form-control" name="lead_file" id="lead_file" placeholder="Enter First Name" required="">
                                </div>
                            </div>

                        </div>
                        <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Reset</button>
                        <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Submit</button>
                    </form>
                </div>
            </div>
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
