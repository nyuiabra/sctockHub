@extends('layout.app')

@section('content')
    <h1>Inscription</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('registration') }}" method="post">
        @csrf

        <label for="name">Nom de l'utilisateur</label><br>
        <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Saisir le nom ici ...">
        <br /><br />

        <label for="email">E-mail</label><br>
        <input type="text" name="email" id="email" value="{{ old('email') }}"
            placeholder="Saisir l'e-mail ici ...">
        <br /><br />

        <label for="password">Mot de passe</label><br>
        <input type="password" name="password" id="password" placeholder="Saisir le mot de passe ici ...">
        <br /><br />

        <label for="password_confirmation">Confirmer le mot de passe</label><br>
        <input type="password" name="password_confirmation" id="password_confirmation"
            placeholder="Confirmez le mot de passe ici ...">
        <br /><br />

        <button type="submit">
            S'inscrire
        </button>
    </form>
@endsection