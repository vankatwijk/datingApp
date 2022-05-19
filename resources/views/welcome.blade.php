<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="date malta">
    <meta name="description" content="Malta. Check out the dating scene in one of the best places to meet new people: Malta. Whether you live here or plan to go for a visit. FREE to Join & Browse - 1000's of Singles in Malta - Interracial Dating, Relationships & Marriage Online.">
    <meta name="keywords" content="dating, malta dating, singles malta, women in malta, dating in malta, dating in sliema,dating in valleta,dating in st julians">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="20 days">


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
            background:white;
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
            
        }
        .links > a {
            color: #636b6f;
            padding: 10px 30px;
            font-size: 20px;
            margin-top: 39px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
        
        .glow-on-hover {
            width: 220px;
            height: 50px;
            border: none;
            outline: none;
            color: #fff;
            background: #111;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 10px;
        }

        .glow-on-hover:before {
            content: '';
            background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
            position: absolute;
            top: -2px;
            left:-2px;
            background-size: 400%;
            z-index: -1;
            filter: blur(5px);
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            animation: glowing 20s linear infinite;
            opacity: 0;
            transition: opacity .3s ease-in-out;
            border-radius: 10px;
        }

        .glow-on-hover:active {
            color: #000
        }

        .glow-on-hover:active:after {
            background: transparent;
        }

        .glow-on-hover:hover:before {
            opacity: 1;
        }

        .glow-on-hover:after {
            z-index: -1;
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: #111;
            left: 0;
            top: 0;
            border-radius: 10px;
        }

        @keyframes glowing {
            0% { background-position: 0 0; }
            50% { background-position: 400% 0; }
            100% { background-position: 0 0; }
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="coverimg"></div>
    
    <div class="content">
        <div class="title m-b-md">
            Date Malta
        </div>
        <div class="links">
            @if (Route::has('login'))
                @auth
                    <a class="glow-on-hover" href="{{ url('/home') }}">Home</a>
                @else
                    <a class="glow-on-hover" href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a class="glow-on-hover" href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            @endif
            
            <small>
                <p>
                Malta. Check out the dating scene in one of the best places to meet new people: Malta. Whether you live here or plan to go for a visit.
                </p>
                <p>
                FREE to Join & Browse - 1000's of Singles in Malta - Interracial Dating, Relationships & Marriage Online.
                </p>
            </small>
            
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
