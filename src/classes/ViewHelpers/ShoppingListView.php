<?php


namespace ShoppingList\ViewHelpers;


class ShoppingListView
{
    /**
     * Displays the list of items from the shopping list table in the db and displays them on the page
     *
     * @param array $shoppingListItems
     * @return string
     */
    public static function shoppingListView(array $shoppingListItems) : string
    {
        $shoppingListView = '<p>You have no items on your shopping list</p>';
        if (count($shoppingListItems) > 0) {
            $shoppingListView = '';
            foreach ($shoppingListItems as $shoppingListItem) {
                $shoppingListView .= '<li class="item">' .
                    $shoppingListItem['item'] . '</li>';
            }
        }
        return $shoppingListView;
    }
}