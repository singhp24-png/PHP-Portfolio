<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Prabhlean's Candy Shop</title>
<style>

h1   {background-color: #ffb6c1; margin: 0; padding : 15px; text-align: center;}
body{
margin: 0px;
background-color: powderblue;
}
label{
padding-top: 15px;
}
hr{
  height: 4px;
  background-color: #ffb6c1;
  border: none;
}
button{
padding: 15px;
background-color: #ffb6c1;
margin-left: 5px;
border: none;
}


button:hover{
background-color:#FFFFFF;
cursor: pointer;
}
</style>
</head>
<body>
<h1>Prabhlean's Candy Shop</h1>
<a href="index.php">Go Back Home</a>
<form action = "singh_p_thanks.php" method = "POST"> 
<br>
<h2>General Information</h2>
<label for = "name">
Name (Only Alphabetical Characters)
 <input name = "name"  id = "name" pattern="[A-Za-z0-9]+"  maxlength="25" required>
</label>
<br>
<br>
<label for = "email">
Email
 <input name="email"  id="email" type = "email" required>
</label>
<br>
<br>
<label for = "phone"> 
Phone Number
 <input name = "phone" id = "phone" type = "tel" required>
</label>
<br>
<br>
<label for="gender">Gender</label>
<select name="gender" id="gender" required>
    <option value="">--Please choose an option--</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Other">Other</option>
    <option value="Do Not Say">Do Not Say</option>
</select>
<br>
<hr>
<h2>What types of food should be in a chocolate bar?</h2>
 <label for = "rice">
Rice
 <input  value = "Rice" name = "food[]" type = "checkbox" id = "rice">
</label>
<br>
<br>
<label for = "carmel">
Carmel
 <input value = "Carmel" name = "food[]" type = "checkbox" id = "carmel">
</label>
<br>
<br>
<label for = "fruit">
Fruit
 <input value = "Fruit" name = "food[]" type = "checkbox" id = "fruit">
</label>
<br>
<br>
<label for = "cChips">
Chocolate Chips
 <input value = "Chocolate Chips" name = "food[]" type = "checkbox"  id = "cChips">
</label>
<br>
<br>
<hr>
<h2>Is fruit or chocolate candy better?</h2>
<label>
Fruit
 <input  value = fruit type = "radio" name = "better" id = "cFruit" required >
</label>
<label>
Chocolate
 <input value = chocolate type = "radio" name = "better" id = "cChocolate" required>
</label>
<br>
<hr>
<h2>Any Other Comments</h2>
<textarea name="comments" maxlength="255"> </textarea>
<br>
<button>Sumbit</button>
<button type="reset">Reset</button>
</form>
</body>
</html>