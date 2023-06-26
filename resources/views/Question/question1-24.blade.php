@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">Have a nice day</h3>
    <div class="choices">
        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">いい 天気 です</h4>
        </button>

        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">いい 一日 を</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">良い 夢 を</h4>
        </button>
    </div>

</div>

<div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div>


@endsection

