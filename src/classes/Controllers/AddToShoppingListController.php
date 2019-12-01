<?php


namespace ShoppingList\Controllers;


use ShoppingList\Validators\AddToShoppingListValidator;
use Slim\Http\Request;
use Slim\Http\Response;

class AddToShoppingListController
{
    private $model;

    /**
     * AddToShoppingListController constructor.
     * @param $model
     */
    public function __construct($model)
    {
        $this->model = $model;
    }


    public function __invoke(Request $request, Response $response, array $args) {
        $userInput = $request->getParsedBodyParam('item');
        $validate = AddToShoppingListValidator::validateInputItem($userInput);

    }


}