<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpTicket extends Model
{
    use HasFactory;

    protected $table = 'help_ticket';
    protected $guarded = ['id'];
}
