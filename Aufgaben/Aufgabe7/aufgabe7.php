<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Titel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
   <div>class="container">
  <?php
      if($_POST) :
              $vorname = filter_var($_POST['vorname'], );
              $nachname = filter_var($_POST['nachname'], );
              $email = filter_var($_POST['email'], );
              $studiengang = filter_var($_POST['studiengang'], );

              $fehler=false {
               if(!$vorname || !$nachname || !$email || !$studiengang) $fehler=true;

               if(!§fehler)
               {
                echo "
                     <p>
                         Herzlichen Dank, ".$vorname." ".$Nachname." vom Studiengang " .$studiengang. "!<br/>
                         Wir haben eine E-Mail an " .$email. "gesendet. <br/>
                         <a href='./aufgabe7.php'>Zurück</a>
                    </p>
                    ";
          }
       }

 if(($_POST && $fehler) || empty($_POST)) :
 ?>

     <form action="./aufgabe7.php" method="post" class="form-horisontal">
         <div class="from-group row">
        <label for="vorname" class="col-3">Vorname:</label>
        <?php
        if(isset($vorname) && !$vorname){
            echo "
                <input type='text' name='vorname' placeholder='Vorname' class='form-control col-9 is-invalid'>
                <div class='invalid-feedback'>
                  Bitte Vorname eintragen!
          </div>
            ";
        }
        else {
            echo "
            <input type='text' name='vorname' placeholder='Vorname' class='form-control col-9'>
            ";
        }
        ?>
        </div>


      <div class="from-group row">
        <label for="nachname" class="col-3">Nachname:</label>
        <?php
        if(isset($nachname) && !$nachname){
            echo "
                <input type='text' name='nachname' placeholder='Nachname' classe'form-control col-9 is-invalid'>
                <div class='invalid-feedback'>
                  Bitte Nachname eintragen!
          </div>
            ";
        }
        else {
            echo "
            <input type='text' name='nachname' placeholder='Nachname' class='form-control col-9'>
            ";
        }
        ?>
     </div>

     <div class="from-group row">
        <label for="email" class="col-3">E-Mail:</label>
        <?php
        if(isset($email) && !$email){
            echo "
                <input type='email' name='email' placeholder='E-Mail' class='form-control col-9 is-invalid'>
                <div class='invalid-feedback'>
                  Bitte E-Mail-Adresse eintragen!
          </div>
            ";
        }
        else {
            echo "
            <input type='email' name='email' placeholder='E-Mail' class='form-control col-9'>
            ";
        }
        ?>
     </div>

     <div class="from-group row">
        <label for="studiengang" class="col-3">Studiengang:</label>
        <select name="studiengang" class="form-control col-9" required>
          <option value="" selected="selected" class="placeholder">Wählen Sie Ihren Studiengang</option>
         <option value="FIW">Informatik und Wirtschaft</option>
         <option value="AI">Angewandte Informatik</option>
         <option value="IMI">Internationale Medieninformatik</option>
         </select>

      </div>
      <div class="from-group row">
        <label for="pwd" class="col-3">Passwort:</label>
        <?php
        if(isset($pwd) && !$pwd){
            echo "
                <input type='password' name='pwd' placeholder='Passwort' class='form-control col-9 is-invalid'>
                <div class='invalid-feedback'>
                  Bitte Passwort eingeben!
          </div>
            ";
        }
        else {
            echo "
            <input type='password' name='pwd' placeholder='Passwort' class='form-control col-9'>
            ";
        }
        ?>
      </div>

      <div class="from-group row">
        <button type="submit" class="bin btn-primari">Anmelden</button>
     </div>
    </form>
    <?php
    endif
    ?>
    </div>

    <form>
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">E-Mail:</label>
        <div class="col-sm-10">
          <?php
          if(isset($email) && !$email){
              echo "
                  <input type='email' id='email' placeholder='E-Mail' class='form-control col-9 is-invalid'>
                  <div class='invalid-feedback'>
                    Bitte E-Mail-Adresse eintragen!
            </div>
              ";
          }
          else {
              echo "
              <input type='email' class='form-control col-9' id='email` placeholder='E-Mail'>
              ";
          }
          ?>
          <!--input type="email" class="form-control" id="email" placeholder="E-Mail"-->
        </div>
      </div>
      <div class="form-group row">
        <label for="pwd" class="col-sm-2 col-form-label">Passwort:</label>
        <div class="col-sm-10">
          <?php
          if(isset($pwd) && !$pwd){
              echo "
                  <input type='password' id='pwd' placeholder='Passwort' class='form-control col-9 is-invalid'>
                  <div class='invalid-feedback'>
                    Bitte Passwort eingeben!
            </div>
              ";
          }
          else {
              echo "
              <input type='password' class='form-control col-9' id='pwd' placeholder='Passwort'>
              ";
          }
          ?>
          <!--input type="password" class="form-control" id="pwd" placeholder="Passwort"-->
        </div>
      </div>
    </form>

</body>
</html>
