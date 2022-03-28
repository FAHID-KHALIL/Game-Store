<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <link href="design.css" type="text/css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/venobox/1.9.3/venobox.min.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>



      $(document).ready(function()
      {
        $("#new").click(function()
        {
          $(".popular-items").fadeOut();
          $(".new-items").fadeIn();
        })


        $("#popular").click(function()
        {
          $(".popular-items").fadeIn();
          $(".new-items").fadeOut();
        })
      })

      $("#buy1").click(function()
      {

          document.getElementById("buy1").style.backgroundColor = "green";
          document.getElementById("buy1").innerHTML = "PURCHASED";

      })




    </script>



  </head>

  <body>
    <header>
      <a href="Index.php" ><img class="logo" src="images/hey.png"></a>
      <nav>
        <ul class="nav_links">
            <li><a href="Index.php">Store</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Contact.php">Contact</a></li>
        <ul>
      </nav>

      <div class="sys">
        <?php

        if(isset($_GET['error']))
        {
          if($_GET['error'] == "nouser")
            {
              echo "<script type='text/javascript'>alert('ERROR: User Not Found.');</script>";
            }
          else if ($_GET['error'] == "wrongpwd")
            {
              echo "<script type='text/javascript'>alert('ERROR: Wrong Password.');</script>";
            }
            else if($_GET['error'] == "emptyfields")
            {
              echo "<script type='text/javascript'>alert('ERROR: Fill Empty Fields.');</script>";
            }
        }

         if(isset($_SESSION['uid']))
         {
           $name = $_SESSION['user'];
           echo ' <p class="user">Welcome ' . $name. '</p><form action="loginsystem/logout.php" method="post">
             <button type="submit" name="logout" id="logout">LogOut</button>
           </form><script>var x = true;</script> ';
         }
         else
         {
             echo ' <form class="login-box" action="loginsystem/login.php" method="post">
               <input type="text" name="username" placeholder="Username">
               <input type="password" name="pwd" placeholder="Password"> 
               <button type="submit" name="login">Login</button>
             </form>
             <a id="signup" href="Register.php">SignUp</a> ';
         }

        ?>
      </div>
   </header>
   <hr>

<!--SLIDESHOW-------------------------------------------------->

     <p class="recommend">RECOMMENDED FOR YOU</p>
     <div class="slidershow middle">
       <div class="slides">
         <input type="radio" name="r" id="r1" checked>
         <input type="radio" name="r" id="r2">
         <input type="radio" name="r" id="r3">

         <div class="slide s1">
           <img src="images/1.jpg">
           <div class="bottom-left">Resident Evil 7</div>
           <div class="bottom-right">$29.99</div>
         </div>
         <div class="slide">
           <img src="images/2.jpg">
           <div class="bottom-left">Diablo |||</div>
           <div class="bottom-right">$39.99</div>
         </div>
         <div class="slide">
           <img src="images/3.jpg">
           <div class="bottom-left">Tom Clancy's The Division</div>
           <div class="bottom-right">$7.99</div>
         </div>
       </div>

      <div class="navigation">
       <label for="r1" class="bar"></label>
       <label for="r2" class="bar"></label>
       <label for="r3" class="bar"></label>
     </div>
   </div>
   <hr>

<!---ON SALE---------------------------------->

   <p class="sale">ON SALE</p><br>

   <ul class="sale-items">
      <li>
        <div class="sale-item">
          <span class="sale-name">CSGO</span>
          <span class="sale-per">-10%</span>
          <span class="sale-price">$9</span>
         <a href="images/onsale/1.jpg"> <img src="images/onsale/1.jpg"></a>
        </div>
      </li>
      <li>
        <div class="sale-item">
          <span class="sale-name" style="margin-left:65px;">OverWatch</span>
          <span class="sale-per">-10%</span>
          <span class="sale-price">$9</span>
         <a href="images/onsale/2.jpg"> <img src="images/onsale/2.jpg"></a>


        </div>
      </li>
      <li>
        <div class="sale-item">
          <span class="sale-name" style="margin-left:10px;">Ghost Recon: BreakPoint</span>
          <span class="sale-per">-10%</span>
          <span class="sale-price">$9</span>
          <a href="images/onsale/3.jpg"><img src="images/onsale/3.jpg"></a>
        </div>
      </li>
      <li>
        <div class="sale-item">
          <span class="sale-name" style="margin-left:45px;">Assassin's Creed</span>
          <span class="sale-per">-10%</span>
          <span class="sale-price">$9</span>
          <a href="images/onsale/4.jpg"><img src="images/onsale/4.jpg"></a>
        </div>
      </li>
   </ul>
   <br>
   <hr class="pls">


   <!---ITEMS-------------------------------------------------------------------------->


   <div class="new-popular">
       <button type="button" id="new">NEW</button>
       <button type="button" id="popular">POPULAR</button>
   </div><br><br>

   <script >
     $(document).ready(function()
     {


     $("#buy1").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy1").style.backgroundColor = "green";
         document.getElementById("buy1").innerHTML = "PURCHASED";
       }
     })

     $("#buy2").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy2").style.backgroundColor = "green";
         document.getElementById("bu````````````y2").innerHTML = "PURCHASED";
       }
     })

     $("#buy3").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy3").style.backgroundColor = "green";
         document.getElementById("buy3").innerHTML = "PURCHASED";
       }
     })

     $("#buy4").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy4").style.backgroundColor = "green";
         document.getElementById("buy4").innerHTML = "PURCHASED";
       }
     })

     $("#buy5").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy5").style.backgroundColor = "green";
         document.getElementById("buy5").innerHTML = "PURCHASED";
       }
     })

     $("#buy6").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy6").style.backgroundColor = "green";
         document.getElementById("buy6").innerHTML = "PURCHASED";
       }
     })

     $("#buy7").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy7").style.backgroundColor = "green";
         document.getElementById("buy7").innerHTML = "PURCHASED";
       }
     })

     $("#buy8").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy8").style.backgroundColor = "green";
         document.getElementById("buy8").innerHTML = "PURCHASED";
       }
     })



     $("#buy9").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy9").style.backgroundColor = "green";
         document.getElementById("buy9").innerHTML = "PURCHASED";
       }
     })

     $("#buy10").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy10").style.backgroundColor = "green";
         document.getElementById("buy10").innerHTML = "PURCHASED";
       }
     })

     $("#buy11").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy11").style.backgroundColor = "green";
         document.getElementById("buy11").innerHTML = "PURCHASED";
       }
     })

     $("#buy12").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy12").style.backgroundColor = "green";
         document.getElementById("buy12").innerHTML = "PURCHASED";
       }
     })

     $("#buy13").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy13").style.backgroundColor = "green";
         document.getElementById("buy13").innerHTML = "PURCHASED";
       }
     })

     $("#buy14").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy14").style.backgroundColor = "green";
         document.getElementById("buy14").innerHTML = "PURCHASED";
       }
     })

     $("#buy15").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy15").style.backgroundColor = "green";
         document.getElementById("buy15").innerHTML = "PURCHASED";
       }
     })

     $("#buy16").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy16").style.backgroundColor = "green";
         document.getElementById("buy16").innerHTML = "PURCHASED";
       }
     })

     $("#buy17").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy17").style.backgroundColor = "green";
         document.getElementById("buy17").innerHTML = "PURCHASED";
       }
     })

     $("#buy18").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy18").style.backgroundColor = "green";
         document.getElementById("buy18").innerHTML = "PURCHASED";
       }
     })

     $("#buy19").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy19").style.backgroundColor = "green";
         document.getElementById("buy19").innerHTML = "PURCHASED";
       }
     })

     $("#buy20").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy20").style.backgroundColor = "green";
         document.getElementById("buy20").innerHTML = "PURCHASED";
       }
     })

     $("#buy21").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy21").style.backgroundColor = "green";
         document.getElementById("buy21").innerHTML = "PURCHASED";
       }
     })

     $("#buy22").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy22").style.backgroundColor = "green";
         document.getElementById("buy22").innerHTML = "PURCHASED";
       }
     })

     $("#buy23").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy23").style.backgroundColor = "green";
         document.getElementById("buy23").innerHTML = "PURCHASED";
       }
     })

     $("#buy24").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy24").style.backgroundColor = "green";
         document.getElementById("buy24").innerHTML = "PURCHASED";
       }
     })

     $("#buy25").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy25").style.backgroundColor = "green";
         document.getElementById("buy25").innerHTML = "PURCHASED";
       }
     })

     $("#buy26").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy26").style.backgroundColor = "green";
         document.getElementById("buy26").innerHTML = "PURCHASED";
       }
     })

     $("#buy27").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy27").style.backgroundColor = "green";
         document.getElementById("buy27").innerHTML = "PURCHASED";
       }
     })
     $("#buy28").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy28").style.backgroundColor = "green";
         document.getElementById("buy28").innerHTML = "PURCHASED";
       }
     })

     $("#buy29").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy29").style.backgroundColor = "green";
         document.getElementById("buy29").innerHTML = "PURCHASED";
       }
     })

     $("#buy30").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy30").style.backgroundColor = "green";
         document.getElementById("buy30").innerHTML = "PURCHASED";
       }
     })

     $("#buy31").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy31").style.backgroundColor = "green";
         document.getElementById("buy31").innerHTML = "PURCHASED";
       }
     })
     $("#buy32").click(function()
     {
       if(x==true)
       {
         document.getElementById("buy32").style.backgroundColor = "green";
         document.getElementById("buy32").innerHTML = "PURCHASED";
       }
     })



   })

   </script>

   <!--POPULAR GAMES---------->

   <ul class="items">
     <div class="popular-items">
     <li>
       <div class="item">
         <img src="images/items/1.jpg">
         <p class="item-name">Dota 2 <br><br>
           <img src="https://img.icons8.com/metro/26/000000/steam.png">
           <br>Real‑time Strategy</p>
         <button type="button" id="buy1">FREE</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/2.jpg">
         <p class="item-name">Grand Theft Auto 2 <br><br>
           <img src="https://img.icons8.com/metro/26/000000/steam.png">
           <img src="https://img.icons8.com/ios-filled/50/000000/ds3-tool.png">
           <img src="https://img.icons8.com/metro/26/000000/xbox.png">
           <br>Action-adventure</p>
         <button type="button" id="buy2">$29.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/3.jpg">
         <p class="item-name">League of Legends <br><br>
           <img src="https://img.icons8.com/ios-glyphs/30/000000/league-of-legends.png">
           <br>Real‑time Strategy</p>
         <button type="button" id="buy3">FREE</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/4.jpg">
         <p class="item-name">Outlast 2 <br><br>
           <img src="https://img.icons8.com/metro/26/000000/steam.png">
           <img src="https://img.icons8.com/ios-filled/50/000000/ds3-tool.png">
           <img src="https://img.icons8.com/metro/26/000000/xbox.png">
           <br>Horror</p>
         <button type="button" id="buy4">$24.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/5.jpg">
         <p class="item-name">Watch Dogs <br><br>
           <img src="https://img.icons8.com/metro/26/000000/steam.png">
           <img src="https://img.icons8.com/ios-filled/50/000000/ds3-tool.png">
           <img src="https://img.icons8.com/metro/26/000000/xbox.png">
           <br>Action-adventure</p>
         <button type="button" id="buy5">$49.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/6.jpg">
         <p class="item-name">Red Dead Redemption 2 <br><br>
         <img src="https://img.icons8.com/metro/26/000000/steam.png">
         <img src="https://img.icons8.com/ios-filled/50/000000/ds3-tool.png">
         <img src="https://img.icons8.com/metro/26/000000/xbox.png">
         <br>Action-adventure</p>
         <button type="button" id="buy6">$59.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/7.jpg">
         <p class="item-name">Cyberpunk 2077 <br><br>
          <img src="https://img.icons8.com/metro/26/000000/steam.png">
          <br>Action Role-Playing
        </p>
         <button type="button" id="buy7">$59.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/8.jpg">
         <p class="item-name">Halo <br><br>
            <img src="https://img.icons8.com/metro/26/000000/steam.png">
            <img src="https://img.icons8.com/ios-filled/50/000000/ds3-tool.png">
            <img src="https://img.icons8.com/metro/26/000000/xbox.png">
            <br>First-Person Shooter
          </p>
         <button type="button" id="buy8">$39.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/9.jpg">
         <p class="item-name">Rust<br><br>
         <img src="https://img.icons8.com/metro/26/000000/steam.png">
         <br>Survival Game
       </p>
         <button type="button" id="buy9">$34.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/10.jpg">
         <p class="item-name">Dark Souls <br><br>
            <img src="https://img.icons8.com/metro/26/000000/steam.png">
            <img src="https://img.icons8.com/ios-filled/50/000000/ds3-tool.png">
            <img src="https://img.icons8.com/metro/26/000000/xbox.png">
            <br>Action Role-Playing
         </p>
         <button type="button" id="buy10">$59.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/11.jpg">
         <p class="item-name">Need For Speed <br><br>
            <img src="https://img.icons8.com/metro/26/000000/steam.png">
            <img src="https://img.icons8.com/ios-filled/50/000000/ds3-tool.png">
            <img src="https://img.icons8.com/metro/26/000000/xbox.png">
            <br>Racing
         </p>

         <button type="button" id="buy11">$19.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/12.jpg">
         <p class="item-name">Zelda <br><br>
           <img src="https://img.icons8.com/windows/32/000000/nintendo.png">
           <br>Action-Adventure Game
         </p>
         <button type="button" id="buy12">$41.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/13.jpg">
         <p class="item-name">Uncharted 4 <br><br>
           <img src="https://img.icons8.com/ios-filled/50/000000/ds3-tool.png">
           <img src="https://img.icons8.com/metro/26/000000/xbox.png">
           <br>Action-Adventure Game
         </p>
         <button type="button" id="buy13">$14.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/14.jpg">
         <p class="item-name">Call Of Duty: Black ops 2 <br><br>
            <img src="https://img.icons8.com/metro/26/000000/steam.png">
            <img src="https://img.icons8.com/ios-filled/50/000000/ds3-tool.png">
            <img src="https://img.icons8.com/metro/26/000000/xbox.png">
            <br>First-Person Shooter
         </p>

         <button type="button" id="buy14">$59.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/15.jpg">
         <p class="item-name">Team Fortress 2 <br><br>
            <img src="https://img.icons8.com/metro/26/000000/steam.png">
            <br>First-Person Shooter
          </p>

         <button type="button" id="buy15">FREE</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/16.jpg">
         <p class="item-name">Destiny 2 <br><br>
            <img src="https://img.icons8.com/metro/26/000000/steam.png">
            <img src="https://img.icons8.com/ios-filled/50/000000/ds3-tool.png">
            <img src="https://img.icons8.com/metro/26/000000/xbox.png">
            <br>First-Person Shooter
          </p>
         <button type="button" id="buy16">FREE</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/17.jpg">
         <p class="item-name">Rocket League <br><br>
            <img src="https://img.icons8.com/metro/26/000000/steam.png">
            <img src="https://img.icons8.com/ios-filled/50/000000/ds3-tool.png">
            <img src="https://img.icons8.com/metro/26/000000/xbox.png">
            <br>Sport Game</p>
         <button type="button" id="buy17">$19.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/18.jpg">
         <p class="item-name">Tom Clancy's Rainbow Six Siege <br><br>
            <img src="https://img.icons8.com/metro/26/000000/steam.png">
            <img src="https://img.icons8.com/ios-filled/50/000000/ds3-tool.png">
            <img src="https://img.icons8.com/metro/26/000000/xbox.png">
            <br>First-Person Shooter</p>
         <button type="button" id="buy18">$19.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/19.jpg">
         <p class="item-name">The Witch 3: Wild Hunt <br><br>
            <img src="https://img.icons8.com/metro/26/000000/steam.png">
            <br>Open World</p>
         <button type="button" id="buy19">$39.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/20.jpg">
         <p class="item-name">Warframe <br><br>
            <img src="https://img.icons8.com/metro/26/000000/steam.png">
            <br>Third-Person Shooter</p>
         <button type="button" id="buy20">FREE</button>
       </div>
     </li>
     </div>
     <!---NEW GAMES----------->
     <div class="new-items">
     <li>
       <div class="item">
         <img src="images/items/21.jpg">
         <p class="item-name">Dragon Ball Z: Kakarot <br><br>
           <img src="https://img.icons8.com/metro/26/000000/steam.png">
           <br>Action Role-Playing Game</p>
         <button type="button" id="buy21">$59.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/22.jpg">
         <p class="item-name">Raft <br><br>
           <img src="https://img.icons8.com/metro/26/000000/steam.png">
           <br>Survival Game</p>
         <button type="button" id="buy22">$19.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/23.jpg">
         <p class="item-name">The Forest <br><br>
           <img src="https://img.icons8.com/metro/26/000000/steam.png">
           <br>Survival</p>
         <button type="button" id="buy23">$19.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/24.jpg">
         <p class="item-name">No Man's Sky <br><br>
           <img src="https://img.icons8.com/metro/26/000000/steam.png">
           <img src="https://img.icons8.com/ios-filled/50/000000/ds3-tool.png">
           <img src="https://img.icons8.com/metro/26/000000/xbox.png">
           <br>Action-Adventure Game</p>
         <button type="button" id="buy24">$59.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/25.jpg">
         <p class="item-name">The Elder Scrolls: Skyrim <br><br>
           <img src="https://img.icons8.com/metro/26/000000/steam.png">
           <img src="https://img.icons8.com/ios-filled/50/000000/ds3-tool.png">
           <img src="https://img.icons8.com/metro/26/000000/xbox.png">
           <br>Open World Game</p>
         <button type="button" id="buy25">$39.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/26.jpg">
         <p class="item-name">Pummel Party <br><br>
           <img src="https://img.icons8.com/metro/26/000000/steam.png">
           <img src="https://img.icons8.com/ios-filled/50/000000/ds3-tool.png">
           <img src="https://img.icons8.com/metro/26/000000/xbox.png">
           <br>Fun Game</p>
         <button type="button" id="buy26">$14.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/27.jpg">
         <p class="item-name">Sekiro: Shadow Die Twice <br><br>
           <img src="https://img.icons8.com/metro/26/000000/steam.png">
           <img src="https://img.icons8.com/ios-filled/50/000000/ds3-tool.png">
           <img src="https://img.icons8.com/metro/26/000000/xbox.png">
           <br>Action-Adventure Game</p>
         <button type="button" id="buy27">$59.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/28.jpg">
         <p class="item-name">Terraria <br><br>
           <img src="https://img.icons8.com/metro/26/000000/steam.png">
           <img src="https://img.icons8.com/ios-filled/50/000000/ds3-tool.png">
           <img src="https://img.icons8.com/metro/26/000000/xbox.png">
           <br>Survival Game</p>
         <button type="button" id="buy28">$9.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/29.jpg">
         <p class="item-name">Garry's Mod <br><br>
           <img src="https://img.icons8.com/metro/26/000000/steam.png">
           <img src="https://img.icons8.com/ios-filled/50/000000/ds3-tool.png">
           <img src="https://img.icons8.com/metro/26/000000/xbox.png">
           <br>Open World</p>
         <button type="button" id="buy29">$9.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/30.jpg">
         <p class="item-name">Dead By DayLight <br><br>
           <img src="https://img.icons8.com/metro/26/000000/steam.png">
           <img src="https://img.icons8.com/ios-filled/50/000000/ds3-tool.png">
           <img src="https://img.icons8.com/metro/26/000000/xbox.png">
           <br>Survival Horror</p>
         <button type="button" id="buy30">$19.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/31.jpg">
         <p class="item-name">Stellaris <br><br>
           <img src="https://img.icons8.com/metro/26/000000/steam.png">
           <br>Strategy WarGame</p>
         <button type="button" id="buy31">$39.99</button>
       </div>
     </li>

     <li>
       <div class="item">
         <img src="images/items/32.jpg">
         <p class="item-name">Smite <br><br>
           <img src="https://img.icons8.com/metro/26/000000/steam.png">
           <br>Real-Time Strategy</p>
         <button type="button" id="buy32">FREE</button>
       </div>
     </li>
     </div>
   </ul>

   <!--FOOTER-------->
   <hr>

   <span class="created">@ 2020 <br>Created by Borini</span>

   <p class="support">Support me <br>
     <img src="https://img.icons8.com/metro/26/000000/instagram-new.png">
     <img src="https://img.icons8.com/metro/26/000000/youtube.png">
     <img src="https://img.icons8.com/android/100/000000/twitter.png">
     <img src="https://img.icons8.com/android/24/000000/facebook-new.png">
   </p>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.3/venobox.min.js" referrerpolicy="no-referrer"></script>
  </body>

</html>
