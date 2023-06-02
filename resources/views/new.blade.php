@extends('layouts.main')

@section('content')
   
<div class="wrapperBody">
<div class="breadcrumb"><p><a href="{{ route('index')}}">Accueil</a> &gt; <a href="{{ route('news')}}">Actualités</a> &gt; {{ $new->title }}</p></div>

<div class="decoFeuilles1 deco skrollable skrollable-between" data-bottom-top="margin-top: 100px" data-top-bottom="margin-top: -100px" style="margin-top: -56.9123px;"></div>


    
    <!-- ********** --> 	
    <!-- ACTUALITES --> 
    <!-- ********** --> 
    <div id="detailNews" class="section" style="margin-top:60px">
        
            <h2>{{ $new->title }}</h2>
            <div class="wrapper">
                <h3 class="date">{{ date('d/m/Y',strtotime($new->date)) }}</h3>
               <div class="content fromWYSIWYG">{!! $new->body !!}</p>

<p>&nbsp;</p>
</div> 
       		</div>
            
    </div>
    
    
  
</div>
@endsection