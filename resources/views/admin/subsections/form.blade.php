@csrf

<div class="my-2">
    <label for="priority" class="block text-gray-700 font-semibold mb-2">Sections</label>

    <div class="inline-block relative mb-2 w-64">
        <select class="block appearance-none w-full bg-white border px-4 py-2 pr-8 leading-tight focus:outline-none focus:shadow-outline" name="sections_id" id="sections_id" >
        @foreach ($sections as $section)  <option value="{{ $section->id }}" @isset($subsection){{ ( $section->id) === $subsection->sections_id ? 'selected' : '' }} @endisset>{{ $section->title }}</option>@endforeach

        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
    </div>
    @error('sections_id') <div class="text-red-500 text-xs italic">{{ $message }}</div> @enderror
</div>


<div class="my-2">
    <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
    <input type="text" name="title" id="title" value="@isset($subsection) {{ old('title') ?? $subsection->title }} @endisset" class="mb-2 border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    @error('title') <div class="text-red-500 text-xs italic">{{ $message }}</div> @enderror
</div>



<div class="my-2">
    <label for="body" class="block text-gray-700 font-semibold mb-2">Body</label>
    <textarea rows="10" name="body" id="body" class="mb-2 border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">@isset($subsection) {{ old('body') ?? $subsection->body }} @endisset</textarea>
    @error('body') <div class="text-red-500 text-xs italic">{{ $message }}</div> @enderror
</div>


<div class="my-2">
    <label for="image" class="block text-gray-700 font-semibold mb-2">Picture  (max width: 1000px)</label>
    <input type="file" name="image" id="image" class="mb-2">
</div>

@isset($subsection) @if ($subsection->image)
    <img src="{{ asset('storage/' . $subsection->image) }}" class="max-h-52">
@endif @endisset


<button type="submit" class="focus:outline-none block bg-gray-800 hover:bg-gray-700 px-4 py-2 my-4 rounded-md text-white shadow-sm text-xs tracking-widest font-semibold">SAVE</button>
