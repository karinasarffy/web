<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script>
    <script src="js/Vegur_300.font.js" type="text/javascript"></script>
    <script src="js/Vegur_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/css3-mediaqueries.js"></script>
    <!--[if lt IE 7]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img
                src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"
                alt=""/></a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5.js"></script>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <![endif]-->
</head>
<body id="page5">
<div class="bg">
    <!-- header -->
    <header>
        <div class="menu-row">
            <div class="main">
                <div class="zerogrid">
                    <div class="row">
                        <div class="col-full">
                            <div class="wrap-col" style="margin-top: 0px;">
                                <nav class="wrapper">
                                    <ul class="menu">
                                        <li><a href="index.html">About us</a></li>
                                        <li><a class="active" href="authentication.html">Authentication</a></li>
                                        <li><a href="registration.html">Registration</a></li>
                                        <li><a href="courses.html">Our courses</a></li>
                                        <li><a href="contacts.html">Contacts</a></li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- content -->
    <section id="content">
        <div class="main">
            <main>

                <?php

                function getInputValue($data)
                {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                $lastName = getInputValue($_REQUEST["name"]);
                $firstName = getInputValue($_REQUEST["prenume"]);
                $city = getInputValue($_REQUEST["city"]);
                $phone = getInputValue($_REQUEST["telefon"]);
                $email = getInputValue($_REQUEST["email"]);
                $subject = getInputValue($_REQUEST["materie"]);


                try {
                    $conn = new PDO("mysql:host=mysql.hostinger.ro;charset=utf8;dbname=u913383296_des", "u913383296_kar", "iapdesign");

                    $statement = $conn->prepare("INSERT INTO cursant (`nume`, `prenume`, `oras`, `tel`, `email`, `materie`, `parola`) VALUES(?, ?, ?, ?, ?, ?, ?)");
                    $statement->execute(array($lastName, $firstName, $city, $phone, $email, $subject, 'student'));


                    echo 'Student ' . $lastName . ' ' . $firstName . " created successfully";
                } catch (PDOException $e) {
                    echo $sql . "<br>" . $e->getMessage();
                }

                $conn = null;
                ?>
            </main>
        </div>
    </section>
</div>

<!-- aside -->

<footer>
    <div class="main">
        <div class="zerogrid">
            <div class="row">
                <div class="col-2-3">
                    <div class="wrap-col">
                        <div class="footer-text">
                            <b><strong>Interior Design</strong> </b> Designed by <a rel="nofollow" target="_blank">Sarffy
                                Karina</a> | <a rel="nofollow" target="_blank">IAP Klausenburg Romania</a>
                        </div>
                        <ul class="list-services">
                            <li><a class="item-1" href="#"></a></li>
                            <li><a class="item-2" href="#"></a></li>
                            <li><a class="item-3" href="#"></a></li>
                            <li><a class="item-4" href="#"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
