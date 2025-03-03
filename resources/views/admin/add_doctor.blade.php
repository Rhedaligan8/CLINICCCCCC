<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <style type="text/css">

    label
    {
      display: inline-block;
      
      width:100px;
    }
    </style>

    
    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          
        </div>
      </div>  
      <!-- partial:partials/_sidebar.html -->
 
      @include('admin.sidebar')

      <!-- partial -->
     
       @include('admin.navbar')

        <!-- partial -->
      <div class="container-fluid page-body-wrapper">


        <div class="container" align="center" style="padding-top:100px;">

        @if(session()->has('message'))

        <div class="alert alert-success">

        <button type="button" class="close" data-dismiss="alert"></button>

        {{session()->get('message')}}
 
        </div>

        @endif

        <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
            @csrf

        <div style="padding:15px;">

          <label>Doctor Name</label>
          <input type="text" style="color:black;" name="name" placeholder="Write Doctor name" required="">
 
        </div>
        
        <div style="padding:15px;">

        <label>Phone</label>
        <input type="" style="color:black; padding:10px" name="number" placeholder="Write the number" required="">

        </div>

        <div style="padding:15px;">

        <label>Speciality</label>
        
        <select name="speciality" style="color:black;width:200px" required="">
          <option></option>
          <option value="head nurse">head nurse</option>
          <option value="nurse">nurse</option>
          <option value="Physicians">Physicians</option>
          <option value="Assistant Nurse">Assistant Nurse</option>
          <option value="Dentist">Dentist</option>

        </select>


        <div style="padding:15px;">

        <label>Doctor Image</label>
        <input type="file" style="width:220px; padding:10px;" name="file" required="">

        </div>
         
     
        <div style="padding:15px;">

        
        <input type="submit" class="btn btn-success">

        </div>
        
    
         </div>



        </form>


        </div>



     </div>
     

    <!-- container-scroller -->
    <!-- plugins:js -->
    

    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>