@include('updatelayout.header');
 
 <title>
  Add Energy
  </title>
  @include('updatelayout.navbar')
         <div class="container">
         <div class="row">
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
                        <form class="form-contact contact_form" action="#" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                          
                            <div class="row">

                                  <div class="col-sm-12 col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control w-100" name="title" id="message" cols="50" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Title'" placeholder="Title ">
                                    </div>
                                </div>
                                
                                 <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="firstdescription" id="message" cols="50" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" placeholder="First Description"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6">
                                    <label>First Image</label>
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="firstimage" id="name" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="">
                                    </div>
                                </div>

                                 <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="seconddescription" id="message" cols="50" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" placeholder="Second Description "></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6">
                                    <label>Second Image</label>
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="secondimage" id="name" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="">
                                    </div>
                                </div>

                         
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-success" style="background-color: #0EA15F;"> Add Energy</button>
                            </div>
                        </form>
  </main>
  
   @include('updatelayout.footer');
</body>
</html>