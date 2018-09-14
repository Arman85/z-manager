<div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:15%; padding: 20px;">
	<div style="margin-bottom: 25px;">
		<img src="{{ asset('images/logo.png') }}" alt="">
	</div>
	<a href="{{ route('backend.index') }}" class="w3-bar-item w3-button">Главная</a>  
	<div class="w3-dropdown-hover">
		<a href="{{ route('manager.index') }}">
			<button class="w3-button">Менеджеры
				<i class="fa fa-caret-down"></i>
			</button>
		</a>
		<div class="w3-dropdown-content w3-bar-block">
			<a href="{{ route('manager.create') }}" class="w3-bar-item w3-button">Добавить менеджера</a>
			<!-- <a href="#" class="w3-bar-item w3-button">Link</a> -->
		</div>
	</div>

	<a href="{{ route('sales.index') }}" class="w3-bar-item w3-button">Продажи</a> 
</div>