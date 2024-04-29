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
                    <h2 style="text-align: center;color:#c80d9f">News Of 10 Men Investment</h2>
                    <p class="card-description">
                    </p><br>
                    <form method="POST" action="{{ route('new-us') }}" enctype="multipart/form-data">
                        @csrf
                    
                            {{-- <div class="form-group">
                              <label  id="exampleInputUsername1">Categories</label>
                              <select  id="exampleInputUsername1" name="categories" class="form-control">
                                <option>Service</option>
                                <option>Testimonial</option>
                              </select>
                            </div> --}}

                            {{-- <div class="form-group">
                                <label for="exampleInputUsername1">Full Name</label>
                                <input type="text" class="form-control" name="name" value="" id="exampleInputUsername1" placeholder="Full Name">
                            </div> --}}

                    
                        <div class="form-group">
                            <label for="exampleInputUsername1">Subject</label>
                            <input type="text" class="form-control" name="title" value="" id="exampleInputUsername1" placeholder="Title">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPhone1">Date</label>
                            <input type="date" class="form-control" name="dob" value="" id="exampleInputPhone1" placeholder="Date">
                        </div>

                                          
                        <div class="form-group">
                          <label for="exampleInputPhone1">Message</label>
                          <textarea id="message" class="form-control" name="discription" name="message" placeholder="Message" required></textarea>
                      </div>


                        <h6>Upload Image</h6>
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