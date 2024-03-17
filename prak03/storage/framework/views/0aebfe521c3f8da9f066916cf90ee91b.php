<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap . The most popular HTML, CSS, and JS library in the world.</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-purple fixed-top" data-bs-theme="dark">
      <div class="container">
        <a href="#" class="navbar-brand">
          <img src="<?php echo e(Vite::asset('resources/images/logo-white.svg')); ?>" alt="bootstrap-logo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarClone" aria-controls="navbarClone" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarClone">

            <!-- List Menu Start -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Docs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Example</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Icons</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Themes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
            </ul>
            <!-- List Menu End -->

            <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                <!-- Sosmed Start -->
                <li class="nav-item col-6 col-lg-auto">
                    <a href="#" class="nav-link active">
                        <i class="bi-github"></i><small class="ms-2 d-lg-none">Github</small>
                    </a>
                </li>
                <li class="nav-item col-6 col-lg-auto">
                    <a href="#" class="nav-link active">
                        <i class="bi-twitter"></i><small class="ms-2 d-lg-none">Twitter</small>
                    </a>
                </li>
                <li class="nav-item col-6 col-lg-auto">
                    <a href="#" class="nav-link active">
                        <i class="bi-slack"></i><small class="ms-2 d-lg-none">Slack</small>
                    </a>
                </li>
                <!-- Sosmed End -->
                <li class="nav-item col-12 col-lg-auto">
                    <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
                    <hr class="d-lg-none my-2 text-white-50">
                </li>
                <!-- Dropdown Start -->
                <li class="nav-item">
                    <div class="dropdown" data-bs-theme="light">
                        <button type="button" class="btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                          <span class="d-lg-none" aria-hidden="true">Bootstrap</span> v5.3
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><h6 class="dropdown-header">v5 releases</h6></li>
                            <li><a href="#" class="dropdown-item d-flex align-items-center justify-content-between active bg-purple">Latest (5.3.x) <i class="bi bi-check2"></i></a></li>
                            <li><a href="#" class="dropdown-item hover-dropdown">v5.2.3</a></li>
                            <li><a href="#" class="dropdown-item hover-dropdown">v5.1.3</a></li>
                            <li><a href="#" class="dropdown-item hover-dropdown">v5.0.2</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><h6 class="dropdown-header">Previous releases</h6></li>
                            <li><a href="#" class="dropdown-item hover-dropdown">v4.6.x</a></li>
                            <li><a href="#" class="dropdown-item hover-dropdown">v3.4.1</a></li>
                            <li><a href="#" class="dropdown-item hover-dropdown">v2.3.2</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a href="#" class="dropdown-item hover-dropdown">All versions</a></li>
                        </ul>
                    </div>
                </li>
                <!-- Dropdown End -->
                <li class="nav-item col-12 col-lg-auto">
                    <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
                    <hr class="d-lg-none my-2 text-white-50">
                </li>
                <!-- Dropdown Start -->
                <li class="nav-item">
                    <div class="dropdown" data-bs-theme="light">
                        <button type="button" class="btn nav-link text-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-brightness-high-fill"></i><span class="d-lg-none">Toggle theme</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a href="#" class="dropdown-item active bg-purple"><i class="bi-brightness-high-fill me-2"></i>Light</a></li>
                            <li><a href="#" class="dropdown-item hover-dropdown"><i class="bi-moon-stars-fill me-2"></i>Dark</a></li>
                            <li><a href="#" class="dropdown-item hover-dropdown"><i class="bi-circle-half me-2"></i>Auto</a></li>
                        </ul>
                    </div>
                </li>
                <!-- Dropdown End -->
            </ul>
          </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Section 1 Start -->
    <section class="header bg-light">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="mt-4 display-3">Build fast, responsive sites with Bootstrap</h1>
                    <p class="fs-5 mt-3">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="row">
                        <div class="d-flex flex-column flex-md-row">
                            <button type="button" class="btn bg-purple text-white btn-lg mb-3 me-md-3 px-4 py-3">Get Started</button>
                            <button type="button" class="btn btn-outline-dark btn-lg mb-3 px-4 py-3">Download</button>
                        </div>
                    </div>
                    <div class="text-muted">
                        Currently <b>v5.3.0-alpha2.</b> · <a href="#">v4.6.x docs</a> · <a href="#">All releases</a>
                    </div>
                </div>
                <div class="col-md-5 order-md-2">
                    <img class="img-fluid" src="<?php echo e(Vite::asset('resources/images/main.svg')); ?>" alt="image bootstrap logo">
                </div>
            </div>
        </div>
    </section>
    <!-- Section 1 End -->

    <!-- Section 2 Start -->
    <section>
        <div id="bs-icons">
            <!-- Container -->
            <div class="container py-5 px-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <i class="bi bi-subtract fs-2 bg-warning py-2 px-3 rounded text-white"></i>
                        </div>
                        <h2 class="display-5 mb-3">Personalize it with <br/>Bootstrap Icons</h2>
                        <p class="fs-5"><a href="#">Bootstrap Icons</a> is an open source SVG icon library featuring over 1,800 glyphs, with more added every release. They're designed to work in any project, whether you use Bootstrap itself or not. Use them as SVGs or icon fonts—both options give you vector scaling and easy customization via CSS.</p>
                        <a class="icon-link icon-link-hover lead fw-semibold mb-5" href="#">
                            Get Bootstrap Icons
                            <i class="bi bi-arrow-right mb-2"></i>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid" src="<?php echo e(Vite::asset('resources/images/bs-icons.png')); ?>" alt="Bootstrap Icons">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 2 End -->

    <!-- Section 3 Start -->
    <section>
        <div id="bs-themes">
            <div class="container py-5 px-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3 mt-5">
                            <i class="bi bi-droplet-fill fs-2 bg-info py-2 px-3 rounded-3 text-white"></i>
                        </div>
                        <h2 class="display-5">Make it yours with official Bootstrap Themes</h2>
                        <p class="fs-5">Take Bootstrap to the next level with premium themes from the <a href="#">official Bootstrap Themes marketplace</a>. Themes are built on Bootstrap as their own extended frameworks, rich with new components and plugins, documentation, and powerful build tools.</p>
                        <a class="icon-link icon-link-hover lead fw-semibold mb-5" href="#">
                            Browse Bootstrap Themes
                            <i class="bi bi-arrow-right mb-2"></i>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid" src="<?php echo e(Vite::asset('resources/images/bs-themes.png')); ?>" alt="Bootstrap Themes">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 3 End -->

    <!-- Footer Start -->
    <footer class="bg-light">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3 mb-5">
                    <a href="#" class="logo text-decoration-none">
                        <div class="d-flex">
                            <img class="img-fluid" src="<?php echo e(Vite::asset('resources/images/logo-black.svg')); ?>" alt="Bootstrap Logo" style="width: 40px;">
                            <div class="fs-5 ms-2 text-black">Bootstrap</div>
                        </div>
                    </a>
                    <div class="mt-2 text-muted">
                        <small>Designed and built with all the love in the world by the <a href="#" class="text-black">Bootstrap team</a> with the help of <a href="#" class="text-black">our contributors</a>.</small>
                    </div>
                    <div class="mt-2 text-muted">
                        <small>Code licensed <a href="#" class="text-black">MIT</a>, docs <a href="#" class="text-black">CC BY 3.0</a>.</small>
                    </div>
                    <div class="mt-2 text-muted">
                        <small>Currently v5.3.0-alpha2.</small>
                    </div>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1 mb-5">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Home</a></li>
                        <li class="mb-2"><a href="#">Docs</a></li>
                        <li class="mb-2"><a href="#">Examples</a></li>
                        <li class="mb-2"><a href="#">Icons</a></li>
                        <li class="mb-2"><a href="#">Themes</a></li>
                        <li class="mb-2"><a href="#">Blog</a></li>
                        <li class="mb-2"><a href="#">Swag Store</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-5">
                    <h5>Guides</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Getting started</a></li>
                        <li class="mb-2"><a href="#">Starter template</a></li>
                        <li class="mb-2"><a href="#">Webpack</a></li>
                        <li class="mb-2"><a href="#">Parcel</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-5">
                    <h5>Projects</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Bootstrap 5</a></li>
                        <li class="mb-2"><a href="#">Bootstrap 4</a></li>
                        <li class="mb-2"><a href="#">Icons</a></li>
                        <li class="mb-2"><a href="#">RFS</a></li>
                        <li class="mb-2"><a href="#">npm starter</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-5">
                    <h5>Community</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Issues</a></li>
                        <li class="mb-2"><a href="#">Discussions</a></li>
                        <li class="mb-2"><a href="#">Corporate sponsors</a></li>
                        <li class="mb-2"><a href="#">Open Collective</a></li>
                        <li class="mb-2"><a href="#">Slack</a></li>
                        <li class="mb-2"><a href="#">Stack overflow</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\prak03\resources\views/bootstrap_clone.blade.php ENDPATH**/ ?>