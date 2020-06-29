<!DOCTYPE html>
<html lang="en-US">
<body>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<div ng-app="myApp" ng-controller="personCtrl">

First Name: <input type="text" ng-model="firstName"><br>
Last Name: <input type="text" ng-model="lastName"><br>
<br>
Full Name=function()

</div>

<script>
var app = angular.module('myApp', []);
app.controller('personCtrl', function($scope) {
  $scope.firstName = {{}};
  $scope.lastName = {{}};
  $scope.fullName =function() {
    return $scope.firstName + " " + $scope.lastName;
  };
});
</script>
<div ng-app="">
  <p>Name : <input type="text" ng-model="name"></p>
  <h1>Hello{{name}}</h1>
</div>


</body>
</html>