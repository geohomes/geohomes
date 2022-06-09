@include('updateLayout.header');
 <title>
  Construction
  </title>
  @include('updateLayout.navbar')
  <div class="container">
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
            <div>
              <a href="{{route('addconstruction')}}" class=" font-weight-bold text-xs btn btn-primary" style="background-color: #0EA15F;">
               Create new Item</a>
            </div>
              
             
     <div class="row g-4">
       @foreach($construction as $row)
  <div class="col-lg-3 col-md-4 col-sm-6">
    <div class="card">
      <img src="{{ asset('assets/upload/construction_images/'.$row->first_image) }}" class="card-img-top" alt="There is an Image here">
       <div class="col-lg-6 col-sm-6 col-md-6 mt-40">
       <a value="{{$row->id}}" name="{{$row->id}}" class=" btn btn-outline-success " style="color: black;" href="viewconstruction/{{$row->id}}">view detail</a>
        </div>
      <div class="card-body">
        <h5 class="card-title">{{Str::limit($row->title, 18) }}</h5>
        <p class="card-text">
          {{ Str::limit($row->description, 40) }}
        </p>
      </div>
      <div class="row">
      <div class="col-lg-6 col-sm-6 col-md-6">
       <a class=" btn btn-success" href="editconstruction/{{$row->id}}" name="{{$row->id}}">Edit</a>
      </div>
      <div class="col-lg-6 col-sm-6 col-md-6">
      <a  class=" btn btn-danger"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="constructiontable/{{$row->id}}">Delete</a>
       </div>
       </div>
     </div>
    </div>

   @endforeach
   <div class="col-lg-12">
   <nav class="blog-pagination justify-content-center d-flex">
       <ul class="pagination">
   <li class="page-item">
    {{ $construction->links('././vendor.pagination.default') }}
    </li>
    </ul>
     </nav>
     </div>
</div>
</div>
</div>

<!-- Modal -->
@foreach($construction as $row)
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-contact contact_form" action="constructiontable/{{$row->id}}" method="POST" enctype="multipart/form-data" novalidate="novalidate">
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
   @include('updateLayout.footer')
</body>
</html>