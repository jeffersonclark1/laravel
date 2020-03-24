@extends('layouts.app')

@section('title', 'Customers Add')

@section('content')

    <div class="row">
        <div class="cols-12">
            <span> </span>
        </div>
    </div>

    <form action="{{ route('contact.store') }}" method="post" class="pb-4">

        <div class="form-group row">
            <label for="name">Name</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" >
            <div>
                {{ $errors->first('name')  }}
            </div>
        </div>
        <div class="form-group row">
            <label for="email">Email</label>
            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email')  }}" name="email" >
            <div>
                {{ $errors->first('email')  }}
            </div>
        </div>
        <div class="form-group row">
            <label for="message">Message</label>
            <textarea id="message" type="text" cols="30" rows="10" class="form-control @error('message') is-invalid @enderror" value="{{ old('message') }}" name="message" ></textarea>
            <div>
                {{ $errors->first('email')  }}
            </div>
        </div>
        @csrf
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>

@endsection
