@extends('layouts.master')

@section('menu')
@if(Auth::user()->is_admin)
@include('admin.partials.menu')

 @else
 @include('user.partials.menu')

@endif



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

            <th>Date</th>
            <th>Invoice ID</th>
            <th>Total Amount</th>
            <td>Reason</td>
            <th>Paid</th>
           <td>Action</td>
            
            
            
        </tr>
    </thead>
    <tbody>
        @foreach($invoices as $key => $invoice)


        <tr>
        <td class="table-plus">{{$invoice->created_at}}</td>
            <td>{{$invoice->id}}</td>
            <td>{{$invoice->totalAmount}}</td>
        <td>Your lost document with <a href="{{route('lost-documents.show', $invoice->lost_document->id )}}"> </a> {{$invoice->lost_document->document_number}} has found.</td>
            @if($invoice->paid)
            <td><span class="badge badge-success">Yes</span></td>
            <td>NA</td>

            @else
            <td><span class="badge badge-Warning">NO</span></td>
            <td>
            <a href="{{route('paymentHandle', $invoice->id)}}" class="btn btn-primary">Pay 5$ now.</a>
            </td>

                
            @endif
            
        

            

             

     <!--   
            
        	<td>
                <div class="dropdown">
                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <i class="dw dw-more"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        
                    <a class="dropdown-item" href="{{route('invoices.edit',$invoice->id)}}"><i class="dw dw-edit2"></i> Edit</a>

                         <form method="POST" action="{{route('invoices.destroy',$invoice->id)}}">
                            @method('delete')
                            @csrf

                            <button class="dropdown-item" type="submit"><i class="dw dw-delete-3"></i> Delete </button>
                        </form>
                       
                        
                    </div>
                </div>
            </td>-->
        </tr>
            
        @endforeach
       

    <tbody>    

    </table>     




@endsection
