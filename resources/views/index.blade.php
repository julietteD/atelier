@extends('layouts.main')

@section('content')
    

<div class="wrapperBody">
 
	<!-- ******** --> 	
    <!-- A PROPOS --> 
    <!-- ******** --> 
    <div id="sectionAbout" class="section">
    	<div class="decoFeuilles2 deco skrollable skrollable-between" data-bottom-top="margin-top: 200px" data-top-bottom="margin-top: 0px" style="margin-top: 83.4613px;"></div>
        <div class="decoBird deco skrollable skrollable-between" data-bottom-top="margin-top: 200px" data-0-top="margin-top: 0px" style="margin-top: 23.3603px;"></div>
        
    	<h2>A propos</h2>
		
        <div class="inside">
            <div class="content">
            <div class="fromWYSIWYG">
				{!! $about->intro !!}

			
 </div>            <a href="{{ route('about')}}" class="readmore">Lire plus</a>
            </div>
            
            <div class="listAbout">
                <ul>

				<x-nav-component/>


               </ul>
                    
            </div>
        </div>
        <a href="#sectionNews" class="next">Les actualités</a>
        
    </div>
    
    
    <!-- ********** --> 	
    <!-- ACTUALITES --> 
    <!-- ********** --> 
    <div id="sectionNews" data-bottom-top="opacity: 0.2" data-150-top="opacity: 1" class="section skrollable skrollable-between" style="opacity: 0.505711;">
    	<div class="decoNuage1 deco skrollable skrollable-between" data-bottom-top="margin-top: -200px" data-150-top="margin-top: 0px" style="margin-top: -123.572px;"></div>
        <div class="decoNuage2 deco skrollable skrollable-between" data-bottom-top="margin-top: -100px" data-150-top="margin-top: 0px" style="margin-top: -78.4008px;"></div>
        <div class="decoFeuilles3 deco skrollable skrollable-between" data-bottom-top="margin-top: 0px" data-150-top="margin-top: -200px" style="margin-top: -59.8131px;"></div>
    	
        <h2>Actualités</h2>
        
    	<div class="news">
			
        @foreach( $news as $new)
  

        <div class="item">
             <div class="bef">
             <div class="aft">
                <div class="contentWrapper bubbleLink" style="background: url('/storage/{{ $new->image }}') center center / cover no-repeat rgb(255, 255, 255); cursor: pointer;">
                    <div class="textContent">
						<h3>{{ $new->title }}</h3>
						<span class="date">{{ date('d/m/Y',strtotime($new->date)) }}</span>
						<div class="chapeau">
                            {!!  $new->intro !!} 
                        </div>
                        <a class="moreDetails" target="_self" href="{{ route('news.show', $new->id)}}">+</a>
                    </div>
				</div>
			</div>
            </div>
        </div>



       @endforeach
      	</div>
        
          
         <div class="wrapperLinks">
        	<a href="{{ route('news')}}" class="plus">Toutes les<br> actualités</a>
            <a href="#sectionSection" class="next">Les livres</a>
        </div>
    </div>
    
    
    
    <!-- *************** --> 	
    <!-- LIVRES SECTIONS --> 
    <!-- *************** --> 
    <div id="sectionSection" class="section skrollable skrollable-before" data-bottom-top="opacity:0.2" data-150-top="opacity: 1" style="opacity: 0.2;">
    	<div class="decoBranche deco"></div>
    	<h2>Découvrir</h2>
    	<div class="sections">


		@foreach( $sections as $section)

	   <div class="item">
				 <div class="bef"> <div class="aft">
					<div class="contentWrapper bubbleLink" style="cursor: pointer;">
						<img src="/storage/{{ $section->image }}" class="sectionIllu">
						<div class="aboutHover"><a target="_self" href="{{ route('sections.show', $section->id)}}">{{ $section->title }}</a></div>
					</div>
					</div></div></div>
       @endforeach


			
    </div>
</div>

<div class="decoJonc deco"></div>

@endsection