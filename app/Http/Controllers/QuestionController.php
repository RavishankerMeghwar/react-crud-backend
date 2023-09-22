<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Repositories\Interfaces\QuestionRepositoryInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    private $questionRepository;

    /**
     * __construct
     *
     * @param  mixed $questionRepository
     * @return void
     */
    public function __construct(QuestionRepositoryInterface $questionRepository)
    {
        $this->questionRepository = $questionRepository;
    }

    /**
     * index
     *
     * @param  mixed $request
     * @return View
     */
    public function index(Request $request): View|string
    {
        return view('dashboard.question.index');
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('dashboard.question.create');
    }


    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(StoreQuestionRequest $request): RedirectResponse
    {
        $this->questionRepository->store($request->validated());

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
        $question = $this->questionRepository->findQuestion($id);

        return view('dashboard.question.edit', compact('question'));
    }

   
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(UpdateQuestionRequest $request, $id): RedirectResponse
    {
        $this->questionRepository->update($request->validated(), $id);

        return redirect()->route('dashboard.question.index')->with('success', 'question Updated Successfully');
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $this->questionRepository->destroy($id);

        return redirect()->route('dashboard.question.index')->with('success', 'question Deleted Successfully');
    }
}
