<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة تحكم البورتفوليو</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        /* Sidebar Styling */
        #sidebar {
            background-color: #343a40;
            color: #fff;
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            transform: translateX(0); /* إظهار الشريط الجانبي على الشاشات الكبيرة */
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background-color: #222;
            text-align: center;
        }

        #sidebar .sidebar-header h3 {
            margin: 0;
            font-size: 20px;
            font-weight: bold;
        }

        #sidebar .components {
            list-style: none;
            padding-left: 0;
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
            margin-right: 10px;
            font-size: 18px;
        }

        #sidebar .components li a.active {
            background-color: #007bff;
            color: #fff;
        }

        #sidebar .components li a.active:hover {
            background-color: #0056b3;
        }

        /* Badge Styling */
        .badge.bg-danger {
            background-color: #dc3545;
        }

        /* Adjusting content to not overlap with the sidebar on large screens */
        body {
            margin-left: 250px;
            transition: margin-left 0.3s ease;
        }

        #toggle-sidebar {
            display: none; /* تأكد من إخفاء زر التبديل */
        }

        /* Media query for screens smaller than or equal to 768px */
        @media (max-width: 768px) {
            #sidebar {
                display: none; /* إخفاء الشريط الجانبي على الشاشات الصغيرة */
            }

            body {
                margin-left: 0; /* إزالة الهامش على الشاشات الصغيرة */
            }
        }
    </style>
</head>
<body class="admin-dashboard">
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><i class="fas fa-user-shield"></i> لوحة التحكم</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#dashboard-section" class="active" data-section="dashboard">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>الإحصائيات</span>
                    </a>
                </li>
                <li>
                    <a href="#about-section" data-section="about">
                        <i class="fas fa-user-edit"></i>
                        <span>إدارة الملف الشخصي</span>
                    </a>
                </li>
                <li>
                    <a href="#skills-section" data-section="skills">
                        <i class="fas fa-cogs"></i>
                        <span>إدارة المهارات</span>
                    </a>
                </li>
                <li>
                    <a href="#projects-section" data-section="projects">
                        <i class="fas fa-project-diagram"></i>
                        <span>إدارة المشاريع</span>
                    </a>
                </li>
                <li>
                    <a href="#education-section" data-section="education">
                        <i class="fas fa-graduation-cap"></i>
                        <span>إدارة التعليم</span>
                    </a>
                </li>
                <li>
                    <a href="#messages-section" data-section="messages" data-bs-toggle="modal" data-bs-target="#messagesModal">
                        <i class="fas fa-envelope"></i>
                        <span>رسائل الزوار</span>
                        <span class="badge bg-danger float-start">{{$allMessages->count()}}</span>
                    </a>
                </li>
                <li>
                    <a href="#settings-section" data-section="settings">
                        <i class="fas fa-cog"></i>
                        <span>الإعدادات</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div id="content">
            @yield('content')

            <footer class="text-center text-lg-start bg-light text-muted">
                <div class="text-center p-3">
                    <p>&copy; 2025 جميع الحقوق محفوظة.</p>
                </div>
            </footer>
        </div>

    </div>

    </body>
</html>
