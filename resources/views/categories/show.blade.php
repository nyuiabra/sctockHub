@extends('layout.app')

@section('content')
<h1>Details de la categorie</h1>
<b>Name :</b>{{$category->name}} <br/>
<b>Description:</b>{{$category->description ? $category->description : 'Non rempli.'}} <br/>
@endsection