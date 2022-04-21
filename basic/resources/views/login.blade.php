<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Document</title>
          <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    </head>
    <body>
    
   <main>
<div class="wrapper">
    <div class="card">
        <form action="submit" method="POST" class="d-flex flex-column">
            <div class="h3 text-center text-white">Login</div>
              <div class="d-flex align-items-center input-field my-3 mb-4"> 
                <span class="far fa-user p-2"></span> 
                  <input type="text" placeholder="NIM" name="nim" required class="form-control"> 
              </div>
              <div class="d-flex align-items-center input-field mb-4"> 
                  <span class="fas fa-lock p-2"></span> 
                    <input type="text" placeholder="NAMA" required class="form-control" id="pwd"> 
              </div>
              <div class="d-flex align-items-center input-field my-3 mb-4" style="display: flex; flex-direction: column;"> 
                <span class="far fa-user p-2">Jenis Kelamin</span> 
                <div class="d-flex  align-items-center" >
                  <input type="radio" id="pria" name="gender" value="pria">
                  <label for="pria" style="margin-top: 10px; margin-left: 10px;">Pria</label><br>
                  <input type="radio" id="wanita" name="gender" value="wanita" style="margin-left: 10px;">
                  <label for="wanita" style="margin-top: 10px; margin-left: 10px;">Wanita</label><br>
                </div>
              </div>
              <div class="d-flex align-items-center input-field mb-4"> 
                  <span class="fas fa-lock p-2"></span> 
                    <input type="text" placeholder="ALAMAT" required class="form-control" id="pwd"> 
              </div>
              <div class="d-flex align-items-center input-field mb-4"> 
                  <span class="fas fa-lock p-2"></span> 
                    <select name="province" id="province" class="form-control">
                <option value="">Jenis Mahasiswa</option>
                    <option value="ubsi">UBSI</option>
                    <option value="luar">LUAR UBSI</option>

            </select>
              </div>
           
            <div class="d-sm-flex align-items-sm-center justify-content-sm-between">
                <div class="d-flex align-items-center"> <label class="option"> <span class="text-light-white">Remember Me</span> <input type="checkbox" checked> <span class="checkmark"></span> </label> </div>
                <div class="mt-sm-0 mt-3"><a href="#">Forgot password?</a></div>
            </div>
            <div class="my-3">
            
            <button type="submit" class="btn btn-primary">Login</button> 
            </div>
            <div class="mb-3"> <span class="text-light-white">Dont have an account?</span> <a href="#">Sign Up</a> </div>
        </form>
        <div class="position-relative border-bottom my-3 line"> <span class="connect">or connect with</span> </div>
        <div class="text-center py-3 connections"> <a href="https://wwww.facebook.com" target="_blank" class="px-2"> <img src="https://www.dpreview.com/files/p/articles/4698742202/facebook.jpeg" alt=""> </a> <a href="https://www.google.com" target="_blank" class="px-2"> <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-suite-everything-you-need-know-about-google-newest-0.png" alt=""> </a> <a href="https://www.github.com" target="_blank" class="px-2"> <img src="https://www.freepnglogos.com/uploads/512x512-logo-png/512x512-logo-github-icon-35.png" alt=""> </a> </div>
    </div>
</div>
 
</main>
    </body>

    <script>
    var asu = false
    </script>
    </html>