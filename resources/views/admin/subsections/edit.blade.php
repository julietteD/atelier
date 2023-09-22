<x-app-layout>

    <form action="{{ route('admin.subsections.update', $subsection) }}" method="post" enctype="multipart/form-data">
        @method('patch')
        @include('admin.subsections.form')
    </form>


    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="font-bold text-indigo-700">Photos  test(max width: 1000px)</h2>





<form action="{{ route('admin.subsectimages.store') }}" method="post" enctype="multipart/form-data">
	@csrf
	<input type="text" name="subsections_id" value="{{ $subsection->id }}" hidden>
	<input type="file" name="image" class="block mt-1" >
	<button type="submit" class="absolute -top-1 -right-1 h-6 w-6 text-white bg-red-500 rounded-full hover:bg-red-600 focus:outline-none">Ajouter</button>
test
</form>


<div class="mt-4">
	@foreach ($subsection->Subsectimages as $item)

	<div class="relative mr-4" style="display:inline-block; margin: 10px; vertical-align:middle; width: 10%">
		<img style="min-width:100%; width:100px; height:100px; display:block" src="{{ asset('storage/' . $item->image) }}">
		
		<form action="{{ route('admin.subsectimages.destroy', $item) }}" method="post">
			@csrf
			@method('delete')
			<button type="submit" class="absolute -top-1 -right-1 h-6 w-6 text-white bg-red-500 rounded-full hover:bg-red-600 focus:outline-none">x</button>
		</form>
        
		<form action="{{ route('admin.subsectimages.update', $item) }}" method="post">
			@csrf
			@method('patch')
			<input type="number" name="order" value="{{ $item->order }}" onchange="this.form.submit()" class="absolute -bottom-3 -right-2 border-0 w-14 text-sm mt-4 bg-indigo-50 rounded-full">
		</form>
	</div>
	@endforeach
</div>   
                </div>
            </div>
</x-app-layout>
