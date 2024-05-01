<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="user-profile">
      <div class="user-image">
          @if (Auth::user()->image)
          <img src="{{ asset('uploads/' . Auth::user()->image) }}" alt="profile" />
          @else
          <img src="{{ asset('images/download.png') }}" alt="default-avatar" />
          @endif
      </div>
      <div class="user-name">
          {{ Auth::user()->name }}
      </div>
      <div class="user-designation">
          {{ Auth::user()->username }}
      </div>
  </div>
  <ul class="nav">
      <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard') }}">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Setting</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('update-profile') }}">Profile</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('update-password') }}">Update Password</a>
                  </li>
              </ul>
          </div>
      </li>

    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#about" aria-expanded="false" aria-controls="ui-basic">
            <i class="icon-content-right menu-icon"></i>
            <span class="menu-title">About</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="about">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Upload About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about-table') }}">About Table</a>
                </li>
            </ul>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#new" aria-expanded="false" aria-controls="ui-basic">
            <i class="icon-download menu-icon"></i>
            <span class="menu-title">News</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="new">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('new-us') }}">Upload New</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('new-table') }}">New Table</a>
                </li>
            </ul>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#even" aria-expanded="false" aria-controls="ui-basic">
            <i class="icon-disc menu-icon"></i>
            <span class="menu-title">Events</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="even">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('even-us') }}">Upload Even</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('even-table') }}">Even Table</a>
                </li>
            </ul>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#testimonial" aria-expanded="false" aria-controls="ui-basic">
            <i class="icon-disc menu-icon"></i>
            <span class="menu-title">Testimoial</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="testimonial">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('testimonial-us') }}">Upload Testimoial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('testimonial-table') }}">Testimoial Table</a>
                </li>
            </ul>
        </div>
    </li>



      <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#team" aria-expanded="false" aria-controls="team">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Team</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="team">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('post-team') }}">Upload Team</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('team-table') }}">Team Table</a>
                  </li>
              </ul>
          </div>
      </li>


      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#service" aria-expanded="false" aria-controls="team">
            <i class="icon-folder menu-icon"></i>
            <span class="menu-title">Service</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="service">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('service-us') }}">Upload Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('service-table') }}">Service Table</a>
                </li>
            </ul>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#gallery" aria-expanded="false" aria-controls="team">
            <i class="icon-cog menu-icon"></i>
            <span class="menu-title">Gallery</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="gallery">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gallery-us') }}">Upload Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gallery-table') }}">Gallery Table</a>
                </li>
            </ul>
        </div>
    </li>



    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#project" aria-expanded="false" aria-controls="team">
            <i class="icon-target menu-icon"></i>
            <span class="menu-title">Project</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="project">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('project-us') }}">Upload Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('project-table') }}">Project Table</a>
                </li>
            </ul>
        </div>
    </li>



    {{-- <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#contact" aria-expanded="false" aria-controls="team">
            <i class="icon-head menu-icon"></i>
            <span class="menu-title">Contact</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="contact">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact-us') }}">Upload Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact-table') }}">Contact Table</a>
                </li>
            </ul>
        </div>
    </li> --}}

    <li class="nav-item">
        <a class="nav-link" href="{{ route('contact-table') }}">
            <i class="icon-book menu-icon"></i>
            <span class="menu-title">Contact Table</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('info-table') }}">
            <i class="icon-head menu-icon"></i>
            <span class="menu-title">Info Table</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('family-table') }}">
            <i class="icon-head menu-icon"></i>
            <span class="menu-title">Family Table</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="icon-server menu-icon"></i>
            <span class="menu-title">Logout</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>




      {{-- <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#user-pages" aria-expanded="false" aria-controls="user-pages">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="user-pages">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                      <a class="nav-link" href="pages/samples/login.html">Login</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="pages/samples/login-2.html">Login 2</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="pages/samples/register.html">Register</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="pages/samples/register-2.html">Register 2</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="pages/samples/lock-screen.html">Lockscreen</a>
                  </li>
              </ul>
          </div>
      </li> --}}

  </ul>
</nav>
<!-- partial -->
