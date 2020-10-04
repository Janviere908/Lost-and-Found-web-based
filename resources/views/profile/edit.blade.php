




@extends('layouts.master')

@section('menu')

@include('user.partials.menu')



@endsection

@section('path')
<div class="title">
    <h4>Profile</h4>
</div>
<nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('users.index')}}">Home</a></li>
   
        <li class="breadcrumb-item active" aria-current="page">Profile</li>
    </ol>
</nav>


@endsection



@section('content')


    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
   @endif

<form method="post" action="{{route('profiles.update', $user->id)}}">
    @method('put')
    @csrf
  
     
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">First Name</label>
        <div class="col-sm-12 col-md-10">
        <input  type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" required autocomplete="first_name" value="{{$user->first_name}}"   autofocus>
        
        @error('first_name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    </div>


   




    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Last Name</label>
        <div class="col-sm-12 col-md-10">
        <input  type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" required autocomplete="last_name" value="{{$user->last_name}}"   autofocus>
        
        @error('last_name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
       @enderror
    </div>
    </div>


    


    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Gender</label>
        <div class="col-sm-12 col-md-10">
        <select name="gender" class="form-control form-control-lg @error('gender') is-invalid @enderror"    name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus>
            <label class="col-sm-12 col-md-2 col-form-label">Last Name</label>
									
            @if(old('gender'))
                @if(old('gender')=="Male")

                <option value="Male" selected>Male</option>
                <option value="Female">Female</option>

                @else
                <option value="Female" selected>Female</option>  
                <option value="Male">Male</option>
                @endif

                @else
                @if($user->gender=="Male")

                <option value="Male" selected>Male</option>
                <option value="Female">Female</option>

                @else
                <option value="Female" selected>Female</option>  
                <option value="Male">Male</option>
                @endif


            @endif
             
         </select>


        
         @error('gender')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
          @enderror
    </div>
</div>




<div class="form-group row">
    <label class="col-sm-12 col-md-2 col-form-label">E-mail</label>
    <div class="col-sm-12 col-md-10">
    <input  type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" value="{{$user->email}}"   autofocus>
    
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
   @enderror
</div>
</div>


<div class="form-group row">
    <label class="col-sm-12 col-md-2 col-form-label">District</label>
    <div class="col-sm-12 col-md-10">
    <input  type="text" class="form-control @error('district') is-invalid @enderror" name="district" required autocomplete="district" value="{{$user->district}}"   autofocus>
    
    @error('district')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
   @enderror
</div>
</div>




<div class="form-group row">
    <label class="col-sm-12 col-md-2 col-form-label">Province</label>
    <div class="col-sm-12 col-md-10">
    <input  type="text" class="form-control @error('province') is-invalid @enderror" name="province" required autocomplete="province" value="{{$user->province}}"   autofocus>
    
    @error('province')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
   @enderror
</div>
</div>



<div class="form-group row">
    <label class="col-sm-12 col-md-2 col-form-label">Phone</label>
    <div class="col-sm-12 col-md-10">
    <input  type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" required autocomplete="phone" value="{{$user->phone}}"   autofocus>
    
    @error('phone')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
   @enderror
</div>
</div>
   
   

   

    <button type="submit" class="btn btn-primary">Update</button>

</form>  




@endsection












