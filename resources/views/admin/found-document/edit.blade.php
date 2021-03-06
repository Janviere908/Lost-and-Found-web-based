




@extends('layouts.master')

@section('menu')

@include('admin.partials.menu')



@endsection

@section('path')
<div class="title">
    <h4>Edit Found document</h4>
</div>
<nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('found-documents.index')}}">Found documents</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{$document->id}}</li>
    </ol>
</nav>


@endsection



@section('content')


    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
   @endif

<form method="post" action="{{route('found-documents.update', $document->id)}}">
    @method('put')
    @csrf
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Document type </label>
        <div class="col-sm-12 col-md-10">
            <select class="form-control @error('document_type') is-invalid @enderror" name="document_type" required autocomplete="document_type"   autofocus>
               <option value="{{$document->document_type->id}}"  selected>{{$document->document_type->type}}</option>


               
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
        <input  type="text" class="form-control @error('document_number') is-invalid @enderror" name="document_number" required autocomplete="document_number" value="{{$document->document_number}}"   autofocus>
       
        @error('document_number')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>
    </div>


    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Received</label>
        <div class="col-sm-12 col-md-10">

        
        <input type="checkbox" @if($document->received) checked @endif  class="switch-btn" name="received" data-color="#0099ff">
        @error('received')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>
    </div>





    
   

    <button type="submit" class="btn btn-primary">Update</button>

</form>  




@endsection












