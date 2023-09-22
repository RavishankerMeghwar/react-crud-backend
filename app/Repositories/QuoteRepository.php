<?php

namespace App\Repositories;

use App\Models\Quote;
use App\Models\QuoteDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\Interfaces\QuoteRepositoryInterface;

class QuoteRepository implements QuoteRepositoryInterface
{
    /**
     * allCategories
     *
     * @return LengthAwarePaginator
     */
    public function allQuotes($search = null, $perpage = 10): LengthAwarePaginator
    {
        return Quote::where('title', 'LIKE', "%{$search}%")
            ->latest()
            ->paginate($perpage);
    }

    /**
     *
     * @return Collection
     */
    public function allQuotesNonPaginated(): Collection
    {
        return Quote::get();
    }

    /**
     * store
     *
     * @param  mixed $data
     * @return Model
     */
    public function store($data): Model
    {
        $quote = Quote::create($data);

        foreach (request()->details as $detail) {
            $qoute_detail = new QuoteDetail();
            $qoute_detail->qoute_id = $quote->id;
            $qoute_detail->title = $detail['title'];
            $qoute_detail->save();
        }

        return $quote;
    }


    /**
     * 
     *
     * @param  mixed $id
     * @return Model
     */
    public function findQuote($id): Model
    {
        return Quote::findorFail($id);
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
        $quote = Quote::findorFail($id);
        $quote->update($data);

        //add and update qoutes details
        // request()->validate([
        //     'question_id' => 'required|exists:questions,id',
        //     'title' => 'required|string|max:255'
        // ]);
        foreach (request()->details as $detail) {
            $qoute_detail = QuoteDetail::find($detail['id']);
            $qoute_detail->qoute_id = $quote->id;
            $qoute_detail->title = $detail['title'];
            $qoute_detail->save();
        }

        return $quote;
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        $qoute = Quote::findorFail($id);
        $qoute->delete();
    }

}