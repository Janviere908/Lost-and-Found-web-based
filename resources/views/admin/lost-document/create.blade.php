




@extends('layouts.master')

@section('menu')

@include('user.partials.menu')



@endsection

@section('path')
<div class="title">
    <h4>New lost document</h4>
</div>
<nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('users.index')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">New lost document</li>
    </ol>
</nav>


@endsection



@section('content')


    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
   @endif

<form method="post" action="{{route('lost_documents.store')}}">
    @csrf
    <div class="form-group row">
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
        </div>
    </div>


    @error('document_number')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
    @enderror


   

    <button type="submit" class="btn btn-primary">Report</button>

</form>  




@endsection












