@include('adminLayout.header');
 <title>
  Agriculture
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
            @if(empty($agriculture))
            <div>
              <a href="{{route('addagriculture')}}" class=" font-weight-bold text-xs btn btn-primary" style="background-color: #0EA15F;">
               create new Content</a>
            </div>
                     
           @else
            
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Agricultural Production table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">S/N</th>
                      <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Title</th>
                      <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7">First Image</th>
                      <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Second Image</th>
                      <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Description</th>
                      <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                       @foreach($agriculture as $row)
                        <td>
                        <p class="text-sm font-weight-bold mb-0">{{$row['id']}}</p>
                      </td>
                      <td>
                        <p class="text-sm  font-weight-bold mb-0">{{$row['title']}}</p>
                      </td>
                      <td>
                        <p class="text-sm  font-weight-bold mb-0">{{$row['first_image']}}</p>
                      </td>
                      <td>
                        <p class="text-sm  font-weight-bold mb-0">{{$row['second_image']}}</p>
                      </td>
                      
                      <td>
                        <p class="text-sm  font-weight-bold mb-0 cell expand-maximum-on-hover">{{$row['description']}}</p>
                      </td>

                       <td>
                        <p class="text-sm  font-weight-bold mb-0">{{$row['created_at']}}</p>
                      </td>
                      <td>
                        <a  class="text-secondary font-weight-bold text-xs btn btn-success" data-toggle="tooltip" data-original-title="Edit user" href="{{route('editagriculture')}}" name="{{$row['id']}}">
                          Update
                        </a>
                      </td>
                      <td>
                        <a href="agriculture/{{$row['id']}}" class="text-secondary font-weight-bold text-xs btn btn-danger" data-toggle="tooltip" data-original-title="Edit user">
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
  <!-- The Modal 
  <<div class="container-fluid">
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      Modal Header 
      <div class="modal-header">
        <h4 class="modal-title">Update  Page</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
    </div>
                  Modal body 

                  <div class="modal-body">
                        <form class="form-contact contact_form" action="#" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                                <div class="row">
                                  @foreach($agriculture as $row)
                                  <div class="col-sm-6 col-lg-12">
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="title" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="{{$row['title']}}">
                                    </div>
                                </div>
                                 <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="description" id="message" cols="50" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" placeholder="{{$row['description']}}"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6">
                                    <label>First Image</label>
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="first_image" id="name" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-12">
                                    <label>Second Image</label>
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="second_image" id="name" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="">
                                    </div>
                                </div>
                                    <input type="hidden" value="{{$row['id']}}" name="id">

                                  @endforeach
                          </form>
                        </div>

     Modal footer 
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" >Update</button>
      </div>
    </div>
  </div>
</div> -->

  