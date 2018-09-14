@extends('backend.layouts.master')

@section('title', 'Добавить менеджера')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2" style="margin-left: 15px;">
			<h3 style="margin: 30px 0; font-size: 1.5rem;">Добавить менеджера</h3>
			{!! Form::open(['route' => 'manager.store', 'method' => 'post','files' => 'true']) !!}
				{{ csrf_field() }}
				<div class="form-group">
					<strong>{{ Form::label('name', 'Имя') }}</strong>
					{{ Form::text('name', null, array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					<strong>{{ Form::label('department', 'Отдел') }}</strong>
					{{ Form::text('department', null, array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					<strong>{{ Form::label('overall_plan', 'Общий план') }}</strong>
					{{ Form::text('overall_plan', null, array('class' => 'form-control')) }}
				</div>
				{{ Form::submit('Добавить', array('btn btn-default')) }}
			{!! Form::close() !!}	
		</div>
	</div>
@endsection