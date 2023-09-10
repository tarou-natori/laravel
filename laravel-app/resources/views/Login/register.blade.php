<x-html>
  <header>
    <div class="header-left">Laravel</div>
    <div class="header-right">
      <li>
        <a href="http://localhost/login/index">Login</a>
      </li>
      <li>
        <a href="">Register</a>
      </li>
    </div>
  </header>
  <section>
    <div class="title">Register</div>
    <div class="content">
      <form method="POST" action="">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name"><br>
        <label for="email">E-Mail Address</label>
        <input type="email" name="email" id="email"><br>
        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass"><br>
        <label for="confirm">Comfirm Password</label>
        <input type="password" name="confirm" id="confirm"><br>
        <input type="submit" value="Register">
      </form>
    </div>
  </section>
</x-html>
