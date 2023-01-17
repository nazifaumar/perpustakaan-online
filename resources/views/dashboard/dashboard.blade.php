<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="/assets/img/logo.png">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="assets/img/book-bg.png" rel="icon">
     <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/top.css') }}">
     <title>Dashboard</title>
   </head>

<body>
  <div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">WIKBOOK</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="/create">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      
      <li>
       <a href="/user">
         <i class='bx bx-user' ></i>
         <span class="links_name">User</span>
       </a>
       <span class="tooltip">User</span>
     </li>

     <li>
      <a href="/">
        <i class='bx bx-book-bookmark'></i>
        <span class="links_name">Book</span>
      </a>
      <span class="tooltip">Book</span>
    </li>

    <li>
      <a href="/">
        <i class='bx bx-bookmark-plus'></i>
        <span class="links_name">Category Book</span>
      </a>
       <span class="tooltip">Category Book</span>
    </li>
    <li>
    
    <li class="profile">
      <div class="profile-details">
        <div class="name"></div> 
        <a href="/"><i class='bx bx-log-out' id="log_out"></i></a>
      </div>
    </li>
    </ul>
  </div>
  
      <script>
      let sidebar = document.querySelector(".sidebar");
      let closeBtn = document.querySelector("#btn");
      let searchBtn = document.querySelector(".bx-search");

      closeBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("open");
        menuBtnChange();
      });

      searchBtn.addEventListener("click", ()=>{ 
        sidebar.classList.toggle("open");
        menuBtnChange();
      });

      function menuBtnChange() {
      if(sidebar.classList.contains("open")){
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      }else {
        closeBtn.classList.replace("bx-menu-alt-right","bx-menu");
      }
      }
      </script>

</body>
    @yield('content')
</html>
