@extends('app')

@section('body-class', 'guides')

@section('content')

<section class="hero">
    <div class="container">

        <div class="content">
            <h1>Laravel Guides</h1>
            <p>This section features tutorials on everything from getting started with Laravel, to expert topics, and everything in between.</p>
        </div>
    </div>
</section>

<section class="panel dark">
    <div class="mw-620px u-offset-vertical">
        <ul class="cards-wrapper">
            <li class="card">
                <a href="/guides-item">
                    <img class="card__thumb" src="http://placehold.it/350x200/f2f2f2/666" alt="">
                    <div class="card__meta">
                        <span class="card__level">Beginner</span>
                        <h2 class="card__title">Build A Todo List</h2>
                    </div>
                </a>
            </li>
            <li class="card" >
                <a href="/guides-item">
                    <img class="card__thumb" src="http://placehold.it/350x200/f2f2f2/666" alt="">
                    <div class="card__meta">
                        <span class="card__level">Intermediate</span>
                        <h2 class="card__title">How to deploy Laravel</h2>
                    </div>
                </a>
            </li>
            <li class="card">
                <a href="/guides-item">
                    <img class="card__thumb" src="http://placehold.it/350x200/f2f2f2/666" alt="">
                    <div class="card__meta">
                        <span class="card__level">Advanced</span>
                        <h2 class="card__title">Getting to know routers</h2>
                    </div>
                </a>
            </li>
            <li class="card">
                <a href="/guides-item">
                    <img class="card__thumb" src="http://placehold.it/350x200/f2f2f2/666" alt="">
                    <div class="card__meta">
                        <span class="card__level">Beginner</span>
                        <h2 class="card__title">How to build a todo List with Laravel</h2>
                    </div>
                </a>
            </li>
            <li class="card" >
                <a href="/guides-item">
                    <img class="card__thumb" src="http://placehold.it/350x200/f2f2f2/666" alt="">
                    <div class="card__meta">
                        <span class="card__level">Beginner</span>
                        <h2 class="card__title">How to deploy Laravel</h2>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</section>

@endsection
