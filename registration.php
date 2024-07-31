<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=p.3, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Registration</title>
  </head>

  <body>
    <div class="header">
      <div class="header_content">
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="registration.php">Registration</a></li>
            <li><a href="records.php">Records</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="contacts.php">Contacts</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <form action="connect.php" method="post">
      <label for="patientid">Patient Id</label>
      <input type="patientid" id="patientid" name="patientid" />
      <label for="firstname">First name</label>
      <input type="firstname" id="firstname" name="firstname" />
      <label for="middlename">Middle name</label>
      <input type="middlename" id="middlename" name="middlename" />
      <label for="surname">Surname</label>
      <input type="surname" id="surname" name="surname" />
      <label for="DOB">DOB</label>
      <input type="DOB" id="DOB" name="DOB" />

      <select name="Gender" id="Gender" name="Gender">
        <option value="male">male</option>
        <option value="female">female</option>
        <option value="bisexual">bisexual</option>

      </select>

      <select name="county" id="county" name="county">
        <option>Mombasa</option>
        <option>Kwale</option>
        <option>Kilifi</option>
        <option>Tana River</option>
        <option>Lamu</option>
        <option>Taita Taveta</option>
        <option>Garissa</option>
        <option>Wajir</option>
        <option>Mandera</option>
        <option>Marsabit</option>
        <option>Isiolo</option>
        <option>Meru</option>
        <option>Tharaka nithi</option>
        <option>Embu</option>
        <option>Kitui</option>
        <option>Machakos</option>
        <option>Makueni</option>
        <option>Nyandarua Central</option>
        <option>Nyeri</option>
        <option>Kirinyaga</option>
        <option>Murang'a</option>
        <option>Kiambu</option>
        <option>Turkana</option>
        <option>West Pokot</option>
        <option>Samburu</option>
        <option>Transnzoia</option>
        <option>Uasin Gishu</option>
        <option>Elgeyo Marakwet</option>
        <option>Nandi</option>
        <option>Baringo</option>
        <option>Laikipia</option>
        <option>Nakuru</option>
        <option>Narok</option>
        <option>Kajiado</option>
        <option>Kericho</option>
        <option>Bomet</option>
        <option>Kakamega</option>
        <option>Vihiga</option>
        <option>Bungoma</option>
        <option>Busia</option>
        <option>Siaya</option>
        <option>Kisumu</option>
        <option>Homa bay</option>
        <option>Migori</option>
        <option>Kisii</option>
        <option>Nyamira</option>
        <option>Nairobi</option>
      </select>
      <button class="send" name="send">send</button>
      <button class="clear">clear</button>
    </form>
  </body>
</html>
