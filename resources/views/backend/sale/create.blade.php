@extends('backend.layouts.master')

@section('title', 'Добавить продажу')

@section('content')
	<div class="row">
		<div class="col-md-8">
			<h3 style="font-size: 1.5rem; margin: 30px 0;">Добавить продажу</h3>
			{!! Form::open(['route' => 'sales.store', 'method' => 'post', 'files' => 'true']) !!}
				{{ csrf_field() }}
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
					{{ Form::select('manager_id', $managers, null, ['class' => 'form-control', 'placeholder' => 'Выберите менеджера']) }}
				</div>
				{{ Form::submit('Добавить', array('class' => 'btn btn-default')) }}
			{!! Form::close() !!}
		</div>
	</div>
@endsection