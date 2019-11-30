<?php


namespace ShoppingList\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class ShoppingListController
{
    private $model;
    private $view;

    /**
     * ShoppingListController constructor.
     * @param $model
     * @param $view
     */
    public function __construct($model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    /**
     * @param Request $request http request
     * @param Response $response http response
     * @param array $args shopping list item data sent back in http response
     * @return mixed
     */
    public function __invoke(Request $request, Response $response, array $args)
    {
        $shoppingListItems = $this->model->getAllShoppingListItems();
        $args['shoppingListItems'] = $shoppingListItems;
        return $this->view->render($response, 'index.phtml', $args);
    }
}