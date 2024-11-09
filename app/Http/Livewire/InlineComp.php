<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InlineComp extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                <h1 style="color:green">ceci est un inline comp woow !!</h1>
            </div>
        blade;
    }
}
