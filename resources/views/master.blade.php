<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Toys</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <style>
            body {
                display: flex;
                flex-direction: column;
            }
            .navbar-default {
                position: sticky;
                top: 0;
                min-height: 70px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-width: 0;
                box-shadow: 0 5px 5px lightgray;
                margin-bottom: 0;
            }
            .container-fluid {
                flex: 1;
                margin-right: 0;
                margin-left: 0;
                max-width: 1500px;
            }
            .navbar-nav {
                margin-left: 30px;
                
            }
            .navbar-header {
                margin-left: 10px !important;
            }
            .navbar-header:hover {
                background-color: gray;
                color: white;
                border-radius: 50px;
            }
            .table-image {
                max-width: 1500px;
                margin-left: 20px;
                margin-right: 20px;
                margin-top: 20px;
                flex: 1;
                width: auto;
            }
            .navbar-brand {
                background-color: white;
                border-radius: 50px;
                margin-left: 0px !important;
            }
            .navbar-brand:hover {
                background-color: black;
            }
            li:hover {
                background-color: lightgray;
            }
            .custom-login{
                height: 500px;
                padding-top: 100px;
            }
            img.slider-img{
                height: 400px !important
            }
            .custom-product{
                height: 600px
            }
            .slider-text{
                background-color: #35443585 !important;
            }
            .trending-image{
                height: 100px;
            }
            .trening-item{
                float: left;
                width: 20%;
            }
            .trending-wrapper{
                margin: 30px;
            }
            .detail-img{
                height: 200px;
            }
            .search-box{
                width: 500px !important
            }
            .cart-list-devider{
                border-bottom: 1px solid #ccc;
                margin-bottom: 20px;
                padding-bottom: 20px
            }
        </style>
    </head>
    <body>
        {{View::make('header')}}
        @yield('content')
        {{View::make('footer')}}

    </body>
    
</html>