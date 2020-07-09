<!doctype html>
<html ng-app='todoApp'>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src='app/main.js'></script>
    <link rel='stylesheet' type='text/css' href='/modules/micro/media/main.css' />
    <link rel='stylesheet' type='text/css' href='/modules/micro/media/skins/serious.css' />
    <link rel='stylesheet' type='text/css' href='modules/todo/styles.css' />
  </head>
  <body>
    <div class='container'>
      <div class='row'>
      <div class='col'>
      <div ng-controller='TodoListController as todoList' class='shaded air-inner bg rounded'>
            <h1>Todo</h1>
            <form ng-submit='todoList.addTodo()'>
             <div class='new-item strip'>
              <input type='text' autocomplete='off' ng-model='todoList.todoText' placeholder='Add item ...' id='newItem'>
              <input type='submit' class='submit-button' value='add'>
              </div>
            </form>
            <div>
              <ul class='todos'>
                <li ng-repeat='todo in todoList.todos' ng-click='todoList.delete(todo.id)'>{{todo.description}}</li>
            </ul>
       </div>
       </div>
      </div>
      </div>
    </div>
  </body>
</html>