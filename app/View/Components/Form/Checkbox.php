<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Checkbox extends Component
{
    public $name, $id, $value, $checked, $additionalClasses;

    public function __construct($name, $id = null, $value = '1', $checked = false, $additionalClasses = '')
    {
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->value = $value;
        $this->checked = $checked;
        $this->additionalClasses = $additionalClasses;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.checkbox');
    }
}
