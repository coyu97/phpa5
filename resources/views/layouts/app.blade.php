<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpa5</title>
    <link rel="stylesheet" href="{{asset ('css/app.css')}}">
</head>
<body class="bg-gray-300">
    <nav class="p-6 bg-slate-500 flex justify-between mb-3">     
        
    <ul class="flex items-center">
        @auth
        <li>
            <a href="/" class="p-3 text-white">Home</a>
        </li>
        
        <li>
            <a href="{{route('profile')}}" class="p-3 text-white">Profile</a>
        </li>

        
    </ul>

    <ul class="flex items-center">
        {{-- dit wordt weergeven wanneer er is ingelogd --}}
           
          
         <li> 
         <a href="{{route('profile')}}" class="p-3 text-white">{{(Auth::user()->name)}}</a>        
         </li> 
          <li> 
              <form action="{{route('logout')}}" method="post" class="p-3 inline  text-white">
            @csrf 
            {{-- cross side request forgery beveiliging voor de post request --}}
            <button type="submit"  >Logout</button>        
            </form>
             </li> 
        @endauth
        
        {{-- dit stuk wordt weergeven wanneer er nog niet is ingelogd --}}
        @guest 
            
            <li> 
                <a href="{{route('login')}}" class="p-3 text-white">Login</a>        
            </li> 
            
            
        
            
            @endguest
        </ul>       
    </nav>
    @yield('content')
</body>
</html>