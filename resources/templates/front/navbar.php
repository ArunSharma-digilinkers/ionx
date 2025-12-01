<nav class="navbar navbar-expand-lg fixed-top" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $path; ?>">
            <img src="<?php echo $path; ?>img/logo.png" alt="" class="img-fluid logo-img">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <img src="<?php echo $path; ?>img/toggler.png" alt="" class="img-fluid">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $path; ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item myNav-item">
                    <div class="dropdown">
                        <a class="nav-link myNav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false"> About us
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="company-profile">Company profile</a></li>
                            <li><a class="dropdown-item" href="recycle">Recycle With Us</a></li>
                            <li><a class="dropdown-item" href="#">Certificates</a></li>
                            <li><a class="dropdown-item" href="#">Leadership</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item myNav-item">
                    <div class="dropdown">
                        <a class="nav-link myNav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false"> services
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="lithium-ion-battery">lithium ion battery</a></li>
                            <li><a class="dropdown-item" href="battery-material">Battert Material</a></li>
                        </ul>
                    </div>
                </li>
                
                <!-- <li class="nav-item myNav-item">
                    <div class="dropdown">
                        <a
                            class="nav-link myNav-link dropdown-toggle"
                            href="#"
                            role="button"
                            id="dropdownMenuLink"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Services
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Battery Recycle</a></li>
                            <li><a class="dropdown-item" href="#">Battery Recycle</a></li>
                            <li><a class="dropdown-item" href="#">Battery Recycle</a></li>
                        </ul>
                    </div>
                </li> -->
                   <li class="nav-item">
                    <a class="nav-link" href="<?php echo $path; ?>#manufacturing">Manufacturing</a>
                </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo $path; ?>#why-choose">Why Us</a>
                </li>
             
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $path; ?>contact-us">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="scroll-point"></div>