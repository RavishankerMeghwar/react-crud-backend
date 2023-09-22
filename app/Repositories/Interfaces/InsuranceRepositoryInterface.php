<?php
namespace App\Repositories\Interfaces;

Interface InsuranceRepositoryInterface{

    public function allInsurances();
    public function allInsurancesNonPaginated();
    public function store($data);
    public function findInsurance($id);
    public function update($data, $id);
    public function destroy($id);
}
