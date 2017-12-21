<?php
require_once('inc/auth.php');
include "inc/header.php";
?>

<!--NAVIGATION BAR START-->
  <?php require_once('inc/navbar.php'); ?>
<!--NAVIGATION BAR END-->


<div class="container">
  <div class="col-md-12" style="margin-top: 75px;">
  	<div class="well">
    <form action="inc/blog_exec.php" id="subForm" name="subForm" method="post" >
		<div class="panel-heading">
				<h3>Write Blog Post</h3>
		</div>
		<table class="table table-striped" align="center">
			<tr>
				<td>
					<div for="name">Title Post:</div>
				</td>
				<td>
				  <input type="text" name="title" id="title" />
				</td>
			</tr>

			<tr>
				<td>
					<div>
						Who is this Post Aimed at ?
					</div>
				</td>
				<td>
				<label>
				<input name="aud" type="radio" value="1" />Anybody</label>
				<label>
				<input name="aud" type="radio" value="2" />For Institute</label>
				<label>
				<input name="aud" type="radio" value="3" />For Students</label>
				</td>
			</tr>
			<tr>
				<td>
				  <div>
					What is this Post About ?
				  </div>
				</td>
				<td>
				<select name="refer" id="refer">
				  <option value="null">Select One</option>
				  <option value="1">Academics</option>
				  <option value="2">Professional Opportunities</option>
				  <option value="3">Institute Experience/Events</option>
				  <option value="4">General</option>
				</select>
				</td>
			</tr>


			<tr>
				<td>
				  <div>
					The Main Post
				  </div>
				</td>
				<td>
					<textarea name="ppost" cols="80" rows="10" id="ppost"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<div align="center">
						<input type="submit" name="Submit" id="post" value="Forward" />
					</div>
				</td>
			</tr>

        </table>
    </form>
  </div>
</div>
</div>
<?php
include "inc/footer.php";
?>