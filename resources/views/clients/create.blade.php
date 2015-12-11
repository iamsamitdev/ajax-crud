<!--
/** 
  * === FORM CREATE ===
  * add solsoForm in form class
*/
-->

{!! Form::open(array('url'=>'client','role' => 'form','class' => 'solsoForm'))!!}
	<div class="col-md-6">
		
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" class="form-control required" value="{{Input::old('name')}}">
			{!!$errors->first('name','<p class="error">:message</p>')!!}
		</div>

		<div class="form-group">
			<label for="name">Country</label>
			<input type="text" name="country" class="form-control required">
			{!!$errors->first('country','<p class="error">:message</p>')!!}
		</div>

		<div class="form-group">
			<label for="name">State</label>
			<input type="text" name="state" class="form-control required">
			{!!$errors->first('state','<p class="error">:message</p>')!!}
		</div>

		<div class="form-group">
			<label for="name">City</label>
			<input type="text" name="city" class="form-control required">
			{!!$errors->first('city','<p class="error">:message</p>')!!}
		</div>

		<div class="form-group">
			<label for="name">Zip Code</label>
			<input type="text" name="zip" class="form-control required">
			{!!$errors->first('zip','<p class="error">:message</p>')!!}
		</div>

		<div class="form-group">
			<label for="name">Address</label>
			<input type="text" name="address" class="form-control required">
			{!!$errors->first('address','<p class="error">:message</p>')!!}
		</div>
		
	</div>

	<div class="col-md-6">
		<div class="form-group">
			<label for="name">Contact</label>
			<input type="text" name="contact" class="form-control required">
			{!!$errors->first('contact','<p class="error">:message</p>')!!}
		</div>

		<div class="form-group">
			<label for="name">Phone</label>
			<input type="text" name="phone" class="form-control required">
			{!!$errors->first('phone','<p class="error">:message</p>')!!}
		</div>

		<div class="form-group">
			<label for="name">Email</label>
			<input type="text" name="email" class="form-control required">
			{!!$errors->first('email','<p class="error">:message</p>')!!}
		</div>

		<div class="form-group">
			<label for="name">Website</label>
			<input type="text" name="website" class="form-control required">
			{!!$errors->first('website','<p class="error">:message</p>')!!}
		</div>

		<div class="form-group">
			<label for="name">Bank</label>
			<input type="text" name="bank" class="form-control required">
		</div>

		<div class="form-group">
			<label for="name">Bank Account</label>
			<input type="text" name="bank_account" class="form-control required">
		</div>
	</div>

	<div class="col-md-12">
		<div class="form-group">
			<label for="description">Description</label>
			<textarea name="description" class="form-control" rows="7"></textarea>
		</div>
	</div>

	<div class="form-group col-md-12">
		<button type="button" class="btn btn-success btn-lg solsoSave" 
		data-message-title="Create notification" 
		data-message-error="Validation error messages" 
		data-message-success="Data was saved">
		<i class="fa fa-save"></i> Save
		</button>
	</div>
{!! Form::close()!!}