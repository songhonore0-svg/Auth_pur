@extends('layouts.app')

@section('title', 'Connexion')

@section('content')
    <h2>Connexion</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email">Email</label><br>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email') <p style="color: red;">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="password">Mot de passe</label><br>
            <input id="password" type="password" name="password" required>
        </div>

        <button type="submit">Se connecter</button>
    </form>

    <p>Pas de compte ? <a href="{{ route('register') }}">S'inscrire</a></p>
@endsection