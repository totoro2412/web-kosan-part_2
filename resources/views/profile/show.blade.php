@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Profil Saya</h1>
        <p><strong>Nama:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profil</a>
    </div>
@endsection