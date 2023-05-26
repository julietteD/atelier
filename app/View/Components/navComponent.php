<?php

namespace App\View\Components;
use App\Models\Sections;
use Illuminate\View\Component;

class navComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $sections = Sections::all();
        return view('components.nav-component',['sections' => $sections]);
    }
}
