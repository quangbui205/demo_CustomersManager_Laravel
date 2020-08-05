@extends('layout.master')
@section('content')
    <div class="container">
        <h1>Chỉnh sửa Thông Tin</h1>
        <form method="post" action="{{route('customer.update',$customer->id)}}">
            @csrf
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$customer->name}}" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Birthday</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$customer->dob}}" name="birthday">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" value="{{$customer->email}}" name="email">
                </div>
            </div>
            <button type="submit">Update</button>
        </form>
    </div>
@endsection
