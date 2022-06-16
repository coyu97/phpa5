@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-2/12 bg-white pb-6 rounded-lg ml-4 mr-8">
        <div class="flex justify-center ">
            <div>Followers</div>
        </div>
    </div>
    <div class="w-8/12 bg-white p-6 rounded-lg">
        <form action={{ route('post') }} method="post">

            @csrf

            <div class="flex justify-start">
                <div>
                    <div class= "w-1/4 bg-white p-6  px-4  border-2">
                        Image
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <p class="text-center">Profiel </p>
                <label for="body" class="sr-only"></label>
                <textarea value="" name="body" id="body" cols="20" rows="4" class="bg-slate-500s border-2 w-full p-4 rounded-lg" placeholder="Message..."></textarea>
                <div>
                    <button type="submit" class="bg-slate-500 text-white px-4 py-3 rounded font-medium w-50">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

