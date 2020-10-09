<?php

namespace App\Http\Controllers;

use App\Http\Resources\AccomplishmentResource;
use App\Models\Accomplishment;
use Illuminate\Http\Request;

class AccomplishmentsController extends Controller
{
    public function all(Request $request)
    {
        $accomplishments = Accomplishment::active()->sort()->sortId()->get();
        return AccomplishmentResource::collection($accomplishments);
    }

    public function single(string $accomplishmentSlug)
    {
        $accomplishment = Accomplishment::slug($accomplishmentSlug)->first();
        return new AccomplishmentResource($accomplishment);
    }
}
