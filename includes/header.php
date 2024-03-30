<header>
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
            <a class="navbar-brand d-flex gap-2" href="index.php">
                <img src="<?= $img ?>asj_logo.svg" alt="logo" class="img-fluid logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" href="#primaryMenu" role="button"
                aria-controls="primaryMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="primaryMenu" aria-labelledby="primaryMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="primaryMenuLabel"><a class="navbar-brand d-flex gap-2" href="#">
                <img src="<?= $img ?>asj_logo.svg" alt="logo" class="img-fluid logo">
            </a></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">

                    <ul class="navbar-nav ps-4 ps-lg-0 flex-grow-1 justify-content-end gap-3">
                        <li class="nav-item dropdown d-lg-flex justify-content-center ">
                            <a href="" class="nav-link  dropdown-toggle"   type="button" data-bs-toggle="dropdown"><span>Academic</span> <i
                                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul class="list-unstyled px-3 text-start dropdown-menu border-0">
                                <li class="nav-item">
                                    <a href="" class="nav-link">Admission</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">Staff Members</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">Academic Calender</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">Schedules</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">Transfer Certificate</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">Fee Structure</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">Downloads</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">Guidelines</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item d-lg-flex justify-content-center">
                            <a class="nav-link" href="facility.php">Facilities</a>
                        </li>
                        <li class="nav-item d-lg-flex justify-content-center">
                            <a class="nav-link" href="activities.php">Activities</a>
                        </li>
                        <li class="nav-item d-lg-flex justify-content-center">
                            <a class="nav-link" href="">Events</a>
                        </li>
                        <li class="nav-item d-lg-flex justify-content-center">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item d-lg-flex justify-content-center">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item d-lg-flex justify-content-center">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>