@extends('layouts.main')

@section('content')
<div class="main-content">
    <section class="img-container">
        <div class="header">
            <div class="header-infographic"></div>
            <h1>
                Enhancing confidence in Nigeria for Nation Building A long march
                towards economic success and improved quality of life for Nigerians
            </h1>
            <p>
                Eligibility: Entrants must be undergraduates of Nigerian
                Universities
            </p>
        </div>
    </section>
    <!-- img container -->
    <section id="about" class="about-container">
        <h2>Dual Registration Alert!</h2>
        <center>
            <p>
                {{$user}} It would seem that you have already registered! Procced to the home page to submit your entry.
            </p>
        </center>
    </section>
</div>
@endsection
