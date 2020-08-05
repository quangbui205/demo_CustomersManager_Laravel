@extends('layout.master')
@section('content')
    <div classh="container">
        <h1>Thêm mới khách hàng</h1>
        <form action="{{route('customer.store')}}" method="post">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="number" name="id" placeholder="ID">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" placeholder="Name">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Birthday</label>
                <div class="col-sm-10">
                    <input type="text" name="birthday" placeholder="Birthday">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" placeholder="Email">
                </div>
            </div>
            <button type="submit">ADD</button>
        </form>
    </div>
@endsection
