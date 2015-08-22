@include("../inc/header")
<div class="row">
	<div class="col-md-12">
		<h4 class="page-head-line">Service Types</h4>
	</div>
</div>

<!-- will be used to show session flash message -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<a class="btn btn-small btn-primary" style="margin:10px 0px 10px 0px;" href="{{ URL::to('service/create') }}">Add New Service</a>
<a class="btn btn-small btn-primary" style="margin:10px 0px 10px 0px;" href="{{ URL::to('service/assign') }}">Manage Services</a>

@if (count($services))
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Serial #</td>
            <td>Type</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($services as $key => $value)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $value->type }}</td>            
            <td>
				<a class="btn btn-small btn-info" href="{{ URL::to('service/'.$value->id.'/pets') }}">Show Pets</a>
                <!-- delete the pet type -->
				{{ Form::open(array('url' => 'service/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-warning','onclick'=>"return confirm('Are you sure you want to delete?')")) }}
                {{ Form::close() }}
			</td>
        </tr>
    @endforeach
    </tbody>
</table>
@else
	<div class="alert alert-info" style="margin-top:10px">No Services added</div>
@endif
@include("../inc/footer")