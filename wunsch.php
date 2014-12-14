<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $wunsch1 = $_POST["wunsch1"];
  $wunsch2 = $_POST["wunsch2"];
  $wunsch3 = $_POST["wunsch3"];

    // Redirection to another page


  header("Location: wunsch.php?status=thanks");
  exit;
}
?>

    <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
      <h1>Lieferangaben</h1>

      <ol>
        <li><?php echo $_POST["wunsch1"]; ?></li>
        <li><?php echo $_POST["wunsch2"] ?></li>
        <li><?php echo $_POST["wunsch3"] ?></li>
      </ol>

      <p>Lieferadresse</p>

      <form method="POST" action="lolo.php">
        <table>
          <tr>
            <th><label for="name">Vor- und Nachname</label></th>
            <td><input type="text" name="name" id="name"></td>
          </tr>
          <tr>
            <th><label for="adresse">Strasse, Hausnummer</label></th>
            <td><input type="text" name="adresse" id="adresse"></td>
          </tr>
          <tr>
            <th><label for="ort">PLZ, Ort</label></th>
            <td><input type="text" name="ort" id="ort"></td>
          </tr>
        </table>
        <input type="submit" value="Abschicken">
        <input type="reset" value="Abbrechen">
      </form>


      <?php } else { ?>
        <h1>Mein Wunschzettel</h1>
        <p>Bitte 3 Wünsche eingeben!</p>

        <form method="POST" action="lolo.php">
          <table>
            <tr>
              <th><label for="wunsch1">Wunsch 1</label></th>
              <td><input type="text" name="wunsch1" id="wunsch1"></td>
            </tr>
            <tr>
              <th><label for="wunsch2">Wunsch 2</label></th>
              <td><input type="text" name="wunsch2" id="wunsch2"></td>
            </tr>
            <tr>
              <th><label for="wunsch3">Wunsch 3</label></th>
              <td><input type="text" name="wunsch3" id="wunsch3"></td>
            </tr>
          </table>
          <input type="submit" value="Abschicken">
          <input type="reset" value="Abbrechen">
        </form>
        <?php   } ?>
