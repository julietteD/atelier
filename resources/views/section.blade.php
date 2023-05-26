@extends('layouts.main')

@section('content')
<div class="wrapperBody">
<div class="breadcrumb"><p><a href="{{ route('index')}}">Accueil</a> &gt; {{ $section->title }}</p></div>

<div class="decoFeuilles1 deco skrollable skrollable-between" data-bottom-top="margin-top: 100px" data-top-bottom="margin-top: -100px" style="margin-top: -38.8646px;"></div>




		
    
    <!-- ********** --> 	
    <!-- LISTE DES OEUVRES --> 
    <!-- ********** --> 
    <div id="" data-bottom-top="opacity: 0" data-150-top="opacity: 1" class="section skrollable skrollable-between" style="margin-top: 60px; opacity: 0.829457;">
    	
      
    	<h2 style="font-size:44px;">{{ $section->title }}</h2>
        
        <br/>
     
        
    	<div class="wrapper">
		@foreach($section->subsections as $subsection)
        	
			
			<div class="item col3">
				 <div class="bef"> 
					 <div class="aft">
					<div class="contentWrapper bubbleLink" style="cursor: pointer;">
						<img src="{{ asset('storage/' . $subsection->image) }}" class="sectionIllu">
						<div class="aboutHover">
							<a href="{{ route('subsections.show', $subsection->id)}}" target="_self">{{ $subsection->title }}</a>
						</div>
					</div>
					</div></div></div>
       @endforeach

			
        
        
        
    </div>
    
    
  
</div>
@endsection

      
    
     
  