<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Car;

class ValidateCar
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $carExists = Car::where('brand', $request->get('brand',''))
            ->where('model', $request->get('model',''))
            ->where('year', $request->get('year',''))
            ->exists();

        if($carExists){
            return response()->json([
                'message' => 'Car brand and model released in the same year already exists'
            ],400);
        }
        return $next($request);
    }
}
