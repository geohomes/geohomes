@include('adminlayout.header');
 
 <title>
  Add Portifolio
  </title>
  @include('adminlayout.navbar')
 <div class="container-fluid py-4">
      <div class="row">
              @if(isset(Auth::user()->email))
         @else
          <script>window.location="login"</script>
         @endif
         <div class="container">
         <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title mt-30 padding-40" style="color:#0EA15F">Add Portifolio</h2>
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
                    <div class="col-lg-12">
                        <form class="form-contact contact_form" action="{{route('addportifolio')}}" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                          
                            <div class="row">
                               <div class="col-sm-6 col-lg-12">
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="title" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'title'" placeholder="Title">
                                    </div>
                                </div>

                                 <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control w-100" name="location"  c  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" placeholder=" Location">
                                    </div>
                                </div>

                                   <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="product" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'title'" placeholder="What are You selling?">
                                    </div>
                                </div>
                                 <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control w-100" name="price"  c  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" placeholder=" Price">
                                    </div>
                                </div>
                             

                                <div class="col-sm-6 col-lg-6">
                                    <label>First Image</label>
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="image" id="name" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="Upload First image">
                                    </div>
                                </div>
                                   <div class="col-sm-6 col-lg-12">
                                    <div class="form-group">
                                        <textarea required=""class="form-control valid" name="feature" id="name" type="text"  cols="50" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'features'" placeholder="description"></textarea>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-success" style="background-color: #0EA15F;">Upload</button>
                            </div>
                        </form>
  </main>
  
   @include('adminlayout.footer');
</body>
</html>