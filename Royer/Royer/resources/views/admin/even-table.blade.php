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
                    <h4 style="color:#c80d9f">Table New The 10 Men Investment</h4>
                    <p class="card-description">
                      {{-- Add class <code>.table-striped</code> --}}
                    </p>

                    @if ($alleven->isEmpty())
                    <p>No even available.</p>
                @else
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            {{-- <th>Categories</th> --}}
                            <th>Title</th>
                            <th>Amount</th>
                            <th> Date</th>
                            <th> Description</th>
                            <th> Image</th>
                            <th> Edit</th>
                            <th> Delete</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach($alleven as $even)
                          <tr>
                            {{-- <td>{{ $testimonials->categories}}</td> --}}
                            <td>{{ $even->title}}</td>
                            <td>{{ $even->amount}}</td>
                            <td>{{ $even->dob}}</td>
                            <td>{{ $even->discription}}</td>
                            <td class="py-1">
                                <img src="{{ asset('uploads/' . $even->imgs) }}" alt="Team Image">
                            </td>
                            <td>
                                <a href="{{ route('even.edit', $even->id) }}" class="btn btn-primary">Edit</a>
                            </td>
                            
                            <td>
                                <form action="{{ route('even.destroy', $even->id) }}" method="POST">
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