<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Carbon;
use DB;
class Formation extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    public $reloadTimeout =1;
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {

      
      
        $mytime = Carbon\Carbon::now();
        $a = Carbon\Carbon::parse($mytime);
        $a->addHours(1);

        return view('widgets.formation', [
            'config' => $this->config,
            'a' => $a
        
        ]);
    }
}
