<x-app-layout>

        <a href="{{ route('admin.sections.create') }}" class="bg-gray-800 hover:bg-gray-700 px-4 py-2 inline-block rounded-md text-white text-xs tracking-widest font-semibold">NEW</a>
        <ul class="my-5">
            @foreach ($sections as $item)
            <li class="py-2 flex flex-wrap items-center border-t border-gray-200 hover:bg-gray-50">
            <form action="{{ route('admin.sections.update', $item) }}" method="post">
									@csrf
									@method('patch')
									<select name="order" onchange="this.form.submit()" class="border-none py-0">
										@for ($i = 0; $i < 20; $i++)
											<option {{ $item->order === $i ? 'selected' : '' }}>{{ $i }}</option>
										@endfor
									</select>
								</form>
                                 <p class="mr-3 text-sm text-gray-600 font-bold">{{ $item->date }}</p>
                <p class="mr-3 text-sm text-gray-600 font-bold">Oeuvres : {{ $item->subsections->count() }}</p>
                <a href="{{ route('admin.sections.edit', $item) }}" class="text-blue-500 hover:text-blue-700">{{ Str::limit($item->title, 140) }}</a>
                @if($item->subsections->count()==0)<form action="{{ route('admin.sections.destroy', $item) }}" method="post" class="inline-block ml-auto"> @csrf @method('delete') 
                    <button type="submit" class="font-light tracking-widest m-1 text-red-500 hover:text-red-700 text-xs focus:outline-none" onclick="return confirm('Are you sure you want to delete this item?')">DELETE</button>
                </form>
                @endif
            </li>
            @endforeach
        </ul>

</x-app-layout>
