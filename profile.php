  <?php
	require_once('inc/auth.php');
    require_once('admin/inc/stringops.php');
    $paramed=count($_GET);
    require_once('admin/inc/fetchprofile.php');
    if ($paramed==1) 
    {
      $username=trim($_GET['param']);
      if($username==$_SESSION['SESS_USERNAME'])
      {
        $paramed=0;
        fetchProfile($username,1);
      }
      else
      {
        if (fromSameBatch($_SESSION['SESS_USERNAME'],$username)==1) 
        {
          fetchProfile($username,1);
          $canView=1;
        }
        else
        {
          $canView=canView($_SESSION['SESS_USERNAME'],$username);
          fetchProfile($username,$canView);
        }
      }
    }
    else
    {
      $username=$_SESSION['SESS_USERNAME'];
      fetchProfile($username,1);
    }
    
  ?>
<?php

include "inc/header.php";
?>

<!--NAVIGATION BAR START-->
  <?php require_once('inc/navbar.php'); ?>
<!--NAVIGATION BAR END-->



<div class="containter">
	<div class="panel-body">
	<div class="col-md-12" style="margin-top: 35px;">

	  <div class="panel panel-info">
	  <div class="panel-heading" align="center">
		
		<?php 
		if ($imgbool==1) {
		?>
		  <a href="profile.php">
			<?php
			  echo '<img width="100" class="img-circle" src="admin/inc/getImage.php?id='.$mem_id. '"/>';
			?>
		  </a>
		<?php
		}
		if ($imgbool==0) {
		?>
		  <a href="profile.php">
			<?php
			  echo '<img width="100" class="img-circle" src="admin/images/user-icon.png"/>';
			?>
		  </a>
		<?php
		}
		?>
	  <h3><b><?php echo $username;?><b></h3>
	  </div>

	  <table class="table table-striped">
		<tr>
		  <td valign="top">
			<div class="c2">
			  Nama Lengkap:
			</div>
		  </td>

		  <td valign="top"><?php echo $name ?></td>
		</tr>

		<tr>
		  <td valign="top">
			<div class="c2">
			  Angkatan:
			</div>
		  </td>

		  <td valign="top"><?php echo $batch ?></td>
		</tr>

		<tr>
		  <td valign="top">
			<div class="c2">
			  Jurusan Terkahir:
			</div>
		  </td>

		  <td valign="top"><?php echo $branch ?></td>
		</tr>
		
		<tr>
		  <td valign="top">
			<div class="c2">
			  No Telepon:
			</div>
		  </td>

		  <td valign="top"><?php echo $phone ?></td>
		</tr>

		<tr>
		  <td valign="top">
			<div class="c2">
			  Email :
			</div>
		  </td>

		  <td valign="top"><?php echo $email ?></td>
		</tr>

		<tr>
		  <td valign="top">
			<div class="c2">
			  Tempat & Tanggal Lahir:
			</div>
		  </td>

		  <td valign="top"><?php echo $curr_loc ?></td>
		</tr>

		<tr>
		  <td valign="top">
			<div class="c2">
			  Alamat Lengkap:
			</div>
		  </td>

		  <td valign="top"><?php echo $perm_loc ?></td>
		</tr>

		<tr>
		  <td valign="top">
			<div class="c2">
			 Pekerjaan:
			</div>
		  </td>

		  <td valign="top"><?php echo $job ?></td>
		</tr>
	  </table>

	  <div class="panel-footer" align="right">
		<?php
		if ($paramed==1)
		{
		  if($canView!=1)
		  {
			if(requestStatus($_SESSION['SESS_USERNAME'], $username)==0)
			  echo '<a href="inc/send_vis_request.php?param='.$username.'">';
			else
			  echo '<span class="glyphicon glyphicon-transfer"></span> Visibility Request Sent';
		  }
		}
		else
		{      
		  echo '<a href="editprofile.php"><span class="glyphicon glyphicon-pencil"></span> Edit</a>';
		}
		?>
	  </div>

	</div>
	</div>
	  </div>
	  </div>
</div>
</div>	  

<?php
include "inc/footer.php";
?>