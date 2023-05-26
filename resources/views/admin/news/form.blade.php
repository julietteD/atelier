@csrf

<div class="my-2">
    <label for="date" class="block text-gray-700 font-semibold mb-2">Date</label>
    <input type="date" name="date" id="date" value="{{ old('date') ?? ($new->date ? $new->date->format('Y-m-d') : date('Y-m-d')) }}" class="mb-2 border w-64 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    @error('date') <div class="text-red-500 text-xs italic">{{ $message }}</div> @enderror
</div>


<div class="my-2">
    <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
    <input type="text" name="title" id="title" value="{{ old('title') ?? $new->title }}" class="mb-2 border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    @error('title') <div class="text-red-500 text-xs italic">{{ $message }}</div> @enderror
</div>

<div class="my-2">
    <label for="intro" class="block text-gray-700 font-semibold mb-2">Intro</label>
    <textarea rows="10" name="intro" id="intro" class="mb-2 border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('intro') ?? $new->intro }}</textarea>
    @error('intro') <div class="text-red-500 text-xs italic">{{ $message }}</div> @enderror
</div>

<div class="my-2">
    <label for="body" class="block text-gray-700 font-semibold mb-2">Body</label>
    <textarea rows="10" name="body" id="body" class="mb-2 border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('body') ?? $new->body }}</textarea>
    @error('body') <div class="text-red-500 text-xs italic">{{ $message }}</div> @enderror
</div>



<div class="my-2">
    <label for="image" class="block text-gray-700 font-semibold mb-2">Picture</label>
    <input type="file" name="image" id="image" class="mb-2">
</div>

@if ($new->image)
    <img src="{{ asset('storage/' . $new->image) }}" class="max-h-52">
@endif


<button type="submit" class="focus:outline-none block bg-gray-800 hover:bg-gray-700 px-4 py-2 my-4 rounded-md text-white shadow-sm text-xs tracking-widest font-semibold">SAVE</button>
