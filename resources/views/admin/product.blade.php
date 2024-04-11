<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
    <style type="text/css">
        .div_center{
            text-align:center;
            padding-top:40px;
        }
        .h2_font{
            font-size:40px;
            padding-bottom: 40px;
        }
        .input_color{
            color:black;
        }

        label{
            display:inline-block;
            width: 300px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->
        <div class ="main-panel">
            <div class="content-wrapper">
                <div class="div_center">
                <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
             @csrf
                <h2 class="h2_font">Add Product</h1>
                <div>
                <label >Product Title</label> 
                <input type="text" name="title" id="title" class="input_color" required="">
                </div>

                <div>
                <label >Product Description</label> 
                <input type="text" name="description" id="description" class="input_color" required="">
                </div>

                <div>
                <label >Product Category</label> 
                <select name="category" required="" class="input_color">
                    <option value="selected">Add category</option>
                    @foreach($category as $category )
                    <option vlaue="{{$category->category_name}}">{{$category->category_name}}</option>
                    @endforeach
                 </select>
                
                </div>

                <div>
                <label >Product Image</label> 
                <input type="file" name="image" id="image"   >
                </div>

                <div>
                <label >Product Quantity</label> 
                <input type="number" name="quantity" id="quantity" min="0" class="input_color" required="">
                </div>
                
                <div>
                <label >Product Price</label> 
                <input type="number" name="price" id="price" class="input_color" required="">
                </div>

                <div>
                <label >Discount Price</label> 
                <input type="number" name="discount_price" id="discount_price" class="input_color">
                </div>

                <div>
                <input type="submit"  value="Add" class="btn btn-outline-primary">
                </div>
                </form>

                </div>
            </div>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
     
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>