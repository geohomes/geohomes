@include('./adminlayout.header');
 <title>
  Portifolio
  </title>
  @include('./adminlayout.navbar')
 <div class="container ">
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
            @if(empty($portifolio))
            <div>
              <a href="{{route('addportifolio')}}" class=" font-weight-bold text-xs btn btn-primary" style="background-color: #0EA15F;">
               create new Portifolio</a>
            </div>
            <div class="alert alert-danger">
              <p style="color:black">Sorry the table is empty</p>
            </div>
                     
           @else
             <div>
              <a href="{{route('addportifolio')}}" class=" font-weight-bold text-xs btn btn-primary" style="background-color: #0EA15F;">
               create new Portifolio</a>
            </div>
             @foreach($portifolio as $row)
              <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
              <img src="{{ asset('assets/upload/portifolio_images/'.$row->first_image) }}" class="card-img-top" alt="There is an Image here" style="height: 300px; object-fit: center;">

                <div class="d-flex justify-content-between mt-4"> 
                 <a class=" btn btn-success" href="editeportifolio/{{$row->id}}" name="{{$row->id}}"><i class="fas fa-edit"></i></a>
                  <a  class=" btn btn-danger "  data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="eportifoliotable/{{$row->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
              </div>

              <div class="card-body">
                <a value="{{$row->id}}" name="{{$row->id}}" href="vieweportifolio/{{$row->id}}">
                <h5 class="card-title"><u>{{Str::limit($row->first_title, 20) }}</u></h5>
                <p class="card-text"><u>
                  {{ Str::limit($row->first_description, 200) }}</u>
                </p>
              </a>
              </div>
             </div>
            </div>
                @endforeach 
                @endif    
        </div>

      </div>
  </main>



<!-- Delete Modal -->
@foreach($portifolio as $row)
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-contact contact_form" action="portifolio/{{$row->id}}" method="POST" enctype="multipart/form-data" novalidate="novalidate">
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

   @include('./adminlayout.footer');
</body>
</html>