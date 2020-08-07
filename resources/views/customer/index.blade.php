@extends('layout.master')
@section('content')
    <div class="container">
        <h1>Danh Sách Khách Hàng</h1>
        <form action="{{route('customer.findbycity')}}" method="post">
            @csrf
            <div class="form-group row">
                <label class="col-sm-1 col-form-label">City</label>
                <div class="col-sm-5">
                    <select class="form-control " name="city_id">
                        @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-2">
                    <button class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
        <table border="1px" class="table">
            <thead>
            <tr>
                <th>STT</th>
                <th>ID</th>
                <th>Name</th>
                <th>Birthday</th>
                <th>Email</th>
                <th>City</th>
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
                    <th>{{$customer->city->name}}</th>
                    <th><a href="{{route('customer.edit',$customer->id)}}" ><i class="fa fa-edit btn btn-primary" ></i></a></th>
                    <th><a onclick="confirm('Are you sure?')" href="{{route('customer.destroy',$customer->id)}}"><i class="fa fa-trash btn btn-danger"></i></a></th>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="col-12">
            <div class="row">
                <div class="offset-md-10 col-md-2">
                    {{ $customers->appends(request()->query())}}
                </div>
            </div>
        </div>
    </div>
@endsection
