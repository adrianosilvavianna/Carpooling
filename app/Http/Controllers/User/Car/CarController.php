<?php

namespace App\Http\Controllers\User\Car;

use App\Domains\Car;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarRequest;
use Illuminate\Http\Request;

class CarController extends Controller
{
    protected $car;

    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    public function index()
    {
        $cars =  $this->getUser()->Cars;
        return view('car.index', compact('cars'));
    }

    public function create()
    {
        return view('car.create');
    }

    public function store(CarRequest $request)
    {
        $this->getUser()->Cars()->create($request->input());
        return redirect()->route('user.car.index')->with('success', 'Cadastro Efetuado');
    }

    public function edit(Car $car)
    {

        return view('car.edit')->with('car', $car);
    }

    public function update(Car $car, CarRequest $request)
    {
        $car->update($request->input());
        return redirect()->back()->with('success', 'Dados atualizados!');
    }

    public function destroy(Car $car)
    {
        try{
            $car->forceDelete();    
                   return redirect()->route('user.car.index')->with('success', 'Excluido!');
        }catch(\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());    
        }
    }

}

