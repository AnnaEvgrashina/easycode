<?php

namespace App\Http\Notification;

use App\Http\Repositories\Communication;

class Tg implements Communication
{
    public function confirmation()
    {
        echo 'tg';
    }
}
