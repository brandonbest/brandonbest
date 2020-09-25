<?php

namespace App\Http\Controllers;

use App\Http\Resources\LegalResource;
use App\Models\Legal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LegalController extends Controller
{
    public function all()
    {
        $legal = DB::transaction(function() {
            $activeIds = Legal::select('slug', DB::raw('MAX(id) as id'))->active()->sort()->groupBy('slug')->get();
            return Legal::select('id','title','slug','overview','icon', 'updated_at')->active()->sort('sort', 'ASC')->sort()->whereIn('id', $activeIds->pluck('id')->toArray())->get();
        }, 2);

        return LegalResource::collection($legal);
    }

    /**
     * A single Legal Resource
     *
     * @param string $legal
     *
     * @return LegalResource
     */
    public function legal(string $legal)
    {
        $legal = Legal::slug($legal)->active()->sort()->first();
        return new LegalResource($legal);
    }
}
