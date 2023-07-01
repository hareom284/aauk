<?php

namespace App\View\Components\forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MultipleSelect extends Component
{
    public $items;

    public $name;

    public $label;

    public $value;


    public function __construct($items, $name, $label,$value= [])
    {
        $this->items = $items;
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
    }

    public function render(): View|Closure|string
    {
        return view('components.forms.multiple-select');
    }
}
