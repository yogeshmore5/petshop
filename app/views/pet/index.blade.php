@include("../inc/header")

<div class="row">
	<div class="col-md-12">
		<h4 class="page-head-line">Pet Types</h4>
	</div>
</div>
<!-- will be used to show session flash message -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<a class="btn btn-small btn-primary" style="margin-bottom:10px" href="{{ URL::to('pet/create') }}">Add New Pets</a>

@if (count($pets))
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Serial #</td>
            <td>Type</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($pets as $key => $value)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $value->type }}</td>            
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('pet/'.$value->id.'/services') }}">Show Services</a>
				<!-- delete the pet type -->
				{{ Form::open(array('url' => 'pet/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-warning','onclick'=>"return confirm('Are you sure you want to delete?')")) }}
                {{ Form::close() }}
			</td>
        </tr>
    @endforeach
    </tbody>
</table>
<?php
// This can be activated for pagination 
// echo $pets->links(); ?>
@else
<div class="alert alert-info" style="margin-top:10px">No Pets added
</div>
@endif
@include("../inc/footer")