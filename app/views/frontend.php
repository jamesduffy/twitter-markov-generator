<!DOCTYPE html>
<html lang="en" ng-app="TwitterMarkovGenerator">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Twitter Markov Generator</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <style type="text/css">
        .container {
            max-width: 800px;
        }
        .jumbotron .container {
            max-width: 800px;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular.min.js"></script>
    <script src="https://code.angularjs.org/1.3.6/angular-route.min.js"></script>

    <script src="/scripts/app.js"></script>
    <script src="/scripts/controllers.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <div ng-view></div>

    <footer class="container">

        <hr>

        <div class="row text-center">
            <div class="col-lg-12">
                <p>Made by <a href="https://cafeduff.com/">CafeDuff</a>.</p>
            </div>
        </div>

    </footer>
</body>
</html>
