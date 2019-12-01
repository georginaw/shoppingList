<?php

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', 'ShoppingListController');
    $app->post('/item', 'AddToShoppingListController');

};
