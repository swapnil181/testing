<?php
include('db.php');

//for total count data
$countSql = "SELECT COUNT(id) FROM employee";  
$tot_result = mysqli_query($conn, $countSql);   
$row = mysqli_fetch_row($tot_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);

//for first time load data
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
$sql = "SELECT * FROM employee ORDER BY id ASC LIMIT $start_from, $limit";  
$rs_result = mysqli_query($conn, $sql); 
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="dist/simplePagination.css" />
<script src="dist/jquery.simplePagination.js"></script>

<script>


     function div_show(row_id) 
      {  

             document.getElementById('popup_edit').style.display = "block";


      }

           function div_show1(row_id) 
      {  

              $.ajax({
              type:"POST",
              url: "edit.php",
              data:{id: row_id},
              success :
                function(result) 
                {
                         console.log(result);
                         var row=  JSON.parse(result);
                          document.getElementById('name_a').value =row.name;
              document.getElementById('salery_a').value = row.salery;
             document.getElementById('age_a').value=row.age;
              document.getElementById('id_a').value=row.id;

                }

            }) ;
           document.getElementById('popup_edit1').style.display = "block";


      }

      function showdata(row_id) 
      {  

              $.ajax({
              type:"POST",
              url: "edit.php",
              data:{id: row_id},
              success :
                function(result) 
                {
                         console.log(result);
                         var row=  JSON.parse(result);
                          document.getElementById('name_a').value =row.name;
              document.getElementById('salery_a').value = row.salery;
             document.getElementById('age_a').value=row.age;
              document.getElementById('id_a').value=row.id;

                }

            }) ;
           document.getElementById('showdata').style.display = "block";


      }
function delete_course(row_id)
{
 if(confirm("Are you sure you want to Delete this employee?"))
            {
                  $.ajax({
                  type:"POST",
                  url: "delete.php",
                  data:{id: row_id},
                  success :
                    function(result) 
                    {
                        alert("Employee deleted successfully!");
                        location.reload();
                    },
                  error :
                    function() 
                    {
                        alert("error");
                    }
                });
            }
            else
            {
                return false;
            }
}


function add()
{


   var name = document.getElementById("name_c").value;
    var salery = document.getElementById("salery_c").value;
 var age = document.getElementById("age_c").value;
 var email_c = document.getElementById("email_c").value;

  var data = {

    name: name , salery:salery,age:age,email_c:email_c

};
 
$.ajax({
                  type:"POST",
                  url: "add.php",
                  data:{data: data},
                  success :
                    function(result) 
                    {

                        alert(result) ;
                     //   alert("Items deleted successfully!");
                        location.reload();
                    },
                  error :
                    function() 
                    {
                        alert("error");
                    }
                });

}

function edit()
{

var id = document.getElementById("id_a").value;
   var name = document.getElementById("name_a").value;
    var salery = document.getElementById("salery_a").value;
 var age = document.getElementById("age_a").value;

var data = {

    name: name , salery:salery,age:age,id:id,

};
 
 $.ajax({
                  type:"POST",
                  url: "update.php",
                  data:{data: data},
                  success :
                    function(result) 
                    {

                        alert(result) ;
                       /*console.log(data);
                       alert("Items updated successfully!");*/
                        location.reload();
                    },
                  error :
                    function() 
                    {
                        alert("error");
                    }
                });

}


function search()
{

var search = document.getElementById("search-content").value ;

$.ajax({
                  type:"POST",
                  url: "search.php",
                  data:{data: search},
                  success :
                    function(result) 
                    {
                    document.getElementById("target-content").innerHTML=result ;
                    },
                  error :
                    function() 
                    {
                        alert("error");
                    }
                });

}

</script>
</head>
<body>
 



<div class="container" style="padding-top:20px;">

<div class="col-lg-4" style="margin-left: :10px " >
<input type="text" class="form-control" id="search-content" placeholder="Search Here your Items by name " >
</div>
<div class="col-lg-4" style="margin-bottom: 30px;">
<input type="button" class="btn btn-primary" value="Search" onclick="search()"  />
</div>
    <div id="cover" >
    </div>
    <div id="popup_edit" style="display:none;" class="ontop"  >
               <h1> Add New Iteam</h1>
       <form   method="post" name="myform">

         Name:   <input type="text" name="name_c" id="name_c" placeholder="Enter Name " class="form-control" required=""><br>
          Salary :   <input type="text" name="salery_c"  id="salery_c" placeholder="Enter Salery  "   class="form-control" required=""><br>
            Age  :  <input type="text" name="age_c" id="age_c" placeholder="Enter Age  "  class="form-control" required=""><br>
             email  :  <input type="text" name="email_c" id="email_c" placeholder="Enter email  "  class="form-control" required=""><br>

                <input type="button" onclick="add()"  class="btn btn-primary" value="submit">


       </form>
    
   </div>
     <div id="fade" class="black_overlay"></div>
<table class="table table-bordered table-striped">  
<thead>  
<tr class="table-active"> 
    <th>Id</th> 
<th>Name</th>  
<th>Salary</th>
<th>Age</th>  
<th>email</th> 
<th>Action</th> 

</tr>  
</thead> 


<div class="md-form" style="width:300px">

<input type="submit"  value="Create New Iteam " class="btn btn-success" onclick="div_show()">



</div>
<tbody id="target-content">
<?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>  
            <tr>  
                <td><?php echo $row["id"]; ?></td>  
            <td><?php echo $row["employee_name"]; ?></td>  
            <td><?php echo $row["employee_salary"]; ?></td>  
			<td><?php echo $row["employee_age"]; ?></td> 
      <td><?php echo $row["email_c"]; ?></td>   
           <td><i class='fas fa-trash btn btn-danger' onclick="delete_course(<?php echo $row['id'] ?>)" id="<?php echo $row['id']; ?>"></i>
          <i class='fas fa-edit btn btn-primary' onclick="div_show1(<?php echo $row['id']; ?>)" id="edit_<?php echo $row['id']; ?>"></i>
           <i class='fas fa-eye btn btn-success' onclick="showdata(<?php echo $row['id']; ?>)" id="view<?php echo $row['id']; ?>"></i></td>

          
            </tr>  
             
        
<?php  
};  
?>
</tbody> 



    <div id="popup_edit1" style="display:none;border:1px solid" class="ontop"  >
    
       <form   method="post">
             <input type="hidden" name="id_a" id="id_a" placeholder="Enter Name "  class="form-control">
            <input type="text" name="name_a" id="name_a" placeholder="Enter Name " required="" class="form-control">
              <input type="text" name="salery_a"  id="salery_a" placeholder="Enter Salery  "  required class="form-control">
                <input type="text" name="age_a" id="age_a" placeholder="Enter Age "  class="form-control">

                <input type="button" onclick="edit()"  class="btn btn-success" value="submit">


       </form>
    
   </div>
    <div id="showdata" style="display:none;border:1px solid" class="ontop"  >
    
       <form   method="post">
             <input type="hidden" name="id_a" id="id_a" placeholder="Enter Name "  class="form-control">
            <input type="text" name="name_a" id="name_a" placeholder="Enter Name " required="" class="form-control">
              <input type="text" name="salery_a"  id="salery_a" placeholder="Enter Salery  "  required class="form-control">
                <input type="text" name="age_a" id="age_a" placeholder="Enter Age "  class="form-control">

                <input type="button" onclick="view()"  class="btn btn-success" value="Back">


       </form>
    
   </div>
    
</table>
<nav><ul class="pagination">
<?php if(!empty($total_pages)):for($i=1; $i<=$total_pages; $i++):  
            if($i == 1):?>
            <li class='active'  id="<?php echo $i;?>"><a href='pagination.php?page=<?php echo $i;?>'><?php echo $i;?></a></li> 
            <?php else:?>
            <li id="<?php echo $i;?>"><a href='pagination.php?page=<?php echo $i;?>'><?php echo $i;?></a></li>
        <?php endif;?>          
<?php endfor;endif;?>
</ul></nav>
</div>
</body>
<script type="text/javascript">
$(document).ready(function(){
$('.pagination').pagination({
        items: <?php echo $total_records;?>,
        itemsOnPage: <?php echo $limit;?>,
        cssStyle: 'light-theme',
		currentPage : 1,
		onPageClick : function(pageNumber) {
			jQuery("#target-content").html('loading...');
			jQuery("#target-content").load("pagination.php?page=" + pageNumber);
		}
    });
});
</script>


