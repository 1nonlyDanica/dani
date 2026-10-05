@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

    <section class="page-header">

        <p class="small-title">CONTACT US</p>

        <h1>Let's Stay Connected</h1>

        <p>
            Have a question, suggestion, or feedback about Study Hub?
            We'd be happy to hear from you.
        </p>

    </section>


    <section class="contact-grid">

        <div class="contact-card">

            <div class="contact-icon">@</div>

            <h2>Email</h2>

            <p>
                Send us your questions or suggestions through email.
            </p>

            <a href="mailto:studyhub@example.com">
                daniellerossjaen@student.trimex.colleges.edu.ph
            </a>

        </div>


        <div class="contact-card">

            <div class="contact-icon">?</div>

            <h2>Questions</h2>

            <p>
                If you have questions about the information on Study Hub,
                feel free to reach out to us.
            </p>

        </div>


        <div class="contact-card">

            <div class="contact-icon">+</div>

            <h2>Feedback</h2>

            <p>
                Your suggestions can help us improve the Study Hub
                and make it more useful for students.
            </p>

        </div>

    </section>


    <section class="contact-message">

        <h2>Have Something to Share?</h2>

        <p>
            Whether you have a suggestion for a study topic or simply
            want to share your thoughts, your feedback is always welcome.
        </p>

    </section>

@endsection