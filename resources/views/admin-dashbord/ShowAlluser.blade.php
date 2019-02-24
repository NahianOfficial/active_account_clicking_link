@extends('admin-dashbord.master')
@section('contain')
<h1>Hello, {{Session('UserSession')}}</h1>

 <div class="row container">
 <h3 class="text-center text-success">{{ Session::get('message') }}</h3>

                        <div class="well">
                             <h3 class="text-center">All User</h3>
  <table class="table table-bordered">
    <thead>
      <tr>
        <td>User Name</td>
        <td>User Type</td>
        <td>Email</td>
        <td>Address</td>
        <td>Mobile No.</td>
        <td>Action</td>
      </tr>
    </thead>


  </table>
</div>

</div>

@endsection()
