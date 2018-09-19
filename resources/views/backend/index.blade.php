@extends('backend.layouts.master')

@section('title', 'Главная')

@section('content')
	<div>
		<div class="w3-container">
			<h1 style="font-size: 2.5rem; text-align: center; margin: 30px 0;">Планы менеджеров компании Zeta tour</h1>
			<div class="table-responsive">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Имя менеджера</th>
							<th>Отдел</th>
							<th>Общий план</th>
							<th>План по факту</th>
							<th>Шкала выполнения плана</th>
							<!-- <th>Дата</th> -->
						</tr>
					</thead>
					<tbody>
						@forelse ( $managers as $manager )
							<tr>
								<td>{{ $manager->name }}</td>
								<td>{{ $manager->department }}</td>
								<td>{{ $manager->overall_plan }}</td>
								<td>{{ $manager->sales->sum('summa') }}</td>
								<td>
									<progress class="progress is-success" id="progress" min="0" max="100" value="{{$manager->sales->sum('summa') / $manager->overall_plan * 100}}">
									</progress>
									<span class="percent">{{ round( $manager->sales->sum('summa') / $manager->overall_plan * 100 ) }}&nbsp;%</span>
								</td>
							</tr>
						@empty
							<h3>Нет данных</h3>
						@endforelse
					</tbody>
				</table>
			</div>
		</div>

	</div>
@endsection