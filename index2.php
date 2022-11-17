<!DOCTYPE html>
<html>
<body>
<script>
function skillFunction() {
  var skillBox = document.getElementById("myskill");
  var textskill = document.getElementById("textskill");
  if (skillBox.checked == true){
    textskill.style.display = "block";
  } else {
     textskill.style.display = "none";
  }
}
</script>



<!--show other skills-->
<?phpforeach($user_skill_data as $user_skill_row){

								 if(!empty($user_skill_row['skill_others']))  { 
								 $other_skill_name=$user_skill_row['skill_others'];
								 $other_skill_per=$user_skill_row['skill_percent'];
								 $string = str_replace(' ', '_', $other_skill_name);
								$string = str_replace('+', 'plus', $string);
								$clr_skill_other_name = preg_replace('/[^A-Za-z0-9\-]/', '', $string); 
								$skill_other_per=$clr_skill_other_name ."_per";
								$skill_other_val=$clr_skill_other_name ."_val"; */
								 ?>	
<script>
	$('#<?php echo $skill_other_per;?>').mousemove(function(){
    $('#<?php echo $skill_other_val;?>').text($('#<?php echo $skill_other_per;?>').val());
	});
	
	</script>
<?php } }?>	


<?php  foreach($user_skill_data as $user_skill_row){

								 if(!empty($user_skill_row['skill_others']))  { 
								 $other_skill_name=$user_skill_row['skill_others'];
								 $other_skill_per=$user_skill_row['skill_others'];
								 $string = str_replace(' ', '_', $other_skill_name);
								$string = str_replace('+', 'plus', $string);
								$clr_skill_other_name = preg_replace('/[^A-Za-z0-9\-]/', '', $string); 
								$skill_other_per=$clr_skill_other_name ."_per";
								$skill_other_val=$clr_skill_other_name ."_val";
								 ?>
								 
								<div class="form-group col-md-2">
							  <label for="skill"><?php echo $other_skill_name;?> </label>
							 <input type="hidden" name="skill_name[]" class="form-control" value="<?php echo $other_skill_name;?>"></div>
							
							 <div class="form-group col-md-3">
							 <input type="range" name="skill_per[]" style="width:240px;" id="<?php echo $skill_other_per; ?>" value="<?php echo $other_skill_per; ?>" max="100" >
							 </div>
							
							 <div class="form-group col-md-3">
							 <span id="<?php echo $skill_other_val; ?>"><?php echo $skill_per_arr[$SKILL_NAME]; ?>%</span>
							 </div>
							 
							  
							 <div class="form-group col-md-4"></div>


								<?php 	} }?>

























<input type="checkbox" name="other_skill" value=""  id="myskill" onclick="skillFunction()" class="skill_chk" /> 
<input type="text" class="form-control" name="skill_field_others" id="textskill" 
							   onclick="skillFunction()" maxlength="50"  placeholder="Skill field" autocomplete="false" style="display:none;width:250px;" > 
							   
							   
		 <!-- SKILLS tab starts -->
					 <div class="tab-pane fade" id="skill_tab_content" role="tabpanel" aria-labelledby="test_tab">
						<div class="d-flex flex-column h-100">
						  
						   <form id="skill_tab_frm" class="profile_frm" action="http://localhost/fabc.global/skill_tab_submit" method="post">
							  <input type="hidden" name="tab_id" id="tab_id" value="skill_tab"/>
							   <div class="form-row">
														
							  <div class="form-group col-md-2">
							  <label for="skill">Java </label>
							 <input type="hidden" name="skill_name[]" class="form-control" value="Java"></div>
							 
							 							 <div class="form-group col-md-3">
							 <input type="range" name="skill_per[]" style="width:240px;" id="Java_per" value="0" max="100" >
							 </div>
							
							 <div class="form-group col-md-1">
							 <span id="Java_val">0%</span>
							 </div>
							 
							  
							 <div class="form-group col-md-6"></div>
							 
							 
							 
							  
							
														
							  <div class="form-group col-md-2">
							  <label for="skill">Artificial Intelligence </label>
							 <input type="hidden" name="skill_name[]" class="form-control" value="Artificial Intelligence"></div>
							 
							 							 <div class="form-group col-md-3">
							 <input type="range" name="skill_per[]" style="width:240px;" id="ArtificialIntelligence_per" value="0" max="100" >
							 </div>
							
							 <div class="form-group col-md-1">
							 <span id="ArtificialIntelligence_val">0%</span>
							 </div>
							 
							  
							 <div class="form-group col-md-6"></div>
							 
							 
							 
							  
							
														
							  <div class="form-group col-md-2">
							  <label for="skill">UI/UX </label>
							 <input type="hidden" name="skill_name[]" class="form-control" value="UI/UX"></div>
							 
							 							 <div class="form-group col-md-3">
							 <input type="range" name="skill_per[]" style="width:240px;" id="UIUX_per" value="0" max="100" >
							 </div>
							
							 <div class="form-group col-md-1">
							 <span id="UIUX_val">0%</span>
							 </div>
							 
							  
							 <div class="form-group col-md-6"></div>
							 
							 
							 
							  
							
														
							  <div class="form-group col-md-2">
							  <label for="skill">Front end </label>
							 <input type="hidden" name="skill_name[]" class="form-control" value="Front end"></div>
							 
							 							 <div class="form-group col-md-3">
							 <input type="range" name="skill_per[]" style="width:240px;" id="Frontend_per" value="0" max="100" >
							 </div>
							
							 <div class="form-group col-md-1">
							 <span id="Frontend_val">0%</span>
							 </div>
							 
							  
							 <div class="form-group col-md-6"></div>
							 
							 
							 
							  
							
														
							  <div class="form-group col-md-2">
							  <label for="skill">Java Script </label>
							 <input type="hidden" name="skill_name[]" class="form-control" value="Java Script"></div>
							 
							 							 <div class="form-group col-md-3">
							 <input type="range" name="skill_per[]" style="width:240px;" id="JavaScript_per" value="0" max="100" >
							 </div>
							
							 <div class="form-group col-md-1">
							 <span id="JavaScript_val">0%</span>
							 </div>
							 
							  
							 <div class="form-group col-md-6"></div>
							 
							 
							 
							  
							
														
							  <div class="form-group col-md-2">
							  <label for="skill">Mobile Application </label>
							 <input type="hidden" name="skill_name[]" class="form-control" value="Mobile Application"></div>
							 
							 							 <div class="form-group col-md-3">
							 <input type="range" name="skill_per[]" style="width:240px;" id="MobileApplication_per" value="0" max="100" >
							 </div>
							
							 <div class="form-group col-md-1">
							 <span id="MobileApplication_val">0%</span>
							 </div>
							 
							  
							 <div class="form-group col-md-6"></div>
							 
							 
							 
							  
							
														
							  <div class="form-group col-md-2">
							  <label for="skill">Python </label>
							 <input type="hidden" name="skill_name[]" class="form-control" value="Python"></div>
							 
							 							 <div class="form-group col-md-3">
							 <input type="range" name="skill_per[]" style="width:240px;" id="Python_per" value="0" max="100" >
							 </div>
							
							 <div class="form-group col-md-1">
							 <span id="Python_val">0%</span>
							 </div>
							 
							  
							 <div class="form-group col-md-6"></div>
							 
							 
							 
							  
							
														
							  <div class="form-group col-md-2">
							  <label for="skill">C </label>
							 <input type="hidden" name="skill_name[]" class="form-control" value="C"></div>
							 
							 							 <div class="form-group col-md-3">
							 <input type="range" name="skill_per[]" style="width:240px;" id="C_per" value="0" max="100" >
							 </div>
							
							 <div class="form-group col-md-1">
							 <span id="C_val">0%</span>
							 </div>
							 
							  
							 <div class="form-group col-md-6"></div>
							 
							 
							 
							  
							
														
							  <div class="form-group col-md-2">
							  <label for="skill">C++ </label>
							 <input type="hidden" name="skill_name[]" class="form-control" value="C++"></div>
							 
							 							 <div class="form-group col-md-3">
							 <input type="range" name="skill_per[]" style="width:240px;" id="Cplusplus_per" value="0" max="100" >
							 </div>
							
							 <div class="form-group col-md-1">
							 <span id="Cplusplus_val">0%</span>
							 </div>
							 
							  
							 <div class="form-group col-md-6"></div>
							 
							 
							 
							  
							
														
							  <div class="form-group col-md-2">
							  <label for="skill">Web Designing </label>
							 <input type="hidden" name="skill_name[]" class="form-control" value="Web Designing"></div>
							 
							 							 <div class="form-group col-md-3">
							 <input type="range" name="skill_per[]" style="width:240px;" id="WebDesigning_per" value="0" max="100" >
							 </div>
							
							 <div class="form-group col-md-1">
							 <span id="WebDesigning_val">0%</span>
							 </div>
							 
							  
							 <div class="form-group col-md-6"></div>
							 
							 
							 
							  
							
														
							  <div class="form-group col-md-2">
							  <label for="skill">HTML/CSS </label>
							 <input type="hidden" name="skill_name[]" class="form-control" value="HTML/CSS"></div>
							 
							 							 <div class="form-group col-md-3">
							 <input type="range" name="skill_per[]" style="width:240px;" id="HTMLCSS_per" value="0" max="100" >
							 </div>
							
							 <div class="form-group col-md-1">
							 <span id="HTMLCSS_val">0%</span>
							 </div>
							 
							  
							 <div class="form-group col-md-6"></div>
							 
							 
							 
							  
							
														
							  <div class="form-group col-md-2">
							  <label for="skill">Internet </label>
							 <input type="hidden" name="skill_name[]" class="form-control" value="Internet"></div>
							 
							 							 <div class="form-group col-md-3">
							 <input type="range" name="skill_per[]" style="width:240px;" id="Internet_per" value="0" max="100" >
							 </div>
							
							 <div class="form-group col-md-1">
							 <span id="Internet_val">0%</span>
							 </div>
							 
							  
							 <div class="form-group col-md-6"></div>
							 
							 
							 
							  
							
														
							  <div class="form-group col-md-2">
							  <label for="skill">Wireless </label>
							 <input type="hidden" name="skill_name[]" class="form-control" value="Wireless"></div>
							 
							 							 <div class="form-group col-md-3">
							 <input type="range" name="skill_per[]" style="width:240px;" id="Wireless_per" value="0" max="100" >
							 </div>
							
							 <div class="form-group col-md-1">
							 <span id="Wireless_val">0%</span>
							 </div>
							 
							  
							 <div class="form-group col-md-6"></div>
							 
							 
							 
							  
							
														
							  <div class="form-group col-md-2">
							  <label for="skill">Others </label>
							 <input type="hidden" name="skill_name[]" class="form-control" value="Others"></div>
							 
							 							 <div class="form-group col-md-1">
							 <input type="checkbox" name="other_skill" value=""  id="myskill" onclick="skillFunction()" class="skill_chk" /> 
							 </div>
							 
							 <div class="form-group col-md-3">
							 <input type="text" class="form-control" name="skill_field_others" id="textskill" 
							   onclick="skillFunction()" maxlength="50"  placeholder="Skill field" autocomplete="false" style="display:none;width:250px;" required  > 
							 </div>
							 
							 <div class="form-group col-md-3">
							 <input type="range" name="skill_per_others"  class="form-control" value="1" style="display:none;width:250px;"  id="skilltrack" value="" max="100" style="display:none;width:250px;"  >
							 </div>&nbsp;
							 <div class="form-group col-md-2">
								<span id="skillper" style="display:none;width:250px;">0%</span>
								</div>
								<div class="form-group col-md-1"></div>
								
							 
							  
							
								
							
							
																 
								<div class="form-group col-md-2">
							  <label for="skill">sample skill </label>
							 <input type="hidden" name="skill_name[]" class="form-control" value="sample skill"></div>
							
							 <div class="form-group col-md-3">
							 <input type="range" name="skill_per[]" style="width:240px;" id="sampleskill_per" value="sample skill" max="100" >
							 </div>
							
							 <div class="form-group col-md-3">
							 <span id="sampleskill_val">%</span>
							 </div>
							 
							  
							 <div class="form-group col-md-8"></div>


																
							  </div>
							  
							   
							    
							   
							  <div class="form-row">
								<div class="form-group col-md-12 text-left">
									 <a href="http://localhost/fabc.global/KProfileBuilder" class="btn btn-danger">Cancel</a>
									 <button type="submit" class="btn btn-primary" onclick="return validateSkillFrm()">Submit</button>
								</div>
							  </div>							   
						   </form>
						   
						</div>
					 </div>
							   
							   </body>
							   </html>