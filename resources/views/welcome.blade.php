{{-- <!DOCTYPE html>
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
            <p>My name is Younis Tallan, a 23-year-old <b>Full Stack Developer</b> from Yemen. I am currently pursuing a degree in Information Technology at Sana'a University, with an expected graduation year of 2026. Over the course of my studies, I have worked on several technical projects, which have allowed me to gain hands-on experience in web development.

                I am passionate about turning ideas into interactive and innovative web applications. I am always eager to learn new technologies and improve my skills to deliver high-quality technical solutions.
            </p>

            <h2>Fullstack Developer & Web Developer</h2>
            <blockquote>
                "Building efficient and scalable web applications is not just my profession—it's my passion. I believe in continuous learning, writing clean code, and developing solutions that make a real impact."
            </blockquote>


            <div class="details">
                <div>
                    <i class="fas fa-birthday-cake"></i>
                    <div>
                        <strong>Birthday:</strong> 25 November 2002
                    </div>
                </div>
                <div>
                    <i class="fas fa-calendar-alt"></i>
                    <div>
                        <strong>Age:</strong> 23
                    </div>
                </div>

                <div>
                    <i class="fas fa-graduation-cap"></i>
                    <div>
                        <strong>Degree:</strong> Bachelor of IT
                    </div>
                </div>
                <div>
                    <i class="fas fa-phone"></i>
                    <div>
                        <strong>Phone:</strong> +967 771 985 327
                    </div>
                </div>
                <div>
                    <i class="fas fa-envelope"></i>
                    <div>
                        <strong>Email:</strong> younistallan@gmail.com
                    </div>
                </div>
                <div>
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <strong>City:</strong>  Al-Mahweet, Yemen
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
                <div class="col-md-6 mb-4">
                    <h5>HTML</h5>
                    <div class="progress" data-toggle="tooltip" title="90%">
                        <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h5>CSS</h5>
                    <div class="progress" data-toggle="tooltip" title="85%">
                        <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
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
                </div>
            </div>
        </div>

      <!-- قسم Education -->
      <h2 class="skills-title text-left" id="skills">Education</h2>

      <section id="Education">
        <p>I am currently pursuing a Bachelor's degree in Information Technology, gaining hands-on experience in software development, networking, and web technologies. My academic journey has allowed me to work on various projects that enhance my technical and problem-solving skills.</p>

        <!-- التعليم -->
        <div class="education-grid">
            <div class="education-item">
                <div class="education-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="education-content">
                    <h3>BACHELOR OF INFORMATION TECHNOLOGY</h3>
                    <h4>2022 - 2026 (Expected)</h4>
                    <p><em>Sana'a University, Yemen</em></p>
                    <p>My studies focus on web development,software engineering, networking, and database management. Throughout my academic journey, I have worked on several technical projects, improving my skills in Laravel, Flutter, and modern web development technologies.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="projects-container" id="projects">
        <h2 class="section-title">🚀 My Projects</h2>
        <p>Here are some of the projects I have worked on, showcasing my skills in Laravel, Flutter, C#, PHP, and web development.</p>

        <div class="projects">
            <div class="project-item">
                <h3><i class="fas fa-user project-icon"></i> Personal Portfolio</h3>
                <p>A modern and responsive portfolio website showcasing my skills, projects, and experience.</p>
                <p><strong>Technologies:</strong> HTML,CSS, JavaScript</p>
                <li><strong>Features:</strong> Interactive design, project showcase, contact form, fully responsive.</li>

                <a href="https://github.com/EngYouniss/My-Portfolio.git" class="btn" target="_blank">🔗 View Project</a>
            </div>

            <div class="project-item">
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
            </div>
        </div>
    </section>


<h2 class="skills-title text-left" id="skills" style="margin-top: 40px;">Contact </h2>

<section class="contact-container" id="contact">

    <!-- 🔹 Contact Information Section -->
    <div class="contact-info">
        <div class="info-box">
            <i class="fas fa-map-marker-alt"></i>
            <p style="padding-top: 10px;">Al-Mahweet,Yemen </p>
        </div>
        <div class="info-box">
            <i class="fas fa-envelope"></i>
            <p>younistallan@gmail.com</p>
        </div>
        <div class="info-box">
            <i class="fas fa-phone" ></i>
            <p>    +967 771 985 327 </p>
        </div>
    </div>

    <!-- 📝 Contact Form -->
    <form class="contact-form">
        <div class="input-group">
            <input type="text" placeholder="Your Name" required>
        </div>
        <div class="input-group">
            <input type="email" placeholder="Your Email" required>
        </div>
        <div class="input-group">
            <textarea placeholder="Your Message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn">Send Message</button>
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
</html> --}}
