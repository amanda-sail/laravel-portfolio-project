<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/back_office_navbar.css">
</head>

<body>
    {{-- Header --}}
    <h1><a href="/">Welcome to Backoffice!</a></h1>

    {{-- Navbar Starts --}}
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus icon'></i>
            <div class="logo_name">CodingLab</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list p-0">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="/back_office/backoffice/header">
                    <i class='bx bx-heading'></i>
                    <span class="links_name">Header</span>
                </a>
                <span class="tooltip">Header</span>
            </li>
            <li>
                <a href="/back_office/backoffice/hero">
                    <i class='bx bx-home' ></i>
                    <span class="links_name">Hero</span>
                </a>
                <span class="tooltip">Hero</span>
            </li>
            <li>
                <a href="/back_office/backoffice/about">
                    <i class='bx bx-user'></i>
                    <span class="links_name">About</span>
                </a>
                <span class="tooltip">About</span>
            </li>
            <li>
                <a href="/back_office/backoffice/fact">
                    <i class='bx bx-pie-chart-alt-2' ></i>
                    <span class="links_name">Facts</span>
                </a>
                <span class="tooltip">Facts</span>
            </li>
            <li>
                <a href="/back_office/backoffice/skill">
                    <i class='bx bx-file-blank'></i>
                    <span class="links_name">Skill</span>
                </a>
                <span class="tooltip">Skill</span>
            </li>
            <li>
                <a href="/back_office/backoffice/portfolio">
                    <i class='bx bx-book-content'></i>
                    <span class="links_name">Portfolio</span>
                </a>
                <span class="tooltip">Portfolio</span>
            </li>
            <li>
                <a href="/back_office/backoffice/testimonial">
                    <i class='bx bx-server' ></i>
                    <span class="links_name">Testimonials</span>
                </a>
                <span class="tooltip">Testimonials</span>
            </li>
            <li>
                <a href="/back_office/backoffice/contact">
                    <i class='bx bx-envelope' ></i>
                    <span class="links_name">Contact</span>
                </a>
                <span class="tooltip">Contact</span>
            </li>
            <li>
                <a href="/back_office/backoffice/footer">
                    <i class='bx bx-copyright'></i>
                    <span class="links_name">Footer</span>
                </a>
                <span class="tooltip">Footer</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <!--<img src="profile.jpg" alt="profileImg">-->
                    <div class="name_job">
                        <div class="name">Prem Shahi</div>
                        <div class="job">Web designer</div>
                    </div>
                </div>
                <i class='bx bx-log-out' id="log_out"></i>
            </li>
        </ul>
    </div>
    <section class="home-section ps-5 pE-5">
        <div class="text">Dashboard</div>

        {{-- Tab Content Appears Here --}}
        <div class=" table-responsive">
            @yield('content')   
        </div>
    </section>
    {{-- Navbar Ends --}}

    {{-- Scripts --}}
    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
            }
        }
    </script>
</body>

</html>
