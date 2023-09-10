<x-html>
  <header>
    <div class="header-left">Laravel</div>
    <div class="header-right">
      <li>
        <a href="">Login</a>
      </li>
      <li>
        <a href="http://localhost/login/register">Register</a>
      </li>
    </div>
  </header>
  <section>
    <div class="title">Login</div>
    <div class="content">
      <form method="POST" action="">
        @csrf
        <label for="email">E-Mail Address</label>
        <input type="email" name="email" id="email"><br>
        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass"><br>
        <input type="submit" value="Login">
      </form>
    </div>
  </section>
</x-html>