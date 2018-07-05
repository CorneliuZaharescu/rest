<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
    <title>Project name</title>
    <link rel="stylesheet" type="text/css" href="<?=  asset('bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
     <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#/!">Project name</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#/!">Dashboard <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div ng-view></div>
</div>

<!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
<script type="text/javascript" src="<?= asset('bower_components/bootstrap/dist/js/bootstrap.js') ?>"></script>
<script type="text/javascript" src="<?= asset('bower_components/angular/angular.min.js') ?>"></script>
<script type="text/javascript" src="<?= asset('bower_components/angular-route/angular-route.min.js') ?>"></script>

<!-- AngularJS Application Scripts -->
<script src="<?= asset('app/app.js') ?>"></script>
<script src="<?= asset('app/services/rest.js') ?>"></script>
<script src="<?= asset('app/controllers/main.js') ?>"></script>
<script src="<?= asset('app/controllers/job.js') ?>"></script>

</body>
</html>