<?php


namespace ShoppingList\Factories;

use Psr\Container\ContainerInterface;
use ShoppingList\Controllers\ShoppingListController;

class ShoppingListControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $model = $container->get('ShoppingListModel');
        $view = $container->get('rendered');
        return new ShoppingListController($model, $view);
    }

}