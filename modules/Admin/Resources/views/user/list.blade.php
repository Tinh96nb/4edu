@extends('app::layouts.master')
@section('content')
<section class="content">
	<div class="box">
		<div class="row">
			<form action="" method="get" >
				<div class="col-md-12 form-group">
					<div class="box-body">
						<div class="col-lg-3">
							<h1>Danh sách User</h1>
						</div>

						<div class="col-md-offset-10 relative">
							<input type="text" name="keyword" class="form-control" placeholder="Finding here...." value="{{$searchKeyword}}">
							<button type="submit" class="add-on-input btn btn-sm btn-success">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>  

			</form>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="box-body table-responsive">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th>ID</th>
								<th>Tên</th>
								<th >Mail</th>
								<th>Ngày sinh</th>
								<th>Admin</th>
								<th>
									<a href="" class="btn btn-success btn-xs">
										<i class="fa fa-plus"></i> Tác Vụ
									</a>
								</th>
							</tr>
							<?php $i=1; ?>
							@foreach ($user as $element)
							<tr>
								<td>{{ $i++ }}</td>
								<td>{{$element->fullname}}</td>
								<td>{{$element->email}}</td>
								<td>{{$element->birthday}}</td>
								<td>{{$element->is_admin}}</td>
								<td>
									<a href="{{ route('user.update',['id'=> $element->id]) }}" class="btn btn-info btn-xs">
										<i class="fa fa-pencil"></i> Edit
									</a>
									<a href="{{ route('user.remove',['id'=> $element->id]) }}" class="btn btn-danger btn-xs">
										<i class="fa fa-remove"></i> Remove
									</a>
								</td>
							</tr>
							
							@endforeach
						</tbody>
					</table>
					<div class="col-md-offset-4">
						<ul class="pagination">{{ $user->render()}}</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
