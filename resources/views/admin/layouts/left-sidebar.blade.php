<nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
  <script>
    var navbarStyle = localStorage.getItem("phoenixNavbarStyle");
    if (navbarStyle && navbarStyle !== 'transparent') {
      document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
    }
  </script>
  <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
    <!-- scrollbar removed-->
    <div class="navbar-vertical-content">
      <ul class="navbar-nav flex-column" id="navbarVerticalNav">
        <li class="nav-item">
          <!-- label-->
          <p class="navbar-vertical-label">Mangerment</p>
          <hr class="navbar-vertical-line" /><!-- parent pages--><span class="nav-item-wrapper"><a
              class="nav-link label-1" href="documentation/getting-started.html" role="button" data-bs-toggle=""
              aria-expanded="false">
              <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    data-feather="life-buoy"></span></span><span class="nav-link-text-wrapper"><span
                    class="nav-link-text">Getting started</span></span></div>
            </a></span><!-- parent pages--><span class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
              href="#customization" role="button" data-bs-toggle="collapse" aria-expanded="false"
              aria-controls="customization">
              <div class="d-flex align-items-center">
                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                  class="nav-link-icon"><span data-feather="settings"></span></span><span
                  class="nav-link-text">Customization</span>
              </div>
            </a>
            <div class="parent-wrapper label-1">
              <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="customization">
                <p class="collapsed-nav-item-title d-none">Customization</p>
                <li class="nav-item"><a class="nav-link" href="documentation/customization/styling.html"
                    data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-text">Styling</span></div>
                  </a><!-- more inner pages-->
                </li>
                <li class="nav-item"><a class="nav-link" href="documentation/customization/plugin.html"
                    data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-text">Plugin</span></div>
                  </a><!-- more inner pages-->
                </li>
              </ul>
            </div>
          </span><!-- parent pages--><span class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
              href="#layouts-doc" role="button" data-bs-toggle="collapse" aria-expanded="false"
              aria-controls="layouts-doc">
              <div class="d-flex align-items-center">
                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                  class="nav-link-icon"><span data-feather="table"></span></span><span class="nav-link-text">Layouts
                  doc</span>
              </div>
            </a>
            <div class="parent-wrapper label-1">
              <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="layouts-doc">
                <p class="collapsed-nav-item-title d-none">Layouts doc</p>
                <li class="nav-item"><a class="nav-link" href="documentation/layouts/vertical-navbar.html"
                    data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-text">Vertical navbar</span></div>
                  </a><!-- more inner pages-->
                </li>
                <li class="nav-item"><a class="nav-link" href="documentation/layouts/horizontal-navbar.html"
                    data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-text">Horizontal navbar</span></div>
                  </a><!-- more inner pages-->
                </li>
              </ul>
            </div>
          </span><!-- parent pages--><span class="nav-item-wrapper"><a class="nav-link label-1"
              href="documentation/gulp.html" role="button" data-bs-toggle="" aria-expanded="false">
              <div class="d-flex align-items-center"><span class="nav-link-icon font-awesome"><span
                    class="fa-brands fa-gulp fs-0 ms-1"></span></span><span class="nav-link-text-wrapper"><span
                    class="nav-link-text">Gulp</span></span></div>
            </a></span><!-- parent pages--><span class="nav-item-wrapper"><a class="nav-link label-1"
              href="documentation/design-file.html" role="button" data-bs-toggle="" aria-expanded="false">
              <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    data-feather="figma"></span></span><span class="nav-link-text-wrapper"><span
                    class="nav-link-text">Design file</span></span></div>
            </a></span><!-- parent pages--><span class="nav-item-wrapper"><a class="nav-link label-1"
              href="changelog.html" role="button" data-bs-toggle="" aria-expanded="false">
              <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    data-feather="git-merge"></span></span><span class="nav-link-text-wrapper"><span
                    class="nav-link-text">Changelog</span></span></div>
            </a></span><!-- parent pages--><span class="nav-item-wrapper"><a class="nav-link label-1"
              href="showcase.html" role="button" data-bs-toggle="" aria-expanded="false">
              <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    data-feather="monitor"></span></span><span class="nav-link-text-wrapper"><span
                    class="nav-link-text">Images Slide</span></span></div>
            </a></span>
        </li>
      </ul>
    </div>
  </div>
  <div class="navbar-vertical-footer"><button
      class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 text-start white-space-nowrap"><span
        class="uil uil-left-arrow-to-left fs-0"></span><span class="fa-solid fa-right-long-to-line fs-0"></span><span
        class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
</nav>