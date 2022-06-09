@include('./updatelayout.header');
 <link rel="stylesheet" href="../assets/css/style.css">
 <title>
  Update Blog Post
  </title>
  @include('./updatelayout.navbar')
 <div class="container-fluid py-4">
      <div class="row">
              @if(isset(Auth::user()->email))
         @else
          <script>window.location="login"</script>
         @endif
         <div class="container">
         <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title mt-40 padding-40" style="color:#0EA15F">Update Blog Post</h2>
                    </div>
                       <!-- it gives feedback messages -->
                                      @if($message = Session::get('success'))
                                      <div class="alert">
                                        <p style="color:#0EA10F;">{{$message}}</p>
                                      </div>
                                      @endif

                                      @if($message = Session::get('error'))
                                      <div class="alert">
                                        <p style="color:red;">{{$message}}</p>
                                      </div>
                                      @endif
                                      <!-- feedback message ends here -->
                    <div class="col-lg-6">
                        <form class="form-contact contact_form" action="#" method="POSt" enctype="multipart/form-data" novalidate="novalidate">
                          
                            <div class="row">
                               @foreach($blog as $row)
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control valid" name="name"  type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="{{$row['writer']}}">
                                         <small class="text-danger">{{$errors->first('name') }}</small>
                                    </div>
                                </div>
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="{{$row['email']}}">
                                         <small class="text-danger">{{$errors->first('email') }}</small>
                                    </div>
                                </div>
                                      <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="title" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="{{$row['title']}}">
                                         <small class="text-danger">{{$errors->first('title') }}</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="image" id="name" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Upload image">
                                         <small class="text-danger">{{$errors->first('image') }}</small>
                                    </div>
                                </div>
                                 <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="description" id="message" cols="50" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Blog Description'" placeholder=" {{$row['description']}}"></textarea>
                                         <small class="text-danger">{{$errors->first('description') }}</small>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="{{$row['id']}}">
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-outline-dark button-contactForm boxed-btn">Update</button>
                            </div>
                            @endforeach
                        </form>
  </main>
  
   @include('./updatelayout.footer');
</body>
</html>