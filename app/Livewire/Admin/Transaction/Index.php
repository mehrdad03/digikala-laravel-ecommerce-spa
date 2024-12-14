<?php

namespace App\Livewire\Admin\Transaction;

use App\Repositories\admin\AdminTransactionRepositoryInterface;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    private $repository;
    public $search = '';

    public function boot(AdminTransactionRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function render()
    {

        $ordersQuery = $this->repository->getTransactionWithFilters($this->search, $_GET['status'] ?? 'all');
        $transactions = $ordersQuery->paginate(10);
        $this->repository->transformQuery($transactions);

        return view('livewire.admin.transaction.index', [
            'transactions' => $transactions
        ])->layout('layouts.admin.app');
    }
}
