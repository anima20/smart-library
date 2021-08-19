

<html>
<head>

  <style type="text/css">


    .header{
      background-color:#333;
      font-size: 14px;
      color:white;
    }
    span{
    font-family: 'Lovers Quarrel', cursive;
    font-size: 2em;
    color: #F44336;
    vertical-align: sub;
    margin-right: 3px;
  }
   
   #nvbr{
     height:6%;
   }

    #imageContainer{
      /* overflow: hidden; */
      margin-top: 3%;
      
    }

    #imageContainer img {
      animation: kenburns 20s infinite;
    }

    @keyframes kenburns {
      0%{
        opacity: 0;
      }
      5%{
        opacity: 1;
      }
      95%{
        transform: scale3d(1.5, 1.5, 1.5);
        opacity: 1;
        animation-timing-function: ease-in;
      }
      100%{
        transform: scale3d(2,2,2);
        opacity: 0;
      }
    }
    .hdr{
      height:5%;
    }
    #cntnr{
        height:600px;
    }
  </style>

  <link href="font-awesome.css" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/875301f134.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nvbr">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <p><a style="font-size: 14px;" class="navbar-brand" href="#">UPTO 20% OFF ON First Shopping | USE COUPON CODE ANKIT20</a></p>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      
    </ul>
    <form class="form-inline my-2 my-lg-0">

      <p><i style="color:white" class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;<a style="color:white;font-size: 0.9em;" href="#">My Account</a></p>&nbsp;&nbsp;&nbsp;
      <p><i style="color:white" class="fa fa-percent" aria-hidden="true"></i>&nbsp;&nbsp;<a  style="color:white; font-size: 0.9em;" href="#">Today's Deals</a></p>&nbsp;&nbsp;&nbsp;
      <p><i style="color:white" class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;<a style="color:white; font-size: 0.9em;" href="#">Store Finder</a></p>&nbsp;&nbsp;&nbsp;
      <p><i style="color:white" class="fa fa-question-circle" aria-hidden="true"></i>&nbsp;&nbsp;<a  style="color:white; font-size: 0.9em;" href="logout.php">Logout</a></p>&nbsp;&nbsp;&nbsp;
    </form>
  </div>
</nav>

    <div class="hdr">
      <?php include('header2.php'); ?>
    </div>  


    <div id="imageContainer">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel" data-pause="hover"data-interval="6000">

        
            <div id="cntnr" class="carousel-inner">
                <div class="carousel-item active" data-interval="2000">
                <img width="200px" src="images/5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption kb_caption kb_caption_right">
                                    <h3 data-animation="animated flipInX">Flat <span>50%</span> Discount</h3>
                                    <h4 data-animation="animated flipInX">Hot Offer Today Only</h4>
                </div>
                </div>
                <div class="carousel-item" data-interval="2000">
                <img width="200px" src="images/5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption kb_caption kb_caption_right">
                                    <h3 data-animation="animated fadeInDown">Our Latest Fashion Editorials</h3>
                                    <h4 data-animation="animated fadeInUp"></h4>
                </div>
                </div>
                <div class="carousel-item">
                <img width="200px" src="images/5.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption kb_caption kb_caption_center">
                                    <h3 data-animation="animated fadeInLeft">End Of Season Sale</h3>
                                    <h4 data-animation="animated flipInX"></h4>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>  

    <?php include('home.php'); ?>
</body>
</html>