<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de produits</title>
</head>
<body>
    <nav>
        <ul>

             @if (Auth::check())
            <li>
              <a href="{{route('categories.index')}}">
               categories
              </a>
            </li>
            <li>
              <a href="{{route('products.index')}}">
               products
              </a>
            </li>
              <li>
                    <a href="{{ route('logout') }}">
                        Déconnexion
                    </a>
                </li>
            @else
            <li>
             <a href="{{route('home')}}">
              Profile
             </a>
            </li>
            <li>
             <a href="{{route('login')}}">
              connexion
             </a>
            </li>
            <li>
             <a href="{{route('registration')}}">
              inscription
             </a>
            </li>
             
        </ul>
           @endif
    </nav>
    @yield('content')
</body>
</html>