@extends('layouts.app')

@section('title')
$$$$ADMIN$$$$
@endsection

@section('content') 

<div>
    <div class = "adam-container">
        <div class = "adam-container-item1">
            <div>
                <form class = "adam-form" method = "POST">
                @csrf
                    <div><span>Создание нового Теста</span></div>
                    <div class = "adam-form-item">
                        <label>Заголовок теста</label>
                        <input name = "test_title_ru"></input>
                    </div>
                    <div class = "adam-form-item">
                        <label>Test title</label>
                        <input name = "test_title_ru"></input>
                    </div>
                    <div class = "adam-form-item">
                        <label>Язык теста</label>
                        <select name = "test_lang">
                            <option value = "russian">Русский</option>
                            <option value = "english">English</option>
                        </select>
                    </div>
                    <div class = "adam-form-item">
                        <label>Уровень сложности</label>
                        <select name = "diff_level">
                            <option value = "ease">Ease</option>
                            <option value = "average">Average</option>
                            <option value = "tough">Tough</option>
                        </select>
                    </div>
                    <div class = "adam-form-item">
                        <label>Количество вопросов</label>
                        <input type = "number" name = "test_count"></input>
                    </div>
                    <div class = "adam-form-item">
                        <label>Промежуток сдачи теста</label>
                        <input type = "number" name = "passing_time"></input>
                    </div>
                    <div class = "adam-form-item">
                        <label>Язык программирования</label>
                        <select name = "programming_lang_id">
                        @foreach ($pl as $lang) 
                            <option value = <?= $lang['language'] ?>><?= $lang['language'] ?></option>
                        @endforeach
                        </select>
                    </div>
                    <div class = "adam-form-item">
                        <input type = "submit" value = "Создать тест"></input>
                    </div>
                </form>
            </div>
            <div>
                <form class = "adam-form" method = "POST" action = "{{Route('admin.create.pl')}}">
                @csrf
                    <div><span>Добавить язык программирования</span></div>
                    
                    <div class = "adam-form-item">
                        <label>Язык программирования</label>
                        <input type = "text" name = "language"></input>
                        <input type = "submit" value = "Добавить"></input>
                    </div>
                </form>
                
            </div>
        </div>
        <div class = "adam-container-item2">
        <div>
            <form class = "adam-form" method = "POST" action = "{{Route('admin.create.question')}}">
            @csrf
                <div><span>Добавить вопрос</span></div>
                @if (isset($errorMessage) and $errorMessage != 'success')
                <span style = "color: red; background-color: pink; padding: 10px" role="alert">
                    <strong>{{ $errorMessage }}</strong>
                </span>
                @endif
                <div class = "adam-form-item">
                <label>
                    Вопрос:
                </label>
                <input name = "question_ru" type = "text"></input>
                </div>
                <div class = "adam-form-item">
                <label>
                    Question:
                </label>
                <input name = "question_eng" type = "text"></input>
                </div>

                <div class = "adam-form-item">
                <label>
                    Уровень сложности:
                </label>
                <select value = "average" name = "diff_level">
                        <option value = "ease">Ease</option>
                        <option value = "average">Average</option>
                        <option value = "tough">Tough</option>
                </select>
                </div>

                <div class = "adam-form-item">
                <label>
                    Концеция
                </label>
                <input name = "question_concept" type = "text"></input>
                </div>

                <div class = "adam-form-item">
                <label>
                    Язык программирования
                </label>
                <select @if (isset($pl[0]) and !empty($pl[0])) value = <?= $pl[0]['language'] ?> @endif name = "programming_lang_id">
                @foreach ($pl as $lang) 
                    <option value = <?= $lang['language'] ?>><?= $lang['language'] ?></option>
                @endforeach
                </select>
                </div>
                <div class = "adam-form-item">
                    <label>1й вариант</label>
                    <select @if (isset($options[0])) and !empty($options[0]) value = <?= $options[0]['option_ru'] ?> @endif name = "option1_id">
                    @foreach ($options as $option)
                        <option value = <?= $option['option_ru'] ?>><?= $option['option_ru'] ?></option>
                    @endforeach
                    </select>
                </div>
                <div class = "adam-form-item">
                    <label>2й вариант</label>
                    <select @if (isset($options[0])) and !empty($options[0]) value = <?= $options[0]['option_ru'] ?> @endif name = "option2_id">
                    @foreach ($options as $option)
                        <option value = <?= $option['option_ru'] ?>><?= $option['option_ru'] ?></option>
                    @endforeach
                    </select>
                </div>
                <div class = "adam-form-item">
                    <label>3й вариант</label>
                    <select @if (isset($options[0])) and !empty($options[0]) value = <?= $options[0]['option_ru'] ?> @endif name = "option3_id">
                    @foreach ($options as $option)
                        <option value = <?= $option['option_ru'] ?>><?= $option['option_ru'] ?></option>
                    @endforeach
                    </select>
                </div>
                <div class = "adam-form-item">
                    <label>4й вариант</label>
                    <select @if (isset($options[0])) and !empty($options[0]) value = <?= $options[0]['option_ru'] ?> @endif name = "option4_id">
                    @foreach ($options as $option)
                        <option value = <?= $option['option_ru'] ?>><?= $option['option_ru'] ?></option>
                    @endforeach
                    </select>
                </div>
                <div class = "adam-form-item">
                    <label>Ответ</label>
                    <select @if (isset($options[0])) and !empty($options[0]) value = <?= $options[0]['option_ru'] ?> @endif name = "answer_id">
                    @foreach ($options as $option)
                        <option value = <?= $option['option_ru'] ?>><?= $option['option_ru'] ?></option>
                    @endforeach
                    </select>
                </div>
                <div class = "adam-form-item">
                    <input type = "submit" value = "Добавить вопрос"></input>
                </div>
            </form>
        </div>
        <div>
            <form class = "adam-form" method = "POST" action = "{{Route('admin.create.option')}}">
            @csrf
                <div><span>Варианты</span></div>
                <div class = "adam-form-item">
                    <label>Вариант</label>
                    <input name = "option_ru"></input>
                </div>
                <div class = "adam-form-item">
                    <label>Variant</label>
                    <input name = "option_eng"></input>
                </div>
                
                <div class = "adam-form-item">
                    <input type = "submit" value = "Добавить вариант"></input>
                </div>
            </form>
        </div>
    </div>
        <a href = "{{Route('admin.logout')}}">Logout</a>
    </div>
</div>
@endsection