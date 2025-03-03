<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    @include('admin.css')

  </head>
  <body>
  <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: #AD1457 ;">
      <!-- partial:partials/_sidebar.html -->
 
      @include('admin.sidebar')

      <!-- partial -->
     
       @include('admin.navbar')

        <!-- partial -->
       
      @include('admin.body')

    <!-- container-scroller -->
    <!-- plugins:js -->
    

    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>