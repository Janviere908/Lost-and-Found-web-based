@extends('layouts.master')

@section('menu')

@include('admin.partials.menu')



@endsection

@section('path')
<div class="title">
    <h4>home</h4>
</div>
<nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Home</li>
    </ol>
</nav>


@endsection



@section('content')


    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
   @endif

   <div class="card-box pd-20 height-100-p mb-30">
    <div class="row align-items-center">
        <div class="col-md-4">
            <img src="{{asset('master/vendors/images/banner-img.png')}}" alt="">
        </div>
        <div class="col-md-8">
            <h4 class="font-20 weight-500 mb-10 text-capitalize">
            Welcome <div class="weight-600 font-30 text-blue">{{Auth::user()->first_name}}!</div>
            </h4>
            <p class="font-18 max-width-600">Here you can easily report found or report lost document.</p>
        </div>
    </div>
</div>



<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">

    <div class="row">
        <div class="col-xl-6 mb-30">
            <div class="card-box height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="progress-data">
                        <div id="chart"></div>
                    </div>
                    <div class="widget-data">
                    <div class="h4 mb-0">{{$lostDocuments}}</div>
                        <div class="weight-600 font-14">Total lost documents</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 mb-30">
            <div class="card-box height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="progress-data">
                        <div id="chart2"></div>
                    </div>
                    <div class="widget-data">
                        <div class="h4 mb-0">{{$foundDocuments}}</div>
                        <div class="weight-600 font-14">Total found documents</div>
                    </div>
                </div>
            </div>
        </div>


     
    </div>
</div>




@endsection
