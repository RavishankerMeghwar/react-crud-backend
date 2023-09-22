<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuoteRequest;
use App\Http\Requests\UpdateQuoteRequest;
use App\Repositories\Interfaces\QuoteRepositoryInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QuoteController extends Controller
{
    private $quoteRepository;

    /**
     * __construct
     *
     * @param  mixed $quoteRepository
     * @return void
     */
    public function __construct(QuoteRepositoryInterface $quoteRepository)
    {
        $this->quoteRepository = $quoteRepository;
    }

    /**
     * index
     *
     * @param  mixed $request
     * @return View
     */
    public function index(Request $request): View|string
    {
        return view('dashboard.quote.index');
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('dashboard.quote.create');
    }


    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(StoreQuoteRequest $request): RedirectResponse
    {
        $this->quoteRepository->store($request->validated());

        return redirect()->back()->with('success', 'Saved Successfully!');
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit($id): View
    {
        $quote = $this->quoteRepository->findQuote($id);

        return view('dashboard.quote.edit', compact('quote'));
    }

   
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(UpdateQuoteRequest $request, $id): RedirectResponse
    {
        $this->quoteRepository->update($request->validated(), $id);

        return redirect()->route('dashboard.quote.index')->with('success', 'quote Updated Successfully');
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $this->quoteRepository->destroy($id);
        return redirect()->route('dashboard.quote.index')->with('success', 'quote Deleted Successfully');
    }

}
