@extends('layouts.main')

@section('content')
<div class="wrapperBody">
<div class="breadcrumb"><p><a href="{{ route('index')}}">Accueil</a> &gt; Actualités</p></div>

<div class="decoFeuilles1 deco skrollable skrollable-between" data-bottom-top="margin-top: 100px" data-top-bottom="margin-top: -100px" style="margin-top: -33.7641px;"></div>



		
    
    <!-- ********** --> 	
    <!-- ACTUALITES --> 
    <!-- ********** --> 
    <div id="sectionNews" data-bottom-top="opacity: 0" data-150-top="opacity: 1" class="section skrollable skrollable-after" style="margin-top: 60px; opacity: 1;">
    	
        <div class="decoFeuilles3 deco skrollable skrollable-after" data-bottom-top="margin-top: 0px" data-150-top="margin-top: -200px" style="margin-top: -200px;"></div>
    	<h2>Actualités</h2>
        
       
        
    	<div class="news wrapper">


        @foreach( $news as $new)

       <div class="item">
             <div class="bef">
             <div class="aft">
                <div class="contentWrapper bubbleLink" style="background: url('/storage/{{ $new->image }}') center center / cover no-repeat rgb(255, 255, 255); cursor: pointer;">
                    <div class="textContent">
						<h3>{{ $new->title }}</h3>
						<span class="date">{{ date('d m Y',strtotime($new->date)) }}</span>
						<div class="chapeau">
                            <p>{!! $new->intro !!}</p>
                        </div>
                        <a class="moreDetails" target="_self" href="{{ route('news.show', $new->id)}}">+</a>
                    </div>
				</div>
			</div>
            </div>
        </div>



       @endforeach


			
        
        
        
    </div>
    
    
  
</div>
@endsection