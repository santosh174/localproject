<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Mockery\Matcher\Type;
use PhpParser\Node\Stmt\Label;

class input extends Component
{
    public $name;
    public $type;
    public $lable;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $type, $lable)
    {
        $this->name=$name;
        $this->type=$type;
        $this->lable=$lable;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
