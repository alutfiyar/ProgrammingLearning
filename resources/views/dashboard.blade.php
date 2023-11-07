@extends('layouts.app')
@include('layouts.header')

@section('title')
Добро пожаловать - Тесты на C++
@endsection

@section('content')
    <div class = "dash-container">
        <div class = "dash-header">
            <div class="header-container">
                <h1>Добро пожаловать на сайт с тестами по C++</h1>
                <p>Измерьте свои знания и навыки в программировании на C++ с нашими тестами.</p>
                <a href="{{ route('tests.index') }}" class="btn btn-primary">Выберите тест</a>
            </div>
        </div>
        <main>
            <section class="about-section">
                <h2>О нас</h2>
                <p>Мы предоставляем разнообразные тесты и задания по C++, чтобы помочь вам улучшить ваши программирование навыки.</p>
            </section>
            <section class="features-section">
                <h2>Наши особенности</h2>
                <div class="feature">
                    <i class="fas fa-cogs"></i>
                    <p>Широкий спектр тестов для C++</p>
                </div>
                <div class="feature">
                    <i class="fas fa-stopwatch"></i>
                    <p>Таймер для эффективного тестирования</p>
                </div>
                <div class="feature">
                    <i class="fas fa-chart-line"></i>
                    <p>Отслеживание вашего прогресса и успехов</p>
                </div>
            </section>
        </main>
    </div>
    
    
@endsection