@include('./updateLayout.header');
 
 <title>
  Update Shop Page
  </title>
  @include('./updateLayout.navbar')
 <div class="container-fluid py-4">
      <div class="row">
              @if(isset(Auth::user()->email))
         @else
          <script>window.location="login"</script>
         @endif
         <div class="container">
         <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title mt-30 padding-40" style="color:#0EA15F">Update Shop Page</h2>
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

                          @foreach($portifolio as $row)
                                <div class="row">

                                   <div class="col-sm-6 col-lg-4">
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="firsttitle" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="{{$row->first_title}}">
                                    </div>
                                </div>
                                 <div class="col-sm-12 col-lg-4">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="firstdescription" id="message" cols="50" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" placeholder="{{$row->first_description}}"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-4">
                                    <label>First Image</label>
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="firstimage" id="name" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="{{$row->first_image}}">
                                    </div>
                                </div>
                                 <div class="col-sm-6 col-lg-4">
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="secondtitle" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="{{$row->second_title}}">
                                    </div>
                                </div>
                                 <div class="col-sm-12 col-lg-4">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="seconddescription" id="message" cols="50" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" placeholder=" {{$row->second_description}}"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-4">
                                    <label>Second Image</label>
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="secondimage" id="name" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="{{$row->second_image}}">
                                    </div>
                                </div>
                                 <div class="col-sm-6 col-lg-4">
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="thirdtitle" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="{{$row->third_title}}">
                                    </div>
                                </div>
                                 <div class="col-sm-12 col-lg-4">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="thirddescription" id="message" cols="50" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" placeholder=" {{$row->third_description}}"></textarea>
                                    </div>
                                </div>
                                 
                              

                                 <div class="col-sm-6 col-lg-4">
                                    <label>Third Image</label>
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="thirdimage" id="name" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="{{$row->third_description}}">
                                    </div>
                                    <input type="hidden" value="{{$row->id}}" name="id">

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-success" style="background-color: #0EA15F;">Update</button>
                            </div>
                       
                           @endforeach
                            </form>
                        </div>
                    </div>
  
                     </main>            
  
   @include('./updateLayout.footer');
</body>
</html>