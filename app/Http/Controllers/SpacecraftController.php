<?php

namespace App\Http\Controllers;

use App\Components\Spacecraft\ListComponent;
use App\Components\Spacecraft\ViewComponent;
use App\Filters\Name;
use App\Filters\Status;
use App\Http\Requests\SpacecraftRequest;
use App\Http\Requests\UpdateSpacecraftRequest;
use Illuminate\Http\Request;
use App\Models\Spacecraft;
use Illuminate\Routing\Pipeline;

class SpacecraftController extends Controller
{
    public function index()
    {
        $query = Spacecraft::query();
        // apply filters
        $spacecrafts = app(Pipeline::class)
            ->send($query)
            ->through([
                Status::class,
                Name::class,
                Status::class
            ])
            ->thenReturn()
            ->get();
        return response()->json((new ListComponent($spacecrafts))->toArray(), 200);
    }

    public function show(Spacecraft $spacecraft)
    {
        return response()->json((new ViewComponent($spacecraft))->toArray(), 200);
    }

    public function store(SpacecraftRequest $request)
    {
        $spacecraft = Spacecraft::create($request->json()->all());
        if ($spacecraft) {
            return response()->json(['success' => true], 201);
        }
        return response()->json(['message' => 'Error creating spacecraft'], 500);
    }

    public function update(UpdateSpacecraftRequest $request, Spacecraft $spacecraft)
    {
        $spacecraft->update($request->json()->all());
        return response()->json(['success' => true], 200);
    }

    public function delete(Request $request, Spacecraft $spacecraft)
    {
        $spacecraft->delete();
        return response()->json(['success' => true], 200);
    }
}
