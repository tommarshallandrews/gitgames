@include('masters.header') 

<div class="container">


<h2>Add an address</h2>
	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>




<div class="clear_page"></div> 
{{ Form::open(array('url'=>'addresses', 'class'=>'form-horizontal')) }}


--




  <div class="form-group">
    <label for="first_name" class="col-sm-2 control-label">First Name</label>
    <div class="col-sm-6">
      {{ Form::text('first_name', null, array('class'=>'form-control', 'placeholder'=>'First Name')) }}
    </div>
  </div>

    <div class="form-group">
    <label for="last_name" class="col-sm-2 control-label">Last Name</label>
    <div class="col-sm-6">
      {{ Form::text('last_name', null, array('class'=>'form-control', 'placeholder'=>'Last Name')) }}
    </div>
  </div>


   <div class="form-group ">
    <label for="address1" class="col-sm-2 control-label">Address 1</label>
    <div class="col-sm-6">
      {{ Form::text('address1', null, array('class'=>'form-control', 'placeholder'=>'Address 1')) }}
    </div>
  </div>

        <div class="form-group">
    <label for="address2" class="col-sm-2 control-label">Adress 2</label>
    <div class="col-sm-6">
      {{ Form::text('address2', null, array('class'=>'form-control', 'placeholder'=>'Address 2')) }}
    </div>
  </div>

    <div class="form-group">
    <label for="city" class="col-sm-2 control-label">City</label>
    <div class="col-sm-6">
      {{ Form::text('city', null, array('class'=>'form-control', 'placeholder'=>'city')) }}
    </div>
  </div>

  <div class="form-group">
    <label for="state" class="col-sm-2 control-label">State / County</label>
    <div class="col-sm-6">
      {{ Form::text('state', null, array('class'=>'form-control', 'placeholder'=>'County / State')) }}
    </div>
  </div>

    <div class="form-group">
    <label for="state" class="col-sm-2 control-label">Country</label>
    <div class="col-sm-6">
      {{ Form::text('country', null, array('class'=>'form-control', 'placeholder'=>'Country')) }}
    </div>
  </div>

  <div class="form-group">
    <label for="postal_code" class="col-sm-2 control-label">Postcode</label>
    <div class="col-sm-6">
      {{ Form::text('postal_code', null, array('class'=>'form-control', 'placeholder'=>'Postal code')) }}
    </div>
  </div>


   <div class="form-group">
    <label for="phone" class="col-sm-2 control-label">Phone</label>
    <div class="col-sm-6">
      {{ Form::text('phone', null, array('class'=>'form-control', 'placeholder'=>'Phone')) }}
    </div>
  </div>



  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-6">

     {{ Form::submit('Add Address', array('class'=>'btn btn-large btn-success'))}}
    </div>
  </div>
{{ Form::close() }}


</div>


@include('masters.footerNoMenu') 