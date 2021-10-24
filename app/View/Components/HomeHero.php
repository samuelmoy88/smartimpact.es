<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HomeHero extends Component
{
    public string $videoUrl;

    public string $h1;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->videoUrl = 'https://video.wixstatic.com/video/af9964_b20dfb350b2144d081cb303a882cef23/1080p/mp4/file.mp4';

        $this->h1 = 'Agencia de Comunicación';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home-hero');
    }
}
