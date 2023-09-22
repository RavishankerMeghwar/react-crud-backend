<?php
namespace App\Repositories\Interfaces;

Interface QuestionRepositoryInterface{

    public function allQuestions();
    public function allQuestionsNonPaginated();
    public function store($data);
    public function findQuestion($id);
    public function update($data, $id);
    public function destroy($id);
}
