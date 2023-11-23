@extends('layout.master')

@section('content')
    <div class="container my-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">

                    <section id="hero">
                        <div class="container">
                            <div class="hero-content">
                                <h1>Hello, I'm Kamrul Hasan</h1>
                                <p>Welcome to my portfolio website. I'm a [Your Profession] passionate about [Your Passion].
                                </p>
                                <p>Explore my work and discover how I can contribute to your projects.</p>
                                <a href="{{ route('project.page') }}" class="btn btn-primary">View My Projects</a>
                            </div>
                        </div>
                    </section>

                    <section id="skills">
                        <div class="container my-3">
                            <h2>Skills</h2>
                            <ul>
                                <li>Web Development</li>
                                <li>JavaScript (Vue Js)</li>
                                <li>PHP (Laravel)</li>
                                <li>HTML5, CSS3</li>

                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
