<x-app-layout>

    <form action="{{ route('admin.news.update', $new) }}" method="post" enctype="multipart/form-data">
        @method('patch')
        @include('admin.news.form')
    </form>

</x-app-layout>
