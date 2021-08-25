<!-- Author:   CHU, Kai Pan -->
<!-- Topic:  STAT3005 Platform -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_topnav.css">
    <link rel="stylesheet" href="style_secnav.css">
    <link rel="stylesheet" href="style_forumList.css">
    <link rel="stylesheet" href="style_viewPost.css">
    <title>STAT Platform</title>
</head>
<body>
    <div class="topnav">
        <a class="active"><i class="fa fa-home"></i></a>
        <div style="float: right;">
            <a href="login"><i class="fa fa-user">&nbsp User Name</i></a>
            <a href="logout"><i class="fa fa-sign-out"></i></a>
        </div>
        <a style="font-family:FontAwesome">Course&nbsp &#xf0da</a>
        <a >STAT3005</a>
        <a >STAT4010</a>
    </div>

    <div class="secnav">
        <a id="forumBtn" onclick="changeLeft()" style="font-size: 15px;font-family:FontAwesome">&#xf0d9 Forums</a>
        <a id="newBtn" onclick="changeRight()"  style="float: right;font-size: 15px;font-family:FontAwesome"> News &#xf0da</a>
        <a tabindex="1">Ch1</a>         <a tabindex="1">Ch2</a>
        <a tabindex="1">Ch3</a>         <a tabindex="1">Ch4 </a>
        <a tabindex="1">Ch5 </a>        <a tabindex="1">Ch6 </a>
        <a tabindex="1">Ch7 </a>        <a tabindex="1">Ch8 </a>
        <a tabindex="1">Ch9 </a>        <a tabindex="1">Ch10 </a>
        <a tabindex="1">HW1 </a>        <a tabindex="1">HW2 </a>
        <a tabindex="1">HW3 </a>        <a tabindex="1">HW4 </a>
        <a tabindex="1">HW5 </a>        <a tabindex="1">HW6 </a>
        <a tabindex="1">HW7 </a>        <a tabindex="1">HW8 </a>
        <a tabindex="1">Midterm </a>        <a >Final </a>
        <a tabindex="1">Other </a>
    </div>

    <div id="content">
        <div class="column left">
            <div class="forum-bar" style="margin-top:4px;position: fixed; padding: 1px 1px;">
                <button id="open" style="font-family:FontAwesome;padding: 6px; margin-top: 8px; margin-left: 12px;    font-size: 16px;    cursor: pointer;"><i class="fa fa-file"></i> Post</button>
                <input type="text" style="font-family:FontAwesome" placeholder="&#xF002 Search...">
            </div>
            <div class="forum-bar" style="margin-top:54px; padding: 3px 3px; width:290px;padding-bottom: 10px;">
                <button style="margin-left:10px; font-family:FontAwesome;" class="filter">&#xf15c All</button>
                <button style="font-family:FontAwesome;" class="filter">&#xf0d0 Solved</button>
                <button style="font-family:FontAwesome;" class="filter">&#xf0eb Unsolved</button>
            </div>
            <div id="forumList" style="margin-top: 100px">
                <table class="post solved" tabindex="1">
                    <tr>
                        <th>[#3] Solved History...</th>
                        <td style="color:grey">datetime</td>
                    </tr>
                    <tr>
                        <td style="color:grey">The Department of Statistics (“the...</td>
                        <td style="text-align: center"><button class="tag" style="font-family:FontAwesome;">HW1</button> <br> <button class="tag"  style="font-family:FontAwesome;">Q1</button></td>
                    </tr>
                </table>
                <table class="post unsolved" tabindex="1">
                    <tr>
                        <th>[#1] Unsolved Title 2</th>
                        <td style="color:grey">datetime</td>
                    </tr>
                    <tr>
                        <td style="color:grey">first 50 characters of content............</td>
                        <td style="text-align: center"><button class="tag" style="font-family:FontAwesome;">Ch1</button> <br> <button class="tag"  style="font-family:FontAwesome;">Eg1</button></td>
                    </tr>
                </table>
                <p>www
                    <?php for($i=1;$i<=5;$i++){ ?>
                <li>Menu Item <?php echo $i; ?></li>
                <?php } ?>.</p>
                <table class="post past" tabindex="1">
                    <tr>
                        <th>[#1] Last year Title 1</th>
                        <td style="color:grey">datetime</td>
                    </tr>
                    <tr>
                        <td style="color:grey">
                        </td>
                        <td style="text-align: center"><button class="tag" style="font-family:FontAwesome;">Final</button> <br> <button class="tag"  style="font-family:FontAwesome;">Q2</button></td>
                    </tr>
                </table>
            </div>
            <div>
                ...
            </div>
        </div>
        <div class="column middle">

            <div class="question">
                <h2>[#3] (Selcted) History of Dept</h2>
                <hr class="dashed" style="margin-top: -15px; margin-bottom: -10px"></h2>
                <table style="margin-bottom:-25px; width: 100%">
                    <tr>
                        <td>
                            <p>Author&nbsp&nbsp <i  style="color:grey" class="fa 	fa fa-edit">20-08-2021</i>&nbsp&nbsp<button class='tag' style="font-family:FontAwesome;">HW1</button> <button class="tag"  style="font-family:FontAwesome;">Q1</button>  </p></td>
                        <td style="text-align: right;"><button style="font-family:FontAwesome;">&#xf119 Not Useful</button> <b style="color:purple; border-bottom: 2px solid purple;">+999</b> <button style="font-family:FontAwesome;"> &#xf164 Useful</button></td>
                    </tr>
                </table>
                <p>The Department of Statistics (“the Department”) at the Chinese University of Hong Kong (CUHK) was founded in 1982. In fact, statistical activities at CUHK predate the formation of the Department. Throughout the past 30 years, the Department has been growing steadily as a result of valuable contributions of numerous faculty, staff members and students. Below shown is a chronicle of major events of the Department:</p>
                <table style="width: 100%; margin-top: 30px">
                    <tr>
                        <td id="difficulty" style="text-align: left;">
                            <div id="sliderValue"> <span>Avg</span></div>
                            Easy <input type="range" min="0" max="10" onchange="voteDiff()" id="slider"/>Difficult</td>
                        <td style="text-align: right;"><button style="font-family:FontAwesome;">&#xf040 Answer this question </button></td>
                    </tr>
                </table>
                <div class="commentBox" style="margin-top: 12px;">
                    <p class="comment"><b>Alex <i  style="color:dimgrey;margin-top: 10px; font-size: 11px" class="fa 	fa fa-edit">20-08-2021</i> </b> First comment!<hr class="dashed" style="margin-bottom: -15px;"></p>
                    <p class="comment"><b>Ben <i  style="color:dimgrey;margin-top: 10px; font-size: 11px" class="fa 	fa fa-edit">20-08-2021</i></b> Second comment!<hr class="dashed" style="margin-bottom: -15px;"></p>
                    <input class="typeComment" type="text" placeholder="&#xF075 Comment... ">
                </div>
            </div>

            <div class="solution">
                <table style="width: 100%">
                    <tr>
                        <td><b>Good student</b>&nbsp&nbsp <i  style="color:grey" class="fa 	fa fa-edit">20-08-2021</i>
                            <i style="color:purple" class="fa fa-star"> This answer is adapted as solution by the question owner / instructor.</i> </td>
                        <td style="text-align: right;"><button style="font-family:FontAwesome;">&#xf119 Not Useful</button> <b style="color:purple; border-bottom: 2px solid purple;">+999</b> <button style="font-family:FontAwesome;"> &#xf164 Useful</button></td>
                    </tr>
                </table>
                <hr class="dashed" style="margin-top: -1px; margin-bottom: -10px"></h2>
                <p>Where is the events? I guess it should be in our department website.</p>
                <div class="commentBox" style="margin-top: 12px;">
                    <p class="comment"><b>Alex <i  style="color:dimgrey;margin-top: 10px; font-size: 11px" class="fa 	fa fa-edit">20-08-2021</i></b> First comment!<hr class="dashed" style="margin-bottom: -15px;"></p>
                    <p class="comment"><b>Ben <i  style="color:dimgrey;margin-top: 10px; font-size: 11px" class="fa 	fa fa-edit">20-08-2021</i></b> Second comment!<hr class="dashed"style="margin-bottom: -15px;"></p>
                    <input class="typeComment" type="text" placeholder="&#xF075 Comment... ">
                </div>
            </div>

            <div class="answer">
                <table style="width: 100%">
                    <tr>
                        <td><b>Student 2</b>&nbsp&nbsp <i  style="color:grey" class="fa 	fa fa-edit">20-08-2021</i> </td>
                        <td style="text-align: right;"><button style="font-family:FontAwesome;">&#xf119 Not Useful</button> <b style="color:purple; border-bottom: 2px solid purple;">+10</b> <button style="font-family:FontAwesome;"> &#xf164 Useful</button></td>
                    </tr>
                </table>
                <hr class="dashed" style="margin-top: -1px; margin-bottom: -10px"></h2>
                <p>Good question. Let me think about it.</p>
                <div class="commentBox" style="margin-top: 12px;">
                    <p class="comment"><b>Alex <i  style="color:dimgrey;margin-top: 10px; font-size: 11px" class="fa 	fa fa-edit">20-08-2021</i> </b>First comment!<hr class="dashed" style="margin-bottom: -15px;"></p>
                    <p class="comment"><b>Ben <i  style="color:dimgrey;margin-top: 10px; font-size: 11px" class="fa 	fa fa-edit">20-08-2021</i></b> Second comment!<hr class="dashed" style="margin-bottom: -15px;"></p>
                    <input class="typeComment" type="text" placeholder="&#xF075 Comment... ">
                </div>
            </div>

            <div class="answer">
                <table style="width: 100%">
                    <tr>
                        <td><b>Student 3</b>&nbsp&nbsp <i  style="color:grey" class="fa 	fa fa-edit">20-08-2021</i></td>
                        <td style="text-align: right;"><button style="font-family:FontAwesome;">&#xf119 Not Useful</button> <b style="color:purple; border-bottom: 2px solid purple;">-5</b> <button style="font-family:FontAwesome;"> &#xf164 Useful</button></td>
                    </tr>
                </table>
                <hr class="dashed" style="margin-top: -1px; margin-bottom: -10px"></h2>
                <p>I don't understand English</p>
                <div class="commentBox" style="margin-top: 12px;">
                    <p class="comment"><b>Alex <i  style="color:dimgrey;margin-top: 10px; font-size: 11px" class="fa 	fa fa-edit">20-08-2021</i> </b>First comment!<hr class="dashed" style="margin-bottom: -15px;"></p>
                    <p class="comment"><b>Ben <i  style="color:dimgrey;margin-top: 10px; font-size: 11px" class="fa 	fa fa-edit">20-08-2021</i> </b> Second comment!<hr class="dashed" style="margin-bottom: -15px;"></p>
                    <input class="typeComment" type="text" placeholder="&#xF075 Comment... ">
                </div>
            </div>
        </div>
        <div id='right' class="column">
            <h2>News</h2>
            <p>To be introduced...</p>
        </div>
    </div>

    <footer>
        This website was built on <time id="today"></time> by <b>Kai Pan CHU</b>. ©All Rights Reserved.
    </footer>
    <script src="script.js"></script>
</body>
</html>