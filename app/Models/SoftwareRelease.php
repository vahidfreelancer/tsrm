<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareRelease extends Model
{
    use HasFactory;

    protected $fillable=[
        'no_of_downloads',
        'file_size',
        'userid',
        'status',
        'type',
        'releasedate',
        'builddate',
        'filename',
        'format',
        'md5',
        'name',
        'detils',
        'improvements',
        'version',
        'device',
        'comment',
    ];
}
