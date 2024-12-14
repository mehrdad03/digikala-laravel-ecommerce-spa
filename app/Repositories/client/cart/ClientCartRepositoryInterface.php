<?php

namespace App\Repositories\client\cart;

interface ClientCartRepositoryInterface
{

    public function updateCartQuantity($itemId, $action);
    public function getCartItemsWithCalculations();

}
