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
          <div class="">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
 
      @include('admin.sidebar')

      <!-- partial -->
     
       @include('admin.navbar')

        <!-- partial -->
      <div class="container-fluid page-body-wrapper">

        <div class="container" align="center" style="padding-top:100px;">
        <div style="overflow-x: auto; max-width: 100%;">

        <table>
            <tr style="background-color:#00D9A5">
                <th style="padding:10px;">Customer Name</th>
                <th style="padding:10px;">Email</th>
                <th style="padding:10px;">Phone</th>
                <th style="padding:10px;">Doctor Name</th>
                <th style="padding:10px;">Date</th>
                <th style="padding:10px;">Message</th>
                <th style="padding:10px;">Status</th>
                <th style="padding:10px;">Approved</th>
                <th style="padding:10px;">Cancel</th>
            
            </tr>

             @foreach($data as $appoint)

            <tr style="background-color:violet;" align="center">
                <td>{{$appoint->name}}</td>
                <td>{{$appoint->email}}</td>
                <td>{{$appoint->phone}}</td>
                <td>{{$appoint->doctor}}</td>
                <td>{{$appoint->date}}</td>
                <td>
                 <button class="btn btn-primary view-message" data-id="{{ $appoint->id }}" data-message="{{ $appoint->message }}">View Message</button>
                </td>
                <td>{{$appoint->status}}</td>
                <td>
                   
                    <a class="btn btn-success"href="{{url('approved',$appoint->id)}}">Approved</a>
                
                </td>
                
                <td>

                <a class="btn btn-danger"href="{{url('canceled',$appoint->id)}}">Canceled</a>

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
Emmanuel Ray
  public function viewMessage($id)
    {
        $appointment = Appointment::findOrFail($id);
        return response()->json(['message' => $appointment->message]);

 }
}