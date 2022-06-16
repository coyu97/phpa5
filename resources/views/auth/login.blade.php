@extends('layouts.app')


@section('content')
<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">

        @if (session('status')) 
        {{session('status')}}

        @endif
        <form action="{{route('login')}}" method="post">
            @csrf

            
            <div class="mb-4">
                <label for="name" class="sr-only">Email</label>
                <input type="text" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email')  border-red-500 @enderror" value="{{old ('email') }}">


                @error('email')
                    <div class="text-red-500 mt-5 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Choose a password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">

                @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            

            <div>
                <button type="submit" class="bg-slate-500 text-white px-4 py-3 rounded font-medium w-full">Login</button>
                <br>
                <div class="text-gray-500"> Dont have a account? <a href="{{route('register')}}" class="p-3 text-blue-300">Create one here</a> </div>
            </div>
            
        </form>
    </div>

</div>
@endsection