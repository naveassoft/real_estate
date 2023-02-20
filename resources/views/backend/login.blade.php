<!DOCTYPE html>
<html lang="en">
  <head>
    @include('backend.inc.css')
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center ht-100v">
        <video id="headVideo" class="pos-absolute a-0 wd-100p ht-100p object-fit-cover" autoplay muted loop>
        <source src="../videos/video1.mp4" type="video/mp4">
        <source src="../videos/video1.ogv" type="video/ogg">
        <source src="../videos/video1.webm" type="video/webm">
        </video><!-- /video -->
        <div class="overlay-body bg-black-7 d-flex align-items-center justify-content-center">
        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bg-black-6">
            <div class="signin-logo tx-center tx-28 tx-bold tx-white">
                <span class="tx-normal">[</span>
                Real
                <span class="tx-info">Estate</span>
                <span class="tx-normal">]</span>
            </div>
                <br>
                <form action="/setLogin" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control fc-outline-dark" name="email" placeholder="Enter your username">
                    </div><!-- form-group -->
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control fc-outline-dark" placeholder="Enter your password">
                        <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
                    </div>
                    <button type="submit" class="btn btn-info btn-block">Sign In</button>
                </form>
            <!-- form-group -->
            <div class="mg-t-30 tx-center">Not yet a member? <a href="" class="tx-info">Sign Up</a></div>
        </div><!-- login-wrapper -->
        </div><!-- overlay-body -->
    </div><!-- d-flex -->


    @include('backend.inc.js')
  </body>
</html>
