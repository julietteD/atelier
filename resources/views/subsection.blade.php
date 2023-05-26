@extends('layouts.main')

@section('content')
    
<div class="wrapperBody">
<div class="breadcrumb"><p><a href="{{ route('index')}}">Accueil</a> &gt; <a href="{{ route('sections.show', $subsection->sections_id)}}">{{ $section->title }}</a> &gt; {{ $subsection->title }} </p></div>

<div class="decoFeuilles1 deco skrollable skrollable-between" data-bottom-top="margin-top: 100px" data-top-bottom="margin-top: -100px" style="margin-top: -43.4572px;"></div>

 

		
    
    <!-- ********** --> 	
    <!-- LISTE DES OEUVRES --> 
    <!-- ********** --> 
    <div id="" data-bottom-top="opacity: 0" data-150-top="opacity: 1" class="section skrollable skrollable-between" style="margin-top: 60px; opacity: 0.850949;">
    	
      
    	<h2 style="font-size:44px; ">{{ $subsection->title }}</h2>
        
       
 
    
            <div class="wrapper">
                <div class="mainCol">
                    <ul class="slider">
                     @foreach($subsection->Subsectimages as $subsectimage)
        	               <li> <img src="{{ asset('storage/' . $subsectimage->image) }}"></li>
                    @endforeach
                </ul>
            </div>
           <div class="sideCol">
           		<!--<h3>27 Février 2018</h3>-->
                <div class="fromWYSIWYG">
                {!! $subsection->body !!}
                </div>
                
                <div class="nextInformations">
                
                    <div class="otherBooks">
                
                        <h4>Autres <a href="{{ route('sections.show', $section->id) }}">{{ $section->title }}</a> :</h4>
                        <ul>
                        @foreach($section->subsections as $subsectionother)
        	            @if ($subsectionother->id != $subsection->id)
                        <li><a href="{{ route('subsections.show', $subsectionother->id)}}" target="_self">{{ $subsectionother->title }}</a></li>
                        @endif
						
                    @endforeach

                        
                      </ul>
                    </div>
                    
                    <div class="otherInformations">
                    	<h4>Autres sections  :</h4>
                       
                         <ul>
                         <x-nav-component/>                     </ul>
                    </div>
                    
                </div>
                
            </div>
		</div>
        
        
        
    </div>
    
    
  
</div>

@endsection