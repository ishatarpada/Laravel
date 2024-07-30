<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\HtmlString;
use Illuminate\View\Component;

class alert extends Component
{

    public $type;
    protected $types = [
        "success",
        "danger",
        "info"
    ];
    public $dismissible;

    /*Create a new component instance. */
    public function __construct(string $type = "info", $dismissible = false)
    {
        $this->type = $type;
        $this->dismissible = $dismissible;
    }

    public function validType()
    {
        return in_array($this->type, $this->types) ? $this->type : "info";
    }

    public function link($text = "link", $target = "#")
    {
        return  new HtmlString('<a href="' . $target . '" class="alert-link">' . $text . '</a>');
    }

    /*Get the view / contents that represent the component. */
    public function render(): View|Closure|string
    {
        return view('components.alert');

        /* return <<<'blade'
            <div
                {{ $attributes->class(['alert-dismissible fade show' => $dismissible])->merge(['class' => 'alert alert-' . $validType, 'role' => 'alert']) }}>
                @if (isset($title))
                    <h4 {{ $title->attributes->class(['alert-heading']) }}>{{ $title }}</h4>
                    <hr>
                @endif

                @if ($slot->isEmpty())
                    <p>This is default content if the slot is empty</p>
                @else
                @endif
                {{ $slot }}
                @if (isset($footer))
                    <hr>
                    <h4 class="alert-footer">{{ $footer }}</h4>
                @endif
                @if ($dismissible)
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                @endif
            </div>

        blade; */
    }
}