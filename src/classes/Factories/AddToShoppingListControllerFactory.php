<?php


namespace ShoppingList\Factories;


use Interop\Container\ContainerInterface;
use ShoppingList\Controllers\AddToShoppingListController;
use ShoppingList\Validators\AddToShoppingListValidator;

class AddToShoppingListControllerFactory
{

    /**
     * @param ContainerInterface $container
     * @return AddToShoppingListController object
     */
    public function __invoke(ContainerInterface $container)
    {
        $model = $container->get('ShoppingListModel');
        return new AddToShoppingListController($model);
    }

}