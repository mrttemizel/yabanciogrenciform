@component('mail::message')

<h3>Hello {{ $data->surname }}</h3>



@component('mail::button', ['url' => 'https://www.google.com/', 'color' => 'success'])

Verify Mail

@endcomponent

Thanks, <br>
...

@endcomponent