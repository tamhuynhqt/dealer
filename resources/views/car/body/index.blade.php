@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>bodys CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('body.create') }}"> Create New body</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($bodies as $body)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $body->name}}</td>
                <td>{{ $body->description}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('body.show',$body->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('body.edit',$body->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['body.destroy', $body->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    
@endsection