<x-app-layout>

    <form action="{{ route('admin.sections.update', $section) }}" method="post" enctype="multipart/form-data">
        @method('patch')
        @include('admin.sections.form')
    </form>

</x-app-layout>
