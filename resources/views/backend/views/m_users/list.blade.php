@extends('backend.layouts.dashboard_layout')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            

            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h1>List Users</h1>

                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{route('user.create')}}" class="btn btn-sm color-btn-success">Create User</a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                {{-- <table class="table" id="table"> --}}
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">ชื่อ-นามสกุล</th>
                            <th class="text-center">อีเมล</th>
                            <th class="text-center">เบอร์โทร</th>
                            <th class="text-center">จัดการ</th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($datas as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->fullname}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->tel}}</td>
                            <td><button class="edit-modal btn btn-sm color-btn-warning"
                            data-info="{{$data->id}},{{$data->fullname}},{{$data->email}},{{$data->tel}}">
                            <span><i class="fas fa-edit" style="color: rgba(0,0,0,.7);"></i></span> Edit
                        </button>
                        <button class="delete-modal btn btn-sm color-btn-danger"
                            data-info="{{$data->id}},{{$data->fullname}},{{$data->email}},{{$data->tel}}">
                            <span><i class="fas fa-trash" style="color: white"></i></span> Delete
                        </button></td>
                        </tr>
                            
                        @endforeach

                    </tbody>
                </table>

            </div>
            
            
        </div>
    </div>
</div>





    
@endsection






