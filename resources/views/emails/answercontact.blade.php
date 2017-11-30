@component('mail::message')

@component('mail::panel')

	{{ $message }}
	
@endcomponent



@component('mail::button', ['url' => 'http://anastasionico.uk'])
Visit my website
@endcomponent



Many thanks,<br>
Nico
{{-- {{ config('app.name') }} --}}
@endcomponent
