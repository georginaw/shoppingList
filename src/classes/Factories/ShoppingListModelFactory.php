<?php


namespace ShoppingList\Factories;

use Interop\Container\ContainerInterface;
use ShoppingList\Models\ShoppingListModel;

class ShoppingListModelFactory
{
    /**
     * @param ContainerInterface $container
     * @return ShoppingListModel object
     */
    public function __invoke(ContainerInterface $container)
    {
        $db = $container->get('db');
        return new ShoppingListModel($db);
    }
}