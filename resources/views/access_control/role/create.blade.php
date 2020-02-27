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
                    <h4 class="page-title">role</h4>
                </div>

                <div class="col-xs-5 text-right m-b-30">
                    <a href="{{ route('role.index') }}" class="btn btn-primary rounded"><i class="fa fa-list-ul"></i> See List</a>
                </div>
            </div>
            <div class="card-box">
                <div class="row">
                    <div class="col-md-12">
                        {{ BootForm::horizontal(['model'=>$model, 'store' => 'role.store', 'update' => 'role.update'])}}

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                                {{ BootForm::text('name', 'Role Name (Must be unique)', null, ['class'=>'form-control input-sm']) }}
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
