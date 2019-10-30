<?php
// Start the session
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Orion Astrology</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="astro.css"/>
    </head>
    <body>
        <div id="header">
            <?php
            include ('header.php');
            
            ?>
      </div>
        <div class="middle">
            <section id="Content">
                <article>
                    <h1><u>What is a Horoscope?</u></h1>
                    <p>A Horoscope is a chart of a person which represents the exact positions of the Sun, the Moon and the planets when he/she was born. <p>It varies from person to person as their place, date and time of birth differ. The interpretation of this on a personal basis is the sole aim of astrology.
Likewise each country has its own horoscope based on the time it was discovered or got independence ,etc. The analysis of a country's chart comes under mundane astrology.</p>
                    <p>Although the luminaries Sun and Moon and the planets Mercury, Venus, Mars, Jupiter, Saturn, Uranus, Neptune and Pluto are far away decked up in the night sky, they are said to have a clear role on our lives and our future. These planets move around the Sun in an elliptical orbit in the celestial sky. Twelve constellations or group of stars have also been mapped in the 360 degree sky around us. They are Aries, Taurus, Gemini, Cancer, Leo, Virgo, Libra, Scorpio, Sagittarius, Capricorn, Aquarius and Pisces. All individuals come under any one of the above zodiac signs or Sun signs.</p>
                    <h3><u>Components of a Horoscope</u></h3>
                    There are four major components in the Chart: They are the planets, the zodiac signs, the aspects and the houses. The planets show the active powers involved. The Zodiac signs show the characteristics of events. The aspects between planets show why something is happening, and the Houses of the horoscope show where it is happening.
Horoscope is a forecast of a person's future, typically including a delineation of character and circumstances, based on the relative positions of the stars and planets at the time of that person's birth in a particular place. In other words, a horoscope is a short forecast for people born under a particular zodiac sign.
No matter what your Sun sign is , we are all under the 12 zodiac signs are affected as the Sun and other planets cycle through the horoscope every year.
Astrologers refer to the horoscope as the astrological chart of a person or a moment in time, which is calculated from the planetary positions in the sky. The calculations used are based on the date, place and time of birth. That's why a horoscope is so personal, like a fingerprint and is very unique. No two people share the same horoscope, twins however differ in their horoscope by a few degrees in their Ascendant as they are born a few minutes or hours apart, but in the same place.
The horoscope holds within it planets, signs, aspects, houses, and other points that reflect the potential characteristics and patterns. Horoscope does not indicate our destiny, instead it shows our potential in life.
A horoscope is an astrological chart that is calculated based upon the date, time and place of birth. A chart can also be calculated for an event, a question, and even a country. Symbols are used to represent planets, signs, and geometric connections called aspects. In most cases, the horoscope in Western astrology is drawn on a circular wheel while in Indian astrology it is in a rectangular or square format.
A horoscope does not directly predict what is going to happen to you and when but instead it can tell you what kind of person you are and how you will react to things or events in life.

                </article>   
                
            </section>
            <aside>
                    <div id="daily" >
                        <form action="zodiac.php" method="post">
                           Enter your name and your date of birth to get your horoscope for 2019.<br/>
                           <label for="name">Name:</label><br/>
                           <input type="text" name="name" id="Name" size="20"> <br/>
                           <label for="DOB">Date of Birth:</label><br/>
                           <input type="date" name="DOB" id="Date">  <br/>
                           <input type="submit" value="Submit" >
                        </form> 
                          
                    </div> 

                 <?php 
                    
                        if(isset($_SESSION['sign']))
                        {
                    
                        echo '<div id="display"  style="border-style: solid; vertical-align: bottom;">';
                    
                         
                        $string="Hello " . $_SESSION['name'].","." your sign is " .$_SESSION['sign']."!";
                        $new_string=trim($string);
                            echo $new_string;
                            unset($_SESSION['sign']);
                            unset($_SESSION['name']);
                             //$_SESSION['sign'] = null;
                                            
                         echo '</div>';
                    }
                    
                    ?>
                     
              
            </aside>
            <hr>
        </div>
        <div id="footer">
            <h2 class="centeredText">Useful links</h2>
         <div>
            <ul class="bottomlist">
            <li><a href="https://MyAstrology.Net/">My astrology</a></li>
            <li><a href="http://www.astrology-numerology.com/numerology.html">Astrology and Numerology</a></li>
            <li><a href="https://www.freehoroscopedaily.com">Free horoscope daily</a></li>
            </ul>
            </div>
            <br>
            <div id="contactme">If you have any questions,please email me at <a href="mailto:Tatiana@example.com">Tatiana@example.com</a></div>
           <?php include('footer.php');?> 
         </div>
         </div>
    </body>
</html>
