@include('masters.header') 

<div class="container">


<h2>Update this address</h2>
	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>




<div class="clear_page"></div> 

{{ Form::model($address, array('route' => array('addresses.update', $address->id), 'method' => 'PATCH', 'class'=>'form-horizontal')) }}



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
    <label for="state" class="col-sm-2 control-label">State / Country</label>
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
    <label for="postal_code" class="col-sm-2 control-label">Postcode / Zip</label>
    <div class="col-sm-6">
      {{ Form::text('postal_code', null, array('class'=>'form-control', 'placeholder'=>'Postal code')) }}
    </div>
  </div>


   <div class="form-group">
    <label for="phone" class="col-sm-2 control-label">phone</label>
    <div class="col-sm-6">
      {{ Form::text('phone', null, array('class'=>'form-control', 'placeholder'=>'Phone')) }}
    </div>
  </div>

<!--   <div class="form-group">
    <div class="col-sm-offset-2 col-sm-6">
      <div class="checkbox">
        <label>
          {{ Form::checkbox('billing', '1') }}Is this your billing address?
        </label>
      </div>
    </div>
  </div> -->

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-6">

     {{ Form::submit('Update Address', array('class'=>'btn btn-large btn-success '))}}
    </div>
  </div>
{{ Form::close() }}


</div>


@include('masters.footerNoMenu') 