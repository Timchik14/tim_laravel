<?php

namespace App\Models;

class Message extends Model
{
    public function getRouteKeyName()
    {
        return 'id';
    }
}
