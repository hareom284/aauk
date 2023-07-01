<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    const BUTTON_TYPE = [
        'create' => 'btn-primary',
        'show' => 'btn-info',
        'back' => 'btn-secondary',
        'delete' => 'btn-danger',
    ];

    public $label;

    public $type;

    public $btntype;

    /**
     * Create a new component instance.
     */
    public function __construct($label, $type, $btntype)
    {
        $this->label = $label;
        $this->type = $type;
        $this->btntype = self::BUTTON_TYPE[$btntype] ?? 'btn-info';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
