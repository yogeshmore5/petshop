<!DOCTYPE html>
<html>
    <head>
        <title>PetShop</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
					<a class="navbar-brand" href="{{ URL::to('service') }}">Services</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('service') }}">View All service Types</a></li>
                    <li><a href="{{ URL::to('service/create') }}">Add New Service Type</a>
                </ul>
            </nav>