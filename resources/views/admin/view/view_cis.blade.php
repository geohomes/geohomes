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

        @foreach($cis as $row)     
   <!-- Modal -->
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel text-uppercase">CIS Detail</h6>
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
            <h6>Occupation: </h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>DOB:  </h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>PLot Number:  </h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Lifted: </h6>
            </div>
              <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Layout: </h6>
            </div>
             
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Amount:</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Agent Name: </h6>
            </div>

             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Agent Phone: </h6>
            </div>
              <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Agent Address: </h6>
            </div>
             
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Agent Occupation:  </h6>
            </div>

            <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Agent Office:  </h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Registration Date: </h6>
            </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-md-6">
               <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>{{$row[ 'fullname' ] }}</h6>
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
            <h6> {{$row[ 'occupation' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'DOB' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>{{$row[ 'plot_number' ] }}</h6>
            </div>
              <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'lifted' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'layout' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>  ₦{{$row[ 'amount' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'agent_name' ] }}</h6>
            </div>
              <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'agent_phone' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'agent_address' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'agent_occupation' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'agent-office_address' ] }}</h6>
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
