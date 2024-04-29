@include('admin.head')
<body>
  <div class="container-scroller">

    @include('admin.header')
    <div class="container-fluid page-body-wrapper">

        @include('admin.sidebar')

        @include('sweetalert::alert')
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              <h4 class="font-weight-bold text-dark">Hi, welcome back!</h4>
              <p class="font-weight-normal mb-2 text-muted">APRIL 1, 2019</p>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-xl-3 flex-column d-flex grid-margin stretch-card">
              <div class="row flex-grow">
                <div class="col-sm-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                          <h4 style="color: black">Total Men Register</h4>
                          <h4 class="text-dark font-weight-bold mb-2">{{$totalUsers}}</h4>
                          <canvas id="customers"></canvas>
                      </div>
                    </div>
                </div>
                <div class="col-sm-12 stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 style="color: black">Total News Upload</h4>
                          <h4 class="text-dark font-weight-bold mb-2">{{$new}}</h4>
                          <canvas id="orders"></canvas>
                      </div>
                    </div>
               </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
              <div class="card mb-4">
                  <div class="card-body">
                      <div class="card">
                          <div class="card-body">
                              <h5 style="color: black"><i class="icon-location"></i> Total Evens Upload</h5>
                              <h4 class="text-dark font-weight-bold mb-2">{{$even}}</h4>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card mb-4">
                  <div class="card-body">
                      <div class="card">
                          <div class="card-body">
                              <h5 style="color: black"><i class="icon-share"></i> Total Testimonial Upload</h5>
                              <h4 class="text-dark font-weight-bold mb-2">{{$testimoial}}</h4>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            <h5 style="color: black"><i class="icon-upload"></i> Total Gallery Upload</h5>
                            <h4 class="text-dark font-weight-bold mb-2">{{$gallery}}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            <h5 style="color: black"><i class="icon-pie-graph"></i> Total Project Upload</h5>
                            <h4 class="text-dark font-weight-bold mb-2">{{$project}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
          
          
          
          
          </div>


          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h2 >ROYER 10 INVESTMENT</h2>
                <h4 class="card-description">
                 All Member
                </h4>

                @if ($users->isEmpty())
                <p>No teams available.</p>
            @else
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>User</th>
                        <th> Name</th>
                        <th> Username</th>
                        <th> Email</th>
                        <th> Address</th>
                        <th> Phone Number</th>
                        {{-- <th> Edit</th> --}}
                        <th> Delete</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                      <tr>
                        @if (Auth::user()->image)
                        <td class="py-1">
                          <img src="{{ asset('uploads/' . $user->image) }}" alt="Team Image">
                      </td>
                        @else
                        <td class="py-1">
                        <img src="{{ asset('images/download.png') }}" alt="default-avatar" />
                      </td>
                        @endif

                        <td>{{ $user->name}}</td>
                        <td>{{ $user->username}}</td>
                        <td>{{ $user->email}}</td>
                        <td>{{ $user->address}}</td>
                        <td>{{ $user->phone}}</td>
                        {{-- <td>
                            <a href="{{ route('team.edit', $team->id) }}" class="btn btn-primary">Edit</a>
                        </td> --}}
                        
                        <td>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
                @endif
              </div>
            </div>
        </div>



        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('admin.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  @include('admin.script')