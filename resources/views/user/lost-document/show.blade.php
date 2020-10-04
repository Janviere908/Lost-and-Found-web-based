




@extends('layouts.master')

@section('menu')

@include('user.partials.menu')



@endsection

@section('path')
<div class="title">
    <h4>Show lost document</h4>
</div>
<nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('users.index')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('lost_documents.index')}}">Lost documents</a></li>
        <li class="breadcrumb-item active" aria-current="page">Show</li>
    </ol>
</nav>


@endsection



@section('content')


    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
   @endif




@if($document->found)
    <div class="alert alert-success">  <img style="with:40px;height:30px" src="{{asset('master/vendors/images/success.png')}}" alt="modal">  Your document has found .</div>
    @else

    <div class="alert alert-warning"> Document not yet found.</div>
@endif

    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Document type </label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control @error('document_type') is-invalid @enderror" value="{{$document->document_type->type}}" name="document_type" required autocomplete="document_type"   autofocus readonly>
   </div>

   
    </div>
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Document number</label>
        <div class="col-sm-12 col-md-10">
        <input  type="text" class="form-control @error('document_number') is-invalid @enderror" name="document_number" required autocomplete="document_number" value="{{$document->document_number}}"   readonly>
        </div>
    </div>


    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Received</label>
        <div class="col-sm-12 col-md-10">
            @if($document->received)
            <p class="text-success"> YES</p>

            @else
            <p class="text-warning"> No</p>
                
            @endif
       
        </div>
    </div>


    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Reported date</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control @error('document_type') is-invalid @enderror" value="{{$document->created_at}}" name="document_type" required autocomplete="document_type"   autofocus readonly>
   </div>

   

    





@endsection












