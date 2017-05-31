@component('mail::message')
# Account Confirmation

Please click the link bellow to verify your account to get full access to our website!

@component('mail::button', ['url' => $url])
Confirm Email
@endcomponent

Thanks,<br>
The PrintIT Team
@endcomponent
