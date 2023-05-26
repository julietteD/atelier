@csrf


<div class="my-2">
    <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
    <input type="text" name="title" id="title" value="{{ old('title') ?? $section->title }}" class="mb-2 border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    @error('title') <div class="text-red-500 text-xs italic">{{ $message }}</div> @enderror
</div>




<div class="my-2">
    <label for="image" class="block text-gray-700 font-semibold mb-2">Picture</label>
    <input type="file" name="image" id="image" class="mb-2">
</div>

@if ($section->image)
    <img src="{{ asset('storage/' . $section->image) }}" class="max-h-52">
@endif


<button type="submit" class="focus:outline-none block bg-gray-800 hover:bg-gray-700 px-4 py-2 my-4 rounded-md text-white shadow-sm text-xs tracking-widest font-semibold">SAVE</button>
