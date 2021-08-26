<!-- Author:   CHU, Kai Pan -->
<!-- Topic:  STAT3005 Platform -->

<?php include 'connectDB.php' ?>
<?php include 'global.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>STAT Platform</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_nav.css">
    <link rel="stylesheet" href="style_forumList.css">
    <link rel="stylesheet" href="style_createQuestion.css">
    <link rel="stylesheet" href="style_currentQuestion.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script>
        MathJax = {
            tex: {
                inlineMath: [['$', '$'], ['\\(', '\\)']]
            }
        };
    </script>
    <script id="MathJax-script" async
            src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml.js">
    </script>
</head>
    <div class="topnav">
        <a id="home" ><i style="font-size: 20px; margin-top: -1px;margin-left: 10px;margin-right: 5px;" class="fa fa-home"></i></a>
        <div style="float: right;">
            <h><i class="fa fa-user">&nbsp User Name</i></h>
            <a href="#log"><i class="fa fa-sign-out"></i></a>
        </div>
        <a id="courseBtn"  onclick="courseDisplay()" style="font-family:'Roboto','Arial',FontAwesome">Course &#xf0d7 </a>
        <h class = "courseMenu hide">STAT3005</h>
    </div>

    <div class="secnav">
        <a id="forumBtn" onclick="changeLeft()" style="font-size: 14px; margin-top: -2px; font-family:'Roboto','Arial',FontAwesome">&#xf0d9 Forums</a>
        <a id="newBtn" onclick="changeRight()"  style="float: right;font-size: 14px; margin-top: -2px;font-family:'Roboto','Arial',FontAwesome"> News &#xf0da</a>
        <?php
        for ($i = 0; $i < sizeof($tags); $i++) {
            echo '<a tabindex="1" class="forumMenu">'.$tags[$i].'</a>';
        }
        ?>
    </div>
    <div id="content">
        <div class="column left">
            <div class="forum-bar" style="margin-top:2px;position: fixed; padding: 1px 1px;">
                <button id="open" style="font-family:FontAwesome;padding: 6px; margin-top: 8px; margin-left: 12px;    font-size: 16px;    cursor: pointer;"><i class="fa fa-file"></i> Ask</button>
                <input type="text" style="font-family:FontAwesome" placeholder="&#xF002 Search...">
                <br>
                <!-- TODO: Drop down filter -->
                <button style="font-size:13px;margin-left:10px; margin-bottom: 10px; font-family:FontAwesome; text-align: left" class="filter">&#xf15c Questions &#xf0d7</button>
                <button style="float:right;font-size:13px;margin-right:10px; margin-bottom: 10px; font-family:FontAwesome;" class="filter">Tag 2 &#xf0d7</button>
                <button style="float:right;font-size:13px;margin-right:10px; margin-bottom: 10px; font-family:FontAwesome;" class="filter">Tag 1 &#xf0d7</button>
            </div>
            <div id="forumList">
                <?php include 'forumList.php' ?>
            </div>
            <div>
                ..
            </div>
        </div>
        <div id="middle" class="column">
            <?php include 'currentQuestion.php' ?>
        </div>
        <div id='right' class="column">
            <div id="preview"></div>
            <?php include 'newsSuggest.php' ?>
        </div>
    </div>

    <footer>
        This website was built on <?php echo date("d/m/Y") ?> by <b>Kai Pan CHU</b>. ©All Rights Reserved.
    </footer>
    <script src="script.js"></script>
</body>
</html>