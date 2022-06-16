<!-- CSS only -->

@include('updatelayout.header');
 <title>
  Portifolio
  </title>
  @include('updatelayout.navbar')
 <div class="container-fluid ">
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

             <div class="col-lg-4 col-sm-12 col-md-6">
                  <div class="card mb-40 " style="margin-bottom: 40px; border-radius: 40px; box-shadow: 20px black;">
                  <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                      <img src="{{ asset('assets/upload/portifolio_images/'.$row->image) }}" class="img-fluid rounded-start h-100" alt="..." style="object-fit: center; border-radius: 40px 0px 0px 40px !important; border-color: gainsboro;" >
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                      <div class="card-body">
                        <h5 class="card-title" style="font-size: 1.8em">{{Str::limit($row->title,10)}}</h5>
                        <div class="card-text">
                          <a href="viewportifolio/{{$row->id}}" name="{{$row->id}}">
                            <h3><u>Description</u></h3>
                            <p><u>{{Str::limit($row->features,30) }}</u></p>
                          </a>
                        </div>
                      <div class="row mt-4">
                      <div class="col-lg-6 col-sm-6 col-md-6">
                     <small class="text-muted" style="font-size: 1.2em">&#8358 {{Str::limit($row->price,4)}}</small>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 ">
                     <small class="text-muted"><i class="fa fa-map-marker  " aria-hidden="true" style="font-size: 1.2em">   {{$row->location }}</i></small>
                      </div>
                        </div>
                         <div class="d-flex justify-content-between mt-4"> 
                       <a class=" btn btn-success" href="editportifolio/{{$row->id}}" name="{{$row->id}}"><i class="fas fa-edit"></i></a>
                        <a  class=" btn btn-danger "  data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="eportifoliotable/{{$row->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                      </div>
                    </div> 
                    </div>
                    </div>
                    </div>   
                @endforeach 
                @endif    
                      </div>
                             <div class="col-lg-12 mt-40">
                              <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        
                                    {{ $portifolio->links('vendor.pagination.default') }}
                                    
                                   </li>
                                </ul>
                            </nav>
                           
                        </div>
                         </div>
                     </div>



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

   @include('updatelayout.footer');
</body>
</html>