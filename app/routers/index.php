<?php

use Controllers\CategoriesController,
    Controllers\PagesController;

// PATTERN: /?books=show&id=x
// CTRL: booksController
// ACTION: showAction
if (isset($_GET['books'])) :
    include_once '../app/routers/books.php';


// PATTERN: /?categoryID=x
// CTRL: categoriesController
// ACTION: showAction
elseif (isset($_GET['categoryID'])) :
    include_once '../app/controllers/categoriesController.php';
    CategoriesController\showAction($connexion, $_GET['categoryID']);

// PATTERN: /?authors
// CTRL: authorsController
// ACTION: indexAction
elseif (isset($_GET['authors'])) :
    include_once '../app/routers/authors.php';

// PATTERN: /
// CTRL: pagesController
// ACTION: homeAction
else :
    include_once '../app/controllers/pagesController.php';
    PagesController\homeAction($connexion);
endif;
