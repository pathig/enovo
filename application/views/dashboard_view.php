<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Enovo Energy Dashboard</title>
    <style type="text/css">
        <!--
        body {
            font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            color: #000;
            background-color: #42414C;
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
            color:#414958;
            text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
        }
        a:visited {
            color: #4E5869;
            text-decoration: underline;
        }
        a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
            text-decoration: none;
        }

            /* ~~ this container surrounds all other divs giving them their percentage-based width ~~ */
        .container {
            width: 80%;
            max-width: 1260px;/* a max-width may be desirable to keep this layout from getting too wide on a large monitor. This keeps line length more readable. IE6 does not respect this declaration. */
            min-width: 780px;
            margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout. It is not needed if you set the .container's width to 100%. */
            background-color: #eeeeee;
        }

            /* ~~the header is not given a width. It will extend the full width of your layout. It contains an image placeholder that should be replaced with your own linked logo~~ */
        .header {
            background-color: #FFFFFF;
        }

            /* ~~ This is the layout information. ~~

            1) Padding is only placed on the top and/or bottom of the div. The elements within this div have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

            */
        .content {
            height: 500px;
            padding-top: 10px;
            padding-right: 0;
            padding-bottom: 10px;
            padding-left: 0;
        }

            /* ~~ This grouped selector gives the lists in the .content area space ~~ */
        .content ul, .content ol {
            padding: 0 15px 15px 40px; /* this padding mirrors the right padding in the headings and paragraph rule above. Padding was placed on the bottom for space between other elements on the lists and on the left to create the indention. These may be adjusted as you wish. */
        }

            /* ~~ The footer ~~ */
        .footer {
            padding: 10px 0;
            background-color: #FFFFFF;
        }

        .leftcol {
            width: 50%; border: 1px;
            solid: black; float: left;
        }
        .rightcol { width: 50%; border: 1px;
            solid: black; float: right;
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
    <div class="header"><a href="#"><img src="/images/logo.jpg" alt="Insert Logo Here" name="Insert_logo" width="300" height="161" id="Insert_logo" style="background: #8090AB; display:block;" /></a>
        <!-- end .header --></div>
    <div class="content">

     <div class="projects-documents";align="center">

        <div class="projects";align="center">

        <?php $project_action = $baseurl . "project/building_information"; ?>

        <form action= <?php echo $project_action ; ?>  method="post" name="project" target="_top">

        <div class="leftcol">
            <fieldset>

                <!-- List all the projects for this user as a list -->

                <h2>Projects</h2> <br>

                <input name="project_name" type="text"  size="32">

                <input name="newproject" type="submit" value="Create Project">

            </fieldset>

        </div>

        </form>

       </div> <!-- end of projects div -->
       <div class="documents";align="center">

       <?php $dashboard_url = $baseurl . "dashboard/do_upload"; ?>

        <form action= <?php echo $dashboard_url ; ?>  method="post" name="uploaddocument" enctype="multipart/form-data" target="_self">

       <div class="rightcol";align="center">

         <fieldset>

             <h2>Document Upload</h2> <br>
            <!-- need a text field and browse button -->
            <input name="file" type="file" size="20">
            <input name="upload" type="submit" value="upload">
            <input name="upload_flag" type="hidden" value="enabled">

        </fieldset>

       </div>

        </form>

    </div> <!-- documents -->


</div> <!-- project_documents -->


<div class="searchprojects" >
    <fieldset>

        <!-- List all the projects for this user as a list -->

        <?php $searchproject_url = $baseurl . "dashboard/search_projects"; ?>
        <form action= <?php echo $searchproject_url ; ?>  method="post" name="uploaddocument" enctype="multipart/form-data" target="_self">

        <h2>Search Projects</h2> <br>



        <input name="project_search_name" type="text"  size="32">

        <input name="newproject" type="submit" value="Find Project">
        </form>

        <table>
        <tbody>
        <?php foreach($proj_names as $p): ?>

            <?php echo $p[0] ?>
            <tr>

                    <td>
                        <?php echo $p['project_name']; ?>
                    </td>
                <td>
                    <?php echo $p['date_created']; ?>
                </td>
                <td>
                    <?php echo $p['partner_name']; ?>
                </td>
                <td>
                    <?php echo $p['project_name']; ?>
                </td>

            </tr>
        <?php endforeach; ?>
        </tbody>

        </table>

    </fieldset>

</div>

</div> <!-- end .content -->
<div class="footer">
    <p>Footer</p>
    <!-- end .footer --></div>
<!-- end .container --></div>
</body>
</html>