select quiz_answers.*, quiz_questions.text, quiz_questions.picture from quiz_answers 
join quiz_questions on quiz_answers.quiz_question_id = quiz_questions.id;