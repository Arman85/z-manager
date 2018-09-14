@extends('backend.layouts.master')

@section('title', 'Редактировать данные')

@section('content')
	<div class="row">
		<div class="col-md-8" style="margin-top: 15px;">
			<div class="pull-left">
				<h3>Редактировать данные</h3>
			</div>
			<div class="pull-right">
				<h3><a href="{{ route('sales.index') }}" class="btn btn-sm btn-primary">Назад</a></h3>
			</div>
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Уупс.</strong>Допустили ошибку где то в воде
					<ul>
						@foreach( $errors->all as $error )
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			<div style="height: 55px;"></div>
			{!! Form::model($sale, ['method' => 'PATCH', 'route' => ['sales.update', $sale->id]]) !!}
				<div class="row">
					<div class="col-lg-12">
						<div class="form-group">
							<strong>{{ Form::label('name', 'Наименование продажи') }}</strong>
							{{ Form::text('name', null, array('class' => 'form-control')) }}
						</div>
						<div class="form-group">
							<strong>{{ Form::label('summa', 'Сумма') }}</strong>
							{{ Form::text('summa', null, array('class' => 'form-control')) }}
						</div>
						<div class="form-group">
							<strong>{{ Form::label('manager_id', 'Выбор менеджера') }}</strong>
							{{ Form::select('manager_id', $managers, null, array('class' => 'form-control', 'placeholder' => 'Выберите менеджера')) }}
						</div>
						<button type="submit" class="btn btn-primary">Обновить</button>
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection