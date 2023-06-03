<!-- resources/views/artikels/edit.blade.php -->
<h1>Edit Artikel</h1>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('artikels.update', $artikel) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="judul">Judul:</label>
        <input type="text" name="judul" id="judul" value="{{ $artikel->judul }}" required>
    </div>
    <div>
        <label for="konten">Konten:</label>
        <textarea name="konten" id="konten" required>{{ $artikel->konten }}</textarea>
    </div>
    <button type="submit">Update</button>
</form>
