<?php


namespace ShoppingList\Factories;


use Psr\Container\ContainerInterface;
use ShoppingList\Models\ShoppingListModel;

class ShoppingListModelFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $db = $container->get('db');
        return new ShoppingListModel($db);
    }

}