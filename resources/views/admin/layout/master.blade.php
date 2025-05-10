<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة تحكم البورتفوليو</title>
    <!-- Bootstrap RTL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/admin.css">
    <!-- SweetAlert2 CSS -->
<!-- قبل نهاية </head> أو داخل layout -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- SweetAlert2 JS -->

</head>
<body class="admin-dashboard">
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar" class="active">
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
                    <a href="#messages-section" data-section="messages">
                        <i class="fas fa-envelope"></i>
                        <span>رسائل الزوار</span>
                        <span class="badge bg-danger float-start">3</span>
                    </a>
                </li>
                <li>
                    <a href="#settings-section" data-section="settings">
                        <i class="fas fa-cog"></i>
                        <span>الإعدادات</span>
                    </a>
                </li>
            </ul>

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
                    transition: all 0.3s ease;
                    z-index: 1000;
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

                #sidebar .components li a .badge {
                    margin-left: auto;
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

                /* Transition effects for Sidebar */
                #sidebar.active {
                    transform: translateX(0);
                }

                #sidebar:not(.active) {
                    transform: translateX(-250px);
                }

                /* Hover effect on sidebar items */
                #sidebar .components li a:hover {
                    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
                }

                /* Adjusting content to not overlap with the sidebar */
                body {
                    margin-left: 250px; /* Adjust the left margin for the content */
                    transition: margin-left 0.3s ease;
                }

                /* Responsive for mobile devices */
                @media (max-width: 768px) {
                    #sidebar {
                        width: 200px;
                    }

                    body {
                        margin-left: 200px;
                    }
                }
            </style>
        </nav>


@yield('content')

        <!-- Main Content -->


        <!-- Footer -->
        <footer class="text-center text-lg-start bg-light text-muted">
            <div class="text-center p-3">
<p>&copy; 2025  جميع الحقوق محفوظة.</p>
            </div>
        </footer>

    </div>

</body>
</html>
