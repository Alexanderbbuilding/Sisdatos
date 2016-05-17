<?php

namespace Minminer_app\Http\Requests;

use Minminer_app\Http\Requests\Request;

class StratigraphicSectionsFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
   public function authorize()
    {
        //Permitir autorizacion al usuario
        //return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //Reglas de validación
        return [
            'descripcion'      => 'required'
        ];
    }

     
     /*Personalizar los mensajes de salida*/
      public function messages()
    {
        return [
            'descripcion.required' => 'El campo Descripción es requerido'
            ];
    }
}
