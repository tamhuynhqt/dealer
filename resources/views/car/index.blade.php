@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>cars CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('car.create') }}"> Create New car</a>
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
        @foreach ($cars as $car)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $car->mode}}</td>
                <td>{{ $car->make}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('car.show',$car->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('car.edit',$car->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['car.destroy', $car->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
@endsection