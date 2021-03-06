<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Katiba,Tanzania,Constitution,Bunge la katiba,Bunge,Dodoma,Tanzania Bora">
    <meta name="description" content="Jua Katiba Tanzania / Know the Constitution Tanzania is a program that creates a multimedia platform for Tanzanian citizens to engage and understand the ongoing constitution processes, proposed constitution draft and entire referendum process before voting and also how to engage after voting too. ">
    <meta name="author" content="iPF Softwares" >


    <meta property="og:url"                content="http://www.juakatibatanzania.com" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="Jua Katiba Tanzania | Know The Constitution " />
    <meta property="og:description"        content="Jua Katiba Tanzania / Know the Constitution Tanzania is a program that creates a multimedia platform for Tanzanian citizens to engage and understand the ongoing constitution processes, proposed constitution draft and entire referendum process before voting and also how to engage after voting too." />
    <meta property="og:image"              content="{{url('assets/images/logo6.png')}}" />

    <meta charset="UTF-8">

    <link href="{{url('assets/images/favicon.png')}}" rel="shortcut icon" type="image">
    <title>Jua Katiba Tanzania | Know The Constitution  </title>

    <style>
        body{
            background: #fafafa;
        }

        #landingBanner{
            position: relative;
            height: 250px;
            margin-bottom: 400px;
        }

        #imageShape{
            position: absolute;
            width: 100%;
            height: 500px;
            transform-origin: top left;
            transform: skewY(-8deg);
            overflow: hidden;
        }

        #landingBanner .image{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 120%;
            -webkit-background-size: cover;
            background-size: cover;
            transform: skewY(8deg);
        }

        #imageShape .scrim{
            z-index: 9;
            top: 0;
            left: 0;
            position: relative;
            width: 100%;
            height: 100%;
            background: #ffb223;
            background-image: -webkit-linear-gradient(#ffb223, #febd17);
            background-image: -o-linear-gradient(#ffb223, #febd17);
            background-image: linear-gradient(#ffb223, #febd17);
        }

        #bannerContainer{
            max-width: 1000px;
            margin: auto;
        }

        #toppestNav{
            min-height: 120px;
            padding: 20px 0;
        }

        #logo{
            height: 60px;
        }

        #logo img{
            height: 100%;
        }

        #socials{
            margin-top: 8px;
        }

        .social-icon{
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #fff;
            color: #000;
            text-align: center;
            line-height: 30px;
            margin-left: 4px;
        }
    </style>

    <link  href="{{url('assets/font-awesome-4.3.0/css/font-awesome.css')}}" rel="stylesheet" />
    <link  href="{{url('assets/css/reset.css')}}" rel="stylesheet"/>
    <link  href="{{url('assets/css/flex.css')}}" rel="stylesheet"/>

    <script src="{{url('assets/js/jquery-2.1.1.js')}}" type="text/javascript"></script>
</head>

<body>
    @yield('styles')
    @yield('content')
    @yield('scripts')
    @include('layouts.footer')
    <script></script>
</body>
</html>

