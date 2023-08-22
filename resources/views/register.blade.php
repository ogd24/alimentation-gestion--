:
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <div class="form_wrapper overlay-effect ">
        <form action="{{ route('regist') }}" method="POST">
            @csrf
          <h2>Sign In </h2>

          <div class="input_group">
        <input type="text" name="firstname" id="" required>
        <label for="">Firstname</label>
          </div>
          <div class="input_group">
            <input type="text" name="lastname" id="" required>
            <label for="">Lastname</label>
              </div>
              <div class="input_group">
                <input type="text" name="username" id="" required>
                <label for="">Username</label>
                  </div>
                  <div class="input_group">
                    <input type="email" name="email" id="" required>
                    <label for="">Email</label>
                      </div>
                      <div class="input_group">
                        <input type="password" name="password" id="" required>
                        <label for="">Password</label>
                          </div>

                  <div class="sign-link">

                    <button type="submit" class="btn">Sign In</button>
                    <p> Don't have an account?<a href="#" class="signUp-link">Sign Up</a></p>

                  </div>

        </form>

            </div>
           </div>
</div>
</body>
</html>
