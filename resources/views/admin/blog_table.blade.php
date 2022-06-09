@include('adminLayout.header');
 <title>
  blog
  </title>
  @include('adminLayout.navbar')
 <div class="container-fluid py-4">
      <div class="row">
              @if(isset(Auth::user()->email))
         @else
          <script>window.location="login"</script>
         @endif
         
          <!-- it gives feedback messages -->
           @if($message = Session::get('success'))
           <div class="alert ">
           <p style="color:#0EA10F;">{{$message}}</p>
            </div>
            @endif

            @if($message = Session::get('error'))
            <div class="alert ">
            <p style="color:red;">{{$message}}</p>
            </div>
            @endif
            <!-- feedback message ends here -->

            <!--- this code will show add button if content is empty -->
            @if(empty($blog))
            <div class="alert">
              <p style="color:red; font-weight: bold;">Sorry, the table is empty</p>
            </div>
            <div>
              <a href="{{route('blogpost')}}" class=" font-weight-bold text-xs btn btn-primary" style="background-color: #0EA15F;">
               create new blog</a>
            </div>
            
                     
           @else
             <div>
              <a href="{{route('blogpost')}}" class=" font-weight-bold text-xs btn btn-primary" style="background-color: #0EA15F;">
               create new blog</a>
            </div>
             @foreach($blog as $row)
              <div class="col-lg-4 col-sm-12 col-md-6">
                  <div class="card mb-3" style="max-width: 540px;">
                  <div class="row">
                    <div class="col-md-4">
                      <img src="{{ asset('assets/upload/blog_images/'.$row->image) }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">{{Str::limit($row->title, 18) }}</h5>
                        <p class="card-text">{{Str::limit($row->description, 60) }}</p>
                        <p class="card-text">Written by {{Str::limit($row->writer, 40) }}</p>
                        <p class="card-text"><small class="text-muted">{{Str::limit($row->created_at, 20) }}</small></p>
                        <div class="row g-0">
                      <div class="col-lg-4 col-sm-6 col-md-6">
                     <a class=" btn btn-success text-secondary font-weight-bold text-sm btn btn-success" data-original-title="Edit user" href="editblog/{{$row->id}}" name="{{$row->id}}">Edit</a>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6 mt-40">
                     <a value="{{$row->id}}" name="{{$row->id}}" class=" btn btn-outline-success " style="color: black;" href="viewblog/{{$row->id}}" class="mt-50">view</a>
                      </div>
                    
                    <div class="col-lg-4 col-sm-6 col-md-6">
                      <a  class=" btn btn-danger"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="blogpost/{{$row->id}}">Delete</a>
                      </div>
                        </div>
                      </div>
                    </div> 
                    </div>
                    </div>
                    </div>   
            @endforeach 
            @endif  
          </div>
          </div>  
        </div>

      </div>
  </main>



<!-- Delete Modal -->
@foreach($blog as $row)
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-contact contact_form" action="blogpost/{{$row->id}}" method="POST" enctype="multipart/form-data" novalidate="novalidate">
      <div class="modal-body">
        <p>The Data will be deleted completely. Do you wish to proceed?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="submit" class="btn btn-warning" >Yes</button>
      </div>
    </form>
    </div>
  </div>
</div>
 @endforeach

   @include('adminLayout.footer');
</body>
</html>