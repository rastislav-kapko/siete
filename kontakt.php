
<?php include 'header.php';?>

<div class="kontakt">

<h1>Kontaktne udaje</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem qui expedita at necessitatibus 
    reprehenderit quas explicabo totam aperiam, ratione, excepturi laboriosam. 
    Magni delectus minus deserunt est sed omnis obcaecati perspiciatis!</p>

    <br>

<h1>Kontaktne udaje2</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem qui expedita at necessitatibus 
    reprehenderit quas explicabo totam aperiam, ratione, excepturi laboriosam. 
    Magni delectus minus deserunt est sed omnis obcaecati perspiciatis!</p>

    <br>
    <br>


<form action="subscribe.php" method="post">
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" required="required" placeholder="Enter your name" />
            </div>

            <div>
                <label for="name">Email:</label>
                <input type="email" name="email" required="required" placeholder="Enter your email" />
            </div>

            <button type="submit">Subscribe</button>
</form>


</div>

<?php include 'footer.php';?>