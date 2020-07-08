/*angular.module('todomvc')
	.controller('TodoCtrl', function TodoCtrl($scope, $routeParams, $filter, store) {
		'use strict';

		var todos = $scope.todos = store.todos;


$scope.addTodo = function () {
    var newTodo = {
        title: $scope.newTodo.trim(),
        completed: false
    };

    if (!newTodo.title) {
        return;
    }

    $scope.saving = true;
    store.insert(newTodo)
        .then(function success() {
            $scope.newTodo = '';
        })
        .finally(function () {
            $scope.saving = false;
        });
}; */