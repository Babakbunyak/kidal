<!-- resources/views/artikels/create.blade.php -->
<h1>Buat Artikel Baru</h1>
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

<form method="POST" action="{{ route('artikels.store') }}">
    @csrf
    <div>
        <label for="judul">Judul:</label>
        <input type="text" name="judul" id="judul" value="{{ old('judul') }}" required>
    </div>
    <div>
        <label for="konten">Konten:</label>
        <textarea name="konten" id="konten" required>{{ old('konten') }}</textarea>
    </div>
    <button type="submit">Simpan</button>
</form>
