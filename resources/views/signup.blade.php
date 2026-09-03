<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href= {{ asset('loginresource/css/owl.carousel.min.css')}}>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{  asset('loginresource/css/bootstrap.min.css')}}>
    
    <!-- Style -->
    <link rel="stylesheet" href={{ asset('loginresource/css/style.css')}}>

    <title>Login #3</title>
  </head>
  <body>
  

  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
              <h3>Sign Up to <strong>Perpus</strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form action="/register" method="post">
                @csrf
                 <div class="form-group first">
                  <label for="nama">Nama</label>
                  <input type="text" name="name" class="form-control" placeholder="laufey" id="name">
                </div>
                <div class="form-group first">
                  <label for="email">Email</label>
                  <input type="text" name="email" class="form-control" placeholder="2225113895@stis.ac.id" id="email">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
                </div>
                <div class="form-group last mb-3">
               <label for="role">Who Are You</label>
             <select name="divisi" class="form-control" id="divisi" required>
                <option value="" disabled selected>-- Pilih Role --</option>
        <option value="BPH">BPH</option>
        <option value="GRAMTI">GRAMTI</option>
        <option value="HPD">HPD</option>
        <option value="Akademik">Akademik</option>
        <option value="Non-Akademik">Non-Akademik</option>
        <option value="Kewirausahaan">Kewirausahaan</option>
        <option value="Acara">Acara</option>
        <option value="Umum">Umum</option>
    </select>
</div>

                <input type="submit" value="Sign In" class="btn btn-block btn-primary">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

  <script src="{{ asset('login-assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('login-assets/js/popper.min.js') }}"></script>
<script src="{{ asset('login-assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('login-assets/js/main.js') }}"></script>
  </body>
</html>