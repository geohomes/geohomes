@include('updatelayout.header');
 <title>
 Cis Table
  </title>
  @include('updatelayout.navbar')
 <div class="container-fluid py-4">
      <div class="row p-40 mb-50">
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
                 <h6 class="contact-title " style="color:black;">CIS Table</h6>
                </div>
               </div>
            @foreach($array as $row)
            <div class="col-lg-3 col-sm-6 col-md-4  mb-50" style="margin-bottom: 50px!important;">
            <div class="card text-center">
          <div class="card-body">
             <a value="{{$row['id']}}" name="{{$row['id']}}"  href="viewcis/{{$row['id']}}" >
            <h5 class="card-title"><u>{{$row[ 'fullname' ] }}</u></h5>
            <h6 class="card-title"><u>{{$row[ 'email' ] }}</u></h6>
            <p class="card-text">{{$row[ 'created_at' ] }}</p>
            <div>
          </a>
            </div>

            <div class="row">
          <div class="col-lg-6 col-sm-6 col-md-6">
          <a class=" btn btn-success" href="editcis/{{$row['id']}}" name="{{$row['id']}}" ><i class="fas fa-edit" ></i></a>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <a  class=" btn btn-danger"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="application/{{$row['id']}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
      <form class="form-contact contact_form" action="cis/{{$row['id']}}" method="POST" enctype="multipart/form-data" novalidate="novalidate">
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
