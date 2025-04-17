<?php



namespace XRA\Settings\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    public $table = 'settings';
    public $fillable = [
        'appname', 'description', 'keywords', 'author',
    ];
}
