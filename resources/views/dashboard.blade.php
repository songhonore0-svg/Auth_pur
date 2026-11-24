@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>Tableau de bord</h2>

    <p>Bienvenue, <strong>{{ Auth::user()->name }}</strong> !</p>
    <p>Cette page n'est accessible qu'aux utilisateurs connectés.</p>
@endsection