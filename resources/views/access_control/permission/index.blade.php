@extends('admin.master')
@section('title','Blog')
@section('style')

@endsection
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-xs-7">
                    <h4 class="page-title">BLog</h4>
                </div>

                <div class="col-xs-5 text-right m-b-30">
                    <a href="{{ route('permission.create') }}" class="btn btn-primary rounded"><i class="fa fa-plus"></i>
                        Add New</a>
                </div>

            </div>
            <div class="card-box">
                <div class="row">
                    <div class="col-md-12">

                        <table class="display datatable table table-stripped">
                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Guard Name</th>
                            </tr>
                            </thead>
                            <tbody>

                                @foreach($permissions as $row)
                                    <tr>
                                        <td>{{ $row->id }}</td>
                                        <td>{{ $row->name}}</td>
                                        <td>{{ $row->guard_name }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
