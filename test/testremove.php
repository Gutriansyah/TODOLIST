<?php

require_once "../model/TodoList.php";
require_once "../view/ViewRemoveTodoList.php";
require_once "../businnes_logic/AddTodoList.php";
require_once "../businnes_logic/ShowTodoList.php";



addTodoList("satu");
addTodoList("dua");
addTodoList("tiga");
addTodoList("empat");

showTodoList();

viewRemoveTodoList();

showTodoList();
