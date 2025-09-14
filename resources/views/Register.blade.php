<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" />
    @vite('resources/css/login.css')
    <title>Document</title>
</head>

<body>
    <main class="container-form">
        <div class="right-content">
            <div class="header-form">
                <h1>Register</h1>
                <p>Welcome back! Please enter your username and password</p>
            </div>
            <form action="{{ route('register.post') }}" class="form" method="POST">
                @csrf
                <x-input-group type="text" name="username" id="username" label="Username" placeHolder="Enter your Username"></x-input-group>
                <x-input-group type="password" name="password" id="password" label="Password" placeHolder="Enter your Password"></x-input-group>
                <x-input-group type="password" name="password_confirmation" id="confirm_password" label="Confirm Password" placeHolder="Confirm your Password"></x-input-group>
                <button type="submit" class="btn-submit">Register</button>
            </form>
            <p class="form-url">
                Already have an account? <a href="/login">Login</a>
            </p>
        </div>
        <div class="left-content"></div>
    </main>
</body>

</html>
