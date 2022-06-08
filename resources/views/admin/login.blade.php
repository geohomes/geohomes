
@include('adminLayout.header')
 <title>
   Geohomes | Login
  </title>
<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient" style="color:#0EA10F;">Welcome back</h3>
                  <p class="mb-0">Enter your email and password to sign in</p>
                

                <!-- it gives error messages -->
                  @if($message = Session::get('error'))
                  <div class="alert alert-warning">
                    <p class="text-center">{{$message}}</p>
                  </div>
                  @endif


                @if(count($errors)>0){
                <div class="alert alert-denger">
                  <ul>
                @foreach($errors->all() as $error);
                <li>{{ $error }};</li>
                @endforeach
              </ul>
            </div>
            @endif
                
               <!-- end of error messages -->
               </div>
                <div class="card-body">
                  <form role="form" method="POST" action="{{route('login.checklogin')}}" id="admin_form">
                        
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon" name="user_email" required="email">
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" name="user_pass" required="password">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn w-100 mt-4 mb-0" style="background-color:#0EA10F !important; color:black;">Sign in</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('/assets/img/post/post.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  @include('adminLayout.footer');
</body>

</html>