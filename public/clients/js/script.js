// إظهار/إخفاء القائمة الجانبية
function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');
    const toggleBtn = document.querySelector('.toggle-btn');

    sidebar.classList.toggle('active');
    mainContent.classList.toggle('active');

    // إخفاء زر التبديل عند ظهور القائمة الجانبية
    if (sidebar.classList.contains('active')) {
        toggleBtn.style.display = 'none';
    } else {
        toggleBtn.style.display = 'block';
    }
}

// إغلاق القائمة الجانبية عند النقر على رابط
document.querySelectorAll('nav ul li a').forEach(item => {
    item.addEventListener('click', () => {
        // إغلاق القائمة الجانبية
        const sidebar = document.querySelector('.sidebar');
        const mainContent = document.querySelector('.main-content');
        const toggleBtn = document.querySelector('.toggle-btn');

        sidebar.classList.remove('active');
        mainContent.classList.remove('active');
        toggleBtn.style.display = 'block';

        // إضافة تأثير تفاعلي للروابط
        document.querySelectorAll('nav ul li a').forEach(link => link.classList.remove('active'));
        item.classList.add('active');
    });
});
