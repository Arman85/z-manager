@extends('backend.layouts.master')

@section('title', 'Продажи')

@section('content')
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-11" style="margin: 30px 0;">
					<div class="pull-left"><h1 style="font-size: 1.5rem">Продажи</h1></div>
					<div class="pull-right">
						<h1><a href="{{ route('sales.create') }}" class="btn btn-sm btn-success">Добавить</a></h1>
					</div>
					<div class="table-responsive">
						@if ( $message = Session::get('success') )
							<div class="alert alert-success">
								<p>{{ $message }}</p>
							</div>
						@endif
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Менеджер</th>
									<th>Наименование продажи</th>
									<th>Сумма</th>
									<th>Действия</th>
								</tr>
							</thead>
							<tbody>
								@forelse($sales as $sale)
									<tr>
										<td>{{ $sale->manager->name }}</td>
										<td>{{ $sale->name }}</td>
										<td>{{ $sale->summa }}</td>
										<td>
											<a href="{{ action('SalesController@edit', $sale->id) }}" class="btn btn-sm btn-primary">Редактировать</a>
											<form action="{{ route('sales.destroy', $sale->id) }}" method="POST" style="display: inline-block;">
												{{ csrf_field() }}
												{{ method_field('DELETE') }}
												<input type="submit" class="btn btn-sm btn-danger" value="Удалить">
											</form>
										</td>
									</tr>
								@empty
									<h4>Нет данных</h4>
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