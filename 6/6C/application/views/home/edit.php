<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url();  ?>assets/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url();  ?>assets/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url();  ?>assets/css/style.css">

    <title>web arkademy</title>
  </head>
  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 mb-5 fixed-top" style="margin-top: -20px;">
      <a class="navbar-brand" href="<?=base_url('home');  ?>" style="margin-top: -10px;">
        <img src="<?= base_url();  ?>assets/img/logo.png"  alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <input class="search" type="search" placeholder="Search ...">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-warning text-white shadow p-2" data-toggle="modal" data-target="#tambahdata">EDIT</button>
      </div>
    </nav>



    <div id="flash-data-tambahdata" data-flashdata="<?= $this->session->flashdata('flash');  ?>"></div>
    <!-- FORM EDIT -->
    <div class="row pt-5 mt-5 justify-content-center">
      <div class="col-md-4 mt-5">
      <h3>EDIT</h3><hr>
      <form action="<?= base_url('product/update/');  ?><?= $product->id_product;  ?>" method="post">

        <input type="hidden" name="idproductedit" value="<?= $product->id_product;  ?>">

        <div class="form-group">
          <select class="form-control form-control-user" name="cashieredit" id="cashieredit">
          <option selected value="<?= $product->id_cashier;  ?>"><?= $product->cashier;  ?></option>
          <?php foreach ($cashier as $cashier): ?>
            <option value="<?= $cashier->id_cashier;  ?>"><?= $cashier->name;  ?></option>
          <?php endforeach ?>
          </select> 
        </div>

        <div class="form-group">
           <select class="form-control form-control-user" name="categoryedit" id="categoryedit" placeholder="Category">
          <option selected value="<?= $product->id_category;  ?>"><?= $product->category;  ?></option>
           <?php foreach ($category as $category): ?>
          <option value="<?= $category->id_category;  ?>"><?= $category->name;  ?></option>
          <?php endforeach ?>
          </select> 
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="productedit" value="<?= $product->product;  ?>">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="priceedit" value="<?= $product->price;  ?>">
        </div>
        <button name="submit" type="submit" class="btn text-white pr-5 pl-5" style="background-color: #FADC9C;">EDIT</button>
      </form>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="<?= base_url();  ?>assets/js/sweetalert/sweetalert2.all.min.js"></script>
    <script src="<?= base_url();  ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url();  ?>assets/js/myscript.js"></script>
  </body>
</html>