@extends('layout.master')

@section('content')
   

@section('content')
    <section id="about-me">
        <div class="container">
            <div class="about-content">
                <h1>About Me</h1>
                <p>
                    Hello! I'm [Your Name], a passionate [Your Profession] with a background in [Your Field].
                    I thrive on creating innovative solutions and bringing ideas to life through technology.
                </p>
            </div>
        </div>
    </section>

    <section id="education">
        <div class="container">
            <h2>Education</h2>
            <ul>
                <li>
                    <strong>[Degree] in [Field of Study]</strong>
                    <br>
                    [University Name], [Graduation Year]
                </li>
             
            </ul>
        </div>
    </section>

    <section id="work-experience">
        <div class="container">
            <h2>Work Experience</h2>
            <ul>
                <li>
                    <strong>[Job Title]</strong>
                    <br>
                    [Company Name], [Start Date] - [End Date]
                    <p>[Description of responsibilities and achievements]</p>
                </li>
              
            </ul>
        </div>
    </section>

    <section id="certifications">
        <div class="container">
            <h2>Certifications</h2>
            <ul>
                <li>[Certification Name] - [Issuing Organization]</li>
               
            </ul>
        </div>
    </section>

    <section id="skills">
        <div class="container">
            <h2>Skills</h2>
            <ul>
                <li>Web Development</li>
                <li>JavaScript (React, Vue)</li>
                <li>PHP (Laravel)</li>
                <li>HTML5, CSS3</li>
             
            </ul>
        </div>
    </section>
@endsection
