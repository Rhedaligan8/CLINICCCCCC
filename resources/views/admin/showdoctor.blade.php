<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
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
          <h1 style="font-size: 45px; padding-bottom: 42px;">Doctors Available</h1>

        <table class=" overflow-hidden rounded-md w-full">
            <tr style="background-color:#AD1457" align="center">
                <th style="padding:20px 70px 20px 20px;">Doctor Name</th>
                <th style="padding:20px 50px 20px 20px;">Speciality</th>
                <th style="padding:20px 50px 20px 20px;">Phone</th>
                <th style="padding:20px;">Image</th>
                <th style="padding:20px;">Remove</th>
                <th style="padding:20px;">Update</th>
            
            </tr>

            @foreach($data as $doctor)
              <tr style="background-color:gray;" align="center">
                <td style="padding:20px 70px 20px 20px;">{{$doctor->name}}</td>
                <td style="padding:20px 50px 20px 20px;">{{$doctor->speciality}}</td>
                <td style="padding:20px 50px 20px 20px;">{{$doctor->phone}}</td>
                <td style="padding: 20px;"><img height="150" width="150" src="doctorimage/{{$doctor->image}}" class="rounded-md overflow-hidden"></td>

                <td><a onclick="return confirm('are you sure to remove this')" class="btn btn-danger" href="{{url('removedoctor',$doctor->id)}}">Remove</a></td>
                <td><a class="btn btn-primary" href="{{url('',$doctor->id)}}">Update</a></td>

              </tr>
            @endforeach
            
           </table>

        </div>

     </div>
     

    <!-- container-scroller -->
    <!-- plugins:js -->
    

    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>