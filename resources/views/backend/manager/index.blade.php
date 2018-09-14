@extends('backend.layouts.master')

@section('title', 'Менеджеры')

@section('content')
	<div class="container-fluid">
		<div class="container" style="padding: 25px 0;">
			<div class="row">
				<div class="col-md-11">
					<div class="pull-left">
						<h1 style="font-size: 1.5rem; margin: 5px 0;">Менеджеры компании Zeta tour</h1>
					</div>
					<div class="pull-right">
						<h1 style="margin: 15px 0;"><a href="{{ route('manager.create') }}" class="btn btn-sm btn-success">Добавить</a></h1>
					</div>
					<div class="table-responsive">
						
						@if ($message = Session::get('success'))
							<div class="alert alert-success" id="edit-success">
								<p>{{ $message }}</p>
							</div>
						@endif
						<table class="table table-hover table-bordered">
							<thead>
								<tr>
									<th>Имя</th>
									<th>Отдел</th>
									<th>Общий план</th>
									<th>Дата</th>
									<th>Действия</th>
								</tr>
							</thead>
							<tbody>
								@forelse( $managers as $manager )
									<tr>
										<td>{{ $manager->name }}</td>
										<td>{{ $manager->department }}</td>
										<td>{{ $manager->overall_plan }}</td>
										<td>{{ $manager->created_at }}</td>
										<td>
											<a href="{{ action('ManagersController@edit', $manager->id) }}" class="btn btn-sm btn-primary" value="Edit" >Редактировать</a>
											<span style="width: 5px;"></span>
											<form action="{{ route('manager.destroy', $manager->id) }}" method="POST" style="display: inline-block;">
												{{ csrf_field() }}
												{{ method_field('DELETE') }}
												<input type="submit" class="btn btn-sm btn-danger" value="Удалить">
											</form>
										</td>
								@empty
									<h3>Нет данных</h3>	
									</tr>
								@endforelse
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	$('.alert-success').delay(3200).fadeOut(800);
@endsection