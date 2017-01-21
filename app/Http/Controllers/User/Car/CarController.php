<?php

namespace App\Http\Controllers\User\Car;

use App\Domains\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    protected $car;

    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    public function validator(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'model' => 'required|string',
            'board' => 'required|string',
            'color' => 'required|string',
            'capacity' => 'required|string'
        ]);

        return $validator;

    }
    public function index()
    {
        $cars =  $this->getUser()->Car;

        return view('car.index', compact('cars'));
    }

    public function create()
    {
        return view('car.create');
    }

    public function store(Request $request)
    {
        try{
            if($this->validator($request)->fails())
            {
                return redirect()->back()->with('error', 'Campos nao preenchidos');
            }
            $this->car->create($request->input());

            return redirect()->route('user.car.index')->with('success', 'Cadastro Efetuado');
        }catch (\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit(Car $car)
    {

        return view('car.edit')->with('car', $car);
    }

    public function update(Car $car, Request $request)
    {
        if($this->validator($request)->fails())
        {
            return redirect()->back()->with('error', 'Campos nao preenchidos');
        }
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

