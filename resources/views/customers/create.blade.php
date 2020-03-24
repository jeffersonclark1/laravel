@extends('layouts.app')

@section('title', 'Customers Add')

@section('content')

    <div class="row">
        <div class="cols-12">
            <span> Add new Customer</span>
        </div>
    </div>

    <div class="row">
        <div class="cols-12">
            <form action="/customers" method="post" class="pb-4">

                @include('customers.form')

                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>

@endsection
