<?php

require_once __DIR__ . "/../model/TodoList.php";
require_once __DIR__ . "/../businnes_logic/ShowTodoList.php";
require_once __DIR__ . "/../view/ViewAddTodoList.php";
require_once __DIR__ . "/../view/ViewRemoveTodoList.php";
require_once __DIR__ . "/../helper/input.php";


function viewTodoList()
{
    while (true) {
        showTodoList();
        echo " Menu " . PHP_EOL;
        echo " 1. Tambah Todo " . PHP_EOL;
        echo " 2. Hapus Todo " . PHP_EOL;
        echo " x. Keluar " . PHP_EOL;

        $pilihan = input("pilihan");

        if ($pilihan == "1") {
            viewAddTodoList();
        } elseif ($pilihan == "2") {
            viewRemoveTodoList();
        } else if ($pilihan == "x") {
            break;
        } else echo "Pilihan Tidak Dimengerti" . PHP_EOL;
    }
    echo "sampai jumpa lagi" . PHP_EOL;
}
