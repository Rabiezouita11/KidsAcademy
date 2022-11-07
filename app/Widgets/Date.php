<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Carbon;
class Date extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    public $reloadTimeout =0.5;
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $mytime = Carbon\Carbon::now();
        $date = Carbon\Carbon::parse($mytime);
        $date->addHours(1);
        return view('widgets.date', [
            'config' => $this->config,
            'date' => $date
        ]);
    }
}
