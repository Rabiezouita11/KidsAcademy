<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use DB ;
class Total extends AbstractWidget
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
        $user = DB::table('users')->count(); 
        $admin = DB::table('admins')->count(); 
        return view('widgets.total', [
            'config' => $this->config,
            'user' => $user,
            'admin' => $admin
        ]);
    }
}
