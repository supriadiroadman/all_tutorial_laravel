@component('mail::message')
# Thank you

<strong>Name</strong> {{ $data['name'] }}
<strong>Email</strong> {{ $data['email'] }}


<strong>Message</strong> {{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
