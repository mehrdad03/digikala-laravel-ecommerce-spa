<?php

namespace App\Livewire\Admin\Product;

use App\Models\Category;
use App\Models\Seller;
use Illuminate\Support\Str;
use Livewire\Component;

class Create extends Component
{
    public $categories=[];
    public $sellers=[];

    public $name;
    public $slug;
    public function mount()
    {
        $this->categories=Category::all();
        $this->sellers=Seller::all();

    }

    public function updatedName()
    {

        $this->slug=Str::slug($this->name,'-',null);


    }

    public function render()
    {
        return view('livewire.admin.product.create')->layout('layouts.admin.app');
    }
}
