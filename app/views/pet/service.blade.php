@include("../inc/header")
<div class="row">
	<div class="col-md-12">
		<h4 class="page-head-line">Services Availabe For : {{ $petType }}</h4>
	</div>
</div>
<a class="btn btn-small btn-info"  style="margin-bottom:10px;" href="{{ URL::to('pet') }}">Go To Pet Types</a>	

@if (count($services))
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Serial #</td>
            <td>Service Types</td>            
        </tr>
    </thead>
    <tbody>
    @foreach($services as $key => $value)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $value->type }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@else
<div class="alert alert-info" style="margin-top:10px">No Services added for {{ $petType }}
</div>
@endif
@include("../inc/footer")