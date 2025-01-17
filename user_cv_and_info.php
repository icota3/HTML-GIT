<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Informations</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body id="cv_and_info">
  <div class="container">
    <div class="form-container">
      <h1>Info on your profile</h1>
      <br><br>
      <form method="post" action="Details2.php" enctype="multipart/form-data">
        <div class="form-group">
          <label for="cv">Upload your CV</label>
          <br>
          <input id="cv" type="file" name="cv" class="form-control-file" label="" required>
        </div>
        <br>
        <div class="form-group">
          <label for="birthdate">Date of birth</label>
          <br>
          <input id="birthdate" type="text" name="birthdate" class="form-control-file" required>
        </div>
        
        <br>
        <div class="form-group">
          <label for="exampleFormControlInput1">Place of birth</label>
          <br>
          <input id="exampleFormControlInput1" type="text" name="exampleFormControlInput1" class="form-control-file" required>
        </div>
        <br>
        <div class="form-group">
          <label for="exampleFormControlInput2">Profession</label>
          <br>
          <input id="exampleFormControlInput4" type="text" name="exampleFormControlInput2" class="form-control-file" required>
        </div>
        <br>
        <div class="form-group">
            <label for="exampleFormControlInput3">Your number</label>
            <input type="text" name='Offerer_number' class="form-control" id="exampleFormControlInput3" placeholder="123-456-789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required>
        </div>
        <br>
        
        <div class="form-group">
          <label for="education_level">Level of education</label>
          <br>
          <select id="education_level" name="education_level" class="form-control" required>
            <option value="">Select one</option>
            <option value="no_school">No school</option>
            <option value="primary_school">Primary school</option>
            <option value="high_school">High school</option>
            <option value="faculty">Faculty</option>
            <option value="doctorate">Doctorate</option>
          </select>
        </div>
        <br>
        <input type="submit" value="Submit">
      </form>

      <br>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>     
  <script src="main.js"></script>
</body>


</html>