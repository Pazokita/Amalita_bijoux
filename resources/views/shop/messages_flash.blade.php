@if(session('notice'))
    <div class="alert alert-primary message_flash"role="alert">
        {!! session('notice') !!}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger message_flash"role="alert">
        {!! session('error') !!}
    </div>
@endif
@if(session('success'))
    <div class="alert alert-success message_flash"role="alert">
        {!! session('success') !!}
    </div>
@endif
