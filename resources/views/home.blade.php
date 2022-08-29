<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

<div class="container">
<h3 class="text-center mt-4">Regidtreation from</h3>
    <div class="row">

        @if(Session::has('message'))
        <h4 class="text-danger">{{ Session::get('message') }}</h4>

        @endif

        <div class="col-md-8">


            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">phone</th>
                    <th scope="col">Message</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

@foreach ($data as $key=>  $iteam)

<tr>
    <th scope="row">{{ $key+1 }}</th>
    <td>{{ $iteam->name }}</td>
    <td>{{ $iteam->email }}</td>
    <td>{{ $iteam->phone }}</td>
    <td>{{ $iteam->message }}</td>
    <td>

 <a href="" class="btn btn-success">Edit</a>
 <a href="{{ url('/DeleteData/'.$iteam->id) }}" onclick="return confirm('are sure.?')" class="btn btn-danger">Delete</a>

    </td>
  </tr>

@endforeach




                </tbody>
              </table>

              {{ $data->links() }}

        </div>


<div class="col-md-4">



    <div class="alert alert-success" role="alert" id="successMsg" style="display: none" >
        Data Added Succesfully
        </div>

          <form id="SubmitForm">


              <div class="mb-3">
                <label for="InputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="InputName">
                <span class="text-danger" id="nameErrorMsg"></span>
              </div>

              <div class="mb-3">
                <label for="InputEmail" class="form-label">Email address</label>
                <input type="email" class="form-control" id="InputEmail">
                <span class="text-danger" id="emailErrorMsg" ></span>
              </div>

              <div class="mb-3">
                <label for="InputMobile" class="form-label">Mobile</label>
                <input type="number" class="form-control" id="InputMobile">
                <span class="text-danger" id="phoneErrorMsg"></span>
              </div>

              <div class="mb-3">
                <label for="InputMessage" class="form-label">Message</label>
                <textarea class="form-control" id="InputMessage" cols="30" rows="4"></textarea>
                <span class="text-danger" id="messageErrorMsg"></span>
              </div>


              <button type="submit" class="btn btn-primary">Submit</button>
            </form>

</div>

    </div>
</div>

@include('student_js')
    -->
  </body>
</html>



