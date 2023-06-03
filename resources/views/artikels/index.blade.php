@extends('layouts.app')

@section('content')
    <div class="container">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($artikels->isEmpty())
            <p>Tidak ada artikel.</p>
        @else
            <div class="card-columns">
                @foreach ($artikels as $artikel)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2 class="card-title">{{ $artikel->judul }}</h2>
                            <p class="card-text">{{ $artikel->konten }}</p>
                            <a href="{{ route('artikels.show', $artikel) }}" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
