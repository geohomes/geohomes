@include('updatelayout.header');
 <title>
  Add Construction
  </title>
  @include('updatelayout.navbar')
         <div class="container">
         <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title mt-30 padding-40" style="color:#0EA15F">Add content</h2>
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
                        <form class="form-contact contact_form" action="#" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                          
                            <div class="row">
                               
                                 
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="firstimage" id="title" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload first Image'" placeholder="Title">
                                    </div>
                                </div>
                                 <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="description" id="message" cols="50" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" placeholder=" Description"></textarea>
                                    </div>
                                </div>
                    
                                <div class="col-sm-6 col-lg-12">
                                    <div class="form-group">
                                        <input required="" class="form-control valid" name="title" id="email" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Title'" placeholder="Title">
                                    </div>
                                </div>

                                  <div class="col-sm-6 col-lg-12">
                                    <label>Second Image</label>
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="secondimage" id="name" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="Upload Second image">
                                    </div>
                                </div>
                               
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-sucess" style="background-color: #0EA15F;">Upload</button>
                            </div>
                        </form>
  </main>
  
   @include('updatelayout.footer');
</body>
</html>