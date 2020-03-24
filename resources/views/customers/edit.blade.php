@extends('layouts.app')

@section('title', 'Edit Customer' .  $customer->name )

@section('content')

    <div class="row">
        <div class="cols-12">
            <span> Edit details for {{ $customer->name }}</span>
        </div>
    </div>

    <div class="row">
        <div class="cols-12">
            <form action="{{ route('customers.update', ['customer' => $customer]) }}" method="POST" class="pb-4">
{{--                <form action="/customers/{{ $customer->id }}" method="POST" class="pb-4">--}}
                @method('PATCH')
                @include('customers.form')

                <button type="submit" class="btn btn-primary">Save Customer</button>
            </form>
        </div>
    </div>

@endsection
