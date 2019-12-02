<?php


namespace ShoppingList\Controllers;

use ShoppingList\Models\ShoppingListModel;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\PhpRenderer;

class ShoppingListController
{
    private $model;
    private $view;

    /**
     * ShoppingListController constructor.
     * @param $model
     * @param $view
     */
    public function __construct(ShoppingListModel $model, PhpRenderer $view)
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
        $msg = '';
        if ($request->getQueryParam('error') == 1) {
            $msg = 'There was a problem with the item you entered so it was not added to the database. The item input text should be between 1 and 50 characters.';
        }
        $shoppingListItems = $this->model->getAllShoppingListItems();
        $args['shoppingListItems'] = $shoppingListItems;
        $args['errorMsg'] = $msg;
        return $this->view->render($response, 'index.phtml', $args);
    }
}