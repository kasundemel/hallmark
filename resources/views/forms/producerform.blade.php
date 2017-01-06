@extends('app')
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<script type='text/javascript' src='{{ URL::asset("js/app.js") }}'></script>
		<script type="text/javascript">
			var counter = 1;
			var limit = 100;
			function addInput(divName){

    			 if (counter == limit)  {
       				   alert("You have reached the limit of adding " + counter + " inputs");
   			  	}
    		 	else {
       				   var newdiv = document.createElement('div');
       				   newdiv.id='dynamicInput';
        		   	  newdiv.innerHTML='<br><div class="col-md-8 col-md-offset-2"><hr></div><div class="row"><div class="col-md-3 col-md-offset-2"><h4 class="producerinfo"><b>Producer Information : ' + (counter + 1) +'</b></h4></div></div></br><div class="row"><div class="col-md-2 col-md-offset-2"><label for="pf_name[]">Producer First Name :*</label></div><div class="col-md-6"><input required="required" class="form-control" placeholder="Enter Producer First Name" name="pf_name[' + (counter) +']" type="text"></div></div></br><div class="row"><div class="col-md-2 col-md-offset-2"><label for="pl_name[]">Producer Last Name :*</label></div><div class="col-md-6"><input required="required" class="form-control" placeholder="Enter Producer Last Name" name="pl_name[' + (counter) +']" type="text"></div></div></br><div class="row"><div class="col-md-2 col-md-offset-2"><label for="p_birthday[]" 20-Sep-2016="20-Sep-2016">Producer Date of Birth :*</label></div><div class="col-md-6"><input class="form-control" id="p_birthday" onClick="myPassword()" name="p_birthday[' + (counter) +']" type="date"></div></div></br><div class="row"><div class="col-md-2 col-md-offset-2"><label for="p_security_no[]">Producer Social Security Number :*</label></div><div class="col-md-6"><input required="required" class="form-control input-medium bfh-phone mask1" id="mypassword' + (counter) +'" maxlength="11" name="p_security_no[' + (counter) +']" type="text"></div></div></br><div class="col-md-8 col-md-offset-2"><div class="text-center"><h4 class="subtitle"><u>Hallmark States Licensed In</u></h4><!DOCTYPE html><html><head><title>Document</title><link rel="stylesheet" href="http://hallmark/css/app.css"></head><body></body><body></body></html></div></div><br></br><br></br><div class="row"><div class="col-md-4 col-md-offset-2 col-xs-12"><table class="table table-bordered"><tr class="table-title"><th><div class="text-center">State</div></th><th><div class="text-center">Producer License Number</div></th></tr><tr class="table-content"><td><div class="text-center"><label for="p_licence_state[]">AR</label></div></td><td><input class="form-control" name="p_licence_no[' + (counter) +'][AR]" type="text"></td></tr><tr class="table-content"><td><div class="text-center"><label for="p_licence_state[]" class="label1">AZ</label></div></td><td><input class="form-control" name="p_licence_no[' + (counter) +'][AZ]" type="text"></td></tr><tr class="table-content"><td><div class="text-center"><label for="p_licence_state[]" class="label1">CO</label></div></td><td><input class="form-control" name="p_licence_no[' + (counter) +'][CO]" type="text"></td></tr><tr class="table-content"><td><div class="text-center"><label for="p_licence_state[]" class="label1">IN</label></div></td><td><input class="form-control" name="p_licence_no[' + (counter) +'][IN]" type="text"></td></tr><tr class="table-content"><td><div class="text-center"><label for="p_licence_state[]" class="label1">KY</label></div></td><td><input class="form-control" name="p_licence_no[' + (counter) +'][KY]" type="text"></td></tr><tr class="table-content"><td><div class="text-center"><label for="p_licence_state[]" class="label1">MT</label></div></td><td><input class="form-control" name="p_licence_no[' + (counter) +'][MT]" type="text"></td></tr><tr class="table-content"><td><div class="text-center"><label for="p_licence_state[]" class="label1">NM</label></div></td><td><input class="form-control" name="p_licence_no[' + (counter) +'][NM]" type="text"></td></tr></table></div><div class="col-md-4 col-xs-12"><table class="table table-bordered"><tr class="table-title"><th><div class="text-center">State</div></th><th><div class="text-center">Producer License Number</div></th></tr><tr class="table-content"><td><div class="text-center"><label for="p_licence_state[]">NV</label></div></td><td><input class="form-control" name="p_licence_no[' + (counter) +'][NV]" type="text"></td></tr><tr class="table-content"><td><div class="text-center"><label for="p_licence_state[]" class="label2">OH</label></div></td><td><input class="form-control" name="p_licence_no[' + (counter) +'][OH]" type="text"></td></tr><tr class="table-content"><td><div class="text-center"><label for="p_licence_state[]" class="label2">OK</label></div></td><td><input class="form-control" name="p_licence_no[' + (counter) +'][OK]" type="text"></td></tr><tr class="table-content"><td><div class="text-center"><label for="p_licence_state[]" class="label2">TN</label></div></td><td><input class="form-control" name="p_licence_no[' + (counter) +'][TN]" type="text"></td></tr><tr class="table-content"><td><div class="text-center"><label for="p_licence_state[]" class="label2">TX</label></div></td><td><input class="form-control" name="p_licence_no[' + (counter) +'][TX]" type="text"></td></tr><tr class="table-content"><td><div class="text-center"><label for="p_licence_state[]" class="label2">WA</label></div></td><td><input class="form-control" name="p_licence_no[' + (counter) +'][WA]" type="text"></td></tr></table></div></div>';         		       
			

						  document.getElementById('dynamicInput').appendChild(newdiv);
                          counter++;
                }
            }
		</script>
		<script type="text/javascript">
			function validateForm() {
    			var a = document.getElementById('agency_name').value;
  				if (a == null || a == '') {
      				  alert("Agency Name must be filled out");
        			  return false;
   				 }
   				 var b = document.getElementById('agency_code').value;
  				if (b == null || b == '') {
      				  alert("Agency Code must be filled out");
        			  return false;
   				 }
			}
		</script>
	</head>
	<body>
	
	</body>
	</html>

	<div class="container">
		<div class="row">
			<div class="col-md-4"><div class="center-block">@include('images.logoimage')</div></div>
			<div class="col-md-8">		
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8"><div class="text-center">@include('paragraph.topic')</div></div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<hr></br>
	<div class="container">

		{!! Form::open(['url'=>'home/submit','method'=>'post'],array('id'=>'agentform')) !!}
		{!! Form::token() !!}
		

		<div id="agentinfo" class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2">
				{!! Form::label('agency_name','Agency Name :*') !!}
			</div>
			<div class="col-md-6">
				{!! Form::text('agency_name',null,array('required'=>'required','class' => 'form-control','placeholder'=>'Enter Agency Name')) !!}
			</div>
			<div class="col-md-2"></div>
		</div>
		</br>

		<div class="row">
			<div class="col-md-2 col-md-offset-2">
				{!! Form::label('agency_code','Agency Code Number :*') !!}
			</div>
			<div class="col-md-6">
				{!! Form::number('agency_code',null,array('required'=>'required','class' => 'form-control','placeholder'=>'Enter Agency Code Number')) !!}
			</div>
			<div class="col-md-2"></div>	
		</div>

		<div class="form-group row" id="dynamicInput">
			<div class="col-md-8 col-md-offset-2"><hr></div>
			<div class="row">
				<div class="col-md-3 col-md-offset-2"><h4 class="producerinfo"><b>Producer Information :</b></h4></div>
			</div>
			</br>
			<div class="row">
				<div class="col-md-2 col-md-offset-2">
					{!! Form::label('pf_name[]','Producer First Name :*') !!}
				</div>
				<div class="col-md-6">
					{!! Form::text('pf_name[0]',null,array('required'=>'required','class' => 'form-control','placeholder'=>'Enter Producer First Name')) !!}
				</div>
			</div> 
			</br>

			<div class="row">
				<div class="col-md-2 col-md-offset-2">
					{!! Form::label('pl_name[]','Producer Last Name :*') !!}
				</div>
				<div class="col-md-6">
					{!! Form::text('pl_name[0]',null,array('required'=>'required','class' => 'form-control','placeholder'=>'Enter Producer Last Name')) !!}
				</div>
			</div>
			</br>

			<div class="row">
				<div class="col-md-2 col-md-offset-2">
					{!! Form::label('p_birthday[]','Producer Date of Birth :*',date('d-M-Y')) !!}
				</div>
				<div class="col-md-6">
					{!! Form::date('p_birthday[0]',null,array('class' => 'form-control','id'=>'p_birthday','onClick'=>'myPassword()')) !!}
				</div>					
			</div>
			</br>

			<div class="row">
				<div class="col-md-2 col-md-offset-2">
					{!! Form::label('p_security_no[]','Producer Social Security Number :*') !!}
				</div>
				<div class="col-md-6">
					<div class="input-medium bfh-phone">
						{!! Form::text('p_security_no[0]',null,array('required'=>'required','class' => 'form-control input-medium bfh-phone mask1','id'=>'mypassword' ,'maxlength' => '11')) !!}
					</div>
					
				</div>			
			</div>
			</br>

				<div class="col-md-8 col-md-offset-2">
					<div class="text-center">@include("paragraph.subtitle")</div>
				</div>
				<br></br><br></br>

				<div class="row">
					<div class="col-md-4 col-md-offset-2 col-xs-12">
						<table class="table table-bordered">
						<tr class="table-title">
							<th><div class="text-center">State</div></th>
							<th><div class="text-center">Producer License Number</div></th>
						</tr>
						<tr class="table-content">
							<td><div class="text-center">{!! Form::label('p_licence_state[]','AR') !!}</div></td>
							<td>{!! Form::text('p_licence_no[0][AR]',null,array('class' => 'form-control')) !!}</td>
						</tr>
						<tr class="table-content">
							<td><div class="text-center">{!! Form::label('p_licence_state[]','AZ',array('class' => 'label1')) !!}</div></td>
							<td>{!! Form::text('p_licence_no[0][AZ]',null,array('class' => 'form-control')) !!}</td>
						</tr>
						<tr class="table-content">
							<td><div class="text-center">{!! Form::label('p_licence_state[]','CO',array('class' => 'label1')) !!}</div></td>
							<td>{!! Form::text('p_licence_no[0][CO]',null,array('class' => 'form-control')) !!}</td>
						</tr>
						<tr class="table-content">
							<td><div class="text-center">{!! Form::label('p_licence_state[]','IN',array('class' => 'label1')) !!}</div></td>
							<td>{!! Form::text('p_licence_no[0][IN]',null,array('class' => 'form-control')) !!}</td>
						</tr>
						<tr class="table-content">
							<td><div class="text-center">{!! Form::label('p_licence_state[]','KY',array('class' => 'label1')) !!}</div></td>
							<td>{!! Form::text('p_licence_no[0][KY]',null,array('class' => 'form-control')) !!}</td>
						</tr>
						<tr class="table-content">
							<td><div class="text-center">{!! Form::label('p_licence_state[]','MT',array('class' => 'label1')) !!}</div></td>
							<td>{!! Form::text('p_licence_no[0][MT]',null,array('class' => 'form-control')) !!}</td>
						</tr>
						<tr class="table-content">
							<td><div class="text-center">{!! Form::label('p_licence_state[]','NM',array('class' => 'label1')) !!}</div></td>
							<td>{!! Form::text('p_licence_no[0][NM]',null,array('class' => 'form-control')) !!}</td>
						</tr>
					</table>
					</div>
					<div class="col-md-4 col-xs-12">
						<table class="table table-bordered">
							<tr class="table-title">
								<th><div class="text-center">State</div></th>
								<th><div class="text-center">Producer License Number</div></th>
							</tr>
							<tr class="table-content">
								<td><div class="text-center">{!! Form::label('p_licence_state[]','NV') !!}</div></td>
								<td>{!! Form::text('p_licence_no[0][NV]',null,array('class' => 'form-control')) !!}</td>
							</tr>
							<tr class="table-content">
								<td><div class="text-center">{!! Form::label('p_licence_state[]','OH',array('class' => 'label2')) !!}</div></td>
								<td>{!! Form::text('p_licence_no[0][OH]',null,array('class' => 'form-control')) !!}</td>
							</tr>
							<tr class="table-content">
								<td><div class="text-center">{!! Form::label('p_licence_state[]','OK',array('class' => 'label2')) !!}</div></td>
								<td>{!! Form::text('p_licence_no[0][OK]',null,array('class' => 'form-control')) !!}</td>
							</tr>
							<tr class="table-content">
								<td><div class="text-center">{!! Form::label('p_licence_state[]','TN',array('class' => 'label2')) !!}</div></td>
								<td>{!! Form::text('p_licence_no[0][TN]',null,array('class' => 'form-control')) !!}</td>
							</tr>
							<tr class="table-content">
								<td><div class="text-center">{!! Form::label('p_licence_state[]','TX',array('class' => 'label2')) !!}</div></td>
								<td>{!! Form::text('p_licence_no[0][TX]',null,array('class' => 'form-control')) !!}</td>
							</tr>
							<tr class="table-content">
								<td><div class="text-center">{!! Form::label('p_licence_state[]','WA',array('class' => 'label2')) !!}</div></td>
								<td>{!! Form::text('p_licence_no[0][WA]',null,array('class' => 'form-control')) !!}</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>

			<br>
			<div class="button-area">
				<div class="col-md-8 col-md-offset-2">
					<p class="text-center">If you have questions,please contact our Internal Marketing Department at (800) 486-5616,extension 3163; or email us at <a href="https://mail.google.com/mail/u/0/#inbox?compose=1573e08f396e45a1" target="_top">marketing@hallmarkinsco.com
					</a>
					</p>
				</div>
				</br>
				</br>
					<div class="col-md-2 col-md-offset-5 col-xs-12 text-center">
						{!! Form::button('Add Additional Producer',array('class'=>'btn btn-success','onClick'=>'addInput(dynamicInput)')) !!}
					</div>
					</br><br><br>
					<div class="col-md-2 col-md-offset-5 col-xs-12 text-center">
						{!! Form::submit('Submit',array('class'=>'btn btn-success','onClick'=> 'validateForm()')) !!}
					</div></br>
			</div>
			</br></br>
		</div>
	</div>
	</br>
	</br>
	</br>
		{!! Form::close() !!}
		@include('paragraph.information')