<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" />
    @vite('resources/css/login.css')
    <title>Daftar</title>
</head>

<body>
    <main class="container-form">
        <div class="right-content">
            <div class="header-form">
                <h1>Daftar</h1>
                <p>Selamat Datang! Lengkapi username dan password untuk membuat akun barumu.</p>
            </div>
            <form action="{{ route('register.post') }}" class="form" method="POST">
                @csrf
                <x-input-group type="text" name="username" id="username" label="Nama Pengguna" placeHolder="Masukan Nama Pengguna"></x-input-group>
                <x-input-group type="password" name="password" id="password" label="Kata Sandi" placeHolder="Masukan Kata Sandi"></x-input-group>
                <x-input-group type="password" name="password_confirmation" id="confirm_password" label="Konfirmasi Password" placeHolder="Konfirmasi Kata Sandi"></x-input-group>
                <button type="submit" class="btn-submit">Daftar</button>
            </form>
            <p class="form-url">
                Sudah Punya Akun ? <a href="/login">Masuk</a>
            </p>
        </div>
        <div class="left-content"></div>
    </main>
</body>

</html>
