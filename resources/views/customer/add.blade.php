@extends('layout.master')
@section('content')
    <div class="container">
        <h1 style="text-align: center">Thêm mới khách hàng</h1>
        <form action="{{route('customer.store')}}" method="post">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="id" placeholder="ID">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Birthday</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="birthday" placeholder="Birthday">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" placeholder="Email">
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
