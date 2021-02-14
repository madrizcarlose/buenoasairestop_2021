<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Home - Simple Star Rating</title>    
    <style type="text/css">        
    /* Rate Star*/        
    .result-container{
        width: 100px; height: 22px;
        background-color: #ccc;
        vertical-align:middle;
        display:inline-block;
        position: relative;
        top: -4px;
    }
    .rate-stars{
        width: 100px; height: 22px;
        background: url(images/app/stars/stars.png) no-repeat;
        background-size: cover;
        position: absolute;
    }
    .rate-bg{
        height: 22px;
        background-color: #ffbe10;
        position: absolute;
    }
    /* Rate Star Ends*/
    
    /* Display rate count */    
    .reviewCount, .reviewScore {font-size: 14px; color: #666666; margin-left: 5px;}
    .reviewScore {font-weight: 600;}
    /* Display rate count Ends*/        
    </style>
</head>
<body style="font-family:sans-serif; ">                    
    <h1>Display Star Rating average from Mysql Database with PHP</h1>                
    <?php
    //defining Product id
    
                $rate_times = 12;
                $rate_value = 5;
                $rate_bg = 66;
           
    ?>
            <div style="margin-top: 10px">
                <div class="result-container">
                <div class="rate-bg" style="width:<?php echo $rate_bg; ?>%"></div>
                <div class="rate-stars"></div>
            </div>                    
            <span class="reviewScore"><?php echo substr($rate_value,0,3); ?></span><span class="reviewCount">(<?php echo $rate_times; ?> reviews)</span>
            
        </body>

</html
