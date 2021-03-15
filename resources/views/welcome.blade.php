<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kurnia Drajat Wibowo Web Developer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/master.css') }}">
		<style>
			body {
				color: rgb(255, 255, 255);
				background-color: cornflowerblue;
				font-size: 20px;
			}
			input[type="text"]
			{
				width:750px;
				height: 100px;
			}

		</style>
    </head>
    <body>
      	<nav class="navbar navbar-default navbar-fixed-top navbar-dark bg-dark" style="font-size: x-large">
    		<ul class="nav navbar-nav">
			<li style="font-family: sans-serif"><a href="https://www.instagram.com/drajat_wibowoo/">My Instagram</a></li>
			<li style="font-family: sans-serif"><a href="https://github.com/kurniadrajat?tab=repositories">My Github</a></li>
        	</ul>
	    </nav>
	    <br><br><br><br>
		<div class="container">
				<div class="form-group row add">
					<div class="col-7 col-lg-8">
						<input type="text" class="form-control" id="name" name="name"
							placeholder="Bebas Tambahkan Apa Saja" required>
						<p class="error text-center alert alert-danger hidden"></p>
					</div>
					<div class="col-lg-4">
						<button class="btn btn-primary" type="submit" id="add">
							<span class="glyphicon glyphicon-plus"></span> Tambahkan
						</button>
					</div>
				</div>
			{{ csrf_field() }}
			<div class="table-responsive text-center">
				<table class="table table-borderless" id="table">
					<thead>
						<tr>
							<th class="text-center">Id</th>
							<th class="text-center">Name</th>
							<th class="text-center">Actions</th>
						</tr>
					</thead>
					@foreach($data as $item)
					<tr class="item{{$item->id}}">
						<td>{{$item->id}}</td>
						<td>{{$item->name}}</td>
						<td><button class="edit-modal btn btn-info" data-id="{{$item->id}}"
								data-name="{{$item->name}}">
								<span class="glyphicon glyphicon-edit"></span> Edit
							</button>
							<button class="delete-modal btn btn-danger"
								data-id="{{$item->id}}" data-name="{{$item->name}}">
								<span class="glyphicon glyphicon-trash"></span> Delete
							</button></td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
		<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"></h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label class="control-label col-sm-2" for="id">ID:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="fid" disabled>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="name">Name:</label>
								<div class="col-sm-10">
									<input type="name" class="form-control" id="n">
								</div>
							</div>
						</form>
						<div class="deleteContent">
							Apakah yakin akan menghapus ? <span class="dname"></span> ? <span
								class="hidden did"></span>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn actionBtn" data-dismiss="modal">
								<span id="footer_action_button" class='glyphicon'> </span>
							</button>
							<button type="button" class="btn btn-warning" data-dismiss="modal">
								<span class='glyphicon glyphicon-remove'></span> Keluar
							</button>
						</div>
					</div>
				</div>
			</div>
		<script src="{{ asset('js/app.js') }}"></script>
		<script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
