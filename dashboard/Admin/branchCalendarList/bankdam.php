<?php
    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }
    if (!isset($_SESSION['loggedin']) || ($_SESSION['role'] !== 'admin' && $_SESSION['role'] !== 'employee')) {
      header('Location: ../Login/index.php');
  die();
}
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

<link type="text/css" rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>



<script>
  function show($id) {
    document.getElementById("zero" + $id).style.display = "inline-block";
    document.getElementById("aa" + $id).style.display = "inline-block";
  }

  function hide($id) {
    document.getElementById("zero" + $id).style.display = "none";
    document.getElementById("aa" + $id).style.display = "none";
  }
</script>


<style>
  .row>.column {
    padding: 0 8px;
  }

  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  .column {
    float: left;
    width: 25%;
  }

  /* The Modal (background) */
  .modal {
    display: none;
    justify-content: center;
    position: fixed;
    z-index: 1;
    left: 25%;
    top: 0;
    width: 50%;
    height: 83%;
    overflow: auto;
    background-color: #ffffff00;
  }

  /* Modal Content */
  .modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    width: 90%;
    max-width: 1200px;
  }

  /* The Close Button */
  .close {
    color: black;
    position: absolute;
    top: 8px;
    right: 35px;
    font-size: 35px;
    font-weight: bold;
    z-index: inherit;
}

  .close:hover,
  .close:focus {
    color: #999;
    text-decoration: none;
    cursor: pointer;
  }

  /* .mySlides {
    display: none;
  } */

  .cursor {
    cursor: pointer;
  }

  /* Next & previous buttons */
  .prev,
  .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -50px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
  }

  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }

  /* On hover, add a black background color with a little bit see-through */
  .prev:hover,
  .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }

  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

  img {
    margin-bottom: -4px;
  }

  .caption-container {
    text-align: center;
    background-color: black;
    padding: 2px 16px;
    color: white;
  }

  .demo {
    opacity: 0.6;
  }

  .active,
  .demo:hover {
    opacity: 1;
  }

  img.hover-shadow {
    transition: 0.3s;
  }

  .hover-shadow:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }

  #tbl {
    width: 100%;
  }


  body {
    height: 100%;

  }

  #zero {
    top: 0;
    left: 0;
    position: fixed;
    opacity: 0.4;
    width: 100%;
    height: 100%;
    pointer-events: none;
  }

  #aa {

    position: fixed;
    left: 0;
    right: 0;
    margin: auto;
    top: 50%;
    transform: translateY(-50%);
    width: 50em;
    height: 40em;
    padding: 15px;
    background: #fff;
    box-sizing: content-box;
    border: 3px solid black;
  }

  a,
  a:visited,
  a:focus {
    margin-right: 10px;
    padding: 5px;
    text-decoration: none;
  }



  .right {
    float: right;
  }

  #view {
    text-align: center;
  }
</style>

<table class="table table-striped" id="tbl">
  <thead>
    <tr>

      <th scope="col">ID</th>
      <th scope="col">Document</th>
      <th scope="col" id="view">Delete </th>
      <th scope="col" id="view" style="    position: relative;left: 60px;">view</a></th>

    </tr>
  </thead>

  <tbody>

    <?php
    $connect = mysqli_connect("localhost:3308", "root", "", "donation");
    ?>

    <?php
    $query = "SELECT * FROM files ORDER BY id ASC";
    $result = mysqli_query($connect, $query);
    $i = 0;
    while ($row = mysqli_fetch_array($result)) {

      echo '
                          <tr>  
						  <th scope="row">' . $i . '</th>
                               <td>  
                                   <img src="../../../uploads/' . $row['image'] . '"  height="100px" width="100px" class="img-thumnail" />  
                               </td>  

                               <th><a href="delete-process.php?id=' . $row['id'] . '" ?><button class="btn btn-danger">Delete</button></a></th>
                               <div id=zero style="display:none"></div>
                               <th>
                               <!-- The Modal -->
                               <th><button class="btn btn-primary" onclick="openModal('.$i.');currentSlide('.$i.')">View</button>
                               </th>
                                </a>
                                </tr> 
                                  <div id="myModal'.$i.'" class="modal">
                                  <span class="close cursor" onclick="closeModal('.$i.')">&times;</span>
                                  <div class="modal-content">
                                    <div class="mySlides" style="display: flex;
                                    justify-content: center;">
                                      <img src="../../../uploads/' . $row['image'] . '"  height="80%" width="80%" class="img-thumnail" />
                                      </div>
                                  </div>
                                </div>
                     ';
                     $i= $i + 1;
                     
    }
    ?>


    <!---------- popup ---------->

    <script type="text/javascript">
      function openModal(n) {
        document.getElementById("myModal"+`${n}`).style.display = "block";
      }
      function closeModal(n) {
        document.getElementById("myModal"+`${n}`).style.display = "none";
      }
      function currentSlide(n) {
        showSlides(n);
      }
      function showSlides(n) {
        var slides = document.getElementsByClassName("mySlides")[n];
        console.log(n);
          }
    </script>

  </tbody>
</table>
