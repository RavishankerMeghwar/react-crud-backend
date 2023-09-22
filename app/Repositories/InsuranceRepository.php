<?php

namespace App\Repositories;

use App\Models\Insurance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\Interfaces\InsuranceRepositoryInterface;
use Illuminate\Support\Facades\File;

class InsuranceRepository implements InsuranceRepositoryInterface
{


    /**
     * allCategories
     *
     * @return LengthAwarePaginator
     */
    public function allInsurances($search = null, $perpage = 10): LengthAwarePaginator
    {
        return Insurance::where('title', 'LIKE', "%{$search}%")
            ->latest()
            ->paginate($perpage);
    }

    /**
     *
     * @return Collection
     */
    public function allInsurancesNonPaginated(): Collection
    {
        return Insurance::get();
    }

    /**
     * store
     *
     * @param  mixed $data
     * @return Model
     */
    public function store($data): Model
    {
        $insurance = Insurance::create($data);
        

        $path = public_path("insurances/{$insurance->id}");
        // Create the directory if it doesn't exist
        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true, true);
        }

        if (request()->hasFile('icon')) {

            $file = request()->file('icon');
            $name = rand(99, 9999999) . '.' . $file->getClientOriginalExtension();

            if ($file->move($path, $name)) {
                $insurance->icon = $name;
                $insurance->save();
            }
        }

        return $insurance;
    }


    /**
     * 
     *
     * @param  mixed $id
     * @return Model
     */
    public function findInsurance($id): Model
    {
        return Insurance::findorFail($id);
    }

    /**
     * update
     *
     * @param  mixed $data
     * @param  mixed $id
     * @return model
     */
    public function update($data, $id): model
    {
        $insurance = Insurance::findorFail($id);
        $insurance->update($data);

        request()->validate([
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $path = public_path("assets/insurances/{$insurance->id}");
        // Create the directory if it doesn't exist
        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true, true);
        }

        if (request()->hasFile('icon')) {
            $file = request()->file('icon');
            $name = rand(99, 9999999) . '.' . $file->extension();

            if ($file->move($path, $name)) {
                // Delete the old icon if it exists
                if ($insurance->icon && File::exists($path . '/' . $insurance->icon)) {
                    File::delete($path . '/' . $insurance->icon);
                }

                // Update the insurance record with the new icon filename
                $insurance->icon = $name;
                $insurance->save();
            }
        }

        return $insurance;
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        $insurance = Insurance::findorFail($id);
        $insurance->delete();
    }
}