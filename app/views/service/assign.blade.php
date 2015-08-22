@include("../inc/header")

<div class="row">
	<div class="col-md-12">
		<h4 class="page-head-line">Assign Services</h4>
	</div>
</div>
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

<div>
{{ Form::open(array('url' => 'service/allocate','method' => 'post','class'=>'form-horizontal')) }}

        {{ Form::label('type', 'Service Types:', array('class' => 'awesome')) }}
		{{ Form::select('service', $services, $id, array('class'=>'form-control','onchange'=>"reloadPage(this);")) }}
		{{ Form::label('pets', 'Pet Types*:') }}		
		<select class="form-control" multiple="multiple" name="pets[]" id="pets">
			@foreach($pets as $pet)
				<option value="{{$pet->id}}" @foreach($services_a as $p) @if($pet->id == $p->id)selected="selected"@endif @endforeach>
				{{$pet->type}}
				</option>
			@endforeach	
		</select>
		<br />
{{ Form::submit('Allocate', array('class' => 'btn btn-primary')) }}

<a class="btn btn-small btn-info" href="{{ URL::to('service') }}">Go To Service</a>      
{{ Form::close() }}
</div>
<script language="javascript">
function reloadPage(obj){
window.location = '/petshop/public/service/assign/'+obj.value;
}
</script>
@include("../inc/footer")