<?php

require_once "../model/TodoList.php";
require_once "../businnes_logic/RemoveTodoList.php";
require_once "../businnes_logic/AddTodoList.php";
require_once "../businnes_logic/ShowTodoList.php";


addTodoList("eko1");
addTodoList("eko2");
addTodoList("ek03");
addTodoList("eko4");

var_dump($todoList);

showTodoList();

removeTodoList(3);

var_dump($todoList);
showTodoList();

// * menjalankan function menggunakan variabel untuk mengambil return value
$test = removeTodoList(6);
var_dump($test);

showTodoList();
