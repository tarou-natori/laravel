<!--
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel課題①</title>
</head>
<body>
  <header>
    <div class="header-left">Laravel</div>
    <div class="header-right">
      <li>
        <a href="/laravel1">Login</a>
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
</body>
</html>
-->

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
