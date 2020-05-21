@extends('layout')
@section('content')
@if(Request::has('payment-success')) 
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Thank you for purchasing with us!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<h1>Buy something!</h1>
        <form action="{{ route('process-payment') }}" method="POST">
            @csrf
            <input value="Pay with Esewa NRS.10 only." class="btn btn-dark" type="submit">
        </form>
@endsection