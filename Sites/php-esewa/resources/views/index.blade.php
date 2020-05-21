@extends('layout')
@section('content')
<h1>Buy something!</h1>
        <form action="{{ route('process-payment') }}" method="POST">
            @csrf
            <input value="Pay with Esewa NRS.10 only." class="btn btn-dark" type="submit">
        </form>
@endsection