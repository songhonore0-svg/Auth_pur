@extends('layouts.app')

@section('title', 'Inscription')

@section('content')
    <h2>Inscription</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <label for="name">Nom</label><br>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required>
            @error('name') <p style="color: red;">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="email">Email</label><br>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>
            @error('email') <p style="color: red;">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="password">Mot de passe</label><br>
            <input id="password" type="password" name="password" required>
            @error('password') <p style="color: red;">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="password_confirmation">Confirmation du mot de passe</label><br>
            <input id="password_confirmation" type="password" name="password_confirmation" required>
        </div>

        <button type="submit">S'inscrire</button>
    </form>

    <p>Déjà un compte ? <a href="{{ route('login') }}">Se connecter</a></p>
@endsection