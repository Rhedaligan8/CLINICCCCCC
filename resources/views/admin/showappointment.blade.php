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
        <div class="container w-full h-screen rounded-md" align="center" style="padding-top:100px; margin-top: -50px;">
          <h1 style="font-size: 45px; margin-bottom: 100px;">Students Appointment & Schedule</h1>

        <table class="rounded-md w-full overflow-hidden" style="width: 1220px; margin-left: -100px;">
            <tr style="background-color:#AD1457" class="w-full">
                <th style="padding:20px;">Customer Name</th>
                <th style="padding:20px;">Email</th>
                <th style="padding:20px;">Phone</th>
                <th style="padding:20px;">Doctor Name</th>
                <th style="padding:20px;">Date</th>
                <th style="padding:20px;">Message</th>
                <th style="padding:20px;">Status</th>
                <th style="padding:20px;">Approved</th>
                <th style="padding:20px;">Cancel</th>
            
            </tr>

             @foreach($data as $appoint)

            <tr style="background-color:gray;" align="center">
                <td style="margin-left:-25px;">{{$appoint->name}}</td>
                <td style="padding:20px;">{{$appoint->email}}</td>
                <td style="padding:20px;">{{$appoint->phone}}</td>
                <td style="padding:20px;">{{$appoint->doctor}}</td>
                <td style="padding:20px;">{{$appoint->date}}</td>
                <td style="padding:20px;">{{$appoint->message}}</td>
                <td style="padding:20px;">{{$appoint->status}}</td>
                <td>
                   
                    <a class="btn btn-success"href="{{url('approved',$appoint->id)}}">Approved</a>
                
                </td>
                
                <td>

                <a class="btn btn-danger"href="{{url('canceled',$appoint->id)}}" style="padding-left: 20px;">Canceled</a>

                </td>

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
