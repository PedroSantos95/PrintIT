@component('mail::message')
# Account Verification

Please click the link bellow to verify your account

@component('mail::button', ['url' => $url])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
