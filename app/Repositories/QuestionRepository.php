<?php

namespace App\Repositories;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\Interfaces\QuestionRepositoryInterface;

class QuestionRepository implements QuestionRepositoryInterface
{


    /**
     * allCategories
     *
     * @return LengthAwarePaginator
     */
    public function allQuestions($search = null, $perpage = 10): LengthAwarePaginator
    {
        return Question::where('title', 'LIKE', "%{$search}%")
            ->latest()
            ->options()
            ->insurance()
            ->paginate($perpage);
    }

    /**
     *
     * @return Collection
     */
    public function allQuestionsNonPaginated(): Collection
    {
        return Question::get();
    }

    /**
     * store
     *
     * @param  mixed $data
     * @return Model
     */
    public function store($data): Model
    {
        $question = Question::create($data);

        return $question;
    }


    /**
     * 
     *
     * @param  mixed $id
     * @return Model
     */
    public function findQuestion($id): Model
    {
        return Question::findorFail($id);
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
        $question = Question::findorFail($id);
        $question->update($data);

        //add and update options
        request()->validate([
            'question_id' => 'required|exists:questions,id',
            'title' => 'required|string|max:255'
        ]);

        $option = Option::findorFail(request()->option_id);
        if (!$option) {
            $option = new Option;
            $option->question_id = $question->id;
        }
        $option->title = request()->title;
        $option->save();

        return $question;
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        $question = Question::findorFail($id);
        $question->delete();
    }
}