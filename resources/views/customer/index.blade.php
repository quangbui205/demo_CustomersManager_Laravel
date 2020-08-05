@extends('layout.master')
@section('content')
    <div class="container">
        <h1>Danh Sách Khách Hàng</h1>
        <table border="1px" class="table">
            <thead>
            <tr>
                <th>STT</th>
                <th>ID</th>
                <th>Name</th>
                <th>Birthday</th>
                <th>Email</th>
                <th colspan="2">Edit</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $key => $customer)
                <tr>
                    <th>{{++$key}}</th>
                    <th>{{$customer->id}}</th>
                    <th>{{$customer->name}}</th>
                    <th>{{$customer->dob}}</th>
                    <th>{{$customer->email}}</th>
                    <th><a href="{{route('customer.edit',$customer->id)}}">Update</a></th>
                    <th><a onclick="confirm('Are you sure?')" href="{{route('customer.destroy',$customer->id)}}">Delete</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
