<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use DB ;
class Count extends AbstractWidget
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
        $m1 = DB::table('clubs')->count();
        return view('widgets.count', [
            'config' => $this->config,
            'm1' => $m1
        ]);
    }
}
