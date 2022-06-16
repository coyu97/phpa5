@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    

    <div class="w-8/12 bg-white p-6 rounded-lg">
         <form action="{{ route('profile') }}" method="post">
            @csrf
            {{-- Hier kan de gebruiker een post plaatsen --}}
            <p class="text-center">Post</p>
            <label for="body" class="sr-only"></label>
            <textarea name="body" id="body" cols="20" rows="4" class="bg-slate-500s border-2 w-full p-4 rounded-lg" placeholder="Test">
            </textarea>

            <div>
                <button type="submit" class="bg-slate-500 text-white px-4 py-3 rounded font-medium w-50">Submit</button>
            </div>
        </form>
    </div>

</div>
@endsection