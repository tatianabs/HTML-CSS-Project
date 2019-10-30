<?php
session_start();

$date = $_POST['DOB'];
$month= date('m', strtotime($date));
$month=(int)$month;
$day=  date('d', strtotime($date));
$sign="";

$_SESSION['name']=$_POST['name'];
   
    if($month==12)
    {
        if($day < 22)
        {
         $sign = "Sagittarius"; 
        }
        else
        {
         $sign ="Capricorn"; 
        }
    }
        elseif($month==1)
    {
        if($day < 20)
        {
         $sign = "Capricorn"; 
        }
        else
        {
         $sign ="Aquarius"; 
        }
    }
        elseif($month==2)
    {
        if($day < 19)
        {
         $sign = "Aquarius"; 
        }
        else
        {
         $sign ="Pisces"; 
        }
    }
        elseif($month==3)
    {
        if($day < 21)
        {
         $sign = "Pisces"; 
        }
        else
        {
         $sign ="Aries"; 
        }
    }
        elseif($month==4)
    {
        if($day < 20)
        {
         $sign = "Aries"; 
        }
        else
        {
         $sign ="Taurus"; 
        }
    }
        elseif($month==5)
    {
        if($day < 21)
        {
         $sign = "Taurus"; 
        }
        else
        {
         $sign ="Gemini"; 
        }
    }
        elseif($month==6)
    {
        if($day < 21)
        {
         $sign = "Gemini"; 
        }
        else
        {
         $sign ="Cancer"; 
        }
    }
        elseif($month==7)
    {
        if($day < 23)
        {
         $sign = "Cancer"; 
        }
        else
        {
         $sign ="Leo"; 
        }
    }
        elseif($month==8)
    {
        if($day < 23)
        {
         $sign = "Leo"; 
        }
        else
        {
         $sign ="Virgo"; 
        }
    }
        elseif($month==9)
    {
        if($day < 23)
        {
         $sign = "Virgo"; 
        }
        else
        {
         $sign ="Libra"; 
        }
    }
        elseif($month==10)
    {
        if($day < 23)
        {
         $sign = "Libra"; 
        }
        else
        {
         $sign ="Scorpio"; 
        }
    }
        elseif($month==11)
    {
        if($day < 22)
        {
         $sign = "Scorpio"; 
        }
        else
        {
         $sign ="Sagittarius"; 
        }
    }
  $_SESSION['sign']=$sign;


header("location:index.php");
 ?>

    