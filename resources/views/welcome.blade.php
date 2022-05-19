<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Date Malta</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
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
        .coverimg {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            background: #232a34;
            position: absolute;
            z-index: -1;
            background-image: url(https://www.schengenvisainfo.com/news/wp-content/uploads/2022/02/The-bars-in-St-Lucia-street-Valletta-Malta.jpg);
            filter: blur(7px);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        .title {
            font-size: 84px;
        }
        .links{
            background:white;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
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

    <div class="coverimg"></div>
    <div class="content">
        <div class="title m-b-md">
            Date Malta
            <small>
            <p>
            Malta. Check out the dating scene in one of the best places to meet new people: Malta. Whether you live here or plan to go for a visit.
            </p>
            <p>
            FREE to Join & Browse - 1000's of Singles in Malta - Interracial Dating, Relationships & Marriage Online.
            </p>
            </small>
        </div>
        <small>
            <p>
            Malta. Check out the dating scene in one of the best places to meet new people: Malta. Whether you live here or plan to go for a visit.
            </p>
            <p>
            FREE to Join & Browse - 1000's of Singles in Malta - Interracial Dating, Relationships & Marriage Online.
            </p>
        </small>
        <div class="links">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            @endif
            
            <p class="fh5co-copyright">
			    <small>
                    (c) 2015 <a href="index.html">Vanniks</a>. All Rights Reserved. <br>
                    Designed by: <a href="http://hpvk.com/">hpvk.com</a> Images: 
                    <a href="http://plmd.me/" target="_blank">plmd.me</a> &amp; 
                    <a href="http://unsplash.com/" target="_blank">Unsplash</a> 
                </small>
			</p>
        </div>

    </div>
</div>
</body>
</html>
