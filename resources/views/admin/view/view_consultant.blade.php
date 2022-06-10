@include('./updatelayout.header');
 <title>
 View Consultant
  </title>
  @include('./updatelayout.navbar')
 <div class="container-fluid py-4">
      <div class="row p-40 mb-50">
           @if(isset(Auth::user()->email))
         @else
          <script>window.location="login"</script>
         @endif

        @foreach($consultant as $row)     
   <!-- Modal -->
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel text-uppercase">Consultants Detail</h6>
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
            <h6>Office Address: </h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Kin`s Name:  </h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Kin`s Address:  </h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Relationship with Kin: </h6>
            </div>
              <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Account Name: </h6>
            </div>
             
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Account Number:  </h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Bank: </h6>
            </div>

             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Company line: </h6>
            </div>
              <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Company Email: </h6>
            </div>
             
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Prepared By:  </h6>
            </div>
            
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>Registration Date: </h6>
            </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-md-6">
               <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>{{$row[ 'firstname' ] }}</h6>
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
            <h6> {{$row[ 'residential_address' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'office_address' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'kin_name' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6>{{$row[ 'kin_address' ] }}</h6>
            </div>
              <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'kin-relation' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'account_name' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'account_number' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'bank' ] }}</h6>
            </div>
              <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'company_phone' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'company_email' ] }}</h6>
            </div>
             <div class="col-lg-12 col-sm-12 col-md-12">
            <h6> {{$row[ 'prepared_by' ] }}</h6>
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
