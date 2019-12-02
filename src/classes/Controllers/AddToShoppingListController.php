<?php


namespace ShoppingList\Controllers;


use ShoppingList\Models\ShoppingListModel;
use ShoppingList\Validators\AddToShoppingListValidator;
use Slim\Http\Request;
use Slim\Http\Response;

class AddToShoppingListController
{
    /**
     * @var ShoppingListModel
     */
    private $model;

    /**
     * AddToShoppingListController constructor.
     * @param $model
     */
    public function __construct(ShoppingListModel $model)
    {
        $this->model = $model;
    }


    /**
     * @param Request $request http request
     * @param Response $response http response
     * @return mixed
     */
    public function __invoke(Request $request, Response $response) {
        $userInput = $request->getParsedBodyParam('itemInput');
        $validate = AddToShoppingListValidator::validateInputItem($userInput);
        if ($validate) {
            $this->model->addToShoppingList($userInput);
            return $response->withRedirect('/');
        } else {
            return $response->withRedirect('/?error=1');
        }
    }

}