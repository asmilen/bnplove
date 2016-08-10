<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                /*font-family: 'Lato';*/
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;

            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                {{--<div class="title">Laravel 5</div>--}}
                <div>
                    <button  type="button" class="btn btn-info btn-lg" style="margin-bottom: 10px"><a href={{url("dang-nhap")}}>Đăng nhập</a></button>
                </div>
                <div>
                    <button  type="button" class="btn btn-info btn-lg" style="margin-bottom: 10px"><a href={{url("tai-khoan")}}>Tai khoản</a></button>
                </div>
                <div>
                    <button  type="button" class="btn btn-info btn-lg" style="margin-bottom: 10px"><a href={{url("quay-thuong")}}>Quay thưởng</a></button>
                </div>

            </div>
        </div>
    </body>
</html>
