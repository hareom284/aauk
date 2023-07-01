<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputText extends Component
{
    public string $type;

    public string $label;

    public string $name;

    public string $placeholder;

    public ?string $className;

    public ?string $value;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $type,
        $label,
        $name,
        $placeholder,
        $className = '',
        $value = ''
    ) {

        $this->type = $type;
        $this->label = $label;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->className = $className;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.input-text');
    }
}
