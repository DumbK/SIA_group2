 <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="assets/images/faces/face1.jpg" alt="profile">
          <span class="login-status online"></span>
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">Admin</span>
          <span class="text-secondary text-small">SSC Fine System</span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-creation menu-icon"></i>
      </a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="{{ route('payment.index') }}">
        <span class="menu-title">Payment</span>
        <i class="mdi mdi-currency-usd menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
          <span class="menu-title">Attendances</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-format-list-checks menu-icon"></i>
        </a>
        <div class="collapse" id="general-pages" style="">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('attendance.log') }}">Attendances</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('courses.index') }}">Courses</a></li>
          </ul>
        </div>
    </li>
  </ul>
</nav>