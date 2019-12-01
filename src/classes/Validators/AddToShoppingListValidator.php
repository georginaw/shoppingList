<?php


namespace ShoppingList\Validators;


class AddToShoppingListValidator
{
    /**
     * Check if the item added by the user is not blank or too long
     * @param string $inputItem the value from the add item input box
     * @return bool
     */
    public static function validateInputItem(string $inputItem) : bool {
        $data = strip_tags(trim($inputItem));
        return ($data && (strlen($data) <= 50));
    }
}