<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function lineItems()
    {
        return $this->hasMany(SkillLineItem::class)->sort();
    }
}
