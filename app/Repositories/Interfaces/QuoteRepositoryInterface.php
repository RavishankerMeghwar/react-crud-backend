<?php
namespace App\Repositories\Interfaces;

Interface QuoteRepositoryInterface{
    public function allQuotes();
    public function allQuotesNonPaginated();
    public function store($data);
    public function findQuote($id);
    public function update($data, $id);
    public function destroy($id);
}
