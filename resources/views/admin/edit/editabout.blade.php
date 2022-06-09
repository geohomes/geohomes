@include('./updatelayout.header');
 <link rel="stylesheet" href="../assets/css/style.css">
 <title>
  Update AbouT Us Page
  </title>
  @include('./updatelayout.navbar')
     <!-- Consultants Form starts here -->
 <div class="container-fluid py-4">
      <div class="row">
              @if(isset(Auth::user()->email))
         @else
          <script>window.location="login"</script>
         @endif
         <div class="container">
         <div class="row">
            <div class="col-lg-6 col-sm-12 col-md-12">
                    <div class="col-12">
                        <h2 class="contact-title mt-30 padding-40" style="color:#0EA15F">Update About Us Page</h2>
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
                        <form class="form-contact contact_form" action="" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                          
                            <div class="row">
                                  @foreach($about as $row)
                                 <div class="col-sm-6 col-lg-12">
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="title" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="{{$row['title']}}">
                                         <small class="text-danger">{{$errors->first('title') }}</small>
                                    </div>
                                </div>
                                 <div class="col-sm-12 col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="description" id="message" cols="50" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" placeholder="{{$row['description']}}"></textarea>
                                         <small class="text-danger">{{$errors->first('description') }}</small>
                                    </div>
                                </diV>
                                <input type="hidden" value="{{$row['id']}}" name="id">
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-success" style="background-color: #0EA15F;">Update</button>
                            </div>
                        </form>
                           @endforeach
                       </div>
                       <div class="col-lg-6 col-sm-12 col-md-12">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel text-uppercase">about Detail</h6>
                              </div>

                              <div class="modal-body">
                                <div class="container-fluid">
                                  <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-md-6 ">
                                    <h6 style="font-weight: bold;">Title:</h6>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 col-md-6">
                                    <h5>{{$row[ 'title' ] }}</h6>
                                    </div>
                                    
                                    <br><br>
                                     <div class="col-lg-12 col-sm-12 col-md-12 ">
                                    <h6 style="font-weight: bold;"> Description:</h6>
                                    </div>
                                     <div class="col-lg-12 col-sm-12 col-md-12">
                                    <h6> {{$row[ 'description' ] }}</h6>
                                    </div>
                                    <br><br>
                                    <div class="col-lg-12 col-sm-12 col-md-12">
                                    <h6> {{$row[ 'created_at' ] }}</h6>
                                  </div>
                                </div>
                              </div>

                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" ><a href="javascript:history.go(-1)" style="color: black;">Back</a></button>
                              </div>
                              
                            </div>
                          </div>
                        </div>
  
                     </main>            
  
   @include('./updatelayout.footer');
</body>
</html>