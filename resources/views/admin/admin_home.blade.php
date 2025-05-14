@extends('admin.layout.master')
@section('content')
    <!-- Page Content -->
    <div id="content">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-dark">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="d-flex align-items-center">
                    <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle" type="button" id="userDropdown"
                            data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle me-1"></i>
                            <span class="d-none d-md-inline">مدير النظام</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>الملف الشخصي</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>الإعدادات</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt me-2"></i>تسجيل
                                    الخروج</a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>
                        </ul>
                    </div>
                    <a href="{{route('client.home')}}" target="_blank" class="btn btn-outline-light ms-2">
                        <i class="fas fa-external-link-alt"></i>
                        <span class="d-none d-md-inline">عرض البورتفوليو</span>
                    </a>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="container-fluid">
            <!-- Dashboard Section -->
            <div id="dashboard-section" class="section-content active">
                <div class="row mb-4">
                    <div class="col-12">
                        <h2 class="section-title"><i class="fas fa-tachometer-alt me-2"></i>لوحة التحكم</h2>
                        <hr>
                    </div>
                </div>

                <div class="row">
                    <!-- Stats Cards -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-start-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col me-2">
                                        <div class="text-xs fw-bold text-primary text-uppercase mb-1">
                                            المشاريع</div>
                                        <div class="h5 mb-0 fw-bold text-gray-800">{{ $projectsInfo->count() }}</div>
                                        <!-- يمكنك تحديث هذه القيمة -->
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-project-diagram fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-start-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col me-2">
                                        <div class="text-xs fw-bold text-success text-uppercase mb-1">
                                            المهارات</div>
                                        <!-- عرض عدد المهارات من قاعدة البيانات -->
                                        <div class="h5 mb-0 fw-bold text-gray-800">{{ $skills->count() }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-cogs fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-start-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col me-2">
                                        <div class="text-xs fw-bold text-info text-uppercase mb-1">
                                            المؤهلات</div>
                                        <div class="h5 mb-0 fw-bold text-gray-800">4</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-graduation-cap fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-start-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col me-2">
                                        <div class="text-xs fw-bold text-warning text-uppercase mb-1">
                                            الرسائل الجديدة</div>
                                        <div class="h5 mb-0 fw-bold text-gray-800">{{$allMessages->count()}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-envelope fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <!-- Recent Activities -->
                    <div class="col-lg-6 mb-4">
                        <div class="card shadow">
                            <div class="card-header py-3">
                                <h6 class="m-0 fw-bold text-primary">آخر التحديثات</h6>
                            </div>
                            <div class="card-body">
                                <div class="timeline-small">

                                    @foreach($messageInfo as $message)

                                    <div class="d-flex">
    <!-- Icon -->
    <div class="flex-shrink-0 bg-warning rounded-circle p-2 text-white me-3">
        <i class="fas fa-envelope"></i>
    </div>

    <!-- Content -->
    <div class="flex-grow-1">
        <div class="d-flex justify-content-between align-items-center">
            <h6 class="mb-1 mb-sm-0">رسالة جديدة من {{ $message->name }}</h6>
            <small class="text-muted">{{ $message->created_at->format('Y-m-d H:i') }}</small>
        </div>
        <p class="small text-muted mb-0">{{ $message->message }}</p>
    </div>
</div>
<br><br>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="col-lg-6 mb-4">
                        <div class="card shadow">
                            <div class="card-header py-3">
                                <h6 class="m-0 fw-bold text-primary">إجراءات سريعة</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <a href="#personalInfo" class="btn btn-outline-primary w-100 py-3"
                                            data-section="about">
                                            <i class="fas fa-user-edit fa-2x mb-2"></i><br>
                                            تعديل الملف الشخصي
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#projects-section" class="btn btn-outline-success w-100 py-3"
                                            data-section="projects" data-bs-toggle="modal" data-bs-target="#projectModal">
                                            <i class="fas fa-plus-circle fa-2x mb-2"></i><br>
                                            إضافة مشروع جديد
                                        </a>


                                    </div>
                                    <div class="col-md-6">
                                        <a href="#skills-section" class="btn btn-outline-info w-100 py-3"
                                            data-section="skills">
                                            <i class="fas fa-cogs fa-2x mb-2"></i><br>
                                            إدارة المهارات
                                        </a>
                                    </div>
                                    <div class="col-md-6">
    <button class="btn btn-outline-warning w-100 py-3" data-bs-toggle="modal" data-bs-target="#messagesModal">
        <i class="fas fa-envelope fa-2x mb-2"></i><br>
        عرض الرسائل
    </button>
</div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- part messages-->
            @include('admin.partial.show_messages')

            <!-- About Section -->
            <div id="about-section" class="section-content">
                <div class="row mb-4">
                    <div class="col-12">
                        <h2 class="section-title"><i class="fas fa-user-edit me-2"></i>إدارة الملف الشخصي</h2>
                        <hr>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 fw-bold text-primary">صورة الملف الشخصي</h6>
                            </div>
                            <div class="card-body text-center">
                                <div class="position-relative d-inline-block">
                                    <img src="{{ $personalInfo->image }}" alt="Profile Image" id="admin-profile-image"
                                        class="rounded-circle mb-3 border border-2 shadow"
                                        style="width: 150px; height: 150px; object-fit: cover;">
                                </div>

                                <div class="mb-2">

                                    <strong>{{ $personalInfo->name }}</strong>
                                </div>
                            </div>

                        </div>
                        <form action="{{ route('admin.update') }}" method="POST" enctype="multipart/form-data">

                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <h6 class="m-0 fw-bold text-primary">وسائل التواصل الاجتماعي</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label"><i
                                                class="fab fa-twitter me-2 text-info"></i>تويتر</label>
                                        <input type="text" class="form-control" value="{{ $personalInfo->x_url }}"
                                            name="x">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"><i class="fab fa-linkedin me-2 text-primary"></i>لينكد
                                            إن</label>
                                        <input type="text" class="form-control"
                                            value="{{$personalInfo->linkedin}}" name="linkedin">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"><i class="fab fa-github me-2 text-dark"></i>جيت
                                            هب</label>
                                        <input type="text" class="form-control" value="{{ $personalInfo->github_url }}"
                                            name="github">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"><i
                                                class="fab fa-behance me-2 text-blue"></i>بيهانس</label>
                                        <input type="text" class="form-control" value="https://behance.net/username"
                                            name="behance">
                                    </div>
                                    <button  class="btn btn-primary w-100">حفظ التغييرات</button>
                                </div>
                            </div>
                    </div>

                    <!-- Basic Info Form -->
                    <div class="col-lg-8" id="personalInfo">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                                <h6 class="m-0 fw-bold text-primary">المعلومات الأساسية</h6>
                                <!-- أيقونة إضافة بجانب العنوان -->
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#addModal">إضافة</a>

                            </div>
                            <div class="card-body">
                                @include('admin.partial.form')
                                @method('PUT')
                                <input type="submit" value="حفظ التغييرات" class="btn btn-primary">
                                </form>
                            </div>


                        </div>

                    </div>
                </div>

                <!-- Skills Section -->
                <div id="skills-section" class="section-content">

                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="section-title"><i class="fas fa-cogs me-2"></i>إدارة المهارات</h2>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#skillModal">
                                    <i class="fas fa-plus me-1"></i> إضافة مهارة جديدة
                                </button>


                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover" id="skillsTable" width="100%"
                                            cellspacing="0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th width="50">#</th>
                                                    <th>اسم المهارة</th>
                                                    <th width="200">المستوى</th>
                                                    <th width="120">الأولوية</th>
                                                    <th width="120">الإجراءات</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($skills as $skill)
                                                    <tr>
                                                        <td>{{ $skill->id }}</td>
                                                        <td>{{ $skill->skill_name }}</td>
                                                        <td>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-success" role="progressbar"
                                                                    style="width:{{ $skill->skill_level }}"
                                                                    aria-valuenow="95" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                            <small>{{ $skill->skill_level }}</small>
                                                        </td>
                                                        <td><span
                                                                class="badge bg-success">{{ $skill->skill_priority }}</span>
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('admin.update', $skill->id) }}"
                                                                class="btn btn-sm btn-warning"><i
                                                                    class="fas fa-edit"></i></a>
                                                            <a href="{{ route('admin.delete', $skill->id) }}"
                                                                class="btn btn-sm btn-danger"><i
                                                                    class="fas fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add/Edit Skill Modal -->
                    <div class="modal fade" id="skillModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="skillModalTitle">إضافة مهارة جديدة</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="skillForm" action="{{ route('admin.create') }}" method="POST">
                                        @csrf
                                        <input type="hidden" id="skillId">
                                        <div class="mb-3">
                                            <label for="skillName" class="form-label">اسم المهارة</label>
                                            <input type="text" class="form-control" name="skillName" id="skillName"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="skillLevel" class="form-label">المستوى (%)</label>
                                            <input type="range" class="form-range" name="skillLevel" min="0"
                                                max="100" id="skillLevel"
                                                oninput="document.getElementById('skillLevelValue').textContent = this.value + '%'">
                                            <div class="d-flex justify-content-between">
                                                <small>0%</small>
                                                <span id="skillLevelValue" class="fw-bold">50%</span>
                                                <small>100%</small>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="skillPriority" class="form-label">الأولوية</label>
                                            <select class="form-select" id="skillPriority" name="skillPriority">
                                                <option value="3">عالية</option>
                                                <option value="2">متوسطة</option>
                                                <option value="1">منخفضة</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="skillIcon" class="form-label">أيقونة المهارة</label>
                                            <select class="form-select" id="skillIcon">
                                                <option value="fab fa-html5">HTML</option>
                                                <option value="fab fa-css3-alt">CSS</option>
                                                <option value="fab fa-js">JavaScript</option>
                                                <option value="fab fa-bootstrap">Bootstrap</option>
                                                <option value="fab fa-react">React</option>
                                                <option value="fas fa-database">Database</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">إلغاء</button>
                                            <input type="submit" class="btn btn-primary" id="saveSkillBtn"
                                                value="حفظ المهارة">
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Projects Section -->
                <div id="projects-section" class="section-content">
                    <!-- زر إضافة مشروع جديد -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="section-title"><i class="fas fa-project-diagram me-2"></i>إدارة المشاريع</h2>
                                <button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#projectModal">
                                    <i class="fas fa-plus me-1"></i> إضافة مشروع جديد
                                </button>
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover" id="projectsTable" width="100%"
                                            cellspacing="0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th width="50">#</th>
                                                    <th>اسم المشروع</th>
                                                    <th width="150">التصنيف</th>
                                                    <th width="120">الحالة</th>
                                                    <th width="150">تاريخ البداية</th>
                                                    <th width="150">تاريخ النهاية</th>
                                                    <th width="120">الإجراءات</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($projectsInfo as $project)
                                                    <tr>
                                                        <td>{{ $project->id }}</td>
                                                        <td>{{ $project->project_name }}</td>
                                                        <td>{{ $project->project_type }}</td>
                                                        <td><span
                                                                class="badge bg-success">{{ $project->project_status }}</span>
                                                        </td>
                                                        <td>{{ $project->project_start_date }}</td>
                                                        <td>{{ $project->project_end_date }}</td>
                                                        <td>
                                                            <a href="{{ route('admin.updateProject', $project->id) }}"
                                                                class="btn btn-sm btn-warning"><i
                                                                    class="fas fa-edit"></i></a>
                                                            <a href="{{ route('admin.deleteProject', $project->id) }}"
                                                                class="btn btn-sm btn-danger"><i
                                                                    class="fas fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add/Edit Project Modal -->

                    <div class="modal fade" id="projectModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="projectModalTitle">إضافة مشروع جديد</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="projectForm" action="{{ route('admin.createProject') }}" method="POST">
                                        @csrf
                                        <!-- اسم ونوع المشروع -->
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="projectName" class="form-label">اسم المشروع</label>
                                                <input type="text" class="form-control" id="projectName"
                                                    name="projectName" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="projectCategory" class="form-label">نوع المشروع</label>
                                                <select class="form-select" id="projectCategory" required
                                                    name="projectCategory">
                                                    <option value="web">تطوير ويب</option>
                                                    <option value="mobile">تطبيق موبايل</option>
                                                    <option value="design">تصميم</option>
                                                    <option value="other">أخرى</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- وصف المشروع -->
                                        <div class="mb-3">
                                            <label for="projectDescription" class="form-label">وصف المشروع</label>
                                            <textarea class="form-control" id="projectDescription" rows="3" required name="projectDescription"></textarea>
                                        </div>

                                        <!-- تاريخ البداية والنهاية -->
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="startDate" class="form-label">تاريخ البداية</label>
                                                <input type="date" class="form-control" id="startDate"
                                                    name="startDate">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="endDate" class="form-label">تاريخ النهاية</label>
                                                <input type="date" class="form-control" id="endDate"
                                                    name="endDate">
                                            </div>
                                        </div>

                                        <!-- حالة المشروع -->
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="projectStatus" class="form-label">حالة المشروع</label>
                                                <select class="form-select" id="projectStatus" required
                                                    name="projectStatus">
                                                    <option value="completed">مكتمل</option>
                                                    <option value="in-progress">قيد التطوير</option>
                                                    <option value="on-hold">متوقف</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="projectLink" class="form-label">رابط المشروع</label>
                                                <input type="url" class="form-control" id="projectLink"
                                                    placeholder="https://example.com" name="projectUrl">
                                            </div>
                                        </div>
                                        <!-- الميزات -->
                                        <div class="mb-3">
                                            <label for="projectFeatures" class="form-label">ميزات المشروع</label>
                                            <textarea class="form-control" id="projectFeatures" rows="3" name="projectFeatures"></textarea>
                                        </div>

                                        <!-- رابط المشروع -->


                                        <!-- التقنيات -->
                                        <div class="mb-3">
                                            <label for="projectTechnologies" class="form-label">التقنيات المستخدمة</label>
                                            <input type="text" class="form-control" id="projectTechnologies"
                                                name="projectTechnologies" placeholder="HTML, CSS, JavaScript" required>
                                        </div>

                                        <!-- صورة المشروع (أُبعدت إلى الأسفل) -->
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">إلغاء</button>
                                    <input type="submit" class="btn btn-primary" id="saveProjectBtn"
                                        value="حفظ المشروع">
                                </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <!-- Education Section -->
                <div id="education-section" class="section-content">
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="section-title"><i class="fas fa-graduation-cap me-2"></i>إدارة التعليم والخبرات
                                </h2>
                                <button class="btn btn-primary" id="addNewEducationBtn" data-bs-toggle="modal" data-bs-target="#educationModal">
                                    <i class="fas fa-plus me-1"></i> إضافة مؤهل جديد
                                </button>

                            </div>
                            <hr>
                        </div>
                    </div>

                   @foreach ($educationInformation as $education)
<div class="row mb-4">
    <div class="col-12">
        <div class="card border-0 shadow-sm rounded-3 bg-light">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <div>
                        <h5 class="mb-1 text-primary fw-bold">
                            <i class="fas fa-graduation-cap me-2"></i>{{ $education->degree }} in {{ $education->field }}
                        </h5>
                        <span class="badge bg-primary">🎓 تعليم</span>
                    </div>
                    <small class="text-muted">{{ $education->start_date }} - {{ $education->end_date }}</small>
                </div>

                <div class="ms-3">
                    <p class="mb-1"><strong><i class="fas fa-university me-2"></i>{{ $education->university }}</strong> - {{ $education->location }}</p>
                  @if($education->description)
<div class="mb-3 p-3 rounded bg-white border">
    <h6 class="text-primary fw-semibold mb-2">
        <i class="fas fa-info-circle me-2"></i>الشرح
    </h6>
    <p class="text-muted mb-0" style="line-height: 1.6;">
        {{ $education->description }}
    </p>
</div>
@endif

@if($education->focus_study)
<div class="p-3 rounded bg-white border">
    <h6 class="text-primary fw-semibold mb-2">
        <i class="fas fa-book-open me-2"></i>مجال التركيز
    </h6>
    <p class="text-muted mb-0" style="line-height: 1.6;">
        {{ $education->focus_study }}
    </p>
</div>
@endif

                </div>

                <div class="d-flex justify-content-end mt-3 gap-2">
                    <button class="btn btn-sm btn-outline-warning" title="Edit"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="fas fa-trash-alt"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

                </div>
            </div>
        </div>


        <!--  مؤهل زر الإضافة -->

<!-- Modal -->
<div class="modal fade" id="educationModal" tabindex="-1" aria-labelledby="educationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" dir="ltr" style="text-align: left;">
    <div class="modal-header position-relative">
  <h5 class="modal-title" id="educationModalLabel">Add New Qualification</h5>
  <button type="button" class="btn-close position-absolute" style="right: 1rem; top: 1rem;" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

      <div class="modal-body">
        <form id="educationForm" action="{{ route('admin.createEducation') }}" method="POST">
          @csrf
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="degree" class="form-label">Degree</label>
              <select class="form-select" id="degree" name="degree" required>
                <option value="" selected disabled>Select a degree</option>
                <option value="High School">High School</option>
                <option value="Diploma">Diploma</option>
                <option value="Bachelor">Bachelor</option>
                <option value="Master">Master</option>
                <option value="PhD">PhD</option>
                <option value="Other">Other</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label for="field" class="form-label">Field of Study</label>
              <input type="text" class="form-control" id="field" name="field" required>
            </div>

            <div class="col-md-6 mb-3">
              <label for="university" class="form-label">University Name</label>
              <input type="text" class="form-control" id="university" name="university" required>
            </div>

            <div class="col-md-6 mb-3">
              <label for="location" class="form-label">Location</label>
              <input type="text" class="form-control" id="location" name="location">
            </div>

            <div class="col-md-6 mb-3">
              <label for="start_date" class="form-label">Start Date</label>
              <input type="date" class="form-control" id="start_date" name="start_date" required>
            </div>

            <div class="col-md-6 mb-3">
              <label for="end_date" class="form-label">End Date</label>
              <input type="date" class="form-control" id="end_date" name="end_date">
            </div>

            <div class="col-12 mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>

            <div class="col-12 mb-3">
              <label for="focus_study" class="form-label">Study Focus</label>
              <textarea class="form-control" id="focus_study" name="focus_study" rows="3" placeholder="Write a summary of your study areas and academic projects."></textarea>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="educationForm" class="btn btn-primary">Save Qualification</button>
      </div>
    </div>
  </div>
</div>



        <!-- نافذة منبثقة -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">إضافة المعلومات</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">الاسم الكامل</label>
                                    <input type="text" class="form-control" name="fullName"
                                        value="{{ old('fullName') }}">
                                    @error('fullName')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">المسمى الوظيفي</label>
                                    <input type="text" class="form-control" name="jobTitle"
                                        value="{{ old('jobTitle') }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">البريد الإلكتروني</label>
                                    <input type="email" class="form-control" name="email"
                                        value="{{ old('email') }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">رقم الهاتف</label>
                                    <input type="tel" class="form-control" name="phoneNumber"
                                        value="{{ old('phoneNumber') }}">
                                </div>
                            </div>

                            <!-- ✅ الحقول الإضافية من النموذج الثاني -->
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">العنوان</label>
                                    <input type="text" class="form-control" name="address"
                                        value="{{ old('address') }}">
                                </div>
                               <div class="col-md-6 mb-3">
    <label class="form-label">المدينة</label>
    @php
        $selectedCity = old('city');
        $yemenGovernorates = [
            "Abyan", "Aden", "Al Bayda", "Al Dhale'e", "Al Hudaydah", "Al Jawf", "Al Mahrah",
            "Al Mahwit", "Amanat Al Asimah", "Amran", "Dhamar", "Hadhramaut", "Hajjah", "Ibb",
            "Lahij", "Marib", "Raymah", "Saada", "Sana'a", "Shabwah", "Socotra", "Taiz",
            "Bani Matar", "Hamdan"
        ];
    @endphp

    <select name="city" class="form-select">
        @foreach($yemenGovernorates as $gov)
            <option value="{{ $gov }}" {{ $selectedCity == $gov ? 'selected' : '' }}>
                {{ $gov }}
            </option>
        @endforeach
    </select>
</div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">الدولة</label>
                                    @php
                                        $selectedCountry = old('contry');
                                    @endphp
                                    <select name="contry" class="form-select" name="contry">
                                        <option value="Yemen" {{ $selectedCountry == 'Yemen' ? 'selected' : '' }}>Yemen
                                        </option>
                                        <option value="Saudi Arabia"
                                            {{ $selectedCountry == 'Saudi Arabia' ? 'selected' : '' }}>Saudi Arabia
                                        </option>
                                        <option value="UAE" {{ $selectedCountry == 'UAE' ? 'selected' : '' }}>UAE
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">العمر</label>
                                    <input type="number" class="form-control" name="age"
                                        value="{{ old('age') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">تاريخ الميلاد</label>
                                    <input type="date" class="form-control" name="birthDate"
                                        value="{{ old('birthDate') }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="profileImageUpload" class="form-label">رفع صورة الملف الشخصي</label>
                                    <input type="file" id="profileImageUpload" class="form-control" accept="image/*"
                                        name="image" onchange="previewImage(event)">
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label"> لينكد ان</label>
                                    <input type="text" class="form-control" name="linkedin"">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="profileImageUpload" class="form-label"> قيت هب </label>
                                    <input type="text" id="profileImageUpload" class="form-control" name="github" ">
                                        </label>                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">  اكس</label>
                                        <input type="text" class="form-control" name="x"">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="profileImageUpload" class="form-label">  بيهانس </label>
                                        <input type="text" id="profileImageUpload" class="form-control" name="behance" ">
                                            </label>                                </div>
                                    </div>




                        </div>
                        <div class="mb-3">
                            <label class="form-label">نبذة عني</label>
                            <textarea class="form-control" rows="5" name="aboutMe">{{ old('aboutMe') }}</textarea>
                        </div>

                        <!-- رفع السيرة الذاتية -->
                        <div class="mb-3">
                            <label class="form-label">السيرة الذاتية (CV)</label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="cv" accept=".pdf,.doc,.docx">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                            <input type="submit" class="btn btn-primary" value="حفظ ">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- نافذة منبثقة لاضافه مشؤوع جديد --}}


        <!-- النافذة المنبثقة (Modal) -->
        <!-- النافذة المنبثقة (Modal) -->





        <!-- رابط إلى Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        </body>
@endsection
