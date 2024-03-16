<?php
    require_once("partial/entete.php");
?>

<!-- navbar  -->
<?php
    require_once("partial/navbar.php");
?>

<!-- contact  -->

<h1>Our Contact Form</h1>
<div class="row">
    <div class="col">
        <img src="image/screenshot_20230619-123816.png" alt=""withe="100" height="300"> <br>
        <span>Little taco shop tacos</span>
    </div>
</div><br>
<fieldset style="border:2px solid black; width:520px; margin-left:3px">
    <legend align="left">Send Us A Message</legend>
    <form action="post" style="margin-left:15px">
        <br>
        <label name="nom">Name: </label><input type="text"><br>
        <label name="email">Email: </label><input type="mailto"><br>
        <label name="message">Message:</label><br><textarea name="message" cols="30" rows="7"></textarea><br>
        <button type="submit">Send</button>
        <button type="reset">Reset</button>
    </form>

</fieldset><br>
<!-- location  -->
<h1>Our Location</h1>
<div>
    <p>555 taco temptation lane, suite T</p>
    <p>Kansas City, MO 555,55545343 <p>
    <p><b>Phone : </b> 555-555-5555<p>
</div>

<?php
    require_once("partial/pied.php");
?>



