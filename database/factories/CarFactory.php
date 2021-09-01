<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;


    private $brands = ['Mercedes','BMW','Mazda','Opel','Audi','
    Toyota','Ferrari'];
    private $automaticOrNot = [true,false];
    private $engineType = ['petrol', 'diesel','electric','hybrid'];
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand' => $this->faker->randomElement($this->brands),
            'model' => $this->faker->sentence(1,true),
            'year' => $this->faker->numberBetween($min = 1991,$max = 2021),
            'maxSpeed' => $this->faker->numberBetween($min= 180,$max = 330),
            'isAutomatic' => $this->faker->randomElement($this->automaticOrNot),
            'engine' => $this->faker->randomElement($this->engineType),
            'numberOfDoors' => $this->faker->numberBetween($min =2,$max = 7)
        ];
    }
}
