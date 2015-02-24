<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:image" content="http://www.eternallynocturnal.com/images/blackskull.jpg">
  <title>Stay Awake to Create</title>
   <link rel="stylesheet" href="http://www.eternallynocturnal.com/store/public/foundation/css/foundation.css">
   <link rel="stylesheet" href="http://www.eternallynocturnal.com/store/public/foundation/css/normalize.css">
   <link rel="stylesheet" href="//localhost/enwebstore_admiral/public/foundation/foundation-icons/foundation-icons.css" />
   <link rel="stylesheet" type="text/css" href="//localhost/enwebstore/public/date/jquery.datetimepicker.css"/ >
      <script src="http://www.eternallynocturnal.com/store/public/date/jquery.js"></script>
      <script src="http://www.eternallynocturnal.com/store/public/date/jquery.datetimepicker.js"></script>

 <script src="http://www.eternallynocturnal.com/store/public/foundation/js/vendor/modernizr.js"></script>


  <style>




    body {
      margin:0;
      width: 100%;
      font-family:'Lato', sans-serif;
      text-align:center;
      color: #ffffff;


        background: -webkit-gradient(radial, top center, 0px, top center, 100%, , color-stop(0%, rgba(99,3,35,1)), color-stop(100%, rgba(41,8,20,1)));
        background: -webkit-radial-gradient(top center, ellipse cover, rgba(99,3,35,1) 0%, rgba(41,8,20,1) 100%);
        background: rgba(99,3,35,1);


        background: -moz-radial-gradient(top center, ellipse cover, rgba(99,3,35,1) 0%, rgba(7,0,16,1) 100%);
        background: -webkit-gradient(radial, top center, 0px, top center, 100%, , color-stop(0%, rgba(99,3,35,1)), color-stop(100%, rgba(7,0,16,1)));
        background: -webkit-radial-gradient(top center, ellipse cover, rgba(99,3,35,1) 0%, rgba(7,0,16,1) 100%);
        background: -o-radial-gradient(top center, ellipse cover, rgba(99,3,35,1) 0%, rgba(7,0,16,1) 100%);
        background: -ms-radial-gradient(top center, ellipse cover, rgba(99,3,35,1) 0%, rgba(7,0,16,1) 100%);
        background: radial-gradient(ellipse at top center, rgba(99,3,35,1) 0%, rgba(7,0,16,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#036323', endColorstr='#072110', GradientType=1 );
        background-repeat: no-repeat;
        background-attachment: fixed;
    }









    }

    .mainbody{
      width: 80%;
      min-height: 900px;
      border-radius:30px;

      margin-left: 10%;
      background-color: #000000;
      color: #ffffff;
    }

    .blackouttext{
      color:#000000;
    }

    .whiteoutext{
      color:#ffffff;
    }

  


    a, a:visited {
      text-decoration:none;
    }

    h1 {
      font-size: 32px;
      margin: 16px 0 0 0;
      color:#ffffff;
    }
  </style>



  @section('style')


</head>



<body>



      {{--DATEPICKER INSTANTIATEX10--}}
            @foreach(range(1,10) as $datetimepicker)
              <script language="javascript">jQuery("#datetimepicker_{{$datetimepicker}}").datetimepicker(
                {theme:'dark',
                 format:'d.m.Y H:i',
                 step:15});</script>
            @endforeach
      {{--DATEPICKER END--}}



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56104944-1', 'auto');
  ga('send', 'pageview');

</script>



 <div class="row">
        <div class="large-12 columns">
         
     
         
          <div class="row">
            <div class="large-12 columns">


<ul class="example-orbit" data-orbit style="max-height:300px">
  <li>
    <img src="http://www.eternallynocturnal.com/images/halloween15.jpg" alt="slide 1" />
  </li>
  <li class="active">
    <img src="http://www.eternallynocturnal.com/images/iand.jpg" alt="slide 2" />

</ul>




              <nav class="top-bar" data-topbar>
                <ul class="title-area">
                   
                  <li class="name">
                    <h1>
                    </h1>
                  </li>
                  <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
                </ul>
             
                <section class="top-bar-section">

                  
                   
                  <ul class="right">
                    
                    <li class="divider"></li>
                     <li class="has-dropdown">
                      <a href="#">Shop</a>
                      <ul class="dropdown">
                     <li >
                      
                        {{link_to_route('contacts.index', 'Contacts')}}
                        <a href="#" data-reveal-id="newContact" data-reveal><i class="fi-plus"></i> New Contact</a>
                     </li>  
                      </ul>

                     <li class="divider"></li>
                     <li class="has-dropdown">
                      <a href="#">Shop</a>
                      <ul class="dropdown">
                     <li>
                
                        {{link_to_route('product.index', 'Current Inventory')}}
                        <a href="#" data-reveal-id="newProduct" data-reveal><i class="fi-plus"></i> New Product</a>
                        {{link_to_route('imager.create', 'Add Images')}}


                      </ul>

              

                  <li class="divider"></li>
                     <li class="has-dropdown">
                      <a href="#">Shows & Venues</a>
                      <ul class="dropdown">
                        <li><label>Shows</label></li>
                        <li class="divider"></li>
                     <li>
                        Current Shows<br>
                        New Show<br>
                        Media<br>
                      </li>
                      <li><label>Venues</label></li>
                      <li class="divider"></li>
                      <li>
                        Current Venues<br>
                        <a href="#" data-reveal-id="newVenue" data-reveal><i class="fi-plus"></i> New Venue</a>
                      </ul>

                       <li class="divider"></li>
                     <li class="has-dropdown">
                      <a href="#">Art & Bands</a>
                      <ul class="dropdown">
                     <li><label>Art</label></li>
                        <li class="divider"></li>
                     <li>
                        Current Artists<br>
                        {{link_to_route('product.index', 'New Artist Profile')}}
                        Media<br>
                      </li>
                      <li><label>Bands</label></li>
                      <li class="divider"></li>
                      <li>
                        Current Bands<br>
                        New Band Profile<br>
                        Media<br>
                      </ul>


                      </ul>

                  </ul>

                  <ul class="left">
                    <li class="divider"></li>
                    <li>
                      <a href="https://twitter.com/enclothingco" target="blank"><i class="fi-social-twitter" style="font-size:20px"></i></a>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="https://www.facebook.com/EternallyNocturnal" target="blank"><i class="fi-social-facebook" style="font-size:20px"></i></a>
                    </li>
                    

                  </ul>

                </section>
              </nav>
               
            </div>
          </div>

    




</div>
  <center>
<div style="min-height:100%;background-color:#000000;">

@yield('content')


<div id="newVenue" class="reveal-modal" style="height:700px;max-height:80%;overflow-y:scroll;background-color:#000000;" data-reveal> 
          {{--CONTENT HERE--}}

                                  {{View::make('venues.create')}}
                                  
          {{--END CONTENT--}}

      <a class="close-reveal-modal">&#215;</a>


      </div>


      <div id="newContact" class="reveal-modal" style="height:700px;max-height:80%;overflow-y:scroll;background-color:#000000;" data-reveal> 

                            {{View::make('contacts.create')}}


      <a class="close-reveal-modal">&#215;</a>


      </div>

      <div id="newProduct" class="reveal-modal" style="max-height:80%;overflow-y:scroll;background-color:#000000;" data-reveal> 

                                {{View::make('producers.create')}}

          <a class="close-reveal-modal">&#215;</a>


       </div>

</div>
</center>



  <script src="http://www.eternallynocturnal.com/store/public/foundation/js/vendor/jquery.js"></script>
  <script src="http://www.eternallynocturnal.com/store/public/foundation/js/foundation.min.js"></script>

  <script>
    $(document).foundation();
  </script>


</body>
</html>
