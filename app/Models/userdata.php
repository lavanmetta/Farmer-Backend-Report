<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userdata extends Model
{
    use HasFactory;
    protected $table = 'userdata';
    public $timestamps = false;
    protected $fillable = [

        'firstName',
        'lastName',
        'phoneNumber',
        'village',
        'mandal',
        'cropVariety',
        'totalAcres',
        'farmingIpm',
        'farmingAcres',
        'semiOrganics',
        'semiAcres',
        'organics',
        'orgAcres',
        'date',
        'manureOrganic',
        'drip',
        'cropCondition',
        'ageOfCrop',
        'sprayingSerial',
        'sprayingCombination',
        'quantity',
        'remarks',
        'files',

    ];
}
