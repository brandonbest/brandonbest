<?php

namespace App\Models;

use App\Models\Traits\TraitScopeActive;
use App\Models\Traits\TraitScopeSort;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use TraitScopeActive;
    use TraitScopeSort;
}
