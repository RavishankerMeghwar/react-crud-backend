<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInsuranceRequest;
use App\Http\Requests\UpdateInsuranceRequest;
use App\Http\Resources\InsuranceResource;
use App\Models\Insurance;
use App\Repositories\Interfaces\InsuranceRepositoryInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    private $insuranceRepository;

    /**
     * __construct
     *
     * @param  mixed $insuranceRepository
     * @return void
     */
    public function __construct(InsuranceRepositoryInterface $insuranceRepository)
    {
        $this->insuranceRepository = $insuranceRepository;
    }

    /**
     * index
     *
     * @param  mixed $request
     * @return View
     */
    public function index(Request $request)
    {
        if ($request->is('api/*')) {
            // If the URL contains 'api' prefix, return JSON data
            return InsuranceResource::collection(Insurance::all());
        } else {
            // Otherwise, return the view for the admin panel
            $insurances = $this->insuranceRepository->allInsurances();
            return view('admin.pages.insurance.index', compact('insurances'));
        }
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('dashboard.insurance.create');
    }


    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(StoreInsuranceRequest $request)
    {
        $insurance = $this->insuranceRepository->store($request->validated());
        return new InsuranceResource($insurance);
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit($id): View
    {
        $insurance = $this->insuranceRepository->findInsurance($id);

        return view('dashboard.insurance.edit', compact('insurance'));
    }


    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(UpdateInsuranceRequest $request, $id): RedirectResponse
    {
        $this->insuranceRepository->update($request->validated(), $id);

        return redirect()->route('dashboard.insurance.index')->with('success', 'insurance Updated Successfully');
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $this->insuranceRepository->destroy($id);

        return redirect()->route('dashboard.insurance.index')->with('success', 'insurance Deleted Successfully');
    }
}