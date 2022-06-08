<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultans_form extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'miidlename',
        'surname',
        'phone',
        'email',
        'residential',
        'office',
        'kin-name',
        'kin-address',
        'kin-relation',
        'prepared-who',
        'account-name',
        'account-number',
        'bank',
        'company-line',
        'company-email',

}
