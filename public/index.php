<?php

// Ngambil request uri yang kita ketik di web
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
        // saat kita ketik / di web kita mau lakuin apa,
    case '/':
        // disini kita munculin (ngeload) file yang ada di folder app/View/index.php pake require
        require '../app/View/index.php';
        break;
    case '/food-list':
        require '../app/View/food-list.php';
        break;
}
