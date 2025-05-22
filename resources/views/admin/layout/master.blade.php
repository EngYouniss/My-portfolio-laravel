<!DOCTYPE html>
<html lang="ar" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>


        /* تنسيقات السايدبار الجديدة مع LTR داخلي */
        #sidebar {
            background-color: #343a40;
            color: #fff;
            height: 100vh;
            width: 185px; /* عرض السايدبار */
            position: fixed;
            top: 0;
            left: 0; /* ثابت على اليسار */
            z-index: 1000;
            transition: all 0.3s;
            direction: ltr; /* محتوى داخلي LTR */
            text-align: left; /* محاذاة النصوص لليسار */
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background-color: #222;
            text-align: center;
        }

        #sidebar .components {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #sidebar .components li {
            border-bottom: 1px solid #444;
        }

        #sidebar .components li a {
            display: flex;
            align-items: center;
            padding: 15px;
            color: #ddd;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.3s;
        }

        #sidebar .components li a:hover {
            background-color: #575d63;
            color: #fff;
        }

        #sidebar .components li a .fas {
            margin-right: 10px; /* الأيقونات على اليسار */
            margin-left: 0;
            font-size: 18px;
        }

        #sidebar .components li a.active {
            background-color: #007bff;
            color: #fff;
        }

        #sidebar .badge.bg-danger {
            background-color: #dc3545;
            margin-left: 10px; /* تعديل موقع العلامة */
            margin-right: 0;
        }

        /* تعديلات المحتوى الرئيسي */
        body {
            margin-left: 183px; /* تعديل الهامش ليتناسب مع السايدبار اليساري */
            transition: margin-left 0.3s;
                        direction: ltr; /* بقية الصفحة RTL */

        }

        /* زر التبديل للجوال */
        #toggle-sidebar {
            display: none;
            position: fixed;
            top: 10px;
            left: 10px; /* تعديل الموقع ليكون على اليسار */
            z-index: 1100;
        }

        /* تجاوب مع الشاشات الصغيرة */
        @media (max-width: 768px) {
            #sidebar {
                left: -250px; /* إخفاء السايدبار خارج الشاشة على اليسار */
            }

            #sidebar.active {
                left: 0; /* إظهار السايدبار عند التفعيل */
            }

            body {
                margin-left: 0;
            }

            #toggle-sidebar {
                display: block;
            }
        }
    </style>
</head>
<body class="admin-dashboard">
    <!-- زر التبديل للجوال -->
    <button id="toggle-sidebar" class="btn btn-dark">
        <i class="fas fa-bars"></i>
    </button>

    <div class="wrapper">
        <!-- السايدبار مع محتوى إنجليزي LTR -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><i class="fas fa-user-shield"></i> Dashboard</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#dashboard-section" class="active" data-section="dashboard">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#about-section" data-section="about">
                        <i class="fas fa-user-edit"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="#skills-section" data-section="skills">
                        <i class="fas fa-cogs"></i>
                        <span>Skills</span>
                    </a>
                </li>
                <li>
                    <a href="#projects-section" data-section="projects">
                        <i class="fas fa-project-diagram"></i>
                        <span>Projects</span>
                    </a>
                </li>
                <li>
                    <a href="#education-section" data-section="education">
                        <i class="fas fa-graduation-cap"></i>
                        <span>Education</span>
                    </a>
                </li>
                <li>
                    <a href="#messages-section" data-section="messages" data-bs-toggle="modal" data-bs-target="#messagesModal">
                        <i class="fas fa-envelope"></i>
                        <span>Messages</span>
                        <span class="badge bg-danger">{{$allMessages->count()}}</span>
                    </a>
                </li>
                <li>
                    <a href="#settings-section" data-section="settings">
                        <i class="fas fa-cog"></i>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- المحتوى الرئيسي يبقى كما هو -->
        <div id="content">
            @yield('content')


        </div>
    </div>
<footer class="text-center text-lg-start bg-light text-muted">
                <div class="text-center p-3">
                    <p>&copy; 2025 جميع الحقوق محفوظة.</p>
                </div>
            </footer>
    <script>
        // سكريبت تبديل السايدبار للجوال
        document.getElementById('toggle-sidebar').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('active');

            // إضافة/إزالة منع التمرير عند فتح السايدبار
            if (document.getElementById('sidebar').classList.contains('active')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = 'auto';
            }
        });

        // إغلاق السايدبار عند النقر خارجها (للجوال)
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const toggleBtn = document.getElementById('toggle-sidebar');

            if (window.innerWidth <= 768 &&
                !sidebar.contains(event.target) &&
                !toggleBtn.contains(event.target)) {
                sidebar.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });
    </script>
</body>
</html>
