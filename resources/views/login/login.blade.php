<div class="popup" id="loginPopup">
    <!-- Konten pop-up login -->
    <button class="login-popup-close">&times;</button>
    <h1>Login</h1>
    <form  action="{{ route('login') }}">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br><br>
      <a href="#">Forgot Password?</a><br>
      <input id="sumbit" type="submit" value="Login">
      <div class="link">Not a member? <a href="{{ route('register') }}">SignUp Here</a></div>
    </form>
  </div>

  <div class="blur-background" id="blurBackground"></div>
