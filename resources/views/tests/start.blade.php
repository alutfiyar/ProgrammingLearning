@extends('layouts/app')

@section('title')
    Начать тест - {{ $testData->title }}
@endsection

@section('content')

    <div class="test-info">
        <h1>{{ $testData->title }}</h1>
        <p>Язык: {{ $testData->language }}</p>
        <p>Уровень сложности: {{ $testData->difficulty_level }}</p>
        <p>Длительность теста: 10 минут</p>
    </div>
    

    <h2>Вопросы:</h2>   
    <div id="questions-container" class="question">
        <div style = "width: 40%" id = "question">
            <!-- Здесь будут подгружаться вопросы из JSON с использованием JavaScript -->
        </div>
        
    </div>
    
    <p id="timer">Оставшееся время: 10:00</p>

    <button id="start-test-button" class="btn btn-primary">Начать тест</button>

    <script>
        // JavaScript код для таймера и подгрузки вопросов
        const testDuration = 10 * 60; // Продолжительность теста в секундах
        const questions = {!! json_encode($testData->questions) !!}; // Вопросы из JSON

        let currentQuestionIndex = 0;
        let remainingTime = testDuration;
        let timerInterval;
        let corrects = 0;

        function displayQuestion(question) {
            const questionContainer = document.getElementById('question');
            questionContainer.innerHTML = `
                <h3>Вопрос ${currentQuestionIndex + 1}:</h3>
                <p>${question.question_text}</p>
                <ul>
                    ${question.answer_options.map((option, index) => `
                        <li id = "option-json">
                            <input type="radio" name="answer" value="${index}">
                            ${option}
                        </li>
                    `).join('')}
                </ul>
                <button id="next-button">Далее</button>
            `;
            let showAnswers = null;
            const nextButton = document.getElementById('next-button');
            nextButton.addEventListener('click', () => {
                const selectedAnswer = document.querySelector('input[name="answer"]:checked');
                if (selectedAnswer) {
                    // Проверка ответа и обработка результата
                    const correctAnswerIndex = questions[currentQuestionIndex].correct_answer;
                    const selectedAnswerIndex = parseInt(selectedAnswer.value);
                    console.log(correctAnswerIndex);
                    console.log(selectedAnswerIndex);
                    if (correctAnswerIndex === selectedAnswerIndex) {
                        corrects++;
                        console.log("correct");
                        // Правильный ответ
                        // Здесь можно добавить логику для подсчета баллов или отслеживания правильных ответов.
                    }
                    currentQuestionIndex++;
                    if (currentQuestionIndex < questions.length) {
                        displayQuestion(questions[currentQuestionIndex]);
                    } else {
                        // Все вопросы пройдены, завершение теста
                        clearInterval(timerInterval);
                        
                        questionContainer.innerHTML = `
                            <h3>Тест завершен. Спасибо за участие!</h3>
                            <div>
                                <p>Вы ответили правильно на ${corrects} из ${questions.length} вопросов</p>
                                <button id="answers-button">Показать ответы</button>
                            </div>
                        `;

                        showAnswers = document.getElementById('answers-button');
                        showAnswers.addEventListener('click', () => {
                            console.log(questions.length);
                            var html = questionContainer.innerHTML;
                            for (var i = 0; i < questions.length; i++) {
                                
                                
                                var additinghtml = `
                                <p>${question.question_text}</p>
                                <ul>
                                    ${question.answer_options.map((option, i) => `
                                        <li id = "option-json">
                                            <input type="radio" name="answer" value="${i}">
                                            ${option}
                                        </li>
                                    `).join('')}
                                </ul>
                                `
                                html = html + additinghtml;
                            }
                            questionContainer.innerHTML = html;
                        });
                    }//
                }
            });


        }

        function updateTimer() {
            const timer = document.getElementById('timer');
            const minutes = Math.floor(remainingTime / 60);
            const seconds = remainingTime % 60;
            timer.textContent = `Оставшееся время: ${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
            remainingTime--;

            if (remainingTime < 0) {
                // Время истекло, автоматическое завершение теста
                clearInterval(timerInterval);
                alert('Время истекло. Тест завершен.');
                window.location.href = '{{ route('tests.index') }}'; // Перенаправление на страницу выбора тестов
            }
        }

        document.getElementById('start-test-button').addEventListener('click', () => {
            displayQuestion(questions[currentQuestionIndex]);
            timerInterval = setInterval(updateTimer, 1000);
        });
    </script>
@endsection