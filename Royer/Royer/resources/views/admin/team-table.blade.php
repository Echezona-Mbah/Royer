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
                    <h4 style="color:#c80d9f">Table social media posts for 10 men</h4>
                    <p class="card-description">
                      {{-- Add class <code>.table-striped</code> --}}
                    </p>

                    @if ($allteams->isEmpty())
                    <p>No teams available.</p>
                @else
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>User</th>
                            <th> First name</th>
                            <th>Position</th>
                            <th> Twitter</th>
                            <th> Facebook</th>
                            <th> Instagram</th>
                            <th> Description</th>
                            <th> Edit</th>
                            <th> Delete</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach($allteams as $team)
                          <tr>
                            <td class="py-1">
                                <img src="{{ asset('uploads/' . $team->imgs) }}" alt="Team Image">
                            </td>
                            <td>{{ $team->fullname}}</td>
                            <td>{{ $team->position}}</td>
                            <td>{{ $team->twitter}}</td>
                            <td>{{ $team->facebook}}</td>
                            <td>{{ $team->instagram}}</td>
                            <td>{{ $team->discription}}</td>
                            <td>
                                <a href="{{ route('team.edit', $team->id) }}" class="btn btn-primary">Edit</a>
                            </td>
                            
                            <td>
                                <form action="{{ route('team.destroy', $team->id) }}" method="POST">
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