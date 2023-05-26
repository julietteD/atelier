@extends('layouts.main')

@section('content')
    
<div class="wrapperBody">
<div class="breadcrumb"><p><a href="{{ route('index')}}">Accueil</a> &gt; A propos</p></div>
<div class="decoFeuilles1 deco skrollable skrollable-between" data-bottom-top="margin-top: 100px" data-top-bottom="margin-top: -100px" style="margin-top: -38.8646px;"></div>

 




	<!-- ******** --> 	
    <!-- A PROPOS --> 
    <!-- ******** --> 
    <div id="sectionAbout" class="section">
    	<div class="decoFeuilles2 deco skrollable skrollable-between" data-bottom-top="margin-top: 200px" data-top-bottom="margin-top: 0px" style="margin-top: 107.265px;"></div>
        <div class="decoBird deco skrollable skrollable-between" data-bottom-top="margin-top: 200px" data-0-top="margin-top: 0px" style="margin-top: 32.7044px;"></div>
        
    	<h2>A propos</h2>
		
        <div class="inside">
            <div class="content">
                <div class="fromWYSIWYG">
                  <ul>  {!! $about->body !!}</ul>
                </div>            
            </div>
            
            <div class="listAbout">
                <ul><x-nav-component/></ul>       
            </div>
        </div>
        
    </div>
    
    
    
</div>
@endsection