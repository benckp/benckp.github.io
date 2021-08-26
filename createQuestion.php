
<?php include 'global.php' ?>
<script src="script.js"></script>

<script type="text/x-mathjax-config">
  MathJax.Hub.Config({
    TeX: {
//    equationNumbers: {autoNumber: "AMS"},
      extensions: ["begingroup.js"],
      noErrors: {disabled: true}
    },
    showProcessingMessages: false,
    tex2jax: { inlineMath: [['$','$'],['\\(','\\)']] }
  });
</script>
<script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>

<div id="createQuestion">
    <form style="margin-left: 10px; margin-right: 10px" action="/action_page.php">
        <h1 style=" font-family: 'Arial'; ">Create a Question / Discussion</h1>
        <hr class="dashed">
        <br>
        <label for="bigTag">Select Big Tag: &nbsp&nbsp&nbsp</label>
        <?php
        for ($x = 0; $x < sizeof($tags); $x++) {
            echo '<input class="button" type="button" value='. $tags[$x].'>';
        }
        ?>
        <div style="display:block">
            <br>
            <label for="smallTag">Select Small Tag: </label>
            <?php
            for ($x = 0; $x < sizeof($tagsHW); $x++) {
                echo '<input class="button" type="button" value='. $tagsHW[$x].'>';
            }
            ?>
        </div>
        <br>
        <label for="title">Title:</label>
        <input style="background:white;"  type="text" name="title" >
        <br>
        <label for="content">Content:</label>
        <br>
        <textarea id="editor" placeholder="Add comments:" onkeyup="document.getElementById('prevCom').innerHTML = this.value" type="text" > </textarea> <br>
        <p style="color:dimgrey;margin-top: -10px; text-align: right; font-size: 11px">This editor is based on MathJax and CKeditor. Use the plugin for rich text, and <span>$$</span>...<span>$$</span> for Tex math equations. Preview is avaliable on right (News) panel. </p>
        <br>
        <label for="picture">Upload:</label>
        <input class="button"  type="button" value="Photo">
        <br><br>
        <label for="anonymous">Anonymous Status:</label>
        <input class="button"  type="button" value="Show my name">
        <input class="button"  type="button" value="Anonymous to classmate">
        <input class="button"  type="button" value="Anonymous to everyone">
        <input class="button" style="float:right; " type="submit" value="Submit">
    </form>
</div>

