@extends('layouts.master' , ['isDarkTheme' => 'true', 'title' => 'Home'])
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<style>
#popup {
	background-color: #063e33;
	padding: 20px;
	width: 600px;
	position: absolute;
	z-index: 999 !important;
	left: 0;
	right: 0;
	height: 90%;
	top: 50px;
	border: 8px solid aliceblue;
	margin: 0 auto;
}
#popup h2 {
  font-size: 25px;
}
.closeme {
	position: absolute;
	top: 10px;
	right: 10px;
	cursor: pointer;
	color: #fff;
	font-size: 25px;
	font-weight: 700;
}
#sib-container {
	background-color: #063e33 !important;
	border-radius: 0 !important;
	border-width: 0 !important;
}
.svg-inline--fa.fa-window-close.fa-w-16 {
	background: #063e33;
	padding: 0;
	margin: 0;
	height: 30px;
	width: 32px;
	border-radius: 6px;
	border: solid #063e33;
	border-width: 2px;
}
@media (max-width:610px){
	#popup {
	width: auto;
	left: 11px;
	right: 11px;
	
}
}
</style>
<div id="popup" style="display:none;">
  <div class="closeme"><i class="far fa-window-close"></i></div>
  <iframe width="540" height="305" src="https://6b85c497.sibforms.com/serve/MUIEALsDIszpFW0V3gNi1baooFFJluviVktGKBUwPQXDUDG5O1VFQmGwbqrWdB69uxWtN5T8tKDYRPrFhvSpwzkQ_lScaYxcnBqMyoaj6yoLQL2_ye6ZrRQ4NgMXLMWj82cLOcYbI47qInIUAa0ODhNF-jaiu6M6WpegCjZQvVyRe3NDlVd76WcjTxHlCNkbGDZKX16o9OFZdwqY" frameborder="0" scrolling="auto" allowfullscreen style="margin-left: auto;margin-right: auto;max-width: 100%; height:100%;"></iframe>
</div>
<script>
$(document).ready(function(){
	setTimeout(showModal,3000);
	function showModal(){
			if($.cookie("show") == null) {
				/* if($(window).width() >= 767) {}*/
					$("#popup").show();
					$.cookie("show", "2");
				
					
				}else{
					$("#popup").hide();
				}	
			}
	$(".closeme").click(function(){
		 $("#popup").hide();
	})
})
</script>

<div id="homeScrollContainer" class=" relative overscroll-none  max-h-screen max-h-[calc(var(--vh,1vh)*100)] snap-mandatory snap-always snap-y" :class="[ menuOpen ? 'overflow-hidden overflow-y-hidden':' overflow-y-scroll  ' ]">
    <div id="homeTopHero" class=" snap-start snap-always">
        <div class=" max-h-screen max-h-[calc(var(--vh,1vh)*100)]  relative z-40 mx-auto items-center text-[1.5rem] ">
            <div id="homePageWrapper" class="w-full h-screen flex justify-center">
                <div class="w-full absolute md:h-[calc(100%-12rem)] h-[calc(100%-10rem)] pt-20 fill-white flex justify-center items-center">
                    <h1 class=" md:w-96 w-56  ">
                        <x-application-logo-animated></x-application-logo-animated>
                    </h1>
                </div>
                <div id="homePageSubTitleWrapper" class=" fixed  w-full overflow-hidden pointer-events-none bottom-[3.8rem] bottom-[calc(3.8rem+env(safe-area-inset-bottom))] md:bottom-[4.8rem] md:bottom-[calc(4.8rem+env(safe-area-inset-bottom))] lg:bottom-[calc(5rem+env(safe-area-inset-bottom))] md:h-28 h-20 mx-auto md:py-8 border-t border-t-white text-center font-victorianna-thin text-white text-2xl sm:text-4xl lg:text-6xl">
                    <h2 id="homePageSubTitle" class="relative h-full w-full">
                        <span class=" absolute top-1/2 w-full text-center left-0 transform -translate-y-1/2">
                            <span class="inline-block opacity-0 transform translate-y-full animate-pop-up-out" style="animation-delay: 0.2s;">brunch</span>
                            <span class="inline-block opacity-0 transform translate-y-full animate-pop-up-out" style="animation-delay: 0.25s;">&</span>
                            <span class="inline-block opacity-0 transform translate-y-full animate-pop-up-out" style="animation-delay: 0.3s;">{{ __('home.aperitif') }}</span>
                            <span class="inline-block opacity-0 transform translate-y-full animate-pop-up-out" style="animation-delay: 0.35s;">restaurant</span>
                        </span>
                        <span class="absolute top-1/2 w-full text-center left-0 transform -translate-y-1/2">
                            <span class="inline-block opacity-0 transform translate-y-full animate-pop-up-out" style="animation-delay: 3.2s;">pick</span>
                            <span class="inline-block opacity-0 transform translate-y-full animate-pop-up-out" style="animation-delay: 3.25s;">your</span>
                            <span class="inline-block opacity-0 transform translate-y-full animate-pop-up-out" style="animation-delay: 3.3s;">b(o)ttles</span>
                        </span>
                    </h2>
                </div>
            </div>

        </div>


        <div id="bottleCanvasContainer" class="absolute w-screen z-30 h-screen top-0 left-0" style="height:  100%;">
            <div id="loadingspinner" class="absolute top-[60%]  left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <svg class="animate-spin h-8 w-8 rounded-full bg-transparent border border-transparent  border-r-white/50 border-t-white/50" viewBox="0 0 24 24"></svg>
            </div>
            <canvas id="bottleCanvas" class="w-full h-full"></canvas>
        </div>
    </div>

    @include('about')

</div>





@stop