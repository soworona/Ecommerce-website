<!DOCTYPE html>
<html>
   <head>
    <base href="/public">
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <style type="text/css">
        .center{
            margin:auto;
            width:80%;
            text-align:center;
            padding:50px;
        }

        table,td,th{
            border: 1px solid lightgray;
        }

        .th_deg{
            font-size:20px;
        }

    </style>
   </head>
   <body>
      <div class="hero_area">
        @include('home.header')
        
        <div class="center">
            <table >
                <tr class="th_deg">
                    <th >Product title</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                <?php $totalprice=0; ?>
                @foreach($cart as $cart)
                <tr>
                    <td>{{$cart->product_title}}</td>
                    <td>{{$cart->quantity}}</td>
                    <td>Rs. {{$cart->price}}</td>
                    <td><img src="/product/{{$cart->image}}" alt="" style="hieght:150px; width:150px; padding:10px "></td>
                    <td><button class="btn btn-danger" >Delete</button></td>
                </tr>
                <?php $totalprice=$totalprice+$cart->price; ?>
                @endforeach
                    <tr>
                        <td>Total</td>
                        <td>Rs. {{$totalprice}}</td>
                    </tr>
            </table>
            <br>
            <button class="btn btn-danger" type="" >Make order</button>
            @if(Session::has('message'))
            <script>
                swal("Message","{{Session::get('message')}}",'success',{
                    button="true",
                    button="Ok"
                });
                </script>  
@endif

        </div>
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->



      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>