@if(count($files)>0)
<div class="files">
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12">
            <div class="position-relative mb-20 mt-20">
                <h5>
                    {{ __('websolike.Files Attachments')}}
                </h5>
            </div>
        </div>
    </div>

    <ul>
        @foreach ($files as $key => $file)
        <li><a href="{{$file->getUrl()}}">{{$file->name}}</a></li>
        @endforeach
    </ul>
</div>
@endif