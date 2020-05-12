<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Heroic Features - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div class="container">
<!-- Jumbotron Header -->
<header class="jumbotron my-4">
  <div style="float: left;padding: 0px 150px;" >
        <h3>Giá vàng</h3>
  
    <table border="1px" cellspancing ="0"> 
        <tr>
              <th>Tên Vàng</th>
              <th>Thu Vào</th>
              <th>Bán ra</th>
        </tr>
        <?php require_once'pricegold.php'; 
                      $goal = '';
                      foreach($result as $key => $value) {
                        $goal .= '<tr>
                                  <td scope="row" style="width:200px;">'.$value['name'].'</td>
                                  <td>'.$value['price-buy'].'</td>
                                  <td>'.$value['price-sell'].'</td>
                                </tr>';
                      }
                      echo $goal;
      ?>
    </table>
  </div>
  <div >
        <h3>Giá coin</h3>
    <table border="1px" cellspancing ="0"> 
        <tr>
              <th>Tên Coin</th>
              <th>Giá</th>
              <th>Giao động</th>
        </tr>
        <?php require_once'pricecoin.php'; 
                      $coin = '';
                      foreach($priceCoin as $keyCoin => $valueCoin) {
                        $coin .= '<tr>
                                  <td scope="row" style="width:200px;">'.$valueCoin['name'].'</td>
                                  <td>'.$valueCoin['price'].'</td>
                                  <td>'.$valueCoin['change']. "%" .'</td>
                                </tr>';
                      }
                      echo $coin ;
      ?>
       
    </table>
  </div>
</header>
  <!-- Page Content -->
  <?php include './news.php'; 
                $str = '';
                foreach($newsArr as $keyStr => $valueStr) {
                  foreach($valueStr as $key02 => $value02) {
                   $str = '
                  <div class="row text-center">
                    <div class="col-lg-3 col-md-6 mb-4">
                      <div class="card h-100">
                        <img class="card-img-top" src="'.$value02['image'].'" alt="">
                        <div class="card-body">
                          <h4 class="card-title">'.$value02['title'].'</h4>
                          <p class="card-text">'.$value02['description'].'</p>
                        </div>
                        <div class="card-footer">
                          <a href="'.$value02['link'].'" class="btn btn-primary">Xem ngay</a>
                        </div>
                      </div>
                    </div>' ;
                  }
                    echo $str;
                }
              
?>
<!-- <?php include './news.php'; 
                // $str = '';
                // foreach($newsArr as $key => $value) {
                //   foreach($value as $key02 => $value02) {
                //     $str .= '<div class="col-md-12">
                //     <div class="post post-row">
                //       <a class="post-img" href="'.$value02['link'].'"><img src="'.$value02['image'].'" alt=""></a>
                //       <div class="post-body">
                //         <div class="post-meta">
                //           <a class="post-category cat-3" href="'.$value02['link'].'">'.$value02['category'].'</a>
                //           <span class="post-date">'.$value02['pubDate'].'</span>
                //         </div>
                //         <h3 class="post-title"><a href="'.$value02['link'].'">'.$value02['title'].'</a></h3>
                //         <p>'.$value02['description'].'</p>
                //       </div>
                //     </div>
                //   </div>';
                //   }
                // }
                // echo $str;
      ?> -->
  
    <!-- Page Features -->
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
