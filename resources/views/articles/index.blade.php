<x-navbar>
<div class="container">
    <h1>Daftar Artikel</h1>

    <!-- Tombol Tambah Artikel -->
    <a href="{{ route('articles.create') }}" class="btn btn-primary mb-3">Tambah Artikel</a>

    <!-- Tabel Daftar Artikel -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Konten</th>
                <th>Tanggal Dibuat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ Str::limit($article->content, 50) }}</td>
                <td>{{ $article->created_at->format('d M Y') }}</td>
                <td>
                    <!-- Tombol Edit -->
                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <!-- Tombol Hapus -->
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-navbar>