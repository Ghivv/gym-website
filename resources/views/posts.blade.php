<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h2>ini adalah halaman artikel</h2>

    <a href="{{ route('articles.index')}}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">artikel</a>

</x-layout>