@extends('admin.master')
@section('title','Role')
@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css"/>
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-xs-7">
                    <h4 class="page-title">Role</h4>
                </div>

                <div class="col-xs-5 text-right m-b-30">
                    <a href="{{ route('role.create') }}" class="btn btn-primary rounded"><i class="fa fa-plus"></i>
                        Add New</a>
                </div>
            </div>
            <div class="card-box">
                <div class="row">
                    <div class="col-md-12">

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr class="bg-primary">
                                    <th>Permissions \ Roles</th>
                                    @foreach($roles as $role)
                                        <th class="text-center">
                                            {{ $role->name }}
                                        </th>
                                    @endforeach
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($permissions as $permission)
                                    <tr>
                                        <td>{{ $permission->name }}</td>
                                        @foreach($roles as $role)
                                            <td class="text-center">
                                                <div class="pretty p-switch p-fill p-success">
                                                    <input class="role-permission-cross-field"
                                                           name="matrix" data-role-id="{{ $role->id }}"
                                                           data-permission-id="{{ $permission->id }}"
                                                           value="{{ $permission->id }}" type='checkbox' {{
                                                        $cross_check($role_has_permissions, $role->id, $permission->id) }}/>
                                                    <div class="state p-primary">
                                                        <label></label>
                                                    </div>
                                                </div>
                                            </td>
                                        @endforeach
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        $(function(){

            $('.role-permission-cross-field').on('change', function(){

                var role_id=$(this).attr('data-role-id');
                var permission_id=$(this).attr('data-permission-id');
                var status=$(this).prop('checked');

                axios({
                    method: 'post',
                    url: "{{ url('access-control/change-role-permission') }}",
                    data: {
                        role_id: role_id,
                        permission_id: permission_id,
                        status: status
                    },
                    config: { headers: {'Content-Type': 'multipart/form-data' }}
                }).then(function(response){

                    toastr.success('Role permission changed successfully!.', '', {
                        closeButton: true,
                        progressBar: true,
                    });

                }).catch(function (error){

                    toastr.error('Sorry!, form submission failed. Enter valid data.', '', {
                        closeButton: true,
                        progressBar: true,
                    });

                });

            })

        });
    </script>
@endsection
