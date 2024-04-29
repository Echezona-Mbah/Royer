@include('admin.head')
<style>
        .file-input-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
            width: 120px;
            height: 40px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            text-align: center;
            line-height: 40px;
            cursor: pointer;
        }
        .file-input-wrapper input[type=file] {
            font-size: 100px;
            position: absolute;
            top: 0;
            right: 0;
            opacity: 0;
            cursor: pointer;
        }
        .file-input-wrapper:hover {
            background-color: #0056b3;
        }
        .upload-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .upload-button:hover {
            background-color: #0056b3;
        }
</style>
<body>
  <div class="container-scroller">

    @include('admin.header')
    <div class="container-fluid page-body-wrapper">

        @include('admin.sidebar')


      <div class="main-panel">

        
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h2 style="color:#c80d9f">Update Profile</h2>
                    <p class="card-description">
                      Personal Information
                    </p>
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" id="exampleInputName1" placeholder="Name">
                        </div>
                    
                        <div class="form-group">
                            <label for="exampleInputUsername1">Username</label>
                            <input type="text" class="form-control" name="username" value="{{ $user->username }}" id="exampleInputUsername1" placeholder="Username">
                        </div>
                    
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" id="exampleInputEmail1" placeholder="Email">
                        </div>
                    
                        <div class="form-group">
                            <label for="exampleInputAddress1">Address</label>
                            <input type="text" class="form-control" name="address" value="{{ $user->address }}" id="exampleInputAddress1" placeholder="Address">
                        </div>
              
                        
                    
                        <div class="form-group">
                            <label for="exampleInputPhone1">Phone Number</label>
                            <input type="text" class="form-control" name="phone" value="{{ $user->phone }}" id="exampleInputPhone1" placeholder="Phone Number">
                        </div>


                        <h6>Upload Photo</h6>
                        <div class="file-input-wrapper">
                            <input type="file" name="img">
                            Upload
                        </div>  
                    
                        <br><br>
                        
                        
                    
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                    
                    
                      
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