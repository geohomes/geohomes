@include('updatelayout.header')
 <title>
 Dashboard | Mineral Table
  </title>
  @include('updatelayout.navbar')
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
              <a href="{{route('addmineral')}}" class=" font-weight-bold text-xs btn btn-primary" style="background-color: #0EA15F;">
               create new content</a>
            </div>
            <!--- this code will show add button if content is empty -->
            @if(empty($mineral))
            <div class="alert alert-danger col-lg-4">
            <strong style="color: black;">No Data Available in the table.</strong>
            </div>
                     
           @else
            @foreach($mineral as $row)
            <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card">
              <a value="{{$row->id}}" name="{{$row->id}}"  href="viewmineral/{{$row->id}}">
              <img src="{{ asset('assets/upload/mineral_images/'.$row->first_image) }}" class="card-img-top " alt="There is an Image here" style="height: 200px; object-fit: center;" >

              <div class="card-body">
                <h5 class="card-title"><u>{{Str::limit($row->title, 18) }}</u></h5>
                <p class="card-text"><u>
                  {{ Str::limit($row->description, 40) }}</u>
                </p>
              </a>
             </div>
             <div class="card-footer bg-dark">
                  <div class="d-flex align-items-center justify-content-between">
                    <a class=" btn btn-success mr-3" href="editmineral/{{$row->id}}" name="{{$row->id}}"><i class=" fas fa-edit"></i></a>
                      <a  class=" btn btn-danger"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="mineraltable/{{$row->id}}"><i class="fa fa-trash" aria-hidden="true"></i></i></a>
                   </div>
                </div>
                </div>
              </div>
   @endforeach
 </div>
 @endif
</div>

<!-- Modal -->
@foreach($mineral as $row)
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-contact contact_form" action="mineral/{{$row->id}}" method="POST" enctype="multipart/form-data" novalidate="novalidate">
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