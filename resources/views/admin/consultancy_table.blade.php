@include('updatelayout.header')
 <title>
 Consultancy
  </title>
  @include('updatelayout.navbar')
 <div class="container-fluid py-4 ">
      <div class="row ">
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
              <a href="{{route('addconsultancy')}}" class=" font-weight-bold text-xs btn btn-outline-success" >
               create new content</a>
            </div>
            <!--- this code will show add button if content is empty -->
            @if(empty($consultancy))
            <div class="alert alert-danger col-lg-4">
            <strong style="color: black;">No Data Available in the table.</strong>
            </div>
                     
           @else
            @foreach($consultancy as $row)
              <div class="col-lg-4 col-sm-12 col-md-6">
                  <div class="card mb-3" style="max-width: 540px;">
                  <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                      <img src="{{ asset('assets/upload/consultancy_images/'.$row->firstimage) }}" class="img-fluid rounded-start h-100" alt="..." style="object-fit: center;">
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                      <div class="card-body">
                        <a value="{{$row->id}}" name="{{$row->id}}"   href="viewconsultancy/{{$row->id}}" >
                        <h5 class="card-title"><u>{{Str::limit($row->title, 10) }}</u></h5>
                        <p class="card-text"><u>{{Str::limit($row->firstdescription,20) }}</u></p>
                        <p class="card-text"><small class="text-muted">{{Str::limit($row->created_at, 20) }}</small></p>
                      </a>
                      <div class="row mt-4">
                      <div class="col-lg-6 col-sm-6 col-md-6">
                     <a class="  text-secondary  btn btn-success"  href="editconsultancy/{{$row->id}}" name="{{$row->id}}"><i class="fas fa-edit"></i></a>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 ">
                      <a  class=" btn btn-danger  "  data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="consultancytable/{{$row->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
   @include('updatelayout.footer')
</body>
</html>