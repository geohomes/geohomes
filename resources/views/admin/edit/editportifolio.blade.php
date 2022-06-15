@include('./updatelayout.header');
 
 <title>
  Update Shop Page
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

                                   <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="title" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="{{$row->title}}">
                                    </div>
                                </div>
                                 

                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="location" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="{{$row->location}}">
                                    </div>
                                </div>
                                 <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="price" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="{{$row->price}}">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="product" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="{{$row->product}}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <label>Image</label>
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="image" id="name" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="{{$row->image}}">
                                    </div>
                                 <div class="col-sm-12 col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="description" id="message" cols="50" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" placeholder=" {{$row->features}}"></textarea>
                                    </div>
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
  
   @include('./updatelayout.footer');
</body>
</html>