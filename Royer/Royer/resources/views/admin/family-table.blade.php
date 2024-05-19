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
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 style="color:#c80d9f">Table Register </h4>
                    <p class="card-description">
                      {{-- Add class <code>.table-striped</code> --}}
                    </p>

                    @if ($allfamily->isEmpty())
                    <p>No Register available.</p>
                @else
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th> Middle Name</th>
                            <th> Surname</th>
                            <th> Kindred</th>
                            <th> Village</th>
                            <th> Town</th>
                            <th> Local <br>Government Area</th>
                            <th> State of Origin</th>
                            <th> Business Location Address</th>
                            <th> Country of Residence</th>
                            {{-- <th> through Morocco</th>
                            <th> Year passed</th>
                            <th> City during</th> --}}
                            <th> Telephone Number</th>
                            <th> WhatsApp <br> Number</th>
                            <th> Email</th>
                            <th> Marital </th>
                            <th> Mother Still</th>
                            <th>Nama Next Of Kins</th>
                            {{-- <th> Home Town of Next Of Kins</th> --}}
                            <th> Village of Next Of Kins</th>
                            <th> Country of redidence of Next Of Kins</th>
                            <th> Relationship with Next Of Kins</th>
                            <th> Telephone of Next Of Kins</th>
                            <th> Whatapps Number of Next Of Kins</th>
                            <th> Passport</th>
                            <th>Edit</th>
                            <th> Delete</th>


                          </tr>
                        </thead>
                        <tbody>
                            @foreach($allfamily as $family)
                          <tr>
                            <td>{{ $family->name}}</td>
                            <td>{{ $family->middle_name}}</td>
                            <td>{{ $family->surname}}</td>
                            <td>{{ $family->kindred}}</td>
                            <td>{{ $family->village}}</td>
                            <td>{{ $family->town}}</td>
                            <td>{{ $family->Area}}</td>
                            <td>{{ $family->origin}}</td>
                            <td>{{ $family->address}}</td>
                            <td>{{ $family->country}}</td>
                            {{-- <td>{{ $family->pass_morocco}}</td>
                            <td>{{ $family->year_morocco}}</td>
                            <td>{{ $family->city_morocco}}</td> --}}
                            <td>{{ $family->telephone}}</td>
                            <td>{{ $family->whatsapp}}</td>
                            <td>{{ $family->email}}</td>
                            <td>{{ $family->marital_status}}</td>
                            <td>{{ $family->mother_alive}}</td>
                            <td>{{ $family->name_kins}}</td>
                            <td>{{ $family->village_kins}}</td>
                            <td>{{ $family->redidence_kins}}</td>
                            <td>{{ $family->relationship_kins}}</td>
                            <td>{{ $family->telephone_kins}}</td>
                            <td>{{ $family->whatsapp_kins}}</td>
                            <td class="py-1">
                                <img src="{{ asset('uploads/' . $family->image) }}" alt="Team Image">
                            </td>
                            <td>
                              <a href="{{ route('family.edit', $family->id) }}" class="btn btn-primary">Edit</a>
                          </td>
                            
                            <td>
                                <form action="{{ route('family.destroy', $family->id) }}" method="POST">
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