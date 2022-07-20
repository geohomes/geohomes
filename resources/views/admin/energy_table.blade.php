@include('updatelayout.header');
 <title>
  Energy Table
  </title>
  @include('updatelayout.navbar')
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
              <a href="{{route('addenergy')}}" class=" font-weight-bold text-xs btn btn-primary" style="background-col-lg-3 col-md-4 col-sm-6or: #0EA15F;">
               Create new Item</a>
            </div>
              
             
     <div class="row g-4">
       @foreach($energy as $row)
  <div class="col-lg-3 col-md-4 col-sm-6">
    <div class="card">
      <img src="{{ asset('assets/upload/energy_images/'.$row->first_image) }}" class="card-img-top" alt="There is an Image here" style="height: 200px;">
      <div class="card-body">
        <a value="{{$row->id}}" name="{{$row->id}}" href="viewenergy/{{$row->id}}">
        <h5 class="card-title"><u>{{Str::limit($row->title, 18) }}</u></h5>
        <p class="card-text"><u>
          {{ Str::limit($row->first_description, 20) }}</u>
        </p>
        </a>
      </div>
      <div class="card-footer bg-dark">
          <div class="d-flex align-items-center justify-content-between">
            <a class=" btn btn-success mr-3" href="editenergy/{{$row->id}}" name="{{$row->id}}"><i class="fas fa-edit" ></i></a>
              <a  class=" btn btn-danger"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="energytable/{{$row->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
           </div>
       </div>
     </div>
    </div>

   @endforeach
</div>
</div>
</div>

<!-- Modal -->
@foreach($energy as $row)
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-contact contact_form" action="energy/{{$row->id}}" method="POST" enctype="multipart/form-data" novalidate="novalidate">
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
   @include('updatelayout.footer')
</body>
</html>