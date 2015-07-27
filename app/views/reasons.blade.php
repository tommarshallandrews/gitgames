 @include('masters.header') 

 


            	


                
                
     
                




<body class="html not-front not-logged-in no-sidebars page-pledges" >
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

  <div class="row row-eq-height">
   
      
<div class="view view-pledges view-id-pledges view-display-id-page view-dom-id-92251a88589ab9ad6bd17f6f17e2249a">
        
  
  
      <div class="view-content">
        

@foreach($reasons as $reason)


   


  <div class="field-item even">
<div class="col-sm-12 col-md-6">
<div class="nodewrap__fields clearfix" style="height: 430px;">    
    <div class="field field-name-field-image field-type-image field-label-hidden"><div class="field-items"><div class="field-item even"><img typeof="foaf:Image" src="uploads/{{$reason->image}}" width="200" height="252" alt="" class="loaded"></div></div></div><div class="field field-name-field-title field-type-text field-label-hidden"><div class="field-items"><div class="field-item even">{{$reason->title}}</div></div></div><div class="field field-name-field-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even"><p><strong>{{$reason->job}}</strong></p>
<p>{{$reason->text}}</p>

</div></div></div></div>
</div>
</div>
  


  @endforeach
  
  
  
  
</div>
    
  </div>
</div>
</div>

<footer>
    <div class="region region-footer">
    <section id="block-block-17" class="block block-block clearfix">

      
  

</section> <!-- /.block -->
  </div>
</footer>
  <script src="http://www.axa-anewlevel.co.uk/sites/clpitch.vded-ll-003.servers.wirehive.net/files/js/js_h5pUc2x9Uh8Pl1QqK1Xj-8G295EapUWRnbPNEp5xuvA.js"></script>
<script>
    jQuery(document).ready(function($) {
    cookieControl({
        introText: '<p>This site uses cookies to store information on your computer.</p>',
        fullText: '<p>Some cookies used by this website are essential, and the website won\'t work as intended without them. These cookies are set when you submit a form, login or interact with the website by doing something that goes beyond clicking on simple links.</p><p>We also use <a href=\"http://www.google.com/analytics/learn/privacy.html\" target=\"_blank\">Google Analytics cookies</a> to anonymously track visitors.</p><p>By using our site you accept the terms of our <a href="/privacy-policy">Privacy Policy</a>.',
        theme: 'light',
        html: '<div id="cccwr"><div id="ccc-state" class="ccc-pause"><div id="ccc-icon"><button><span>Cookie Control</span></button></div><div class="ccc-widget"><div class="ccc-outer"><div class="ccc-inner"><h2>Cookie Control</h2><div class="ccc-content"><p class="ccc-intro"></p><div class="ccc-expanded"></div><div id="ccc-cookies-switch" style="background-position-x: 0;"><a id="cctoggle" href="#" style="background-position-x: 0;" name="cctoggle"><span id="cctoggle-text">Cookies test</span></a></div><div id="ccc-implicit-warning">(One cookie will be set to store your preference)</div><div id="ccc-explicit-checkbox"><label><input id="cchide-popup" type="checkbox" name="ccc-hide-popup" value="Y" /> Do not ask me again<br /></label> (Ticking this sets a cookie to hide this popup if you then hit close. This will not store any personal information)</div><p class="ccc-about"><small><a href="http://www.civicuk.com/cookie-law" target="_blank">About this tool</a></small></p><a class="ccc-icon" href="http://www.civicuk.com/cookie-law" target="_blank"title="About Cookie Control">About Cookie Control</a><button class="ccc-close">Close</button></div></div></div><button class="ccc-expand">read more</button></div></div></div>',
        position: 'left',
        shape: 'triangle',
        startOpen: true,
        autoHide: 2000,
        onAccept: function(cc){cookiecontrol_accepted(cc)},
        onReady: function(){},
        onCookiesAllowed: function(cc){cookiecontrol_cookiesallowed(cc)},
        onCookiesNotAllowed: function(cc){cookiecontrol_cookiesnotallowed(cc)},
        countries: '',
        subdomains: true,
        cookieName: 'cunningham-lindsey_cookiecontrol',
        iconStatusCookieName: 'ccShowCookieIcon',
        consentModel: 'information_only'
        });
      });
    </script>
<script>function cookiecontrol_accepted(cc) {
cc.setCookie('ccShowCookieIcon', 'no');jQuery('#ccc-icon').hide();
}</script>
<script>function cookiecontrol_cookiesallowed(cc) {

}</script>
<script>function cookiecontrol_cookiesnotallowed(cc) {

}</script>
<script src="http://www.axa-anewlevel.co.uk/sites/clpitch.vded-ll-003.servers.wirehive.net/files/js/js_B2uv6dkjoYobfQVyuXdchgrpnnx4oM0TkP_bDVf8Qrg.js"></script>
</body>




 @include('masters.footerNoMenu') 

