<?php

session_start();

  $name = $_POST["name"];
  $adresse = $_POST["adresse"];
  $ort = $_POST["ort"];
  $status = $_GET["status"];

  $_SESSION['name'] = $name;
  $_SESSION['adresse'] = $adresse;
  $_SESSION['ort'] = $ort;

// Seite 2, Eingabe der Lieferadresse
switch($status){

case "lieferadresse":

  $wunsch1 = $_POST["wunsch1"];
  $wunsch2 = $_POST["wunsch2"];
  $wunsch3 = $_POST["wunsch3"];

  $_SESSION['wunsch1'] = $wunsch1;
  $_SESSION['wunsch2'] = $wunsch2;
  $_SESSION['wunsch3'] = $wunsch3;

   ?>

    <h1>Lieferangaben</h1>

    <ol>
      <li><?php print $_SESSION['wunsch1']; ?></li>
      <li><?php print $_SESSION['wunsch2']; ?></li>
      <li><?php print $_SESSION['wunsch3']; ?></li>
    </ol>

    <p>Lieferadresse</p>

    <form method="POST" action="wunsch.php?status=zusammenfassung">
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

<?php break;

// Seite 3, Zusammenfassung
case "zusammenfassung":  ?>
    <h1>Zusammenfassung</h1>

    <p>Wünsche</p>
    <ol>
      <li><?php print $_SESSION['wunsch1']; ?></li>
      <li><?php print $_SESSION['wunsch2']; ?></li>
      <li><?php print $_SESSION['wunsch3']; ?></li>
    </ol>

    <p>Lieferadresse</p>

    <ol>
      <li><?php print $_SESSION['name']; ?></li>
      <li><?php print $_SESSION['adresse']; ?></li>
      <li><?php print $_SESSION['ort']; ?></li>
    </ol>


<?php break;

default: ?>
    <h1>Mein Wunschzettel</h1>
    <p>Bitte 3 Wünsche eingeben!</p>

    <form method="POST" action="wunsch.php?status=lieferadresse">
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
    
<?php } ?>
