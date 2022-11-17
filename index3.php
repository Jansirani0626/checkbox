<!DOCTYPE html>
<html>
<body>

<p>Display some text when the checkbox is checked:</p>

<label for="myCheck">Checkbox:</label> 
<input type="checkbox" id="myCheck" onclick="myFunction()">

<!--<p id="text" style="display:none">Checkbox is CHECKED!</p>-->

								 <input type="text" class="form-control" name="hobby_field_others" id="text" 
							   onclick="myFunction()" maxlength="50" placeholder="Hobby field" autocomplete="false" style="display:none"> 

<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>

</body>
</html>
