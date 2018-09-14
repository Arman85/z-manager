@extends('backend.layouts.master')

@section('title', 'Редактировать данные менеджера')

@section('content')
	
	<div class="row">
		<div class="col-md-8 col-offset-2 margin-tb" style="margin-top: 15px;">
			<div class="pull-left">
				<h3 style="margin: 0">Редактировать менеджера</h3>
			</div>
			<div class="pull-right">
				<a href="{{ route('manager.index') }}" class="btn btn-sm btn-primary">Назад</a>
			</div>
			@if(count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Уупс</strong> Допустили ошибку где то в вводе
					<ul>
						@foreach( $errors->all() as $error )
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			<div style="height: 55px"></div>
			{!! Form::model($manager, ['method' => 'PATCH', 'route' => ['manager.update', $manager->id]]) !!}
				<div class="row">
					<div class="col-lg-12">
						<div class="form-group">
							<strong>Имя</strong>
							{!! Form::text('name', null, array('class' => 'form-control')) !!}
						</div>
						<div class="form-group">
							<strong>Отдел</strong>
							{!! Form::text('department', null, array('class' => 'form-control')) !!}
						</div>
						<div class="form-group">
							<strong>Общий план</strong>
							{!! Form::text('overall_plan', null, array('class' => 'form-control')) !!}
						</div>
						<button type="submit" class="btn btn-primary">Обновить</button>
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection