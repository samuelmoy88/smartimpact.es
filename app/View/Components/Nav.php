<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Nav extends Component
{
    public array $items = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            'home' => 'Home',
            'visual_thinking' => 'Visual Thinking',
            'services' => 'Servicios',
            'events' => 'Eventos',
            'contact' => 'Contactos'
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav');
    }
}
