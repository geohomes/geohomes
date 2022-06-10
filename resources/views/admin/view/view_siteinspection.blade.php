@include('./updatelayout.header');
 <title>
 View CIS
  </title>
  @include('./updatelayout.navbar')
 <div class="container-fluid py-4">
      <div class="row p-40 mb-50">
           @if(isset(Auth::user()->email))
         @else
          <script>window.location="login"</script>
         @endif

        @foreach($siteinspection as $row)     
   <!-- Modal -->
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel text-uppercase">Site Inspection Detail</h6>
      </div>

      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-sm-12 col-md-6">
            <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Name:  </h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Mobile:  </h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Email:  </h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Residential Address:  </h6>
            </div>
            
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Plot Number:  </h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Layout:  </h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Role: </h6>
            </div>
              <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Inspection Date: </h6>
            </div>
             
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Survey Payment:</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Status: </h6>
            </div>

             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Approved By: </h6>
            </div>
              <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Agent Address: </h6>
            </div>
            <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Submission Date: </h6>
            </div>
            </div>

            <div class="col-lg-6 col-sm-12 col-md-6">
               <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>{{$row[ 'name' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'phone' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'email' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'residential_address' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'plot_number' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'layout' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>{{$row[ 'person' ] }}</h6>
            </div>
              <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'inspection_date' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'survey_payment' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'status' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'approved_by' ] }}</h6>
            </div>
              <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'submission_date' ] }}</h6>
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
