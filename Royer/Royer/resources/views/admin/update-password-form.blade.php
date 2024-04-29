@include('admin.head')
<body>
  <div class="container-scroller">

    @include('admin.header')
    <div class="container-fluid page-body-wrapper">

        @include('admin.sidebar')


      <div class="main-panel">

        
        <div class="content-wrapper">
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update Password</h4>
                    <p class="card-description">
                        Ensure your account is using a long, random password to stay secure.
                    </p>
                    <form method="post" action="{{ route('update-password') }}" class="mt-6 space-y-6">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label for="exampleInputPassword1">Current Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="current_password" placeholder="current password">
                        </div>


                      <div class="form-group">
                        <label for="exampleInputPassword1">New Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="exampleInputConfirmPassword1" placeholder="Password">
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                  </div>
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
  @if ($errors->any())
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script>
      Swal.fire({
          icon: 'error',
          title: 'Validation Error',
          html: `{!! implode('<br>', $errors->all()) !!}`,
          confirmButtonText: 'OK',
      });
  </script>
  @endif

  @include('admin.script')