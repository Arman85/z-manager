@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Система управлением менеджерами Zeta tour</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Приветсвую Вас {{ Auth::user()->name }}! Вы вошли в систему.
                    @if(Auth::user()->name == 'Manager')
                        <div style="margin: 15px 0;">
                            <a href="{{ route('frontend.index') }}" class="btn btn-primary">Перейти в Dashboard</a>
                        </div>
                    @else
                        <div style="margin: 15px 0;">
                            <a href="{{ route('backend.index') }}" class="btn btn-primary">Перейти в панель администратора</a>
                        </div>    
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
