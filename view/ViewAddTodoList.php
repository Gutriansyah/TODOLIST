<?php

require_once __DIR__ . "/../model/TodoList.php";
require_once __DIR__ . "/../businnes_logic/AddTodoList.php";
require_once __DIR__ . "/../helper/input.php";

function viewAddTodoList()
{
    echo "menambah todo" . PHP_EOL;

    $input = input("todo (x untuk batal) ");

    if ($input == "x") {
        echo "batal menambahkan list" . PHP_EOL;
    } else {
        addTodoList($input);
    }
}
