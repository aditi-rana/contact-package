@component('mail::message')
# Introduction

{{$name}}
The body of your message.
{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
