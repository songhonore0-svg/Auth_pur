@extends('layouts.app')

@section('title', 'Profil')

@section('content')
    <h2>Mon profil</h2>

    <p><strong>Nom :</strong> {{ Auth::user()->name }}</p>
    <p><strong>Email :</strong> {{ Auth::user()->email }}</p>
    <p><strong>Inscrit le :</strong> {{ Auth::user()->created_at->format('d/m/Y') }}</p>
@endsection