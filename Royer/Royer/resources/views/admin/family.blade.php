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
                        </div>
                        <h2>Family Detail Form</h2>
                        <form id="familyForm">
                          <label for="fullName">Full Name:</label>
                          <input type="text" id="fullName" name="fullName" required>
                    
                          <label for="age">Age:</label>
                          <input type="number" id="age" name="age" required>
                    
                          <label for="relation">Relation:</label>
                          <input type="text" id="relation" name="relation" required>
                    
                          <h3>Next of Kin Information</h3>
                          <label for="kinName">Full Name:</label>
                          <input type="text" id="kinName" name="kinName" required>
                    
                          <label for="kinContact">Contact:</label>
                          <input type="tel" id="kinContact" name="kinContact" required>
                    
                          <input type="password" id="password" name="password" placeholder="Enter Password" required>
                          <div class="checkbox-container">
                            <span>Do you like rice?</span> 
                            <input type="checkbox" id="likeRice" name="likeRice" required>
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1"> I have a bike</label><br>
                          </div>
                    
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