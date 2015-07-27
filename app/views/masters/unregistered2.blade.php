<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sticky footer &middot; Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
  {{ HTML::style('css/bootstrap.css')}}
  {{ HTML::style('css/bootswatch.min.css')}}
  {{ HTML::style('stock_css')}}
  {{ HTML::style('http://getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css')}}
  {{ HTML::style('css/workshop.css')}}
  {{ HTML::style('css/sweet-alert.css')}}

  @include('stock_css')



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>

<script src="/public/rock/css/js/sweet-alert.min.js"></script> 




<script type="text/javascript">
  jQuery(function($) {
    //var slide = false;
    var height = $('#footer_content').height();
    $('.footer_button').click(function() {
     // var docHeight = $(document).height();
      //var windowHeight = $(window).height();
      //var scrollPos = docHeight - windowHeight + height;
      $('#footer_content').animate({ height: 200}, 500);
      $("#footer_content").show();
      //if(slide == false) {
        //if($.browser.opera) {
         // $('html').animate({scrollTop: scrollPos+'px'}, 400);
       // } else {
        //  $('html, body').animate({scrollTop: scrollPos+'px'}, 400);
        //}
       // slide = true;
      //} else {
       // slide = false;
      //}
    });
  });
</script>


<script type="text/javascript">
  jQuery(function($) {
    $( ".dropdown-toggle" ).mousedown(function() {
      $('#footer_content').animate({ height:0}, 200);
    });
  });
</script>








<script type="text/javascript">
jQuery(function() {
    jQuery('.sort').sortable({
        tolerance: 'pointer',
        cursor: 'pointer',
        dropOnEmpty: true,
        connectWith: '.sort',
        update: function(event, ui) {
            if(this.id == 'sortable-delete') {
                jQuery('#'+ui.item.attr('id')).remove();
            } else {
                // Update code for the actual sortable lists
            }          
        }            
    });

//change name of dragged bead to pendand for storage
    $("#pendant").droppable({
        drop: function(event, ui) {
        //var id = ui.draggable.find('input:hidden').attr("id");
        ui.draggable.find('input:hidden').attr('name', 'pendant_id[]');
      }
    });

});
</script>




<script>
$(document).ready(function(){
  $(".colour_id,.type_id").click(function(){
  var filter = $(this).attr("class"); 
  var pid = $(this).attr("id"); 
   $("#beadSlider").load("/rock/public/bead/"+ filter + "/"+ pid + "",function(data){
    //  make selector draggable again
        $('.drag > li').draggable({helper:'clone',connectToSortable:'.sort'})
      });
  });
});




</script>


<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){


var outer=document.getElementById('mydiv').offsetWidth
var inner=document.getElementById('im').offsetWidth;
console.log(inner);
$('.scrolls').scrollLeft((inner-outer)/2)
  
 
});//]]>  

</script>







                     
                   
  </head>

  <body>
  



    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
          <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../" class="navbar-brand">Rock on Silver</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>



        
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            


             <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Workshop<span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                
                
                <li role="presentation" class="divider"></li>
                <li>{{ HTML::linkRoute('makes.create', 'New string') }}</li>

               @if(Auth::check())
                <li class="dropdown-submenu"><a href="#">Zoom</a>

                    <ul class="dropdown-menu">
                     <li><a href="/rock/public/users/scale/80">80</a></li>
                     <li><a href="/rock/public/users/scale/90">90</a></li>
                     <li><a href="/rock/public/users/scale/100">100</a></li>
                     <li><a href="/rock/public/users/scale/120">120</a></li>
                      <li><a href="/rock/public/users/scale/150">150</a></li>
                    </ul>
                    
              </li>
              @endif


              </ul>
            </li>



            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Gallery<span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li>{{ HTML::linkRoute('gallery.show', 'My private gallery', array('private','0','0')) }}</li>

                <li>{{ HTML::linkRoute('gallery.show', 'My public gallery', array('public','0','0')) }}</li>

                <li>{{ HTML::linkRoute('gallery.show', 'Public Gallery', array('public','0','0')) }}</li>


               @if(Auth::check())
                <li class="dropdown-submenu"><a href="#">Zoom</a>

                    <ul class="dropdown-menu">
                     <li><a href="/rock/public/users/scale/80">80</a></li>
                     <li><a href="/rock/public/users/scale/90">90</a></li>
                     <li><a href="/rock/public/users/scale/100">100</a></li>
                     <li><a href="/rock/public/users/scale/120">120</a></li>
                      <li><a href="/rock/public/users/scale/150">150</a></li>
                    </ul>
                    
              </li>
              @endif

              </ul>
            </li>
          </ul>








    <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">You <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a href="../default/">Default</a></li>
                <li class="divider"></li>


            @if(!Auth::check())
              <li>{{ HTML::link('users/register', 'Register') }}</li>   
              <li>{{ HTML::link('users/login', 'Login') }}</li>   
            @else
              <li>{{ HTML::link('users/logout', 'logout') }}</li>
              <li>{{ HTML::link('users/edit', 'Edit') }}</li>
            @endif


              </ul>
            </li>
          </ul>
@if(Auth::check())
          <p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link">{{ Auth::user()->email }}</a></p>
@endif

        </div>
      </div>
    

    
    </div>



      <div class="container">


@yield("content")


      @if(Session::has('message'))
        <p class="alert">{{ Session::get('message') }}</p>
      @endif
      
      </div>




	   


@include('masters.footerGallery')