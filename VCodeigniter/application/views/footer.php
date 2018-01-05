   <br>               
<!--Footer-->
<footer style="background-color: black;">

    <!--Footer Links-->
 
<br>
        <!--First row-->
        <div class="row">

            <!--First column-->
            <div class="col-sm-12 text-center">

                <div>

                    <!--Facebook-->
                    <a><i class="fa fa-facebook fa-lg "> </i></a> &nbsp;&nbsp;
                    <!--Twitter-->
                    <a><i class="fa fa-twitter fa-lg "> </i></a>&nbsp;&nbsp;
                    <!--Google +-->
                    <a><i class="fa fa-google-plus fa-lg "> </i></a>&nbsp;&nbsp;
                    <!--Linkedin-->
                    <a><i class="fa fa-linkedin fa-lg "> </i></a>&nbsp;&nbsp;
                    <!--Instagram-->
                    <a><i class="fa fa-instagram fa-lg "> </i></a>&nbsp;&nbsp;
                    <!--Pinterest-->
                    <a><i class="fa fa-pinterest fa-lg "> </i></a>&nbsp;&nbsp;
                </div>
            </div>
            <!--/First column-->
        </div>
        <!--/First row-->
   
<br>
    <!--Copyright-->
    <div class="footer-copyright text-center">
        <div class="container-fluid">
            © 2017 Copyright: <a href="https://www.Facebook.com">IndiaTourisum.com </a>
        </div>
    </div>
    <!--/Copyright-->

    <br>

</footer>
<!--/Footer-->
    

    </div>   

    <script>
        var obj= angular.module("myapp",["ngRoute"]);
        obj.config(function ($routeProvider)
         {
            $routeProvider
            .when("/", 
            {
                templateUrl:"home"
            })
        });
    </script>         

</body>
  </html>
