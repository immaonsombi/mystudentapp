<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
class Fees extends Model
{



    protected $fillable=['student_number','full_name','date_of_birth','address','amount','date_of_payment',''];
}
