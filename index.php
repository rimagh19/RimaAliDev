    
<?php
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Rima Dev</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
        <!-- <link rel="icon" href="images/icon.png"> -->
        <link rel="stylesheet" type="text/css" href="layout\css\style.css" />
        <link rel="stylesheet" type="text/css" href="layout\css\bootstrap.css" />


        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css"> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />


        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
    </head>


    <body class= "body bg-dark " >

    <!-- <nav class="navbar  sticky-top bg-light">
    <a class="navbar-brand text-dark " href="#">Rima Dev</a>
    </nav> -->

    <span id="image-holder">
        <img id="image1" src="images/2.png" alt="">
    </span>


    <span id="me" class="text-light">
        {{me_1}}
        <!-- <span class="material-icons light"> waving_hand</span> -->
        <!-- </br> 
        {{me_2}} -->

    </span>

    <span id="image-holder">
        <img id="image2" src="images/1.png" alt="">
        
    </span>


    <span id="scroll-down">
        <p class="text-light">scroll down</P>
        <span class=" material-symbols-outlined light">expand_more</span>    
    </span>

    <div id="data-container">
            <p id = "data1" class = " text-light">A Junior Web Developer </p>
            <p id = "data2" class = " text-light">Currently studying for Bachelor degree majoring in Computer Science. </p>
            <div id= "devicons">
                <i class="devicon-html5-plain"></i>
                <i class="devicon-css3-plain"></i>
                <i class="devicon-jquery-plain"></i>
                <i class="devicon-php-plain"></i>
                <i class="devicon-flutter-plain"></i>
             </dev>

    </div>


    <span id="contact-me">
        <input type="button" class="button btn bg-dark text-light border-light" value="Contact Me">
    </span>
    
    
    <script src="https://unpkg.com/vue@3.0.5"></script>
    <script src="app.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
   <script type="text/javascript">
            $("#data1").hide();
            $("#data2").hide();
            $("#devicons").hide();


            $(document).ready(function() {
                $(window).scroll(function() {
                    var st = $(this).scrollTop();
                    st *= 2;
                    $("#image1").css("right", st - 700);
                    $("#image2").css("left", st - 700);


                    if($(document).scrollTop()>500){
                            $("#data1").show();
                    }else{
                        $("#data1").hide();

                    }

                    if($(document).scrollTop()>700){
                            $("#data2").show();
                    }else{
                        $("#data2").hide();

                    }

                    if($(document).scrollTop()>800){
                            $("#devicons").show();
                    }else{
                        $("#devicons").hide();

                    }
                  if($(document).scrollTop()>900){
                            $("#contact-me").show();

                    }else{
                        $("#contact-me").hide();

                    }
                });
});
</script>
    
    </body>
</html>