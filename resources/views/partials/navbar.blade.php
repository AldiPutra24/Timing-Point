<!--   Navbar -->
<div class="navbar">
    <div class="container">
      <div class="navbar-box">
        <div class="logo">
          <i class="fa-solid fa-biohazard"></i>
        </div>
        <ul class="menu">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#suggestion">suggestion</a></li>
          <li><a href="#team">Team</a></li>
          <li><button id="loginBtn">Login</button></li>
        </ul>
        <button class="hamburger hamburger--spin" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </div>
    </div>
  </div>
  <!--   Navbar -->
{{-- login popup --}}

<div class="popup" id="loginPopup">
    <!-- Konten pop-up login -->
    <button class="login-popup-close">&times;</button>
    <h1>Login</h1>
    <form  action={{ route('login') }} method="POST">
        @csrf
      <label for="username">Username:</label>
      <input type="text" id="username" name="email" required><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br><br>
      <a href="#">Forgot Password?</a><br>
      <button id="sumbit" type="submit">LogIn</button>
      <div class="link">Not a member? <a href="{{ route('register') }}">SignUp Here</a></div>
    </form>
  </div>

  <div class="blur-background" id="blurBackground"></div>


