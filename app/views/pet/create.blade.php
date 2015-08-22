@include("../inc/header")
<div class="row">
	<div class="col-md-12">
		<h4 class="page-head-line">Add Pet Type</h4>
	</div>
</div>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

<div>
{{ Form::open(array('url' => 'pet','class'=>'form-horizontal')) }}
	{{ Form::label('type', 'Type *:') }}
	{{ Form::text('type', Input::old('Type'), array('class' => 'form-control')) }}
	{{ Form::submit('Add ', array('class' => 'btn btn-primary', 'style'=>'margin-top:10px;')) }}
	<a class="btn btn-small btn-info" style="margin-top:10px;" href="{{ URL::to('pet') }}">Go Back</a>	
{{ Form::close() }}
</div>

@include("../inc/footer")