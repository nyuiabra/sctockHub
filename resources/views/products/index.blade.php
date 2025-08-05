@extends('layout.app')

@section('content')
<h1>Liste des produits</h1>
<a href="{{route('products.create')}}">
    creer un produit
</a>


@if ($message =Session::get('success'))
<p>
    {{$message}}
</p>
@endif

    @foreach ($products as $product)
    
    <p>
    <b>Name:</b> {{$product->name}} <br/>
    <b>Description:</b>{{$product->description ? $product->description : "Non rempli"}} <br/>
    <a href="{{ route('products.show' ,$product->id)}}">
    Détails
  </a>
    <a href="{{ route('products.edit' ,$product->id)}}">
    Modifier
</a>
    <form action="{{route('products.destroy', $product->id)}}" method="post" onsubmit ="return confirm('Etes vous sur  de vouloir supprimer cette categorie ? cette action sera irréversible!')">
    @csrf

    @method('DELETE')
    <button type="submit">
        Supprimer
    </button>
    </form>
    </p>

    @endforeach
@endsection
