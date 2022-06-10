@include('./updatelayout.header');
 <title>
 Dashboard | Consultancy Detail
  </title>
  @include('./updatelayout.navbar')
 <div class="container-fluid py-4">
      <div class="row p-40 mb-50">
           @if(isset(Auth::user()->email))
         @else
          <script>window.location="login"</script>
         @endif

        @foreach($consultancy as $row)     
   <!-- Modal -->
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel text-uppercase">Consultancy  Detail</h6>
      </div>

      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-sm-12 col-md-6 mb-40">
            <img src="{{ asset('assets/upload/consultancy_images/'.$row['firstimage']) }}" class="card-img-top" alt="There is an Image here" style="margin-bottom: 50px; height: 120px;">
            </div>
            <div class="col-lg-6 col-sm-12 col-md-6 mb-40">
            <img src="{{ asset('assets/upload/consultancy_images/'.$row['secondimage']) }}" class="card-img-top" alt="There is an Image here" style="margin-bottom: 50px; height: 120px;">
            </div>
            <div class="col-lg-12 col-sm-12 col-md-6 ">
            <h6 style="font-weight: bold;">Title:</h6>
            </div>
            <div class="col-lg-12 col-sm-12 col-md-6">
            <h5>{{$row[ 'title' ] }}</h6>
            </div>
            <br><br>
             <div class="col-lg-12 col-sm-12 col-md-12 ">
            <h6 style="font-weight: bold;" class="text-uppercase"> First Description:</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'firstdescription' ] }}</h6>
            </div>
            <br><br>
              <div class="col-lg-12 col-sm-12 col-md-12 ">
            <h6 style="font-weight: bold;" class="text-uppercase"> Second Description:</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'seconddescription' ] }}</h6>
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
