 @include('masters.header') 

 

     
                

<?php //return $answers[1]->Section; ?>


<body class="html not-front not-logged-in no-sidebars page-answers" >
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
  </div>
    



<div class="main-content">
<div class="container">

<div class="col-md-12">
<div class="backlink">
 <a href="/">BACK </a>
 </div>
 </div>

  <header role="banner" id="page-header">
    
      </header> <!-- /#page-header -->
<div class="view-content">
 
<?php $lasttitle="xxx"; ?>
  @foreach($answers as $answer)  
    <?php
      if($answer->section->title != $lasttitle){
        ?>


      <a class="btn btn-default" href="#{{$answer->section_id}}">{{$answer->section->title}}</a>
  <?php
      }
    $lasttitle=$answer->section->title

    ?>
  @endforeach
  <br><br>

  
      

         <div class="row">
        
<?php $lasttitle="xxx"; ?>
@foreach($answers as $answer)


    <?php
    
    if($answer->section->title != $lasttitle){
      ?>
      <hr>
    <h1 id="{{$answer->section_id}}">{{$answer->section->title}}</h1>
    
    
    <?php
    }
    $lasttitle=$answer->section->title
    ?>


        <div class="views-row views-row-1 views-row-odd views-row-first">
        <div class="col-xl-12">
    <div class="nodewrap__teaser--blog">
     

    
    <div class="col-xl-8">
    <div class="blog__title">
       <h3 property="schema:name" datatype="">
    {{$answer->title}} </h3> 

    </div>    


    <div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even" property="content:encoded">
        
        @if ($answer->text)
       {{$answer->text}}
        @endif



        @if ($answer->file)
        <div class="field-item even" rel="" resource="uploads/{{$answer->file}}">
        <span class="file"><img class="file-icon" alt="" title="application/{{pathinfo($answer->file, PATHINFO_EXTENSION);}}" src="file-type-icons/{{pathinfo($answer->file, PATHINFO_EXTENSION);}}.png" height="24px" width="24px">
        <a href="uploads/{{$answer->file}}" type="application/pdf; length=5153333">{{$answer->filetitle}}</a></span></div>
        @endif


        <?php 
          $x = 2; 
          while($x <= 15) {
          $file = "file" . $x;
          $filetitle = "filetitle" . $x;
           $path = "";
          
          
        
        ?>



        @if ($answer->$file)
        <div class="field-item even" rel="" resource="uploads/{{$answer->$file}}">
        <span class="file"><img class="file-icon" alt="" title="application/{{pathinfo($answer->$file, PATHINFO_EXTENSION);}}" src="file-type-icons/{{pathinfo($answer->$file, PATHINFO_EXTENSION);}}.png" height="24px" width="24px">
        <a href="{{$path}}/{{$answer->$file}}" type="application/pdf; length=5153333">{{$answer->$filetitle}}</a></span></div>
        @endif

          
          <?php
          $x++;
          } 
          ?>
 



</div></div></div><span rel="schema:url" resource="/blog-entry/answer-1-well-put-customer-centre-everything-we-do" class="rdf-meta"></span><span property="schema:name" content="answer 1: We’ll put the customer at the centre of everything we do " class="rdf-meta"></span>   
    </div>
    </div>
  </div>
  </div>
  


  @endforeach
  
  
  
  
</div>
    
  </div>

</div>

<footer>
    <div class="region region-footer">
    <section id="block-block-17" class="block block-block clearfix">

      
  

</section> <!-- /.block -->
  </div>
</footer>


</body>

