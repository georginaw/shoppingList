<?php


namespace ShoppingList\Controllers;

use ShoppingList\Models\ShoppingListModel;
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
    public function __construct(ShoppingListModel $model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $shoppingListItems = $this->model->getAllShoppingListItems();

        $args['shoppingListItems'] = $shoppingListItems;
        return $this->view->render($response, 'index.phtml', $args);
    }

}