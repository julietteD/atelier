<div>
@foreach( $sections as $section)
       <li><a href="{{ route('sections.show', $section->id)}}">{{ $section->title }}</a></li>
       @endforeach
</div>