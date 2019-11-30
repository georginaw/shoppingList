<?php


namespace ShoppingList\Factories;

use Interop\Container\ContainerInterface;
use ShoppingList\Controllers\ShoppingListController;

class ShoppingListControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $model = $container->get('ShoppingListModel');
        $view = $container->get('renderer');
        return new ShoppingListController($model, $view);
    }

}