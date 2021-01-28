<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poi;
use Str;

class PoiController extends Controller
{
    public function index(Request $request)
    {
        $category_id = $request->category_id;
        $name = $request->name;

        $pois = Poi::when($name, function ($query, $name) {
                return $query->where('name', 'LIKE', '%'.Str::of($name)->upper().'%');
            })
            ->when($category_id, function ($query, $category_id) {
                return $query->where('category_id', $category_id);
            })
            ->get();

        return $pois;
    }
}
