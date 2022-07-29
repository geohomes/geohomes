@include('updatelayout.header')
 <title>
   Geohomes | Dashboard
  </title>
  @include('updatelayout.navbar')
   <div class="container-fluid py-4">
      <div class="row">
          <div class="alert">
            <strong style="color:#0ea15f">Welcome {{Auth::user()->role }}. You logged in  {{Carbon\Carbon::parse (date(' Y-m-d H:i:s'))->diffForHumans()  }}</strong>
          </div>

           <!-- it gives feedback messages -->
           @if($message = Session::get('success'))
           <div class="alert">
           <p style="color:#0EA10F;">{{$message}}</p>
           </div>
            @endif
            @if($message = Session::get('error'))
            <div class="alert">
            <p style="color:red;">{{$message}}</p>
             </div>
             @endif
             <!-- feedback message ends here -->

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <a href="{{ route('application')}}">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">

                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Applications</p>
                    <h5 class="font-weight-bolder mb-0 text-success">{{$applicationCount}}</h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape shadow text-center border-radius-md" style="background-color:#0EA15F !important;">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <a href="{{ route('booking')}}">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Booking</p>
                    <h5 class="font-weight-bolder mb-0 text-success">
                     {{$bookingCount}}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape shadow text-center border-radius-md" style="background-color:#0EA15F !important;">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <a href="{{ route('cis')}}">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">CIS Form</p>
                    <h5 class="font-weight-bolder mb-0 text-success">
                    {{$cisCount}}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape shadow text-center border-radius-md" style="background-color:#0EA15F !important;">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <div class="col-xl-3 col-sm-6">
          <a href="{{ route('consultant')}}">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Consultants</p>
                    <h5 class="font-weight-bolder mb-0 text-success">
                    {{$consultantCount}}
                    </h5>
                  </div>

                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape  shadow text-center border-radius-md" style="background-color:#0EA15F !important;">
                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      </a>
    </div>
      <div class="row mt-4">
         <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <a href="{{ route('affiliates')}}">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Affiliate</p>
                    <h5 class="font-weight-bolder mb-0 text-success">{{$affiliateCount}}</h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape shadow text-center border-radius-md" style="background-color:#0EA15F !important;">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <a href="{{ route('inspection')}}">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Site Inspection</p>
                    <h5 class="font-weight-bolder mb-0 text-success">
                     {{$inpectionCount}}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape shadow text-center border-radius-md" style="background-color:#0EA15F !important;">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <a href="{{ route('property')}}">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Property Search</p>
                    <h5 class="font-weight-bolder mb-0 text-success">
                    {{$propertysearchCount}}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape shadow text-center border-radius-md" style="background-color:#0EA15F !important;">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <div class="col-xl-3 col-sm-6">
          <a href="{{ route('contacts')}}">
            <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Contacts</p>
                    <h5 class="font-weight-bolder mb-0 text-success">
                    {{$contactCount}}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape shadow text-center border-radius-md" style="background-color:#0EA15F !important;">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
                  </div>
                </div>
                </div>
                </a>
              </div>


    

                  

          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="{{route('adduser')}}">
                    <div class="mb-3">
                      <label for="recipient-email" class="col-form-label">Email:</label>
                      <input type="email" name="email" class="form-control" required="" placeholder="user@email.com">
                    </div>
                     <div class="mb-3">
                     <label for="role" class="col-form-label">User Role:</label>
                    <select name="role" id="role"  class="form-control" required="">
                      <option class="mt-4 mb-3" value="manager">manager</option>
                      <option class="mb-3" value="admin">admin</option>
                    </select>
                  </div>
                     <div class="mb-3">
                      <label for="recipient-password" class="col-form-label">Password:</label>
                      <input type="password" name="password" class="form-control" required="" placeholder="***********">
                    </div>
                     <div class="modal-footer d-flex justify-content-between">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  
                  <button type="submit" class="btn" style="background-color:#0EA15F; color: white;">Save</button>
                </div>
                  </form>
                </div>
              

              </div>
            </div>
          </div>

  <!--   Core JS Files   -->
  <script src="../admin/assets/js/core/popper.min.js"></script>
  <script src="../admin/assets/js/core/bootstrap.min.js"></script>
  <script src="../admin/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../admin/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../admin/assets/js/plugins/chartjs.min.js"></script>

   <script type="text/javascript">
    $('div.alert').delay(2000).slideUp(300);
  </script>

  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "#fff",
          data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 15,
              font: {
                size: 14,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false
            },
            ticks: {
              display: false
            },
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            label: "Mobile apps",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#cb0c9f",
            borderWidth: 3,
            backgroundColor: gradientStroke1,
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

          },
          {
            label: "Websites",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#3A416F",
            borderWidth: 3,
            backgroundColor: gradientStroke2,
            fill: true,
            data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
            maxBarThickness: 6
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#b2b9bf',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#b2b9bf',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../admin/assets/js/soft-ui-dashboard.min.js?v=1.0.5"></script>
</body>

</html>