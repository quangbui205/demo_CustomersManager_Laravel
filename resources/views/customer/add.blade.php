@extends('layout.master')
@section('content')
    <div class="container">
        <h1 style="text-align: center">Thêm mới khách hàng</h1>
        @if($errors->all())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!!! </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <form action="{{route('customer.store')}}" method="post">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control {{$errors->has('id')? 'is-invalid':''}}" name="id" placeholder="ID" value="{{old('id')}}">
                    @if($errors->has('id'))
                        <p class="text-danger"> {{$errors->first('id')}}</p>
                    @endif
                </div>

            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control {{$errors->has('name')? 'is-invalid':''}}" name="name" placeholder="Name" value="{{old('name')}}">
                    @if($errors->has('name'))
                        <p class="text-danger"> {{$errors->first('name')}}</p>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Birthday</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control {{$errors->has('birthday')? 'is-invalid':''}}" name="birthday" placeholder="Birthday" value="{{old('birthday')}}">
                    @if($errors->has('birthday'))
                        <p class="text-danger"> {{$errors->first('birthday')}}</p>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control {{$errors->has('email')? 'is-invalid':''}}" name="email" placeholder="Email" value="{{old('email')}}">
                    @if($errors->has('email'))
                        <p class="text-danger"> {{$errors->first('email')}}</p>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">City</label>
                <div class="col-sm-10">
                    <select class="form-control " name="city_id">
                        @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">ADD</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
        </form>

    </div>
@endsection
