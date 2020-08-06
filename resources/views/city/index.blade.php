@extends('layout.master')
@section('content')
    <div class="container">
         <h1>Danh Sách Tỉnh</h1>
        <table border="1px" class="table">
            <thead>
            <tr>
                <th>STT</th>
                <th>ID</th>
                <th>Name</th>
                <th colspan="2">Edit</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cities as $key => $city)
                <tr>
                    <th>{{++$key}}</th>
                    <th>{{$city->id}}</th>
                    <th>{{$city->name}}</th>
                    <th><a href="{{route('city.edit',$city->id)}}">Update</a></th>
                    <th><a onclick="confirm('Are you sure?')" href="{{route('city.delete',$city->id)}}">Delete</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
