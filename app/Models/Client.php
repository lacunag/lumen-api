<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'address', 'city', 'zip', 'country', 'company', 'website',
    ];

    
    // table name
    protected $table = 'clients';

    // primary key
    public $primaryKey = 'id';

    // incrementing
    public $incrementing = true;
}

