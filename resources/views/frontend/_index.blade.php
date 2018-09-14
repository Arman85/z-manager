@extends('frontend.layouts.master')

@section('title', 'Показатели')

@section('content')
	<div class="container-fluid">
		<div class="container">
			<div style="margin: 0 25px; width: 100%; height: 15px;"></div>
			<center><h1 style="font-size: 2.5rem;">Just do it!</h1></center>
			<div style="margin: 0 25px; width: 100%; height: 15px;"></div>
			<div class="table-responsive">
				<table class="table table-bordered table-hover text-center index-table">
					<thead style="background-color: #A3CEE9;">
						<tr>
							<th>Имя менеджера</th>
							<th>Отдел</th>
							<th>Общий план</th>
							<th>План по факту</th>
							<th>Выполнение плана</th>
							<th>Дата</th>
						</tr>
					</thead>
					<tbody>
						@forelse($managers as $manager)
							@php
								$result = $manager->sales->count() / $manager->overall_plan * 100;
							@endphp
							<tr>
								<td>{{$manager->name}}</td>
								<td>{{$manager->department}}</td>
								
								<td>{{$manager->overall_plan}}</td>
								<td>{{$manager->sales->count()}}</td>
								<td>
									<progress class="progress is-success" id="progress" min="0" max="100" value="{{$manager->sales->count() / $manager->overall_plan * 100}}">
									</progress>
									<span class="percent">{{$manager->sales->count() / $manager->overall_plan * 100}}%</span>
									@if ($result == 0)
										<img src="{{ asset('images/smiles/1.jpg') }}" alt="" style="max-width: 100%;width: 45px; height: 45px;">
									@elseif($result == 10)
										<img src="{{ asset('images/smiles/2.jpg') }}" alt="" style="max-width: 100%;width: 45px; height: 45px;">
									@elseif($result == 20)
										<img src="{{ asset('images/smiles/3.jpg') }}" alt="" style="max-width: 100%;width: 45px; height: 45px;">
									@elseif($result == 50)
										<img src="{{ asset('images/smiles/50.jpg') }}" alt="" style="max-width: 100%;width: 45px; height: 45px;">
									@elseif($result == 80)
										<img src="{{ asset('images/smiles/80.jpg') }}" alt="" style="max-width: 100%;width: 45px; height: 45px;">	
									@elseif($result == 10)
										<img src="{{ asset('images/smiles/100.jpg') }}" alt="" style="max-width: 100%;width: 45px; height: 45px;">	
									@endif
								</td>
								<td>{{ $currentDate }}</td>
							</tr>
						@empty
							<center>
								<h3>Нет данных</h3>
							</center>
						@endforelse
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection