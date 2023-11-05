<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckKid;
use App\Models\Father;
use App\Models\Kid;
use App\Models\Parents;
use App\traits\generaltrait;
use Illuminate\Http\Request;

class KidsController extends Controller
{
    public function store(CheckKid $request)
    {
        try{
            $validatedData=$request->validated();
            Kid::create($validatedData);
            return generaltrait::successMessage('Kid Inserted Successfully',200);
        }
        catch (\Exception $e){
            return generaltrait::errorMessage([], 'Kid Inserted Failed', 422);
        }

    }
    public function update(Request $request,$id)
    {
        try {
            $validatedData=$request->validate([
                'name'=>'sometimes|max:255',
                'date_of_birth' => 'sometimes|date',
                'father_id'=>'sometimes|exists:fathers,id'
            ]);
            $kids = Kid::findOrFail($id);
            $kids->update($validatedData);
            return generaltrait::successMessage('Kid Updated Successfully',200);
        }
        catch(\Exception $e){
            return generaltrait::errorMessage([], 'Kid Updated Failed', 422);


        }
    }
}
