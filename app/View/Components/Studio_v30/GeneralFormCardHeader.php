<?php

namespace App\View\Components\studio_v30;

use Illuminate\View\Component;

class GeneralFormCardHeader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $view_file;  
    public $panel_name;  

    public function __construct($view_file, $panel_name)
    {
        //
        $this->view_file = $view_file; 
        $this->panel_name = $panel_name; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.studio_v30.general-form-card-header');
    }
}
