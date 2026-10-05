@extends('layouts.app')

@section('title', 'Study Hub')

@section('content')

    <section class="study-hero">

        <div class="study-hero-text">

            <p class="small-title">WELCOME TO STUDY HUB</p>

            <h1>Learn Better.<br>Study Smarter.</h1>

            <p>
                Study Hub is a simple learning space designed to help
                students discover useful study techniques, stay organized,
                and make their learning experience more manageable.
            </p>

            <a href="/about" class="main-button">
                Learn More
            </a>

        </div>

        <div class="study-hero-card">

            <div class="study-icon">
                +
            </div>

            <h2>Start Learning</h2>

            <p>
                Build better study habits and find useful information
                to support your academic journey.
            </p>

        </div>

    </section>


    <section class="study-section">

        <div class="section-heading">

            <p class="small-title">STUDY HUB</p>

            <h2>What We Focus On</h2>

        </div>


        <div class="study-grid">

            <div class="study-card">

                <div class="card-number">01</div>

                <h3>Study Resources</h3>

                <p>
                    Find useful materials and information that can
                    support your learning and school activities.
                </p>

            </div>


            <div class="study-card">

                <div class="card-number">02</div>

                <h3>Study Techniques</h3>

                <p>
                    Discover simple approaches that can help you
                    improve your focus and study habits.
                </p>

            </div>


            <div class="study-card">

                <div class="card-number">03</div>

                <h3>Better Learning</h3>

                <p>
                    Develop good habits and strategies that can make
                    studying more organized and effective.
                </p>

            </div>

        </div>

    </section>

@endsection