<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use DB ;
use Carbon;
class Siqiemeeleve extends AbstractWidget
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
         
        $m = DB::table('users')->where('classe', '=', 'السنة سادسة إبتدائي')->get(); 

        return view('widgets.siqiemeeleve', [
            'config' => $this->config,
            'm' => $m,
            'a' => $a
        ]);
    }
}
