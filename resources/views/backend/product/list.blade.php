@extends('backend.layout.app')
@section('content')



<main id="main" class="main">

    <div class="pagetitle">
      <h1>List all products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('backend.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item">products</li>
          <li class="breadcrumb-item active">list products</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">


        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"> Products</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">image</th>

                    <th scope="col">Name</th>
                    <th scope="col">price</th>
                    <th scope="col">description</th>
                    <th scope="col">Acion</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $data)

                  <tr>
                    <th scope="row">{{$data->id}}</th>
                    <td><img style="width: 40px; height: 50px;" src="{{asset('assets/frontend/'.$data->image)}}" alt=""></td>
                    <td>{{$data->name}}</td>
                    <td>${{$data->price}}</td>
                    <td>{{$data->description}}</td>
                    <td>
                      <a class="btn btn-outline-danger btn-sm "  href="">Delete</a>
                      <a href="" class="btn btn-outline-primary btn-sm">Edit</a>
                    </td>

                  </tr>

                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>



        </div>
      </div>
    </section>

  </main><!-- End #main -->





@endsection


