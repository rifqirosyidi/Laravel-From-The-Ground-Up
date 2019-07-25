@component('mail::message')

# Thank You For Your Email

<strong>Name : </strong> {{ $data['name'] }}
<strong>Email : </strong> {{ $data['email'] }}

<strong>Message : </strong> 

{{ $data['message'] }}

@endcomponent
