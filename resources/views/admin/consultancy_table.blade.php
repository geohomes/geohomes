@include('../adminlayout.header')
 <title>
 Consultancy
  </title>
  @include('../adminlayout.navbar')
 <div class="container-fluid py-4">
      <div class="row p-40 g-4">
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
              <a href="{{route('addconsultancy')}}" class=" font-weight-bold text-xs btn btn-primary" style="background-color: #0EA15F;">
               create new content</a>
            </div>
            <!--- this code will show add button if content is empty -->
            @if(empty($consultancy))
            <div class="alert alert-danger col-lg-4">
            <strong style="color: black;">No Data Available in the table.</strong>
            </div>
                     
           @else
           <div class="row g-4">
            @foreach($consultancy as $row)
            <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card mb-3" style="max-width: 500px;">
  <div class="row g-4">
    <div class="col-md-6 col-lg-4">
      <a value="{{$row->id}}" name="{{$row->id}}" href="viewconsultancy/{{$row->id}}">
      <img src="{{ asset('assets/upload/consultancy_images/'.$row->firstimage) }}" alt="image" class="img-fluid img-thumbnail mb-40" 
      style="height:70px;" />
    </div>
     
      
    <div class="col-md-6 col-lg-12">
      <div class="card-body">
        <h5 class="card-title">{{Str::limit($row->title, 18) }}</h5>
        <p class="card-text">
           {{ Str::limit($row->firstdescription, 20) }}
        </p>
        <p class="card-text">
          <small class="text-muted"> {{$row->created_at }}</small>
        </p>
      </a>
      <div class="row">
       <div class="col-lg-6 col-sm-6 col-md-6">
      <a  class=" btn btn-danger"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="consultancytable/{{$row->id}}">Delete</a>
       </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
       <a class=" btn btn-success" href="editconsultancy/{{$row->id}}" name="{{$row->id}}">Edit</a>
      </div>
    </div>
      </div>
    </div>
  </div>
</div>
</div>
   @endforeach
 </div>
 @endif
</div>

<!-- Modal -->
@foreach($consultancy as $row)
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-contact contact_form" action="consultancytable/{{$row->id}}" method="POST" enctype="multipart/form-data" novalidate="novalidate">
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
   @include('../adminlayout.footer')
</body>
</html>