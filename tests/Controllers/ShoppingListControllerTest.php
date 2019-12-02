<?php


namespace Tests\Controllers;

use PHPUnit\Framework\TestCase;
use ShoppingList\Controllers\ShoppingListController;
use ShoppingList\Models\ShoppingListModel;
use Slim\Views\PhpRenderer;

class ShoppingListControllerTest extends TestCase {

    public function testConstruct()
    {
        $view = $this->createMock(PhpRenderer::class);
        $model = $this->createMock(ShoppingListModel::class);

        $case = new ShoppingListController($model, $view);
        $expected = ShoppingListController::class;
        $this->assertInstanceOf($expected, $case);
    }
}
