<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('admin.about.update', $about) }}" method="post" enctype="multipart/form-data">
                        @method('patch')
                        @csrf

                        <x-label for="intro" :value="'Intro homepage'" />
                        <textarea name="intro" id="intro" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('intro') ?? $about->intro }}</textarea>
                     
                        <div class="mt-4">
                        <x-label for="val1_text" :value="'Contenu page'" />
                        <textarea name="body" id="body" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('body') ?? $about->body }}</textarea>
                        </div>
                       

                        <x-button class="mt-4">Submit</x-button>
                    </form> 
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
