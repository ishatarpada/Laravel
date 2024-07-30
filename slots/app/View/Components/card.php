<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
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
        return <<<'blade'
                
                <div class="container w-50 mx-auto border border-rounded card p-5 bg-dark">
                    <a href="#" class="text-white  text-decoration-none">

                        <h5 class="fw-bold text-center">Noteworthy technology
                            acquisitions 2021</h5>
                        <p class="font-normal text-center">Here are the biggest enterprise technology
                            acquisitions of 2021 so far, in reverse chronological order.</p>
                    </a>
                </div>  

            blade;
    }
}
