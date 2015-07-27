


<nav class="footer-navbar navbar navbar-default navbar-fixed-bottom" role="navigation">


 
    <!-- Your Footer Content -->

    <div id="footer_higher">
        <div id="footer_content">
            <div class="slider_wrapper">
                <div class="slider_container">
                    <ul id="beadSlider" class='items-list cf'>


                      
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div id="footer">
        <div class="container">
            <div class="holder">
                <p class="text-muted credit">

                      <div class="btn-group" > 
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      Colour <span class="caret caret-up"></span> </button>
      <ul class="dropdown-menu drop-up" role="menu">
<?php

  foreach($beadColours as $beadColour){
    echo "<li class='colour_id' id='$beadColour->id'><a href='#' class='footer_button'>$beadColour->name</a></li>";
        if ($beadColour->id == 0){
          echo "<li class='divider'></li>";
        }
       } 

?>
      </ul>
    </div>





        <div class="btn-group"> 
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      Birth sign <span class="caret caret-up"></span> </button>
      <ul class="dropdown-menu drop-up" role="menu">
<?php
  foreach($beadZodiacs as $beadZodiac)
    echo "<li class='zodiac_id' id='$beadZodiac->id'><a href='#' class='footer_button'>$beadZodiac->name</a></li>";
?>
      </ul>
    </div>
            
    <div class="btn-group"> 
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      Stone <span class="caret caret-up"></span> </button>
      <ul class="dropdown-menu drop-up" role="menu">
  <?php
  foreach($beadTypes as $beadType)
    echo "<li class='type_id' id='$beadType->id'><a href='#' class='footer_button'>$beadType->name</a></li>";
  ?>
      </ul>
    </div>
            
    <div class="btn-group"> 
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      Shape <span class="caret caret-up"></span> </button>
      <ul class="dropdown-menu drop-up" role="menu">
  <?php
  foreach($beadShapes as $beadShape)
    echo "<li class='shape_id' id='$beadShape->id'><a href='#' class='footer_button'>$beadShape->name</a></li>";
  ?>
      </ul>
    </div>
            
    <div class="btn-group"> 
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> 
      Size <span class="caret caret-up"></span> </button>
      <ul class="dropdown-menu drop-up" role="menu">
        <li><a href="#">Wellbeing</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div>
            
    <div class="btn-group"> 
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> 
      Wellbeing <span class="caret caret-up"></span> </button>
      <ul class="dropdown-menu drop-up" role="menu">
        <li><a href="#">Wellbeing</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div>       

            
    <div class="btn-group"> 
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> 
      Findings <span class="caret caret-up"></span></button>
      <ul class="dropdown-menu drop-up" role="menu">
<?php
  foreach($findingMechanisms as $findingMechanism)
    echo "<li class='mechanism_id' id='$findingMechanism->id'><a href='#' class='footer_button'>$findingMechanism->name</a></li>";
?>
      </ul>
    </div>
        



                </p>
            </div>
        </div>
    </div>
</nav>
</div>
</div>
</div>

<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->


<!--<script src="js/jquery.confirm.js"></script>-->
<script src="/rock/public/js/bootstrap.min.js"></script>
<script src="/rock/public/js/bootswatch.js"></script>
<script type="text/javascript" src="/rock/public/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="/rock/public/js/vendor/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="/rock/public/js/scripts.js"></script>


@yield("footer")


</body>
</html>