@component('mail::message')
# Hello {{$user->name}}
## congratulation you are added as admin in our resturent website
### sign in by email : {{$user->email}}
### and your password is : {{$password}}
## we hope you to enjoy work with us



@component('mail::button', ['url' => config('app.url').'/login'])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
