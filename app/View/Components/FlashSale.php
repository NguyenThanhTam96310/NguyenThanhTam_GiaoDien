<?php

namespace App\View\Components;

use App\Models\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FlashSale extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $args_mainmenu_sub = [
            ['status', '=', 1],
            ['pricesale', '>', 0]
        ];
        $product_sale = Product::where('status', '=', 1)
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();
        return view('components.flash-sale', compact('product_sale'));
    }
}
