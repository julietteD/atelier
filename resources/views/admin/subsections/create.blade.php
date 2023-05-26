<x-app-layout>

    <form action="{{ route('admin.subsections.store') }}" method="post" enctype="multipart/form-data">
        @include('admin.subsections.form')
    </form>

</x-app-layout>
