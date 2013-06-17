
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Enovo Energy Login</title>
    <style type="text/css">
        <!--
        body {
            font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
            background: #42414C;
            margin: 0;
            padding: 0;
            color: #000;
        }

            /* ~~ Element/tag selectors ~~ */
        ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
            padding: 0;
            margin: 0;
        }
        h1, h2, h3, h4, h5, h6, p {
            margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
            padding-right: 15px;
            padding-left: 15px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */
        }
        a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
            border: none;
        }
            /* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
        a:link {
            color: #42413C;
            text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
        }
        a:visited {
            color: #6E6C64;
            text-decoration: underline;
        }
        a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
            text-decoration: none;
        }

            /* ~~ this fixed width container surrounds the other divs ~~ */
        .container {
            width: 960px;
            background: #eeeeee;
            margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout */
        }

            /* ~~ the header is not given a width. It will extend the full width of your layout. It contains an image placeholder that should be replaced with your own linked logo ~~ */
        .header {
            background: #FFFFFF;
        }

            /* ~~ This is the layout information. ~~

            1) Padding is only placed on the top and/or bottom of the div. The elements within this div have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

            */

        .content {

            padding: 10px 0;
            height: 600px;


        }

        .login-container {

            margin: 25% 25% 25% 25%;
        }

            /* ~~ The footer ~~ */
        .footer {
            padding: 10px 0;
            background: #FFFFFF;
        }

            /* ~~ miscellaneous float/clear classes ~~ */
        .fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
            float: right;
            margin-left: 8px;
        }
        .fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
            float: left;
            margin-right: 8px;
        }
        .clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the #container) if the #footer is removed or taken out of the #container */
            clear:both;
            height:0;
            font-size: 1px;
            line-height: 0px;
        }
        -->
    </style></head>

<body>

<div class="container">
    <div class="header"><a href=""><img src="/images/logo.jpg" alt="Insert Logo Here" name="Insert_logo" width="300" height="161" id="Insert_logo" style="background: #FFFFFF; display:block;" /></a>
        <!-- end .header --></div>
    <div class="content">

        <div class="login-container";align="center">

        <form action='<?php echo base_url();?>login/process' method="post" name="process" target="_self">

            <div align="center">
                <?php if(! is_null($msg)) echo $msg;?>
                <fieldset>
                    <legend><h2>User Login</h2></legend>
                    <h4>Username:</h4> <input name="username" type="text" size="25"><br>
                    <h4>Password:</h4>  <input name="password" type="password" size="25">  <br>
                    <input name="submit" type="submit" value="Login">
                </fieldset>





            </div>

        </form>

    </div> <!-- end of login-container -->

    <!-- end .content --></div>
<div class="footer">
    <p>Footer</p>
    <!-- end .footer --></div>
<!-- end .container --></div>
</body>
</html>