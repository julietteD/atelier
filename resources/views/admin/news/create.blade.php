<x-app-layout>

    <form action="{{ route('admin.news.store') }}" method="new" enctype="multipart/form-data">
        @include('admin.news.form')
    </form>

</x-app-layout>
