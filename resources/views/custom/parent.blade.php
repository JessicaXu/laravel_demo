<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: left;
            }

            .title {
                font-size: 18px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">
                    @section('content')
                        This is the parent content.
                    @show
                </div>
            </div>
        </div>
    </body>
</html>
