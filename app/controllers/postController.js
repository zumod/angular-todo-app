var app = angular.module("insert",[]);
app.controller("controller", function($scope, $http) {
    $scope.insert = function(){
      $http.post(
          "api/insertData.php",
          {'name':$scope.name, 'age':$scope.age, 'email':$scope.email}
          ).then(function(data){
            $scope.name = null;
            $scope.age =null;
            $scope.email=null;
        });
    }
});
