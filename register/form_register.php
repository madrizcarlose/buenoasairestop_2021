<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="insert.php" method="post" id="usrform" enctype="multipart/form-data">
<p>
        <label for="idplace"><strong>ID Place:</strong></label>
        <input type="text" name="idplace" id="idplace">
    </p>
    <hr>
    <p>
        Descripcion:<textarea rows="4" cols="50" name="descripcion" form="usrform"></textarea>
    </p>
    <hr>
    <input type="file" name="photo" id="fileSelect">
    <hr>
    <p>
        <label for="Whatsapp">Whatsapp:</label>
        <input type="text" name="whatsapp" id="whatsapp">
    </p>
    <hr>
    <label for="cars">Categoria:</label>
    
<select id="categoria" name="categoria">
  <option value="c003">Rest. Asado</option>
  <option value="c008">Rest. Italiano</option>
  <option value="c007">Rest. SurAmericano</option>
  <option value="c020">Bar</option>
  <option value="r000">Actividades</option>
  
  <option value="c010">Sitios turisticos</option>
</select>
<hr>
<input type="submit" value="Submit">
    <br> <br> <br>
<p>
        <label for="firstName">Name:</label>
        <input type="text" name="name" id="name"> 
    </p>
      
    <p>
    
   
</form>

</body>
</html>