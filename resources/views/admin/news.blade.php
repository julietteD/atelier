<x-app-layout>

        <a href="{{ route('admin.news.create') }}" class="bg-gray-800 hover:bg-gray-700 px-4 py-2 inline-block rounded-md text-white text-xs tracking-widest font-semibold">NEW</a>
        <ul class="my-5">
            @foreach ($news as $item)
            <li class="py-2 flex flex-wrap items-center border-t border-gray-200 hover:bg-gray-50">
                <p class="mr-3 text-sm text-gray-600 font-bold">{{ $item->date }}</p>
                <a href="{{ route('admin.news.edit', $item) }}" class="text-blue-500 hover:text-blue-700">{{ Str::limit($item->title, 140) }}</a>
                <form action="{{ route('admin.news.destroy', $item) }}" method="post" class="inline-block ml-auto"> @csrf @method('delete') 
                    <button type="submit" class="font-light tracking-widest m-1 text-red-500 hover:text-red-700 text-xs focus:outline-none" onclick="return confirm('Are you sure you want to delete this item?')">DELETE</button>
                </form>
            </li>
            @endforeach
        </ul>
        <div>{{ $news->links() }}</div>

</x-app-layout>
