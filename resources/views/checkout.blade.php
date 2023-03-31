<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel PayPal Integration Tutorial - ScratchCode.IO</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha256-YLGeXaapI0/5IgZopewRJcFXomhRMlYYjugPLSyNjTY=" crossorigin="anonymous" />
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
        .content {
            margin-top: 100px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="card">
            <img width="300px" height="300px" src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top" alt="Fissure in Sandstone"/>
            <div class="card-body">
                <h1>Laravel PayPal Integration Tutorial - ScratchCode.IO</h1>
                <form method="post" action="{{route('payment')}}">
                    @csrf
                    <input type="hidden" name="amount" value="200">
                    <button class="btn btn-primary">pay with payPal</button>
                </form>
            </div>
        </div>

    </div>
</div>
</body>
</html>
