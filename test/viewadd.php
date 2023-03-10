<?php

require_once "../view/ViewAddTodoList.php";
require_once "../businnes_logic/AddTodoList.php";
require_once "../businnes_logic/ShowTodoList.php";

addTodoList("Giri");
addTodoList("Bram");
addTodoList("Chiko");

viewAddTodoList();

showTodoList();
