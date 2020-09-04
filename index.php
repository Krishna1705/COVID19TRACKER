<?php

include ("managelogic.php");

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Covid 19 Tracker</title>

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    <!--font awesome-->
    
    <script src="https://kit.fontawesome.com/1a40f3df8b.js" crossorigin="anonymous"></script>
    
    <!--local stylesheet file-->
    <link href="style.css" rel="stylesheet">
  </head>
<body>
<div class="container-fluid p-3 text-center" >
          <header class="p-3 bg-secondary text-white">
            <h1 >Covid 19 Tracker</h1>
            <h5>An Opensource project to keep track of all COVID-19 data around the world.</h5>
          </header>
</div>

<div class="container p-3 my-3 text-center">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 text-info">
            <h5>Total Confirmed</h5>
            <?php echo $world_total_confirmed;?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 text-success">
            <h5>Total Recovered</h5>
            <?php echo $world_total_recovered;?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 text-danger">
            <h5>Total Deaths</h5>
            <?php echo $world_total_deaths;?>
        </div>

    </div>
</div>

<div class="container p-3 my-3 text-center bg-light">
<p class="text-info">"Prevention is the cure"</p>
<p class="text-muted">"Stay Home Stay Safe"</p>
<input type="text" id="search" placeholder="Search by country name here" onkeyup="myFunction()">
</div>

<div class="container-fluid">
<div class="table-responsive">
    <table class="table table-hover" id="mytable">
  <thead class="thead bg-dark">
    <tr>
      <th scope="col">Countries</th>
      <th scope="col">Confirmed</th>
      <th scope="col">Recovered</th>
      <th scope="col">Deathes</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach($data as $key=>$value) {  
    $increase= $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'];  ?> 
    <tr>
        <td>
            <?php echo $key;?>
        </td>
        <td>
            <?php echo $value[$days_count]['confirmed'];?>

            <?php if($increase >0){?>
            <small class="text-danger pl-3"> <i class="fas fa-arrow-up"></i>&nbsp;<?php echo $increase;?> </small> 
            <?php }?>
           
        </td>
        <td>
            <?php echo $value[$days_count]['recovered'];?>
        </td>
        <td>
            <?php echo $value[$days_count]['deaths'];?>
        </td>
     </tr>
  <?php } ?>



   
  </tbody>
</table>

</div>
</div>
 
<div class="container-fluid py-3 text-center bg-secondary text-white">
 <span>Copyright &copy; 2020 Developed by 
     <a href="https://www.krishnaapatel.com" class="text-white"> Krishna Patel</a>
</span>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
   myFunction=()=>{
      //alert("hi");

      let filter=document.getElementById("search");
      let filter_val=document.getElementById("search").value.toUpperCase();

      let mytable=document.getElementById('mytable');
      let tr=mytable.getElementsByTagName('tr')

      for (let i=0;i<tr.length;i++){
        let td=tr[i].getElementsByTagName('td')[0];

        if(td){
          let text=td.textContent || td.innerHTML;
           if(text.toUpperCase().indexOf(filter_val) >-1){
                tr[i].style.display="";
           }else{
                tr[i].style.display="none";
           }
        }
      }
    
    }
    </script>
  </body>
</html>