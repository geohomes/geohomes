@include('adminLayout.header');
 <title>
  Blog
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
            @if(empty($array))
                      <div class="alert alert-danger col-lg-4">
                        <strong style="color: black;">No Data Available in the table.</strong>
                      </div>
                     @else
            <!-- feedback message ends here -->
        <div class="col-12">
          <div class="card mb-4">
            <div>
              <a href="{{route('blogpost')}}" class=" font-weight-bold text-xs btn btn-primary" style="background-color: #0EA15F;">
               Add Blog</a>
            </div>
            <div class="card-header pb-0">
              <h6>Blog table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">S/N</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Title</th>
                      <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Description</th>
                      <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Writer`s name</th>
                      <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Image</th>
                      <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Writer`s Email</th>
                      <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Posted Date</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                       @foreach($array as $row)
                        <td>
                        <p class="text-sm font-weight-bold mb-0">{{$row['id']}}</p>
                      </td>
                      <td>
                            <h4 class="font-weight-bold mb-0">{{$row['title']}}</h4>
                      </td>
                        <td>
                        <p class="text-sm  font-weight-bold mb-0 cell expand-maximum-on-hover">{{$row['description']}}</p>
                      </td>
                      <td>
                        <p class="text-sm  font-weight-bold mb-0">{{$row['writer']}}</p>
                      </td>
                      <td>
                        <p class="text-sm  font-weight-bold mb-0">{{$row['email']}}</p>
                      </td>
                       <td>
                        <p class="text-sm  font-weight-bold mb-0">{{$row['image']}}</p>
                        <td>
                        <p class="text-sm  font-weight-bold mb-0">{{$row['created_at']}}</p>
                      </td>
                      <td>
                        <a href="blogpost/{{$row['id']}}" class="text-secondary font-weight-bold text-xs btn btn-danger" data-toggle="tooltip" data-original-title="Delete user">
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