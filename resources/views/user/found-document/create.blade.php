




@extends('layouts.master')

@section('menu')

@include('user.partials.menu')



@endsection

@section('path')
<div class="title">
    <h4>New Found document</h4>
</div>
<nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('users.index')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">New found document</li>
    </ol>
</nav>


@endsection



@section('content')


    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
   @endif

<form method="post" action="{{route('found_documents.store')}}" enctype="multipart/form-data">
    @csrf
    <!--<div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Document type</label>
        <div class="col-sm-12 col-md-10">
            <select class="form-control @error('document_type') is-invalid @enderror" name="document_type" value="{{ old('document_type') }}" required autocomplete="document_type"   autofocus>
              
           
                <option value="" disabled selected>select document type..</option>


               
               @foreach($document_types as $key => $type)

            <option value="{{$type->id}}">{{$type->type}}</option>
                   
               @endforeach
            </select>

            @error('document_type')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
             @enderror
        </div>
    </div>


    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Document number</label>
        <div class="col-sm-12 col-md-10">
            <input  type="text" class="form-control @error('document_number') is-invalid @enderror" name="document_number" value="{{ old('document_number') }}" required autocomplete="document_number"   autofocus>
        
        
        
            @error('document_number')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
             @enderror
    </div>
    </div>
-->



<div class="form-group row">

    <label class="col-sm-12 col-md-2 col-form-label">Document number</label>
    <div class="col-sm-12 col-md-10">
<select class="js-example-basic-single form-control" style="width:100%" name="lost_document">


    @foreach($lostDocuments as $key => $document)
<option value="{{$document->id}}">{{$document->document_number}}</option>
    @endforeach
   
     
    
  </select>
</div>
</div> 


    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Document picture</label>
        <div class="col-sm-12 col-md-10">
            <input  type="file" class="form-control @error('picture') is-invalid @enderror" name="picture" value="{{ old('picture') }}" required autocomplete="picture"   autofocus>
        
        
        
            @error('picture')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
             @enderror
    </div>
    </div>


  


   

    <button type="submit" class="btn btn-primary">Report</button>

</form>  




@endsection












