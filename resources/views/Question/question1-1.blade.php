@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">Good Morning </h3>
    <!-- <h3 class="question2">douzo yoroshiku</h3> -->
    <div class="choices">
        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">こんにちわ</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">こんばんわ</h4>
        </button>

        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">おはよう</h4>
        </button>
    </div>

</div>

<div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div>


@endsection
