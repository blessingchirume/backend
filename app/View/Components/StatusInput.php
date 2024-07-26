<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StatusInput extends Component
{
    public $_status;

    public function __construct(public $status)
    {
        $this->_status = $status;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $label = '';
        switch ($this->_status) {
            case 0:
                $label = 'PENDING';
                break;
            case 1:
                $label = 'SUCCESS';
                break;
            case 2:
                $label = 'REJECTED';
                break;
            default:
                # code...
                break;
        }
        return view('components.status-input', compact('label'));
    }
}
