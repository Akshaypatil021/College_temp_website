<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class SampleModel extends Model
{
    use Notifiable;

    protected $table = 'master_page'; // Add this if your table is not 'sample_models'
    protected $primaryKey = 'Page_ID';
    public $timestamps = false;

    protected $fillable = [
        'Page_No',
        'Page_Type',
        'Page_NAME',
        'Page_Level',
        'Page_SequenceNo',
        'Page_Stat',
    ];
}
