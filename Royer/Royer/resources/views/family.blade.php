
@php
    use Illuminate\Support\Str;
@endphp
<?php $title = 'Service | Committed to investment orientation, profit growth, and extensive global business penetration.';?>
<?php
$siteName = 'Royal 10 Investment Limited'?>
<?php $sitePhone = '+123 9898 500'?>
<?php $siteAddress = '256 Avenue, Mark Street, NewYork City'?>
<?php $siteEmail = 'info@royal10investmentltd.com'?>
<?php $siteFacebook = 'https://www.facebook.com/'?>
<?php $siteTwitter = 'https://twitter.com/home'?>
<?php $siteInstagram = 'https://www.instagram.com/'?>
<?php $siteLinkedin = 'https://www.linkedin.com/'?>
<?php $siteYear = date('Y')?>
@include('lib')
@include('head')
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
<style>
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
    @include('header')
    @include('sweetalert::alert')
 <main class="fix">
  <!-- breadcrumb-area -->
  <section class="breadcrumb__area breadcrumb__bg" data-background="img/image-cover.png">
   <div class="container">
    <div class="row">
     <div class="col-lg-6">
      <div class="breadcrumb__content">
       <h2 class="title">BiDon Family Association</h2>
       <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href='./'>Home</a></li>
         <li class="breadcrumb-item active" aria-current="page">Services</li>
        </ol>
       </nav>
      </div>
     </div>
    </div>
   </div>
   <div class="breadcrumb__shape">
    <img src="assets/img/images/breadcrumb_shape01.png" alt="">
    <img src="assets/img/images/breadcrumb_shape02.png" alt="" class="rightToLeft">
    <img src="assets/img/images/breadcrumb_shape03.png" alt="">
    <img src="assets/img/images/breadcrumb_shape04.png" alt="">
    <img src="assets/img/images/breadcrumb_shape05.png" alt="" class="alltuchtopdown">
   </div>
  </section>
  <!-- breadcrumb-area-end -->

  <section class="services__area-five services__bg-five" data-background="assets/img/bg/inner_services_bg02.jpg">
   <div class="container">

    <div class="row justify-content-center">
     <div class="col-xl-6 col-lg-8">
      <div class="section-title text-center mb-40">
       <span class="sub-title">BiDon Family Association</span>
       <h2 class="title">Membership Application for Registration</h2>
      </div>
     </div>
    </div>

    <div class="services-item-wrap">
        <div class="row justify-content-center">
            <div class="form-container">
                <form id="familyForm" method="POST" action="{{ route('family') }}" enctype="multipart/form-data">
                    @csrf
                <div class="logo">
                    <img src="{{asset('img/logo.png')}}" alt="Logo">
                </div>
                <div class="other-img password-style" onclick="document.getElementById('uploadImage').click()">
                    <img id="previewImage" src="other-image.png" alt="password">
                </div>
                <input type="file" id="uploadImage" name="image" accept="image/*" style="display: none;" onchange="previewFile()">
                
                <h4 class="form-title">BiDon Family Association</h4>
                <h6 class="form-subtitle">Membership Application for Registration</h6>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="middleName">Middle Name:</label>
                        <input type="text" id="middleName" name="middle_name">
                    </div>
                    <div class="form-group">
                        <label for="surname">Surname:</label>
                        <input type="text" id="surname" name="surname">
                    </div>
                    <div class="form-group">
                        <label for="kindred">Kindred:</label>
                        <input type="text" id="kindred" name="kindred">
                    </div>
                    <div class="form-group">
                        <label for="village">Village:</label>
                        <input type="text" id="village" name="village">
                    </div>
                    <div class="form-group">
                        <label for="town">Town:</label>
                        <input type="text" id="town" name="town">
                    </div>
                    <div class="form-group">
                        <label for="area">Local Government Area:</label>
                        <input type="text" id="area" name="Area">
                    </div>
                    <div class="form-group">
                        <label for="origin">State of Origin:</label>
                        <input type="text" id="origin" name="origin">
                    </div>
                    <div class="form-group">
                        <label for="address">Business Location Address:</label>
                        <input type="text" id="address" name="address">
                    </div>
                    <div class="form-group">
                        <label for="country">Country of Residence:</label>
                        <input type="text" id="country" name="country">
                    </div>
                    <div class="checkbox-group">
                        <label>Did You Pass through Morocco?:</label>
                        <div>
                            <input type="checkbox" id="passYes" name="pass_morocco">
                            <label for="passYes">Yes</label>
                        </div>
                        <div>
                            <input type="checkbox" id="passNo" name="pass_morocco">
                            <label for="passNo">No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="yearMorocco">Year passed through Morocco:</label>
                        <input type="text" id="yearMorocco" name="year_morocco">
                    </div>
                    <div class="form-group">
                        <label for="cityMorocco">City during time in Morocco:</label>
                        <input type="text" id="cityMorocco" name="city_morocco">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Telephone Number:</label>
                        <input type="text" id="telephone" name="telephone">
                    </div>
                    <div class="form-group">
                        <label for="whatsapp">WhatsApp Number:</label>
                        <input type="text" id="whatsapp" name="whatsapp">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="email" id="email" name="email">
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
                        <input type="text" id="whatsapp" name="name_kins">
                    </div>

                    <div class="form-group">
                        <label for="whatsapp">Home Town of Next Of Kins:</label>
                        <input type="text" id="whatsapp" name="town_kins">
                    </div>

                    <div class="form-group">
                        <label for="whatsapp">Village of Next Of Kins:</label>
                        <input type="text" id="whatsapp" name="village_kins">
                    </div>

                    <div class="form-group">
                        <label for="whatsapp">Country of redidence of Next Of Kins:</label>
                        <input type="text" id="whatsapp" name="redidence_kins">
                    </div>

                    <div class="form-group">
                        <label for="whatsapp">Relationship with Next Of Kins:</label>
                        <input type="text" id="whatsapp" name="relationship_kins">
                    </div>

                    <div class="form-group">
                        <label for="whatsapp">Telephone of Next Of Kins:</label>
                        <input type="text" id="whatsapp" name="telephone_kins">
                    </div>

                    <div class="form-group">
                        <label for="whatsapp">Whatapps Number of Next Of Kins:</label>
                        <input type="text" id="whatsapp" name="whatsapp_kins">
                    </div><br><br>



                    {{-- <h6 style="text-align: center;color:red">SPACE RESERVED FOR OFFICIAL USE</h6><br> --}}


                    <button type="submit">Submit</button>
                    <form>



                </div>
   </div>
  </section>

 </main>

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

 @include('footer')