@include('adminLayout.header');
 <title>
  Portifolio
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
            @if(empty($portifolio))
            <div>
              <a href="{{route('addportifolio')}}" class=" font-weight-bold text-xs btn btn-primary" style="background-color: #0EA15F;">
               create new Portifolio</a>
            </div>
                     
           @else
            
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Portifolio table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">S/N</th>
                      <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7">First Title</th>
                      <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Second Title</th>
                      <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Third Title</th>
                      <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7">First Image</th>
                      <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Second Image</th>
                      <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Third Image</th>
                      <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7">First Description</th>
                      <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Second Description</th>
                       <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Third Description</th>
                      <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                       @foreach($portifolio as $row)
                        <td>
                        <p class="text-sm font-weight-bold mb-0">{{$row['id']}}</p>
                      </td>
                      <td>
                        <p class="text-sm  font-weight-bold mb-0">{{$row['first_title']}}</p>
                      </td>
                      <td>
                        <p class="text-sm  font-weight-bold mb-0">{{$row['second_title']}}</p>
                      </td>
                      <td>
                        <p class="text-sm  font-weight-bold mb-0">{{$row['third_title']}}</p>
                      </td>
                      <td>
                        <p class="text-sm  font-weight-bold mb-0">{{$row['first_image']}}</p>
                      </td>
                      <td>
                        <p class="text-sm  font-weight-bold mb-0">{{$row['second_image']}}</p>
                      </td>
                      <td>
                        <p class="text-sm  font-weight-bold mb-0">{{$row['third_image']}}</p>
                      </td>
                      <td>
                        <p class="text-sm  font-weight-bold mb-0 cell expand-maximum-on-hover">{{$row['first_description']}}</p>
                      </td>
                      <td>
                        <p class="text-sm  font-weight-bold mb-0 cell expand-maximum-on-hover" >{{$row['second_description']}}</p>
                      </td>
                      <td>
                        <p class="text-sm  font-weight-bold mb-0 cell expand-maximum-on-hover">{{$row['third_description']}}</p>
                      </td>
                       <td>
                        <p class="text-sm  font-weight-bold mb-0">{{$row['created_at']}}</p>
                      </td>
                      <td>
                        <a  data-bs-toggle="modal" data-bs-target="#myModal" class="text-secondary font-weight-bold text-xs btn btn-success" data-toggle="tooltip" data-original-title="Edit user" href="portifolio/{{$row['id']}}">
                          Update
                        </a>
                      </td>
                      <td>
                        <a href="portifolio/{{$row['id']}}" class="text-secondary font-weight-bold text-xs btn btn-danger" data-toggle="tooltip" data-original-title="Edit user">
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

   
  <!-- The Modal -->
  <<div class="container-fluid">
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Portifolio</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
    </div>
                  <!-- Modal body -->

                  <div class="modal-body">
                        <form class="form-contact contact_form" action="{{route('editportifolio')}}" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                          @foreach($portifolio as $row)
                                <div class="row">
                                   <div class="col-sm-6 col-lg-4">
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="firsttitle" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="{{$row['first_title']}}">
                                    </div>
                                </div>
                                 <div class="col-sm-12 col-lg-4">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="firstdescription" id="message" cols="50" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" placeholder="{{$row['first_description']}}"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-4">
                                    <label>First Image</label>
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="firstimage" id="name" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="{{$row['first_image']}}">
                                    </div>
                                </div>
                                 <div class="col-sm-6 col-lg-4">
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="secondtitle" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="{{$row['second_title']}}">
                                    </div>
                                </div>
                                 <div class="col-sm-12 col-lg-4">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="seconddescription" id="message" cols="50" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" placeholder=" {{$row['second_description']}}"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-4">
                                    <label>Second Image</label>
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="secondimage" id="name" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="{{$row['second_image']}}">
                                    </div>
                                </div>
                                 <div class="col-sm-6 col-lg-4">
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="thirdtitle" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="{{$row['third_title']}}">
                                    </div>
                                </div>
                                 <div class="col-sm-12 col-lg-4">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="thirddescription" id="message" cols="50" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" placeholder=" {{$row['third_description']}}"></textarea>
                                    </div>
                                </div>
                                 
                              

                                 <div class="col-sm-6 col-lg-4">
                                    <label>Third Image</label>
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="thirdimage" id="name" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="{{$row['third_description']}}">
                                    </div>
                                    <input type="hidden" value="{{$row['id']}}" name="id">

                                    @endforeach
                          </form>
                        </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" >Update</button>
      </div>
    </div>
  </div>
</div>

   @include('adminLayout.footer');
</body>
</html>