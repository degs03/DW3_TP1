<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;

class AutoController extends Controller
{
    //
    public function CrearAuto(){
        $marca = 'Toyota';
        $modelo = 'Corolla';
        $propietario = 'Dario Gimenez';
        $telefono = 993824824;
        $color = 'San Isidro Etapa 5';

        //Insertar datos en la tabla
        //utilizando eloquent
        $autos = Auto::create([
            'marca'=>$marca,
            'modelo'=>$modelo,
            'propietario'=>$propietario,
            'telefono'=>$telefono,
            'color'=>$color,
        ]);

        return response()->json(['message'=>'Auto creado correctmente', 'auto'=>$autos]);
    }
    public function ver_autos(){
        //trae todos los datos
        $autos = Auto::all();

        return response()->json(['message'=>'Todos los autos', 'auto'=>$autos]);
    }

    //funcion para ver por ID
    public function show_auto ($id){
        $auto = Auto::find($id);
        return response()->json(['message'=>'El auto buscado es', 'auto'=>$auto]);
    }

    public function delete_auto($id){
        $auto = Auto::find($id);
        if($auto){
            $auto->delete();
            return response()->json(['message'=>'Auto eliminado correctamente']);
        }else{
            return response()->json(['message'=>'Auto no eliminado']);
        };
    }
    public function update_auto(){
        $autos = Auto::where('id', '1')
        ->first();
        $marca = 'Ford';
        $modelo = 'Mustang';
        $propietario = 'Ariel Gimenez';
        $telefono = 993824854;
        $color = 'San Isidro Etapa 7';
        $autos->update([
            'marca'=>$marca,
            'modelo'=>$modelo,
            'propietario'=>$propietario,
            'telefono'=>$telefono,
            'color'=>$color,
        ]);
        return response()->json(['message'=>'Auto editado correctamente']);
    }   
}
