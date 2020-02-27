@if($errors->any())
    <div class="bg-info" id="errors"  style="padding: 10px; margin-bottom: 8px;">
        <ul class="px-5">
            <span class="text-dark"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Form Submitted Fail</span>
            <span class="pull-right">
                <button type="button" class="close hide">
                    <i class="fa fa-times"></i>
                </button>
            </span>
            @foreach($errors->all() as $error)
                <li style="color: red;font-weight: 700;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif