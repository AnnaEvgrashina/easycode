<?php

namespace App\Http\Notification;

use App\Http\Repositories\Communication;

class Sms implements Communication
{
    public function confirmation()
    {
        echo 'sms';
    }
}
