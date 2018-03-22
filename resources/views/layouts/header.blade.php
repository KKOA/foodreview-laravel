<nav class="navbar">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
  
        <a class="navbar-brand" href="/">FoodReview
          {{-- <img src="{{asset('imgs/foodreview40x40-min.png')}}" class="brand-image img-responsive" alt='Logo'> --}}
          <img src="{{asset('imgs/sprite.png')}}" class="brand-image img-responsive logo" alt='Logo' id='brand-image'>
  
        </a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active">
          <a href="/">
            Home <i class="glyphicon glyphicon-home"></i>
            <span class="sr-only">(current)</span>
          </a>
        </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              About
              <img src="{{asset('imgs/sprite.png')}}" class="about" alt="About">
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="#">Our Story
                  <img src="{{asset('imgs/sprite.png')}}" class="story" alt="History">
                </a>
              </li>
              <li>
                <a href="#">Team
                  <img src="{{asset('imgs/sprite.png')}}" class="team" alt="Team">
                </a>
              </li>
              <li role="separator" class="divider"></li>
              <li>
                <a href="#">Careers
                  <img src="{{asset('imgs/sprite.png')}}" class="career"  alt="Career">
                </a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              Support <img src="{{asset('imgs/sprite.png')}}" class="support"  alt="Career">
  
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Contact <i class='glyphicon glyphicon-envelope'></i></a></li>
              <li role="separator" class="divider"></li>
             <li><a href="#">FAQs <i class='glyphicon glyphicon-question-sign'></i></a></li>
            </ul>
          </li>
        </ul>
  
        <ul class="nav navbar-nav navbar-right">
          {{-- <% if user_signed_in? %> --}}
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <%= current_user.username %> <i class='glyphicon glyphicon-user'></i>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                {{-- <%= link_to user_path(current_user.id) do %> --}}
                <a href="#">
                    account
                    <img src="{{asset('imgs/sprite.png')}}" class='account' alt="Your account">
                    {{-- <%= image_tag("account20x20.png", alt: "Your account") %> --}}
                </a>
                {{-- <% end %> --}}
              </li>
              <li role="separator" class="divider"></li>
              <li>
  
                {{-- <%= link_to destroy_user_session_path, method: :delete do %> --}}
                <a href="#">
                  Log Out <i class='glyphicon glyphicon-log-out'></i>
                </a>
                {{-- <% end %> --}}
              </li>
            </ul>
          </li>
          {{-- <% else %> --}}
          <li>
  
            {{-- <%= link_to new_user_registration_path do %> --}}
            <a href="#">
                Sign Up
                <img src="{{asset('imgs/sprite.png')}}" class='signup' alt="Sign up">
            </a>
                {{-- <%= image_tag("signup20x20.png", alt: "Sign up") %>
            <% end %> --}}
  
          </li>
          <li>
            {{-- <%= link_to new_user_session_path do %> --}}
            <a href="#">
                Sign In <i class='glyphicon glyphicon-log-in'></i>
            </a>
            {{-- <% end %> --}}
          </li>
          {{-- <% end %> --}}
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  