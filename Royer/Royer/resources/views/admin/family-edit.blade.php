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

        .services-item-wrap {
    text-align: center;
    padding-top: 50px;
}

.form-container {
    width: 80%;
    max-width: 600px;
    background-color: #f9f9f9;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.logo {
    text-align: left;
}

.logo img {
    max-width: 100px;
    height: auto;
}

.form-title {
    margin-bottom: 10px;
    font-size: 24px;
    color: #333;
}

.form-subtitle {
    margin-bottom: 20px;
    font-size: 18px;
    color: #666;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group input[type="password"],
.form-group input[type="tel"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.checkbox-group {
    margin-bottom: 15px;
}

.checkbox-group label {
    margin-right: 10px;
}

button[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    border: none;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

.other-img {
    display: flex;
    justify-content: right;
    margin-top: -100px; 
}

.password-style img {
    width: 80px;
    height: 80px;
    margin-right: 10px;
    border: 2px solid #ccc; 
    padding: 5px; 
    background-color: #f9f9f9; 
    transition: border-color 0.3s ease;
}

.password-style img:hover {
    border-color: #999;
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
                    <h2 >Edit Register</h2>
                    <p class="card-description">
                      {{-- Personal Information --}}
                    </p>
                    <form method="POST" action="{{ route('family.update', $allfamily->id) }}" enctype="multipart/form-data">
                        @csrf 

                        <div class="logo">
                            <img src="{{asset('img/logo.png')}}" alt="Logo">
                        </div><br><br>
                        <div class="other-img password-style" onclick="document.getElementById('uploadImage').click()">
                            <img id="previewImage" src="{{ asset('uploads/' . $allfamily->image) }}" alt="password">
                        </div>
                        <input type="file" id="uploadImage" name="image" accept="image/*" style="display: none;" onchange="previewFile()">
                        
                        {{-- <h4 class="form-title">BiDon Family Association</h4> --}}
                        <h6 class="form-subtitle">Membership Application for Registration</h6>
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" value="{{$allfamily->name}}">
                            </div>
                            <div class="form-group">
                                <label for="middleName">Middle Name:</label>
                                <input type="text" id="middleName" name="middle_name" value="{{$allfamily->middle_name}}">
                            </div>
                            <div class="form-group">
                                <label for="surname">Surname:</label>
                                <input type="text" id="surname" name="surname" value="{{$allfamily->surname}}">
                            </div>
                            <div class="form-group">
                                <label for="kindred">Kindred:</label>
                                <input type="text" id="kindred" name="kindred" value="{{$allfamily->kindred}}">
                            </div>
                            <div class="form-group">
                                <label for="village">Village:</label>
                                <input type="text" id="village" name="village" value="{{$allfamily->village}}">
                            </div>
                            <div class="form-group">
                                <label for="town">Town:</label>
                                <input type="text" id="town" name="town" value="{{$allfamily->town}}">
                            </div>
                            <div class="form-group">
                                <label for="area">Local Government Area:</label>
                                <input type="text" id="area" name="Area" value="{{$allfamily->Area}}">
                            </div>
                            <div class="form-group">
                                <label for="origin">State of Origin:</label>
                                <input type="text" id="origin" name="origin" value="{{$allfamily->origin}}">
                            </div>
                            <div class="form-group">
                                <label for="address">Business Location Address:</label>
                                <input type="text" id="address" name="address" value="{{$allfamily->address}}">
                            </div>
                            <div class="form-group">
                                <label for="country">Country of Residence:</label>
                                <input type="text" id="country" name="country" value="{{$allfamily->country}}">
                            </div>
                            <div class="checkbox-group">
                                <label>Did You Pass through Morocco?:</label>
                                <div>
                                    <input type="checkbox" id="passYes" name="pass_morocco" >
                                    <label for="passYes">Yes</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="passNo" name="pass_morocco" >
                                    <label for="passNo">No</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="yearMorocco">Year passed through Morocco:</label>
                                <input type="text" id="yearMorocco" name="year_morocco" value="{{$allfamily->year_morocco}}">
                            </div>
                            <div class="form-group">
                                <label for="cityMorocco">City during time in Morocco:</label>
                                <input type="text" id="cityMorocco" name="city_morocco" value="{{$allfamily->city_morocco}}">
                            </div>
                            <div class="form-group">
                                <label for="telephone">Telephone Number:</label>
                                <input type="text" id="telephone" name="telephone" value="{{$allfamily->telephone}}">
                            </div>
                            <div class="form-group">
                                <label for="whatsapp">WhatsApp Number:</label>
                                <input type="text" id="whatsapp" name="whatsapp" value="{{$allfamily->whatsapp}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address:</label>
                                <input type="email" id="email" name="email" value="{{$allfamily->email}}">
                            </div>
                            <div class="checkbox-group">
                                <label>Marital Status:</label>
                                <div>
                                    <input type="checkbox" id="married" name="marital_status" value="married">
                                    <label for="married">Married</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="single" name="marital_status" value="single">
                                    <label for="single">Single</label>
                                </div>
                            </div>
                            <div class="checkbox-group">
                                <label>Your Mother Still alive?</label>
                                <div>
                                    <input type="checkbox" id="motherYes" name="mother_alive">
                                    <label for="motherYes">Yes</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="motherNo" name="mother_alive">
                                    <label for="motherNo">No</label>
                                </div>
                            </div>
        
                            <h6 style="text-align: center;color:red">Detail Of Next of Kins</h6><br>
        
                            <div class="form-group">
                                <label for="whatsapp">Name of Next Of Kins:</label>
                                <input type="text" id="whatsapp" name="name_kins"  value="{{$allfamily->name_kins}}">
                            </div>
        
                            <div class="form-group">
                                <label for="whatsapp">Home Town of Next Of Kins:</label>
                                <input type="text" id="whatsapp" name="town_kins"  value="{{$allfamily->town_kins}}">
                            </div>
        
                            <div class="form-group">
                                <label for="whatsapp">Village of Next Of Kins:</label>
                                <input type="text" id="whatsapp" name="village_kins" value="{{$allfamily->village_kins}}">
                            </div>
        
                            <div class="form-group">
                                <label for="whatsapp">Country of redidence of Next Of Kins:</label>
                                <input type="text" id="whatsapp" name="redidence_kins"value="{{$allfamily->redidence_kins}}">
                            </div>
        
                            <div class="form-group">
                                <label for="whatsapp">Relationship with Next Of Kins:</label>
                                <input type="text" id="whatsapp" name="relationship_kins" value="{{$allfamily->relationship_kins}}">
                            </div>
        
                            <div class="form-group">
                                <label for="whatsapp">Telephone of Next Of Kins:</label>
                                <input type="text" id="whatsapp" name="telephone_kins" value="{{$allfamily->telephone_kins}}">
                            </div>
        
                            <div class="form-group">
                                <label for="whatsapp">Whatapps Number of Next Of Kins:</label>
                                <input type="text" id="whatsapp" name="whatsapp_kins" value="{{$allfamily->whatsapp_kins}}">
                            </div><br><br>
        
                    

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
  <script>
    function previewFile() {
        const preview = document.getElementById('previewImage');
        const file = document.querySelector('input[type=file]').files[0];
        const reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "other-image.png";
        }
    }
</script>

  @include('admin.script')