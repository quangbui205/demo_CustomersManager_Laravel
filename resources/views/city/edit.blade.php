@extends('layout.master')
@section('content')
    <div class="container">
        <h1>Thay Đổi Tên Tỉnh</h1>
        <form action="{{route('city.update',$city->id)}}" method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Name</label>
                    <input type="text" class="form-control" value="{{$city->name}}" name="name">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">ADD</button>
        </form>
    </div>
@endsection
