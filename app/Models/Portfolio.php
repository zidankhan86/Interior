<?php

namespace App\Models;

use App\Models\PortfolioType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;
    protected $guarded = [ ];


    public function project_category()
    {
        return $this->belongsTo(PortfolioType::class,'type_name_id','id');
    }
}
