@include('adminLayout.header');
 <title>
  Medical Services
  </title>
  @include('adminLayout.navbar')
 <div class="container-fluid py-4">
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
            @if(empty($medical))
            <div>
              <a href="{{route('addmedical')}}" class=" font-weight-bold text-xs btn btn-primary" style="background-color: #0EA15F;">
               create new Medical Page</a>
            </div>
                     
           @else
            
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Medical table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">S/N</th>
                      <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Title</th>
                       <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Image</th>
                      <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Description</th>
                      <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                       @foreach($medical as $row)
                        <td>
                        <p class="text-sm font-weight-bold mb-0">{{$row['id']}}</p>
                      </td>
                      <td>
                        <p class="text-sm  font-weight-bold mb-0">{{$row['title']}}</p>
                      </td>
                      <td>
                        <p class="text-sm  font-weight-bold mb-0">{{$row['image']}}</p>
                      </td>
                      <td>
                        <p class="text-sm  font-weight-bold mb-0 cell expand-maximum-on-hover">{{$row['description']}}</p>
                      </td>
                       <td>
                        <p class="text-sm  font-weight-bold mb-0">{{$row['created_at']}}</p>
                      </td>
                      <td>
                        <a   class="text-secondary font-weight-bold text-xs btn btn-success" data-toggle="tooltip" data-original-title="Edit user" href="{{route('editmedical')}}" name="{{$row['id']}}">
                          Edit
                        </a>
                      </td>
                      <td>
                        <a href="medical/{{$row['id']}}" class="text-secondary font-weight-bold text-xs btn btn-danger" data-toggle="tooltip" data-original-title="Edit user">
                          Delete
                        </a>
                      </td>
                    </tr>
                       @endforeach
                        @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>
   @include('adminLayout.footer');
</body>
</html>