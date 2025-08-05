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
            <li>
             <a href="{{route('home')}}">
              home
             </a>
            </li>
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
        </ul>
    </nav>
    @yield('content')
</body>
</html>