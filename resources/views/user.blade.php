<!DOCTYPE html>
<html>
<head>
	<title>Cinema XXI</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
					Users
				</div>

				{{-- Tambah User --}}
				<div class="panel-body">
					@if(isset($user_edit))
						<form action="{{ route('user.update') }}" method="POST">
						<input type="hidden" name="id" value="{{ $user_edit->id }}">
					@else
						<form class="form-horizontal" role="form" method="POST"">
					@endif
							{{ csrf_field() }}
							<div class="form-group">
								<label for="name" class="col-md-4 control-label">Name</label>

								<div class="col-md-6">
									<input id="name" type="text" name="name" required autofocus
									@if(isset($user_edit)) value="{{ $user_edit->name }}" @endif>
								</div>
							</div>

							<div class="form-group">
								<label for="email" class="col-md-4 control-label">E-mail</label>

								<div class="col-md-6">
									<input id="email" type="email" name="email" required autofocus
									@if(isset($user_edit)) value="{{ $user_edit->email }}" @endif>
								</div>
							</div>

							@if(!isset($user_edit))
								<div class="form-group">
									<label for="password" class="col-md-4 control-label">Password</label>

									<div class="col-md-6">
										<input id="password" type="password" name="password" required autofocus>
									</div>
								</div>
							@endif

							<div class="form-group">
								<label for="type" class="col-md-4 control-label">Type</label>

								<div class="col-md-6">  
	                                <select name="type" class="form-control">
	                                    <option value="admin">Admin</option>
	                                    <option value="customerservice">Customer Service</option>
	                                </select>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">

									@if(isset($user_edit))
					                  <button type="submit" class="btn btn-warning">Ubah User</button>
					                @else
					                  <button type="submit" class="btn btn-success">Tambah User</button>
					                @endif
								</div>
							</div>
						</form>
				</div>

				{{-- table daftar User --}}

				<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
					                    <th style = "text-align: center;">Id</th>
					                    <th style = "text-align: center;">Nama User</th>
					                    <th style = "text-align: center;">Email User</th>
					                    <th style = "text-align: center;">Jabatan</th>
					                    <th style = "text-align: center;">Ubah / Hapus</th>
					                </tr>
								</thead>
								<tbody>
				                  @foreach($user as $us)
				                    @if($us->status == 1)
										<tr>
					                      <th style = "text-align: center;">{{ $us->id}}</th>
					                      <th style = "text-align: center;">{{ $us->name }}</th>
					                      <th style = "text-align: center;">{{ $us->email }}</th>
					                      <th style = "text-align: center;">{{ $us->type }}</th>
					                      <th style = "text-align: center;">
					                      <a href="{{ route('user.edit', $us->id) }}" class="btn btn-xs btn-warning">Ubah</a>
					                      &nbsp;&nbsp;/&nbsp;&nbsp;
					                        <!-- <form action="{{ route('user.delete', $us->id) }}" method="POST">
					                        {{ csrf_field() }}
					                        {{ method_field('DELETE') }}
					                        <input type="hidden" name="id" value="DELETE">
					                        <button type="sumbit" class="btn btn-danger">Hapus</button>
					                        </form> -->
					                        <a href="{{ route('user.delete', $us->id) }}" class="btn btn-xs btn-danger">Hapus</a>
					                      </th>
				                    	</tr>
				                    @endif
				                  @endforeach
				                </tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>