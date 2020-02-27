@extends('admin.master')
@section('title','')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/admin/ckeditor/sample/css/sample.css') }}">
    <style>
        .ck-editor__editable_inline {
            min-height: 200px;
        }
    </style>
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-xs-7">
                    <h4 class="page-title">Blog</h4>
                </div>

                <div class="col-xs-5 text-right m-b-30">
                    <a href="{{ route('user.index') }}" class="btn btn-primary rounded"><i class="fa fa-list-ul"></i> See List</a>
                </div>
            </div>
            <div class="card-box">
                <div class="row">
                    <div class="col-md-12">
                        {{ BootForm::horizontal(['model'=>$model, 'store' => 'user.store', 'update' => 'user.update','enctype'=>'multipart/form-data','autocomplete'=>'off']) }}


                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                                {{ BootForm::text('name', null, null, ['class'=>'form-control input-sm']) }}
                                {{ BootForm::text('email', null, null, ['class'=>'form-control input-sm']) }}
                                {{ BootForm::password('password', null, ['class'=>'form-control input-sm']) }}
                                {{ BootForm::password('password_confirmation', null, ['class'=>'form-control input-sm']) }}
                                {{ BootForm::select('roles[]', 'Roles', $roles, $selected_roles, ['class'=>'form-control input-sm select2', 'multiple']) }}
                                {{ BootForm::submit('Submit') }}
                            </div>


                        {{ BootForm::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/admin/ckeditor/ckeditor.js') }}"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '.editor' ), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( err => {
                console.error( err.stack );
            } );
        // image
        $('#image_url').on('change',function (img) {
            var fileInput=this;
            if (fileInput.files[0]) {
                var reader=new FileReader();
                reader.onload=function (img) {
                    $('#img').attr('src',img.target.result);
                };
                reader.readAsDataURL(fileInput.files[0]);
            }
        });
    </script>
@endsection
