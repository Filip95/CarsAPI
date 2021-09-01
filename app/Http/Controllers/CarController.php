<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Http\Requests\CreateCarRequest;
use App\Http\Requests\UpdateCarRequest;
class CarController extends Controller
{
    public function index(Request $request){
        $take = $request->query('take');
        $skip = $request->skip('skip');
        $cars = Car::search($take, $skip);
        return response()->json($cars);
    }

    public function show(Car $car){
        return response()->json($car);
    }
    public function store(CreateCarRequest $request){
        $data = $request->validated();
        $car = Car::create($data);
        return response()->json($car,201);
    }
    public function update(UpdateCarRequest $request,Car $car){
        $data = $request->validated();
        $car->update($data);
        return response()->json($car,202);
    }
    public function delete(Car $car){
        $car->delete();
        return response()->noContent();
    }

}
