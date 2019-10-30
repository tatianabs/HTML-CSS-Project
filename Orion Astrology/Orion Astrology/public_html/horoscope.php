<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Horoscope</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="astro.css"/>
    </head>
    <body>
        <div id="header">
            <?php
            include ('header.php');
            
            ?>
     
            <div id="click">
                <h2>Click on your zodiac symbol for more information about your zodiac sign.</h2>
            </div>
          <table border = "1">
         <tr>
             <td><a href="signs.php"><img src="images/Aries.png" alt="aries"/></a><span>March21-Apr19</span></td>
             <td><a href="signs.php"><img src="images/Taurus.png" alt="taurus"/></a><span>Apr20-May20</span></td>
             <td><a href="signs.php"><img src="images/Gemini.png" alt="gemini"/></a><span>May21-Jun20</span></td>
            <td><a href="signs.php"><img src="images/Cancer.png" alt="cancer"/></a><span>Jun21-Jul22</span></td>
         </tr>
         <tr>
             <td><a href="signs.php"><img src="images/Leo.png" alt="leo"/></a><span>Jul23-Aug22</span></td>
             <td><a href="signs.php"><img src="images/Virgo.png" alt="virgo"/></a><span>Aug23-Sept22</span></td>
            <td><a href="signs.php"><img src="images/Libra.png" alt="libra"/></a><span>Sept23-Oct22</span></td>
            <td><a href="signs.php"><img src="images/Scorpio.png" alt="scorpio"/></a><span>Oct23-Nov21</span></td>
         </tr>
         <tr>
             <td><a href="signs.php"><img src="images/Sagittarius.png" alt="sagitarius"/></a><span>Nov22-Dec21</span></td>
            <td><a href="signs.php"><img src="images/Capricorn.png" alt="capricorn"/></a><span>Dec22-Jan19</span></td>
            <td><a href="signs.php"><img src="images/Aquarius.png" alt="aquarius"/></a><span>Jan20-Feb18</span></td><
            <td><a href="signs.php"><img src="images/Pisces.png" alt="pisces"/></a><span>Feb19-Mar20</span></td>
         </tr>
         </table>
        </div>
        <div>
            <?php include('footer.php');?> 
        </div>
    </body>
</html>
