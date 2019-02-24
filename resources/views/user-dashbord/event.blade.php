
@extends('user-dashbord.master')
@section('contain')
<h1>Hello, {{Session('UserSession')}}</h1>

 <div class="row container" id="app">
 <h3 class="text-center text-success">{{ Session::get('message') }}</h3>

        <div class="well">
        <h3 class="text-center">Applied Program</h3>



  <table class="table table-bordered">
    <thead>
      <tr>
        <td>Apply Date </td>
        <td>Pogram Name </td>
        <td>Segment Program </td>
        <td>Program  </td>

      </tr>
    </thead>




</table>
 </div>



</div>



@endsection()
