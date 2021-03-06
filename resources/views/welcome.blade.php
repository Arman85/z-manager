<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard Zeta tour managers</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        
        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/icons/favicon.png')}}">
        <!-- <link rel="icon" href="mt-demo/66300/66367/mt-content/uploads/2018/01/favicon1.png" type="image/png" /> -->

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Dashboard </br> Zeta tour managers
                </div>
                
                @if (Route::has('login'))
                    <div class="top-center links">
                        @auth
                            <a href="{{ url('/dashboard') }}" style="background-color: #636b6f; border-radius: 5px; padding: 10px; color: #fff">Перейти</a>
                        @else
                            <a href="{{ route('login') }}" style="background-color: #636b6f; border-radius: 5px; padding: 10px; color: #fff">Войти</a>  
                        @endauth      
                    </div>
                @endif
                
            </div>
        </div>
    </body>
</html>
