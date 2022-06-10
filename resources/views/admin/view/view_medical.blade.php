@include('./updatelayout.header');
 <title>
 Dashboard | Medical Detail
  </title>
  @include('./updatelayout.navbar')
 <div class="container-fluid py-4">
      <div class="row p-40 mb-50">
           @if(isset(Auth::user()->email))
         @else
          <script>window.location="login"</script>
         @endif

        @foreach($medical as $row)     
   <!-- Modal -->
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel text-uppercase">medical  Detail</h6>
      </div>

      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-6 mb-40">
            <img src="{{ asset('assets/upload/medical_images/'.$row['image']) }}" class="card-img-top" alt="There is an Image here" style="margin-bottom: 50px;">
            </div>
            <div class="col-lg-12 col-sm-12 col-md-6 ">
            <h6 style="font-weight: bold;">Title:</h6>
            </div>
            <div class="col-lg-12 col-sm-12 col-md-6">
            <h5>{{$row[ 'title' ] }}</h6>
            </div>
            <br><br>
             <div class="col-lg-12 col-sm-12 col-md-12 ">
            <h6 style="font-weight: bold;" class="text-uppercase">Description:</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'description' ] }}</h6>
            </div>
            <br><br>
              <div class="col-lg-12 col-sm-12 col-md-12 ">
            <h6 style="font-weight: bold;"> Date</h6>
            </div>
            <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'created_at' ] }}</h6>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" ><a href="javascript:history.go(-1)" style="color: black;">Back</a></button>
      </div>
      
    </div>
  </div>
</div>
 @endforeach
   @include('./updatelayout.footer')
</body>
</html>
