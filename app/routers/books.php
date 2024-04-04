<?php

use Controllers\BooksController;

include_once '../app/controllers/booksController.php';

switch ($_GET['books']):
        // PATTERN: /?books=show&id=x
        // CTRL: booksController
        // ACTION: showAction
    case 'show':
        BooksController\showAction($connexion, $_GET['id']);
        break;
        // PATTERN: /?books
        // CTRL: booksController
        // ACTION: indexAction
    default:
        BooksController\indexAction($connexion);
        break;
endswitch;
