<?php

require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../businnes_logic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo " menghapus todo";
    $input = input("nomor (x untuk batalkan)");

    if ($input == "x") {
        echo "  batal menghapus todo";
    } else {
        $success = removeTodoList($input);

        if ($success) {
            echo "sukses menghapus todo nomor : $input" . PHP_EOL;
        } else {
            echo "gagal meghapus todo $input" . PHP_EOL;
        }
    }
}
