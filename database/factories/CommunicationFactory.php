<?php

namespace Database\Factories;

use App\Http\Notification\Email;
use App\Http\Notification\Sms;
use App\Http\Notification\Tg;
use App\Http\Repositories\Communication;
use Nette\NotSupportedException;

class CommunicationFactory
{

    public function create(string $method): Communication
    {
        switch ($method) {
            case 'sms':
                return new Sms();

            case 'email':
                return new Email();

            case 'tg':
                return new Tg();

            default:
                throw new NotSupportedException('Unknown method');
        }
    }
}
