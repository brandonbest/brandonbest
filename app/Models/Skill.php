<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function all(Request $request)
    {
        $accomplishments = Accomplishment::active()->sort()->get();
        return AccomplishmentResource::collection($accomplishments);
    }

    public function single(Accomplishment $accomplishment)
    {
        return new AccomplishmentResource($accomplishment);
    }
}
