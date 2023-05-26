<x-app-layout>

    <form action="{{ route('admin.sections.store') }}" method="post" enctype="multipart/form-data">
        @include('admin.sections.form')
    </form>

</x-app-layout>
