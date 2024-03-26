<?php

namespace App\Http\Notification;

use App\Http\Repositories\Communication;

class Email implements Communication
{
    public function confirmation()
    {
        echo 'email';
    }
}
