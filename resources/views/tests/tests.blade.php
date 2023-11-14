@extends('layouts.app')
@include('layouts.header')

@section('title')
Выберите тест - Тесты на C++
@endsection

<div class="container">
    <h1>Выберите тест по C++</h1>
    <p>Выберите тест из доступных вариантов и начните его прохождение.</p>

    <div class="test-blocks">
        <!-- Тест 1 -->
        <div class="test-block">
            <h2>Тест 1</h2>
            <p><strong>Уровень сложности:</strong> Начальный</p>
            <p><strong>Время прохождения:</strong> 30 минут</p>
            <p><strong>Язык:</strong> Английский</p>
            <p><strong>Приближенные концепции C++:</strong> Переменные, условия, циклы</p>
            <a href="{{ route('tests.start', 'test1') }}" class="btn btn-primary">Начать тест</a>
        </div>

        <!-- Тест 2 -->
        <div class="test-block">
            <h2>Тест 2</h2>
            <p><strong>Уровень сложности:</strong> Средний</p>
            <p><strong>Время прохождения:</strong> 45 минут</p>
            <p><strong>Язык:</strong> Английский</p>
            <p><strong>Приближенные концепции C++:</strong> Функции, классы, наследование</p>
            <a href="{{ route('tests.start', 'test2') }}" class="btn btn-primary">Начать тест</a>
        </div>

                <!-- Тест 3 -->
                <div class="test-block">
            <h2>Тест 3</h2>
            <p><strong>Уровень сложности:</strong> Продвинутый</p>
            <p><strong>Время прохождения:</strong> 60 минут</p>
            <p><strong>Язык:</strong> Английский</p>
            <p><strong>Приближенные концепции C++:</strong> Многопоточное программирование, шаблоны</p>
            <a href="{{ route('tests.start', 'test3') }}" class="btn btn-primary">Начать тест</a>
        </div>

        <!-- Тест 4 -->
        <div class="test-block">
            <h2>Тест 4</h2>
            <p><strong>Уровень сложности:</strong> Средний</p>
            <p><strong>Время прохождения:</strong> 45 минут</p>
            <p><strong>Язык:</strong> Английский</p>
            <p><strong>Приближенные концепции C++:</strong> Структуры данных, указатели</p>
            <a href="{{ route('tests.start', 'test4') }}" class="btn btn-primary">Начать тест</a>
        </div>

        <!-- Тест 5 -->
        <div class="test-block">
            <h2>Тест 5</h2>
            <p><strong>Уровень сложности:</strong> Начальный</p>
            <p><strong>Время прохождения:</strong> 30 минут</p>
            <p><strong>Язык:</strong> Английский</p>
            <p><strong>Приближенные концепции C++:</strong> Операторы, функции</p>
            <a href="{{ route('tests.start', 'test5') }}" class="btn btn-primary">Начать тест</a>
        </div>

        <!-- Тест 6 -->
        <div class="test-block">
            <h2>Тест 6</h2>
            <p><strong>Уровень сложности:</strong> Продвинутый</p>
            <p><strong>Время прохождения:</strong> 75 минут</p>
            <p><strong>Язык:</strong> Английский</p>
            <p><strong>Приближенные концепции C++:</strong> Перегрузка операторов, исключения</p>
            <a href="{{ route('tests.start', 'test6') }}" class="btn btn-primary">Начать тест</a>
        </div>


        <!-- Продолжите добавлять остальные тесты по аналогии -->
    </div>
</div>

@section('footer')
@include('layouts.footer')
@endsection