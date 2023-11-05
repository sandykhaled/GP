<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\checkParent;
use App\Models\Father;
use App\traits\generaltrait;
use Illuminate\Http\Request;

class FatherController extends Controller
{
    use generaltrait;
    public function store(checkParent $request){
        try{
            $request->validated();
            $validatedData = $request->all();
            Father::create($validatedData);
            return generaltrait::successMessage('Father Inserted Successfully',200);
        }
        catch(\Exception $e){
            return generaltrait::errorMessage([], 'Father Inserted Failed', 422);
        }



    }
    public function update(Request $request,$id){
       try {

           $validatedData = $request->validate([
                   'name' => 'sometimes|string|max:255',
                   'email' => 'sometimes|email',
                   'username' => 'sometimes|min:6',
                   'password' => 'sometimes|min:8',
                   'phone_number' => 'nullable|max:11',
                   'location' => 'nullable|max:255'
           ]);
           $fathers = Father::findOrFail($id);
           $fathers->update($validatedData);
           return generaltrait::successMessage('Father Updated Successfully',200);
           }
           catch (\Exception $e){
               return generaltrait::errorMessage([], 'Father Updated Failed', 422);
           }
    }
}
