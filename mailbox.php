<html lang="en"><script src="chrome-extension://dlcobpjiigpikoobohmabehhmhfoodbb/inpage.js" id="argent-x-extension" data-extension-id="dlcobpjiigpikoobohmabehhmhfoodbb"></script><head>

    <meta charset="UTF-8">

    <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
    <meta name="apple-mobile-web-app-title" content="CodePen">

    <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">

    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">


    <title>Read Page Network Stake</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <style>
        .content {
            text-align: justify;
            background-color: white;
            margin-top: -100px;
            padding-top: 18px;
            border-top: solid #C7BA17 10px;
            padding-right:25px;
            padding-left:25px;
            padding-bottom: 25px;
            box-shadow: 0px 2px 2px #888888,
            -2px 2px 2px #888888, 2px 2px 2px #888888;
            margin-bottom: 50px;
        }
        h3 {
            font-size: 20px;
        }

        .header {
            background-image: url(https://lh3.googleusercontent.com/DXJMxm3TMnNefgwt28w36_ONNnEDRsLIOC2iaZPNgH5KqIodQegKCYE-qc4bW5mIBBbQ8Lc_1w);
            height: 299px;

        }
        body {
            background-color: #6084f3;

        }

        h1{
            text-align: left;
            font-size: 40px;
        }

        h2{
            background-color: rgb(13, 136, 63);
            color: white;
            padding: 20px;
            font-size: 24px;
            margin-left:-25px;
            margin-right:-25px;
        }
    </style>

    <script>
        window.console = window.console || function(t) {};
    </script>



    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>


</head>

<body translate="no">
<div class="header"> </div>
<div class="container">

    <div class="col-lg-8 col-lg-offset-2 content">
        <?php
        $id=$_GET['id'];
        $baglanti=mysqli_connect('CONNECTION');
        $sorgu = mysqli_query($baglanti,"SQL QUERY");
        while($data = mysqli_fetch_array($sorgu))
        {

          echo "<h3>Name:</h3>";
          echo "<p>";
          echo $data["name"];
          echo "</p>";
          echo "<h3>Mail:</h3>";
          echo "<p>";
          echo $data["mail"];
          echo "</p>";
          echo "<h3>Message:</h3>";
          echo " <p>";
          echo $data["message"];
          echo "</p>";
          echo "<a href='adminstake.php'><button>Back To Mail Box</button></a>";
        }
        ?>

    </div>

</div>









</body></html>
