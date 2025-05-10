<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Younis Tallan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('clients/style/style.css')}}">

    <!-- CSS لتحسين التصميم -->

</head>
<body>
    <!-- زر التبديل -->
    <div class="toggle-btn" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
    </div>

    <!-- القائمة الجانبية -->
    <div class="sidebar">
        <div class="profile">
            <img src="{{asset('clients/imgs/يونس.jpg')}}" alt="Profile Picture">
            <h2 style="color: white; font-weight: bold;">Younis Tallan</h2>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-skype"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#home" class="active"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#about"><i class="fas fa-user"></i> About</a></li>
                <li><a href="#skills"><i class="fas fa-file"></i> Skills</a></li>
                <li><a href="#Education"><i class="fas fa-briefcase"></i> Education</a></li>
                <li><a href="#projects"><i class="fas fa-cogs"></i> Projects</a></li>
                <li><a href="#contact"><i class="fas fa-envelope"></i> Contact</a></li>
            </ul>
        </nav>
    </div>

    <!-- المحتوى الرئيسي -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1 style="font-weight: bold;">Hi, I'm Younis Tallan</h1>
            <p> I'm a passionate Full Stack Developer dedicated to building seamless and dynamic digital experiences.</p>        </div>
    </section>
    <div class="main-content">

        <div class="container" id="about">
            <h1 class="skills-title">About</h1>
            <p>    {{ $personalInfo->about_me}}     </p>

            <h2>{{$personalInfo->job_title}}</h2>
            <blockquote>
                "Building efficient and scalable web applications is not just my profession—it's my passion. I believe in continuous learning, writing clean code, and developing solutions that make a real impact."
            </blockquote>


            <div class="details">
                <div>
                    <i class="fas fa-birthday-cake"></i>
                    <div>
                        <strong>Birthday:</strong> {{$personalInfo->birthdate}}
                    </div>
                </div>
                <div>
                    <i class="fas fa-calendar-alt"></i>
                    <div>
                        <strong>Age:</strong> {{$personalInfo->age}}
                    </div>
                </div>

                <div>
                    <i class="fas fa-graduation-cap"></i>
                    <div>
                        <strong>Degree:</strong> {{$educationDesc->degree}} OF {{$educationDesc->field}}
                    </div>
                </div>
                <div>
                    <i class="fas fa-phone"></i>
                    <div>
                        <strong>Phone:</strong>{{$personalInfo->phone_number}}
                    </div>
                </div>
                <div>
                    <i class="fas fa-envelope"></i>
                    <div>
                        <strong>Email:</strong> {{$personalInfo->email}}
                    </div>
                </div>
                <div>
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <strong>City:</strong>  {{$personalInfo->city}}, {{$personalInfo->country}}
                    </div>
                </div>
                <div>
                    <i class="fas fa-check"></i>
                    <div>
                        <strong>Freelance:</strong> Available
                    </div>
                </div>
            </div>

            <p>My goal is to contribute to impactful projects that combine technology and innovation. I enjoy working on challenging problems, optimizing user experiences, and delivering high-quality digital products. Whether collaborating in a team or working independently, I am committed to continuous learning and professional growth.</p>
        </div>
        <!-- قسم المهارات -->
        <h2 class="skills-title text-left" id="skills">Skills</h2>

        <div id="skills" class="container my-5" id="skills">
            <h2 class="text-center">Skills</h2>
            <div class="row">
               @foreach ($skills as $skill)
               <div class="col-md-6 mb-4">
                <h5>{{$skill->skill_name}}</h5>
                <div class="progress" data-toggle="tooltip" title="{{$skill->skill_level}}">
                    <div class="progress-bar" role="progressbar" style="width: {{$skill->skill_level}}%;" aria-valuenow="{{$skill->skill_level}}" aria-valuemin="0" aria-valuemax="100">{{$skill->skill_level}}</div>
                </div>
            </div>

               @endforeach


                {{-- <div class="col-md-6 mb-4">
                    <h5>JavaScript</h5>
                    <div class="progress" data-toggle="tooltip" title="60%">
                        <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h5>PHP</h5>
                    <div class="progress" data-toggle="tooltip" title="80%">
                        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h5>Laravel</h5>
                    <div class="progress" data-toggle="tooltip" title="85%">
                        <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h5>Flutter</h5>
                    <div class="progress" data-toggle="tooltip" title="70%">
                        <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <h5>C#</h5>
                    <div class="progress" data-toggle="tooltip" title="80%">
                        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <h5>Data Analysis</h5>
                    <div class="progress" data-toggle="tooltip" title="80%">
                        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h5>Data Structure & Algorithm </h5>
                    <div class="progress" data-toggle="tooltip" title="90%">
                        <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <h5>MySQL & SQLServer & Oracle</h5>
                    <div class="progress" data-toggle="tooltip" title="85%">
                        <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h5>Git & GitHub</h5>
                    <div class="progress" data-toggle="tooltip" title="65%">
                        <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                    </div>
                </div> --}}
            </div>
        </div>

      <!-- قسم Education -->
      <h2 class="skills-title text-left" id="skills">Education</h2>
        <p>{{$educationDesc->description}}</p>

      @foreach ($educationInfo as $education)
<section id="Education">

        <!-- التعليم -->
        <div class="education-grid">
            <div class="education-item">
                <div class="education-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="education-content">
                    <h3>{{$education->degree}} OF {{$education->field}}</h3>
                    <h4>{{$education->start_date}} - {{$education->end_date}} </h4>
                    <p><em>{{$education->university}}, {{$education->location}}</em></p>
                    <p>{{$education->focus_study}}</p>
                </div>
            </div>
        </div>
    </section>
      @endforeach
    <section class="projects-container" id="projects">
        <h2 class="section-title">🚀 My Projects</h2>
        <p>Here are some of the projects I have worked on, showcasing my skills in Laravel, Flutter, C#, PHP, and web development.</p>

        <div class="projects">
            @foreach($projectsInfo as $project)
        <div class="project-item p-4 mb-4 border rounded shadow-sm bg-light" style="direction: ltr; padding-left: 15px;">
    <h3 class="mb-3">
        <i class="fas fa-project-diagram project-icon me-2 text-primary"></i>
        {{ $project->project_name }}
    </h3>
    <p class="mb-2" style="font-size: 0.95rem; text-align: left; padding-left: 10px;">
        {{ $project->project_description }}
    </p>

    <p class="mb-1" style="font-size: 1rem; text-align: left; padding-left: 10px;">
        <strong class="text-primary">Technologies:</strong>
        <span class="text-dark" style="font-size: 1rem; font-weight: 500; text-decoration: underline;">
            {{ $project->project_technics }}
        </span>
    </p>

    <ul class="mb-3 ps-3" style="font-size: 0.9rem; text-align: left; padding-left: 10px;">
        <li>
            <strong>Features:</strong>
            <span class="text-muted">{{ $project->project_features }}</span>
        </li>
    </ul>

<div class="d-flex justify-content-between align-items-center w-100 px-2 mt-4">
    <!-- GitHub Icon - Left -->
    <a href="{{ $project->project_github ?? '#' }}"
       class="btn btn-outline-dark btn-sm rounded-circle d-flex align-items-center justify-content-center"
       style="width: 40px; height: 40px;"
       title="View on GitHub" target="_blank">
        <i class="fab fa-github"></i>
    </a>

    <!-- View Project Icon - Right -->
    <a href="{{ $project->project_url }}"
       class="btn btn-outline-primary btn-sm rounded-circle d-flex align-items-center justify-content-center"
       style="width: 40px; height: 40px;"
       title="View Project" target="_blank">
        <i class="fas fa-link"></i>
    </a>
</div>


</div>



            @endforeach

            {{-- <div class="project-item">
                <h3><i class="fas fa-shopping-cart project-icon"></i> Online Watch Store</h3>
                <p>An e-commerce website built with PHP that allows users to browse and purchase high-quality watches online.</p>
                <p><strong>Technologies:</strong> PHP, MySQL, CSS</p>
                <li><strong>Features:</strong> Product listing, shopping cart, secure checkout, admin dashboard.</li>

                <a href="https://github.com/EngYouniss/watches-world-project.git" class="btn" target="_blank">🔗 View Project</a>
            </div>
            <div class="project-item">
                <h3><i class="fas fa-newspaper project-icon"></i> News Blog Website</h3>
                <p>A dynamic blog platform built with Laravel, featuring categorized news, user authentication, and multilingual support.</p>
                <p><strong>Technologies:</strong> Laravel, MySQL, Bootstrap</p>
                <li><strong>Features:</strong> Article management, user authentication, translation system.</li>

                <a href="https://github.com/EngYouniss/blogs-website-project.git" class="btn" target="_blank">🔗 View Project</a>
            </div>
            <div class="project-item">
                <h3><i class="fas fa-mobile-alt project-icon"></i> Lost & Found App</h3>
                <p>A Flutter-based mobile app that helps users report and find lost items efficiently.</p>
                <p><strong>Technologies:</strong> Flutter, Firebase</p>
                <li><strong>Features:</strong> Lost item search, user reports, contact system.</li>

                <a href="https://github.com/EngYouniss/lost-found-app-project.git" class="btn" target="_blank">🔗 View Project</a>
            </div>
            <div class="project-item">
                <h3><i class="fas fa-calculator project-icon"></i> Accounting System</h3>
                <p>A complete accounting system developed using C# Windows Forms, designed to manage financial records, generate invoices, and track expenses.</p>
                <p><strong>Technologies:</strong> C#, .NET Framework, SQL Server</p>
                <li><strong>Features:</strong> Invoice generation, expense tracking, reporting system.</li>

                <a href="#" class="btn" target="_blank">🔗 View Project</a>
            </div>

            <div class="project-item">
                <h3><i class="fas fa-music project-icon"></i> Music Player App</h3>
                <p>A simple and lightweight music player app built with Flutter, allowing users to play locally stored audio files.</p>
                <p><strong>Technologies:</strong> Flutter, Assets Audio Player</p>
                <li><strong>Features:</strong> Custom UI, media controls, playlist support.</li>
                <a href="https://github.com/EngYouniss/music-app-project.git" class="btn" target="_blank">🔗 View Project</a>
            </div> --}}
        </div>
    </section>


<h2 class="skills-title text-left" id="skills" style="margin-top: 40px;">Contact </h2>

<section class="contact-container" id="contact">

    <!-- 🔹 Contact Information Section -->
    <div class="contact-info">
        <div class="info-box">
            <i class="fas fa-map-marker-alt"></i>
            <p style="padding-top: 10px;">{{$personalInfo->city}},{{$personalInfo->country}} </p>
        </div>
        <div class="info-box">
            <i class="fas fa-envelope"></i>
            <p>{{$personalInfo->email}}</p>
        </div>
        <div class="info-box">
            <i class="fas fa-phone" ></i>
            <p>   {{$personalInfo->phone_number}} </p>
        </div>
    </div>

    <!-- 📝 Contact Form -->
    <form class="contact-form" action="{{route('client.message')}}" method="POST">
        @csrf
        <div class="input-group">
            <input type="text" placeholder="Your Name" required name="username">
        </div>
        <div class="input-group">
            <input type="email" placeholder="Your Email" required name="email">
        </div>
        <div class="input-group">
            <textarea placeholder="Your Message" rows="4" required name="message"></textarea>
        </div>
        <input type="submit" class="btn" value="Send Message">
        <div class="form-message">
            @if (session('success'))
                <p class="text-success">{{ session('success') }}</p>
            @endif
            @if (session('error'))
                <p class="text-danger">{{ session('error') }}</p>
            @endif
        </div>
    </form>

    <!-- 🔗 Social Media Links -->
    <div class="social-icons">
        <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
        <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
        <a href="#" class="social-link"><i class="fab fa-github"></i></a>
    </div>
</section>

    </div>

  <script src="{{asset('clients/js/script.js')}}"></script>
</body>
</html>
