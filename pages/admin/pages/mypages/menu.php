<?php
include_once('../../../../connectiondb.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
</head>
<body>
<script type="text/javascript">
  function deleteRow(el) {
    // while there are parents, keep going until reach TR 
    while (el.parentNode && el.tagName.toLowerCase() != 'tr') {
        el = el.parentNode;
    }

    // If el has a parentNode it must be a TR, so delete it
    // Don't delte if only 3 rows left in table
    if (el.parentNode && el.parentNode.rows.length > 3) {
        el.parentNode.removeChild(el);
    }
}
</script>

<?php
  if(isset($_POST['save']))
  {
    $menu = $_POST['tbxmenu']; 
   
    $query = mysql_query( "INSERT INTO menu (name)
                      VALUES ('$menu')");
    echo $query;
    //header('location:menu.php?msg=1');
    
  }

  else
  {
   // header('location:menu.php?msg=0');
  }
  
  
?>


<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            General Form Elements
            <small>Preview</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
          </ol>
          <div class="row">
            <div class="col-md-6">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">General Elements</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form method="post" action="menu.php" role="form">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Menu</label>
                      <input type="text" name="tbxmenu" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="box-footer">
                    <button type="submit" name="save" class="btn btn-primary">Submit</button>
                  </div>
                    
                    <?php
                      $query="select * from menu";
                      $records = mysql_query($query);
                    ?>
                    <!-- input states -->
                    <table class="table table-striped">
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                    </tr>
                    <?php
                         $i=0;
                         while($menu=mysql_fetch_assoc($records))
                         {
                          echo "<tr class='success'>";
                            echo "<td>".$menu['id']."</td>"."<td>".$menu['name']."</td>";
                            echo "<td><a href='menuedit.php?id=".$menu['id']."'>Edit</a></td>";
                            echo "<td><input type='button' value='Delete' class='btn btn-danger' onclick='deleteRow(this);'>
    </td>";
    
    echo "</tr>";
  $i++;                       }
  ?>

</table>
                   


                      </div>
                    </div>
                      </div>
                    </div>
                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
    </div>

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
</body>
