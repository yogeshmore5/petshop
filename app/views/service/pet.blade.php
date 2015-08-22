@include("../inc/header")

<div class="row">
	<div class="col-md-12">
		<h4 class="page-head-line">Service Type : {{ $serviceType }}</h4>
	</div>
</div>
<a class="btn btn-small btn-primary" style="margin-bottom:10px;" href="{{ URL::to('service/assign/'.$serviceId) }}">Update Service Type</a>	
<a class="btn btn-small btn-info" style="margin-bottom:10px;" href="{{ URL::to('service') }}">Go To Service Types</a>
@if (count($pets))
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Serial #</td>
            <td>Pet Types</td>
        </tr>
    </thead>
    <tbody>
    @foreach($pets as $key => $value)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $value->type }}</td>            
            
        </tr>
    @endforeach
    </tbody>
</table>
@else
<div class="alert alert-info" style="margin-top:10px">No Services added for {{ $serviceType }}
</div>
@endif
@include("../inc/footer")