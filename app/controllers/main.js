
angular.module ('todoApp', [])
  .controller ('TodoListController', function ($scope, $http) {

    var todoList = this;
    $http.get ('api/index.php?[limit]=50').
      then (function successCallback (response) {
        todoList.todos = response.data;
    });
todoList.addTodo = function () {
      $http ({
        method:'PUT', 
        url: 'api/addtodo.php', 
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        transformRequest: function (obj) {
          var str = [];
          for (var p in obj) {
            str.push (encodeURIComponent (p) + '=' + encodeURIComponent (obj [p]));
          }
          return str.join ('&');
        },
        data: {description: document.getElementById ('newItem').value}
      }).then (function successCallback (response) {

todoList.todos.push ({
          description: todoList.todoText, 
          id:response.data.id
        });
        todoList.todoText = '';
      });
    };

todoList.delete = function (id) {
      for(var idx = 0; idx < todoList.todos.length; idx++) {
        if (todoList.todos [idx].id === id) {
          todoList.todos.splice (idx,1);
          break;
        }
      }
      $http.delete('api/delete.php?id=' + id);
    }
  });