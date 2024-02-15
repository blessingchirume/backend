<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Status extends Component
{
    // public $label;

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

        $style = '';

        switch ($this->_status) {
            case 0:
                $label = 'PENDING';
                $style = 'bg-secondary';
                break;
            case 1:
                $label = 'SUCCESS';
                $style = 'bg-success';
                break;
            case 2:
                $label = 'REJECTED';
                $style = 'bg-danger';
                break;

            default:
                # code...
                break;
        }
        return view('components.status', compact('label', 'style'));
    }
}
