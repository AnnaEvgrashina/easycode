<?php

namespace App\Http\Controllers;

use App\Http\Repositories\Communication;
use Database\Factories\CommunicationFactory;
use Illuminate\Http\Request;

class Settings
{
    public function update(Request $request) {
        /** @var Communication $communication */
        $communication = app(CommunicationFactory::class)->create($request->communication_method);
        return $communication->confirmation();
    }
}
