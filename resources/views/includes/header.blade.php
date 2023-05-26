
<div id="header">
    <div class="logo">
       <a href="{{ route('index')}}"><img src="{{ asset('/img/logo.png')}}"></a>
    </div>
    <a href="#" class="contactLink closed">Contact</a><br/>
    <a href="https://www.instagram.com/frederique_lelous_delpech/" target="_blank" class="instagramLink">Instagram</a>
 </div>
<div class="decoFeuilles1 deco skrollable skrollable-between" data-bottom-top="margin-top: 100px" data-top-bottom="margin-top: -100px" style="margin-top: -52.1531px;"></div>

<div id="navigationOpenClose" class="closed">
	<a href="#">Navigation</a>
</div>

<div id="navigationContent" class="closed">
	<ul>
    	<li class="first"><a href="{{ route('index')}}">Accueil</a></li>
        <li><a href="{{ route('about')}}">A propos</a></li>
        <li class="last"><a href="{{ route('news')}}">Actualités</a></li>
        
        <x-nav-component/>      
    </ul>
</div>