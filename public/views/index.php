<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="<?=  asset('bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
</head>
<body>
<h2>Dashboard</h2>
<div ng-controller="mainController">

</div>
<!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
<script type="text/javascript" src="<?= asset('bower_components/angular/angular.min.js') ?>"></script>
<script type="text/javascript" src="<?= asset('bower_components/angular-route/angular-route.min.js') ?>"></script>

<!-- AngularJS Application Scripts -->
<script src="<?= asset('app/app.js') ?>"></script>
<script src="<?= asset('app/services/rest.js') ?>"></script>
<script src="<?= asset('app/controllers/main.js') ?>"></script>
</body>
</html>