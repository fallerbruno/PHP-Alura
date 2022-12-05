<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
use App\Repositories\SeriesRepository;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function __construct(private SeriesRepository $seriesRepository)
    {
    }

    public function index(Request $request)
    {
        $query = Series::query();
        if($request->has('nome')){

            return $query->where('nome', $request->nome)->get();
        }

        // return Series::where('nome', $request->nome)->get();
        // return Series::whereNome($request->nome)->paginate();
        return $query->paginate(2);
    }

    public function store(SeriesFormRequest $request)
    {
        return response()
            ->json($this->seriesRepository->add($request), 201);
    }

    public function show(int $series)
    {
        $seriesModel = Series::with('seasons.episodes')->find($series);
        if ($seriesModel === null) {
            return response()->json(['message' => 'Series not found'], 404);
        }

        return $seriesModel;
    }

    public function update(Series $series, SeriesFormRequest $request)
    {
        $series->fill($request->all());
        $series->save();

        return $series;
    }

    public function destroy(int $series, Request $request)
    {
        $request->user()->tokenCan(['series:delete']);
        Series::destroy($series);
        return response()->noContent();
    }
}
