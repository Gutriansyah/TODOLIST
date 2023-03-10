<?php

require_once __DIR__ . "/model/TodoList.php";
require_once __DIR__ . "/businnes_logic/AddTodoList.php";
require_once __DIR__ . "/businnes_logic/ShowTodoList.php";
require_once __DIR__ . "/businnes_logic/RemoveTodoList.php";
require_once __DIR__ . "/view/ViewTodoList.php";
require_once __DIR__ . "/view/ViewAddTodoList.php";
require_once __DIR__ . "/view/ViewRemoveTodoList.php";
require_once __DIR__ . "/helper/input.php";


echo "Aplikasi Todo List " . PHP_EOL;


viewTodoList();
