<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <style>
        body {
            background-color: #f8fafc;
            color: #2d3748;
            font-family: 'Nunito', sans-serif;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .container {
            max-width: 600px;
        }

        .title {
            font-size: 72px;
            margin-bottom: 40px;
        }

        .message {
            font-size: 24px;
            margin-bottom: 20px;
        }

        a {
            color: #3490dc;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">404</div>
        <div class="message">
            Oops! La página que buscas no se encuentra.
        </div>
        <a href="{{ url('/') }}">Regresar a la página principal</a>
    </div>
</body>
</html>
