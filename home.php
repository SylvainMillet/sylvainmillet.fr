<!DOCTYPE html>


<HTML lang=FR>

<HEAD>

<link href="./style/style.css" rel="stylesheet" type="text/css">

</HEAD>

<BODY>
    <form action="./message.php" method="post">
        <div class="form-example">
            <label for="name">Entrez votre prénom: </label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-example">
            <label for="age">Entrez votre âge: </label>
            <input type="number" name="age" id="age" required>
        </div>
        <div class="form-example">
            <INPUT TYPE="submit" NAME="bouton" VALUE="Communiquer">
        </div>
    </form>
</BODY>

</HTML>