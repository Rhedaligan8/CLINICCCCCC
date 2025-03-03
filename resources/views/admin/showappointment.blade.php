<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    
    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller" style="background-color: white;">
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
        <div class="container w-full h-full rounded-md" align="center" style="padding-top:100px; margin-top: -50px;">
          <h1 style="font-size: 45px; margin-bottom: 100px; color: #AD1457;">Students Appointment & Schedule</h1>

        <table class="rounded-md w-full overflow-hidden" style="width: 1220px; margin-left: -100px;">
            <tr style="background-color:#AD1457" class="w-full">
                <th style="padding:20px;">Customer Name</th>
                <th style="padding:20px;">Email</th>
                <th style="padding:20px;">Phone</th>
                <th style="padding:20px;">Doctor Name</th>
                <th style="padding:20px;">Date</th>
                <th style="padding:20px;">Purpose</th>
                <th style="padding:20px;">Status</th>
                <th style="padding:20px;">Approved</th>
                <th style="padding:20px;">Reject</th>
            
            </tr>

             @foreach($data as $appoint)

            <tr style="background-color:gray;" align="center">
                <td style="margin-left:-50px;">{{$appoint->name}}</td>
                <td style="padding:20px;">{{$appoint->email}}</td>
                <td style="padding:20px;">{{$appoint->phone}}</td>
                <td style="padding:20px;">{{$appoint->doctor}}</td>
                <td style="padding:20px;">{{$appoint->date}}</td>
                <td>
                 <button class="btn btn-primary view-message" data-id="{{ $appoint->id }}" data-message="{{ $appoint->message }}">View </button>
                </td>
                <td style="padding:20px;">{{$appoint->status}}</td>
                <td>
                   
                    <a class="btn btn-success"href="{{url('approved',$appoint->id)}}">Approved</a>
                
                </td>
                
                <td style="padding-right: 10px;">

                <a class="btn btn-danger"href="{{url('canceled',$appoint->id)}}" style="padding-right: 20px;"> Decline </a>

                </td>

            </tr>

            @endforeach
        
        </table>
        
 <!-- Message Modal -->
 <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="messageModalLabel">Message</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="messageContent">
                    <!-- Message will be dynamically updated here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
        </div>
     </div>
</div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    

    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
