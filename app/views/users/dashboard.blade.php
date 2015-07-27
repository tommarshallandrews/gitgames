 @include('masters.header') 


<div class='container'>

<h1>Dashboard</h1>

<p>Welcome to your Dashboard. You rock!</p>

{{ Auth::user()->lastname }}

</div>

 @include('masters.footerNoMenu') 