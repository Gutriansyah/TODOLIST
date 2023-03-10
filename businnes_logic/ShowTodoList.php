<?php

// * menampilkan todo ke list

function showTodoList()
{
    global $todoList;

    echo "todo list " . PHP_EOL;

    foreach ($todoList as $number => $value) {
        echo "$number . $value" . PHP_EOL;
    }
}
