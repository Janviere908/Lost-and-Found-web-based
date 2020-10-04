@extends('layouts.master')

@section('menu')

@include('user.partials.menu')



@endsection

@section('path')
<div class="title">
    <h4>Lost Documents</h4>
</div>
<nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('users.index')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">All Found documents</li>
    </ol>
</nav>


@endsection



@section('content')


    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
   @endif

   <table class="data-table table stripe hover nowrap">
    <thead>
        <tr>
            <th>Document No</th>
            <th>Document type</th>
            <th>Reported date</th>
           
            <td>Received</td>
            <td> Picture </td>
            
           <td>Action</td>
            
            
            
        </tr>
    </thead>
    <tbody>
        @foreach($found_documents as $key => $document)


        <tr>
        <td class="table-plus">{{$document->document_number}}</td>
            <td>{{$document->document_type->type}}</td>
            <td>{{$document->created_at}}</td>
        

            <td> 

                @if($document->received)
              <label class="text-success">Yes</label> 

              @else
              <label class="text-warning" >No</label> 
                    
                @endif
            </td>

        <td><a href="{{asset('storage/found_documents/'.$document->picture)}}">view picture</a></td>
            
        	<td>
                <div class="dropdown">
                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <i class="dw dw-more"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        
                    <a class="dropdown-item" href="{{route('lost_documents.edit',$document->id)}}"><i class="dw dw-edit2"></i> Edit</a>

                         <form method="POST" action="{{route('lost_documents.destroy',$document->id)}}">
                            @method('delete')
                            @csrf

                            <button class="dropdown-item" type="submit"><i class="dw dw-delete-3"></i> Delete </button>
                        </form>
                       
                        
                    </div>
                </div>
            </td>
        </tr>
            
        @endforeach
       

    <tbody>    

    </table>     




@endsection
