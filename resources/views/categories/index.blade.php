@extends('layout.app')

@section('content')
<h1>Liste des categories </h1>
<a href="{{route('categories.create')}}">
    creer une categorie
</a>


@if ($message =Session::get('success'))
<p>
    {{$message}}
</p>
@endif

    @foreach ($categories as $category)
    
    <p>
    <b>Name:</b> {{$category->name}} <br/>
    <b>Description:</b>{{$category->description ? $category->description : "Non rempli"}} <br/>
    <a href="{{ route('categories.show' ,$category->id)}}">
    Détails
  </a>
    <a href="{{ route('categories.edit' ,$category->id)}}">
    Modifier
</a>
    <form action="{{route('categories.destroy', $category->id)}}" method="post" onsubmit ="return confirm('Etes vous sur  de vouloir supprimer cette categorie ? cette action sera irréversible!')">
    @csrf

    @method('DELETE')
    <button type="submit">
        Supprimer
    </button>
    </form>
    </p>

    @endforeach
@endsection
