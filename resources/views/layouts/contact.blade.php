@extends('layouts.app') 
@section('content')
<div class="container">
       @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <form method="POST" action={!! url('contact') !!}  class="form-horizontal">
        @csrf
        <div class="form-group row">
            <label class="control-label col-sm-2">Full Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="name" required>
            </div>

        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2">Email</label>
            <div class="col-sm-6">
                <input type="email" class="form-control" name="email" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2">Phone</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="phone">
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2">Message</label>
            <div class="col-sm-6">
                <textarea class="form-control" id="contactMessage" name="message" required> </textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
@endsection