@include('updatelayout.header');
 <title>
  Medical Table
  </title>
  @include('updatelayout.navbar')
  <div class="container">
   <div class="row">
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
              <a href="{{route('addmedical')}}" class=" font-weight-bold text-xs btn btn-outline-success" >
               Create new Item</a>
            </div>
              
             
     <div class="row g-4">
       @foreach($medical as $row)
   <div class="col-lg-3 col-md-4 col-sm-6">
    <div class="card">
      <img src="{{ asset('assets/upload/medical_images/'.$row->image) }}" class="card-img-top" alt="There is an Image here" style="height: 200px;">

        <div class="d-flex justify-content-between mt-4"> 
         <a class=" btn btn-success mb-50" href="editmedical/{{$row->id}}" name="{{$row->id}}"><i class="fas fa-edit"></i></a>
          <a  class=" btn btn-danger mb-50"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="medicaltable/{{$row->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
      </div>

      <div class="card-body bg-dark" style="border-radius: 0px 0px  30px 30px">
        <a value="{{$row->id}}" name="{{$row->id}}" href="viewmedical/{{$row->id}}">
        <h5 class="card-title" style="color:white"><u>{{Str::limit($row->title, 18) }}</u></h5>
        <p class="card-text" style="color:white"><u>
          {{ Str::limit($row->description, 40) }}</u>
        </p>
      </a>
      </div>
     </div>
    </div>


   @endforeach
   <div class="col-lg-12">
   <nav class="blog-pagination justify-content-center d-flex">
       <ul class="pagination">
   <li class="page-item">
    {{ $medical->links('././vendor.pagination.default') }}
    </li>
    </ul>
     </nav>
     </div>
</div>
</div>
</div>

<!-- Modal -->
@foreach($medical as $row)
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-contact contact_form" action="medical/{{$row->id}}" method="POST" enctype="multipart/form-data" novalidate="novalidate">
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