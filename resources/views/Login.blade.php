<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="l" />
    @vite('resources/css/login.css')
  </head>
  <body>
    <main class="container-form">
      <div class="left-content"></div>
      <div class="right-content">
        <div class="header-form">
          <h1>Login</h1>
          <p>Welcome back! Please enter your username and password</p>
        </div>
        <form action="{{ route('login') }}" class="form" method="POST">
          @csrf
          <x-input-group type="text" name="username" id="username" label="Username" placeHolder="Enter your Username"></x-input-group>
          <x-input-group type="password" name="password" id="password" label="Password" placeHolder="Enter your Password"></x-input-group>
          <button type="submit" class="btn-submit">Log In</button>
        </form>
        <p class="form-url">
          Don't have an account ? <a href="/register">Register</a>
        </p>
      </div>
    </main>
  </body>
</html>
