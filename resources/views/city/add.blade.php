@extends('layout.master')
@section('content')
    <div class="container">
        <h1>Thêm mới 1 Tỉnh</h1>
        <form action="{{route('city.store')}}" method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label >ID</label>
                    <input type="number" class="form-control" name="id">
                </div>
                <div class="form-group col-md-6">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">ADD</button>
        </form>
    </div>
@endsection
