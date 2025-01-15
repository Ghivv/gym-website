<!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->

<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Daftar Artikel</h1>
    <a href="{{ route('articles.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Artikel</a>

    @if($articles->isEmpty())
        <p class="text-gray-500">Belum ada artikel yang dibuat.</p>
    @else
        <table class="w-full border-collapse border border-gray-200">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-4 py-2">#</th>
                    <th class="border border-gray-300 px-4 py-2">Judul</th>
                    <th class="border border-gray-300 px-4 py-2">Konten</th>
                    <th class="border border-gray-300 px-4 py-2">Tanggal Dibuat</th>
                    <th class="border border-gray-300 px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $index => $article)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $index + 1 }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $article->title }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        {{ Str::limit($article->content, 50) }}
                    </td>
                    <td class="border border-gray-300 px-4 py-2">
                        {{ $article->created_at->format('d-m-Y') }}
                    </td>
                    <td class="border border-gray-300 px-4 py-2">
                        <a href="{{ route('articles.edit', $article->id) }}" class="text-blue-500">Edit</a> |
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
