@include('updatelayout.header');
 <title>
 Site Inspection
  </title>
  @include('updatelayout.navbar')
 <div class="container-fluid py-4">
      <div class="row p-40 mb-50">
           @if(isset(Auth::user()->email))
         @else
          <script>window.location="login"</script>
         @endif

         <!-- it gives feedback messages -->
           @if($message = Session::get('success'))
           <div class="alert ">
           <p style="color:#0EA10F; font-weight: bold">{{$message}}</p>
            </div>
            @endif

            @if($message = Session::get('error'))
            <div class="alert alert-danger">
            <p style="color:red; font-weight: bold">{{$message}}</p>
            </div>
            @endif
            @if(empty($array))
                      <div class="alert alert-danger col-lg-4">
                        <strong style="color: black;">No Data Available in the table.</strong>
                      </div>
                     @else
             <div class="row">
               <div class="col-12">
                 <h6 class="contact-title " style="color:black;">Site Inspection Table</h6>
                </div>
               </div>
            @foreach($array as $row)
            <div class="col-lg-3 col-sm-6 col-md-4  mb-50" style="margin-bottom: 50px!important;">
            <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">{{$row[ 'name' ] }}</h5>
            <h6 class="card-title">{{$row[ 'email' ] }}</h6>
            <p class="card-text">{{$row[ 'created_at' ] }}</p>
            <div>
           <a value="{{$row['id']}}" name="{{$row['id']}}" class=" btn " style="background-color:#0EA15F;color: black;" href="viewinspection/{{$row['id']}}" >view detail</a></div>
            </div>

            <div class="row">
          <div class="col-lg-6 col-sm-6 col-md-6">
          <a class=" btn btn-success" href="editsiteinspection/{{$row['id']}}" name="{{$row['id']}}" >Edit</a>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <a  class=" btn btn-danger"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="inspection/{{$row['id']}}">Delete</a>
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

@foreach($array as $row)
<!-- Modal -->

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-contact contact_form" action="inspection/{{$row['id']}}" method="POST" enctype="multipart/form-data" novalidate="novalidate">
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
