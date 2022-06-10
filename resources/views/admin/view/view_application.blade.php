@include('./updatelayout.header');
 <title>
 View Application
  </title>
  @include('./updatelayout.navbar')
 <div class="container-fluid py-4">
      <div class="row p-40 mb-50">
           @if(isset(Auth::user()->email))
         @else
          <script>window.location="login"</script>
         @endif

        @foreach($application as $row)     
   <!-- Modal -->
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel text-uppercase">Application Detail</h6>
      </div>

      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-sm-12 col-md-6">
            <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Name:  </h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Surname:  </h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Mobile:  </h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Email:  </h6>
            </div>
              <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Gender:  </h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Residential Address:  </h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>State:  </h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Country:  </h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>LGA: </h6>
            </div>
              <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Organization: </h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Office Address: </h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Property Type:  </h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Date of birth: </h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Registration Date: </h6>
            </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-md-6">
               <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>{{$row[ 'name' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'surname' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'phone' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'email' ] }}</h6>
            </div>
              <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'marital_status' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'residential_address' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'state' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'country' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>{{$row[ 'LGA' ] }}</h6>
            </div>
              <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'organisation' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'office_address' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'property_type' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'DOB' ] }}</h6>
            </div>
            <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'created_at' ] }}</h6>
            </div>
            </div>
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
