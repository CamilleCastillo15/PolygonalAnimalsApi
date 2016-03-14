<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateCreatorRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return 
        [
            'name' => 'required',
            'phone' => 'required'
        ];
    }

    //Redéfinition de la fonction response
    public function response(array $errors)
 
             {
                 return response()->json(['message' => 'Vous devez renseigner le nom et le numéro du nouveau Creator', 'code' => 422], 422);
             }
}
