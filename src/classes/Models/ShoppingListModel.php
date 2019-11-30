<?php


namespace ShoppingList\Models;


class ShoppingListModel
{
    private $db;

    /**
     * ShoppingListModel constructor.
     * @param $db
     */
    public function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * Connects to the shopping list database and retrieves all items in the shopping list table
     */
    public function getAllShoppingListItems() {
        $query = $this->db('SELECT `item` FROM `shoppingList`;');
        $shoppingListItems = $query->fetchAll();
        return $shoppingListItems;
    }

}