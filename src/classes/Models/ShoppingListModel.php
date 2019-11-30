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
     *
     * @return object containing array of all the items and their ids
     */
    public function getAllShoppingListItems() {
        $query = $this->db->query('SELECT `item`, `id` FROM `shopping_list`;');
        return $query->fetchAll();
    }

}