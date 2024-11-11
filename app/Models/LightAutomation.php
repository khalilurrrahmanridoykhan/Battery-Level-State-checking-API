<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LightAutomation extends Model
{
    use HasFactory;
    protected $table = 'light_automations';
    protected $primaryKey = 'light_automations_id';
}
