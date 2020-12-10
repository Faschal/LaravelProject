@component('mail::message')
# Test Email

This is a test email.

@component('mail::button', ['url' => route('product.index')])
View Web
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
