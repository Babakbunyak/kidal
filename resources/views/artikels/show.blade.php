<!-- resources/views/artikels/show.blade.php -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<h1>{{ $artikel->judul }}</h1>
<p>{{ $artikel->konten }}</p>
<a href="{{ route('artikels.edit', $artikel) }}">Edit</a>

<form method="POST" action="{{ route('artikels.destroy', $artikel) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Hapus</button>
    
</form>
