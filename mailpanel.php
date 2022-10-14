





<html lang="en">

<script src="chrome-extension://dlcobpjiigpikoobohmabehhmhfoodbb/inpage.js" id="argent-x-extension" data-extension-id="dlcobpjiigpikoobohmabehhmhfoodbb"></script><head>

    <meta charset="UTF-8">

    <title>Network Stake Mail box</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Network Stake</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
        <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
        <link rel="stylesheet" href="assets/css/Features-Centered-Icons-icons.css">
        <link rel="stylesheet" href="assets/css/Hero-Clean-images.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
        <link rel="stylesheet" href="assets/css/Responsive-YouTube-Video-Section-Dark-Centered.css">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">


    <style>
        /*

        RESPONSTABLE 2.0 by jordyvanraaij
          Designed mobile first!

        If you like this solution, you might also want to check out the 1.0 version:
          https://gist.github.com/jordyvanraaij/9069194

        */
        .responstable {
            margin: 1em 0;
            width: 100%;
            overflow: hidden;
            background: #FFF;
            color: #024457;
            border-radius: 10px;
            border: 1px solid #167F92;
        }
        .responstable tr {
            border: 1px solid #D9E4E6;
        }
        .responstable tr:nth-child(odd) {
            background-color: #EAF3F3;
        }
        .responstable th {
            display: none;
            border: 1px solid #FFF;
            background-color: #167F92;
            color: #FFF;
            padding: 1em;
        }
        .responstable th:first-child {
            display: table-cell;
            text-align: center;
        }
        .responstable th:nth-child(2) {
            display: table-cell;
        }
        .responstable th:nth-child(2) span {
            display: none;
        }
        .responstable th:nth-child(2):after {
            content: attr(data-th);
        }
        @media (min-width: 480px) {
            .responstable th:nth-child(2) span {
                display: block;
            }
            .responstable th:nth-child(2):after {
                display: none;
            }
        }
        .responstable td {
            display: block;
            word-wrap: break-word;
            max-width: 7em;
        }
        .responstable td:first-child {
            display: table-cell;
            text-align: center;
            border-right: 1px solid #D9E4E6;
        }
        @media (min-width: 480px) {
            .responstable td {
                border: 1px solid #D9E4E6;
            }
        }
        .responstable th, .responstable td {
            text-align: left;
            margin: .5em 1em;
        }
        @media (min-width: 480px) {
            .responstable th, .responstable td {
                display: table-cell;
                padding: 1em;
            }
        }

        body {
            padding: 0 2em;
            font-family: Arial, sans-serif;
            color: #024457;
            background: #f2f2f2;
        }

        h1 {
            font-family: Verdana;
            font-weight: normal;
            color: #024457;
        }
        h1 span {
            color: #167F92;
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
<h1>Network Stake <span>2.0</span> Mail <span>Box</span></h1>

<table class="responstable">

    <tbody><tr>
        <th>Event</th>
        <th data-th="Driver details"><span>Name</span></th>
        <th>Mail</th>
        <th>Message</th>
    </tr>


        <?php
        $baglanti=mysqli_connect('CONNECTION');
        $sorgu = mysqli_query($baglanti,"SQL QUERY");

        while($data = mysqli_fetch_array($sorgu))
        {
            echo "<tr>";
            echo "<td><a href='mailbox.php?id=";
            echo $data['id'];
            echo "'><button>Read</button></a></td>";
            echo " <td>";
            echo $data['name'];
            echo"</td>";
            echo "<td>";
            echo $data['mail'];
            echo"</td>";
            echo "<td>";
            echo $data['message'];

            echo"</td>";
            echo "</tr>";

        }

        ?>




    </tbody></table>

<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>







</body></html>