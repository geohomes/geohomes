@include('updatelayout.header');
 
 <title>
  Add Logisitic
  </title>
  @include('updatelayout.navbar')
         <div class="container">
         <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title mt-30 padding-40" style="color:#0EA15F">Add Logistic</h2>
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
                        <form class="form-contact contact_form" action="{{route('addlogistic')}}" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                          
                            <div class="row">
                                 
                                 <div class="col-sm-6 col-lg-12">
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="title" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="Title">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-12">
                                    <label>First Image</label>
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="first_image" id="name" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="Upload image">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <label>Second Image</label>
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="second_image" id="name" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="Upload image">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <label>Third Image</label>
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="third_image" id="name" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="Upload image">
                                    </div>
                                </div>

                                 <div class="col-sm-12 col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="description" id="message" cols="50" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" placeholder="Description"></textarea>
                                    </div>
                                </diV>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-success" style="background-color: #0EA15F;"> Add Content</button>
                            </div>
                        </form>
  </main>
  
   @include('updatelayout.footer');
</body>
</html>