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
                    <h2 class="card-title">Edit Post Team</h2>
                    <p class="card-description">
                      Personal Information
                    </p>
                    <form method="POST" action="{{ route('team.update', $allteams->id) }}" enctype="multipart/form-data">
                        @csrf 
                    
                        <div class="form-group">
                            <label for="exampleInputName1">Full Name</label>
                            <input type="text" class="form-control" name="fullname" value="{{$allteams->fullname}}" id="exampleInputName1" placeholder="Name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Position</label>
                            <input type="text" class="form-control" name="position" value="{{$allteams->position}}" id="exampleInputName1" placeholder="Position">
                        </div>
                    
                        <div class="form-group">
                            <label for="exampleInputUsername1">Twitter</label>
                            <input type="text" class="form-control" name="twitter" value="{{$allteams->twitter}}" id="exampleInputUsername1" placeholder="twitter">
                        </div>
                    
                        <div class="form-group">
                            <label for="exampleInputEmail1">Facebook</label>
                            <input type="text" class="form-control" name="facebook" value="{{$allteams->facebook}}" id="exampleInputEmail1" placeholder="facebook">
                        </div>
                    
                        <div class="form-group">
                            <label for="exampleInputAddress1">Instagram</label>
                            <input type="text" class="form-control" name="instagram" value="{{$allteams->instagram}}" id="exampleInputAddress1" placeholder="Instagram">
                        </div>

                                          
                        <div class="form-group">
                            <label for="exampleInputPhone1">Discription</label>
                            <input type="text" class="form-control" name="discription" value="{{$allteams->discription}}" id="exampleInputPhone1" placeholder="discription">
                        </div>


                        <h6>Upload Image</h6>
                        <div class="file-input-wrapper">
                            <input type="file" name="img">
                            Upload
                        </div>  
                    
                        {{-- <div class="form-group">
                            <label for="imageUpload">Upload Image</label>
                            <input type="file" id="imageUpload" name="avatar" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" readonly placeholder="No file chosen">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Browse</button>
                                </span>
                            </div>
                        </div> --}}

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