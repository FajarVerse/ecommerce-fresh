<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Masuk</title>
    {{-- <link rel="stylesheet" href="l" /> --}}
    @vite('resources/css/login.css')
  </head>
  <body>
    <main class="container-form">
      <div class="left-content"></div>
      <div class="right-content">
        <div class="header-form">
          <h1>Masuk</h1>
          <p>Senang bertemu lagi! Masukkan username dan password untuk masuk ke akunmu.</p>
        </div>
        <form action="{{ route('login') }}" class="form" method="POST">
          @csrf
          <x-input-group type="text" name="username" id="username" label="Nama Pengguna" placeHolder="Masukan Nama Pengguna"></x-input-group>
          <x-input-group type="password" name="password" id="password" label="Kata Sandi" placeHolder="Masukkan Kata Sandi"></x-input-group>
          <button type="submit" class="btn-submit">Masuk</button>
        </form>
        <p class="form-url">
          Tidak punya akun ? <a href="/register">Daftar</a>
        </p>
      </div>
    </main>
  </body>
</html>
