<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            
        </x-slot>
    
    
    </x-app-layout>
    
    

    {{-- <form method="POST" action="{{ route('logout') }}" >
        @csrf

        <input type="submit" value="logout">
    </form> --}}
</body>
</html>