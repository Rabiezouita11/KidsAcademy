<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class ClubAdmin extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
  
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $aflaton=\App\Models\Club::all();

        return view('widgets.club_admin', [
            'config' => $this->config,
            'aflaton' => $aflaton,
        ]);
    }
}
