<?php

require_once "../model/TodoList.php";
require_once "../businnes_logic/AddTodoList.php";


addTodoList("Giri");
addTodoList("Bram");
addTodoList("Chiko");

var_dump($todoList);
