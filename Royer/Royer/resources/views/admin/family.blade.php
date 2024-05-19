@include('admin.head')
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}

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



        .form-container {
  max-width: 500px;
  margin: 50px auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f9f9f9;
}

.logo {
  text-align: center;
}

h2 {
  margin-top: 20px;
  text-align: center;
}

form {
  margin-top: 20px;
}


input[type="email"],
input[type="text"],
input[type="number"],
input[type="tel"],
input[type="password"] {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
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
                    <h2 style="text-align: center;color:#c80d9f"> The 10 Men Investment Family</h2>
                    <p class="card-description">
                    </p><br>
                    <div class="form-container">
                        <div class="logo">
                          <img src="logo.png" alt="Logo">
                        </div><br>
                        <h4 style="text-align: center">The 10 Men Investment Register Association</h4>
                        <h6 style="text-align: center">Membleship Application for Registration</h6>
                        <form id="familyForm">
                          <span for="fullName">Name:</span>
                          <input type="text" id="" name="name">
                          <span for="fullName">Middle Name:</span>
                          <input type="text" id="" name="middle_name">
                          <span for="fullName">Surname:</span>
                          <input type="text" id="fullName" name="surname">
                          <span for="fullName">Kindred:</span>
                          <input type="text"  name="kindred">
                          <span for="fullName">Village:</span>
                          <input type="text" id="" name="village">
                          <span for="fullName">Town:</span>
                          <input type="text" id="" name="town">
                          <span for="fullName">Local Government Area:</span>
                          <input type="text" id="fullName" name="Area">
                          <span for="fullName">State of Origin:</span>
                          <input type="text" id="fullName" name="origin">
                          <span for="fullName">Business Location Address:</span>
                          <input type="text" id="fullName" name="address">
                          <span for="fullName">Local Government Area:</span>
                          <input type="text" id="fullName" name="Area">
                          <span for="fullName">Country of Residence:</span>
                          <input type="text" id="fullName" name="Area">

                          {{-- <div class="checkbox-container">
                            <label>Did You Pass throught Morocco?:</label>
                            <span>yes</span> 
                            <input type="checkbox" id="likeRice" name="likeRice">
                            <span>No</span>
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                          </div><br>



                          <span for="">what year did you passed throught Morocco?</span>
                          <input type="text" id="fullName" name="City">


                          <span for="">What City Were You during Your Time in Morocco:</span>
                          <input type="text" id="fullName" name="City"> --}}

                          <span for="">Telephone Number</span>
                          <input type="text" id="fullName" name="City">

                          <span for="">Whatapps Number</span>
                          <input type="text" id="fullName" name="City">

                          <span for="">Email Adress</span>
                          <input type="email" id="fullName" name="City">

                          <div class="checkbox-container">
                            <label>Marital Status:</label>
                            <span>Married</span> 
                            <input type="checkbox" id="likeRice" name="married">
                            <span>Single</span>
                            <input type="checkbox" id="vehicle1" name="single" value="Bike">
                          </div>

                          
                          <div class="checkbox-container">
                            <label>Your Mother Still alive?</label>
                            <span>yes</span> 
                            <input type="checkbox" id="likeRice" name="yes">
                            <span>No</span>
                            <input type="checkbox" id="vehicle1" name="No" value="Bike">
                          </div>

                          <div class="checkbox-container">
                            <label>Your Father Still alive?</label>
                            <span>yes</span> 
                            <input type="checkbox" id="likeRice" name="yes">
                            <span>No</span>
                            <input type="checkbox" id="vehicle1" name="No" value="Bike">
                          </div>


                    
                          <label for="relation">Relation:</label>
                          <input type="text" id="relation" name="relation" required>
                    
                          <h6 style="text-align: center;color:red">Detail Of Next of Kins</h6><br>
                          <span for="">Name of Next Of Kins</span>
                          <input type="text" id="fullName" name="City">

                          <span for="">Home Town of Next Of Kins</span>
                          <input type="text" id="fullName" name="City">

                          <span for="">Village of Next Of Kins</span>
                          <input type="text" id="fullName" name="City">

                          <span for="">Country of redidence of Next Of Kins</span>
                          <input type="text" id="fullName" name="City">

                          <span for="">Relationship with Next Of Kins</span>
                          <input type="text" id="fullName" name="City">

                          <span for="">Telephone of Next Of Kins</span>
                          <input type="text" id="fullName" name="City">

                          <span for="">Whatapps Number of Next Of Kins</span>
                          <input type="text" id="fullName" name="City">

                          <h6 style="text-align: center;color:red">SPACE RESERVED FOR OFFICIAL USE</h6><br>
                    
                          {{-- <div class="checkbox-container">
                            <label>Your Father Still alive?</label>
                            <span>yes</span> 
                            <input type="checkbox" id="likeRice" name="yes">
                            <span>No</span>
                            <input type="checkbox" id="vehicle1" name="No" value="Bike">
                          </div> --}}
                    
                          <button type="submit">Submit</button>
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


  @include('admin.script')