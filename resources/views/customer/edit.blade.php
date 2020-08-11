@extends('layout.master')
@section('content')
    <div class="container">
        <h1 style="text-align: center">Chỉnh sửa Thông Tin</h1>
        <form method="post" action="{{route('customer.update',$customer->id)}}">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$customer->name}}" name="name" class="form-control ">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Birthday</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$customer->dob}}" name="birthday" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" value="{{$customer->email}}" name="email" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">City</label>
                <div class="col-sm-10">
                    <select name="city_id" class="form-control">
                        @foreach($cities as $city)
                            <option
                                @if($customer->city_id==$city->id)
                                {{"selected"}}
                                @endif
                                value="{{$city->id}}">{{$city->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
        </form>
    </div>
@endsection
