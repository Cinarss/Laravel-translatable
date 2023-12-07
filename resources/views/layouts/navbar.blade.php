<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"  />
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Source+Sans+3&display=swap');

    body{
        font-family: 'Source Sans 3', sans-serif; 
        font-weight: 800;
        overflow-x: hidden; 
        padding: 0;
        margin: 0;
    }

    .offcanvas{
      flex-direction: row;
      display: block; 
    }

    .offcanvas-header{
      justify-content: flex-end;
    }

    .info {
      justify-content: space-between;
    }

    #navbar{
  padding: 1rem 2rem
}

.desc p{
  text-align: start;
}

.text{
  text-align: start;
  margin-bottom: 2rem;
  font-size: 6rem;
}

#button{
  text-align: start;
  margin-top: 2rem;
}

#login{
  padding: 0 2.5rem;
}

@media (max-width: 991.98px) {
  .offcanvas-collapse {
    position: fixed;
    top: 56px; /* Height of navbar */
    bottom: 0;
    left: 100%;
    width: 40%;
    padding-right: 1rem;
    padding-left: 1rem;
    overflow-y: auto;
    visibility: hidden;
    background-color: #fff;
    transition: transform .3s ease-in-out, visibility .3s ease-in-out;
  }

  #login{
    padding: 0 0;
  }

  .bottomRow{
    display: none;
  }

  .text{
  text-align: center;
  margin-bottom: .5rem;
  margin-top: 3rem;
  font-size: 2.8rem;
}

  .desc p{
  text-align: center;
}

#button{
  text-align: center;
  margin-top: 0.5rem;
}

  .container, .container-fluid, .container-xxl, .container-xl, .container-lg, .container-md, .container-sm{
    padding-right: 0.1rem;
    padding-left:0.1rem;
  }
  


  .info{
    justify-content: space-between;
    margin-top: 2rem
  }

  .info img{
    width: 80%
  }

  .display-1{
    font-size: calc(1.575rem + 3.9vw);
  }

  #mobile{
    margin-left:1rem; 
    margin-right:1rem; 
  }
  

  .offcanvas {
  max-width: 55%;
  flex-direction: column;
}
  .offcanvas-collapse.open {
    visibility: visible;
    transform: translateX(-100%);
  }


  .flex-row{
    flex-direction: column-reverse!important
}

}

.nav-scroller .nav {
  color: rgba(255, 255, 255, .75);
}

.nav-scroller .nav-link {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: .875rem;
  color: #6c757d;
}

.nav-scroller .nav-link:hover {
  color: #007bff;
}

.nav-scroller .active {
  font-weight: 500;
  color: #343a40;
}

.bg-purple {
  background-color: #6f42c1;
}

#navRespon{

    margin-left: 0;
}



</style>


 <nav class="navbar navbar-expand-lg navbar-light  bg-light" id="navbar" aria-label="Main navigation">

    <div class="container-fluid">
        <a class="navbar-brand me-5" href="#"><img src="images/logo.svg" alt=""></a>
     
      <button class="navbar-toggler p-0 border-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
        <span class="navbar-toggler-icon"></span>
      </button>

      
      
  
      <div class="navbar-collapse offcanvas offcanvas-end align-items-stretch" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header pb-0">
          <button type="button" class="btn-close text-reset" style="font-size:1.3em;opacity:1;" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        

        <ul class="navbar-nav me-auto d-flex offcanvas-body align-items-start " id="navRespon">
            <li class="nav-item dropdown ">
              <a class="nav-link " data-bs-toggle="dropdown" aria-expanded="false" aria-current="page" href="#"   id="iconChange">Features <i id="iconTog" class="fa-solid fa-angle-down ms-1"></i></a>
              <ul class="dropdown-menu border-0 shadow w-220px " data-bs-theme="light">
  
                  <li>
                    <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                      <i class="bi bi-journal-text" style="color: #4A148C"></i>
                      Todo List
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                      <i class="bi bi-calendar-event" style="color: #1DE9B6"></i>
                      Calendar
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                      <i class="bi bi-bell-fill text-warning"></i>
                      Reminders
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                      <i class="bi bi-bullseye" style="color: #6200EA"></i>
                      Planning
                    </a>
                  </li>
                 
                </ul>
          </li>
          
          <li class="nav-item dropdown" >
              <a class="nav-link" data-bs-toggle="dropdown" aria-expanded="false" href="#" aria-current="page" id="iconChangee">Company <i id="iconTogg" class="fa-solid fa-angle-down ms-1"></i></a>
              <ul class="dropdown-menu border-0 shadow w-220px" data-bs-theme="light">
                  <li><a href="#" class="dropdown-item">History</a></li>
                  <li><a href="#" class="dropdown-item">Our Team</a></li>
                  <li><a href="#" class="dropdown-item">Blog</a></li>
              </ul>
          </li>
  
            <li class="nav-item ">
              <a class="nav-link " href="#">Careers</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link " href="#">About</a>
            </li>
          </ul>
        <ul class="navbar-nav d-flex text-center" id="mobile">
            
            <li class="nav-item" id="login">
                <a class="nav-link" href="#">Login</a>
            </li>

            <li class="nav-item">
                <a class="nav-link border border-2 border-secondary  " style="border-radius: 14px;padding:.5rem 1.8rem" href="#">Register</a>
            </li>
        </ul>      

      </div>
    </div>
  </nav>






  <script>
  document.querySelector("#iconChange").addEventListener("click", () => {
    document.querySelector('#iconTog').classList.toggle('fa-angle-up');
  }); 


  document.querySelector("#iconChangee").addEventListener("click", () => {
    document.querySelector('#iconTogg').classList.toggle('fa-angle-up');
  }); 



  

(() => {
  'use strict'

  document.querySelector('#navbarSideCollapse').addEventListener('click', () => {
    document.querySelector('.offcanvas-collapse').classList.toggle('open')
  })
})()

  </script>
