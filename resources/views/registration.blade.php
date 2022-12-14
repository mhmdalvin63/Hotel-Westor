<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Register</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css?family=Roboto:400,400i,700");
body{
  overflow-x: hidden;
  font-family: Roboto, sans-serif;
}

.video-container{
  width: 100vw;
  height: 100vh;
}

 iframe {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 100vw;
  height: 100vh;
  transform: translate(-50%, -50%);
  pointer-events: none;
}

#text{
  position: absolute;
  color: #FFFFFF;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

@media (min-aspect-ratio: 16/9) {
  .video-container iframe {
    height: 56.25vw;
  }
}
@media (max-aspect-ratio: 16/9) {
  .video-container iframe {
    width: 177.78vh;
  }
}


/* DO NOT COPY. NOT PART OF THE EXAMPLE */
.read-article{
  position: absolute;
  top: 10px;
  left: 10px;
  z-index: 999;
  color: #000;
  background: white;
  padding: 10px 20px;
  border-radius: 10px;
  font-family: arial;
  text-decoration: none;
  box-shadow: rgb(50 50 93 / 25%) 0 0 100px -20px, rgb(0 0 0 / 30%) 0 0 60px -15px;
}
.read-article:hover{
    background: #d5d5d5;
    box-shadow: rgb(50 50 93 / 25%) 0 0 100px -20px, rgb(0 0 0 / 30%) 0 0 60px 0px;
}
iframe[sandbox] .read-article{
  display: none;
}
.cardnya{
    display: flex;
    gap: 4rem;
    background-color: rgba(255, 255, 255, 0.349);  
    padding: 3rem;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 10px;
}
.register-card1{
    position: relative;
    top: 7rem;
}
</style>
<body>
    <div class="video-container">
        <iframe src="https://www.youtube.com/embed/2_kAzyaX7SU?controls=0&autoplay=1&mute=1&playsinline=1&loop=1&playlist=2_kAzyaX7SU"></iframe>
      </div>
      
      <div id="text">
        <div class="cardnya">
            <div class="register-card1">
                <img src="{{ asset("template/img/logohotel.png") }}" alt="">
            </div>
            <div class="register-card2" style="position:relative;right:2rem">
                <h1 class="text-center">Register</h1>
                <form action="{{ route('register.post') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="username" class="form-label">Username</label>
                      <div class="col-12">
                        <input type="text" id="username" class="form-control" name="username" required autofocus style="width: 22rem">
                        @if ($errors->has('username'))
                            <span class="text-danger">{{ $errors->first('username') }}</span>
                        @endif
                    </div>
                    </div>
    
                    <div class="form-group">
                        <label for="notelp" class="col-md-4 col-form-label text-md-right">No Telp</label>
                        <div class="col-12 mb-3">
                            <input type="number" id="notelp" class="form-control" name="notelp" required autofocus style="width: 22rem">
                            @if ($errors->has('notelp'))
                                <span class="text-danger">{{ $errors->first('notelp') }}</span>
                            @endif
                        </div>
                    </div>
    
                      <div class="form-group">
                          <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                          <div class="col-12">
                              <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                              @if ($errors->has('email'))
                                  <span class="text-danger">{{ $errors->first('email') }}</span>
                              @endif
                          </div>
                      </div>
    
                      <div class="form-group">
                          <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                          <div class="col-12 mb-3">
                              <input type="password" id="password" class="form-control" name="password" required>
                              @if ($errors->has('password'))
                                  <span class="text-danger">{{ $errors->first('password') }}</span>
                              @endif
                          </div>
                      </div>
    
                      <div class="col-12 offset-md-4">
                          <button type="submit" class="btn btn-primary" style="width: 10rem; margin-left: -2rem">
                              Create
                          </button>
                      </div>
                  </form>
            </div>
        </div>
    
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>