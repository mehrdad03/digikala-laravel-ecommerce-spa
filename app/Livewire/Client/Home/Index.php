<?php

namespace App\Livewire\Client\Home;

use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;

class Index extends Component
{
    use SEOTools;

    public function mount()
    {
        $this->seoConfig();

    }

    public function seoConfig()
    {
        $this->seo()
            ->setTitle('فروشگاه اینترنتی دیجی‌کالا')
            ->setDescription('هر آنچه که نیاز دارید با بهترین قیمت از دیجی‌کالا بخرید! - برای خرید کلیک کنید!');

    }

    public function render()
    {

        return view('livewire.client.home.index');
    }
}
