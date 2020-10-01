<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
	<title>CLASE DE BOOTSTRAP</title>
	<link rel="stylesheet" href="">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
  <style type="text/css" media="screen">
    .collapse {
  height: auto;
  width: auto;
}

.collapse.height {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition: height 0.15s ease;
  -moz-transition: height 0.15s ease;
  -o-transition: height 0.15s ease;
  transition: height 0.15s ease;
}

.collapse.width {
  position: relative;
  width: 0;
  overflow: hidden;
  -webkit-transition: width 0.15s ease;
  -moz-transition: width 0.15s ease;
  -o-transition: width 0.15s ease;
  transition: width 0.15s ease;
}

.collapse.in.width {
  width: auto;
}

.collapse.in.height {
  height: auto;
}
  </style>
</head>
<body>
	<div class="container">
  <div class="content-start">
    <div class="col-2">
     <p align="justify">Bienvenido al uso de git en proyectos
    </div>
    <div class="rounded">
      <img src="desert.jpg" width="">
    </div><br>
  </div>
  <div class="row justify-content-center">
    <div class="col-4">
      <p align="justify" class="dos">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="col-8">
       <p align="justify" class="dos">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  <div class="row justify-content-end">
    <div class="col-md-8">
      <p align="justify" class="tres">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="col-sm-4">
      <p align="justify" class="tres">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  <div class="row justify-content-around">
    <div class="col-md-4">
     <p align="justify" class="cuatro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="col-md-4">
     <p align="justify" class="cuatro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="col-xl-4">
      <p align="justify" class="cuatro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  <div class="row justify-content-between">
    <div class="col-md-6">
      <p align="justify" class="cinco">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="col-md-6">
      <p align="justify" class="cinco">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
    <table class="table table-dark">
      <thead>
        <tr>
          <th>##</<th>
            <th>Nombre</<th>
              <th>Apellido</<th>
                <th>Cedula</<th>
        </tr>
        <tr>
          <td>1</td>
          <td>Franklin</td>
          <td>Garcia</td>
          <td>24.669.949</td>
        </tr>
       <tr>
          <td>2</td>
          <td>Adrian</td>
          <td>Castro</td>
          <td>23.554.664</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Luis</td>
          <td>Perezhjvbhvbjhbhjbjhbhjbjhbhjbhjbhjbhbhjbbhj</td>
          <td>43.233.554</td>
        </tr>
        </thead>
        <thead class="thead-light">
          <tr>
          <td>3</td>
          <td>Luis</td>
          <td></td>
          <td>43.233.554</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Luis</td>
          <td>Perez</td>
          <td>43.233.554</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Luis</td>
          <td>Perez</td>
          <td>43.233.554</td>
        </tr>
      </thead>
    </table>
  </div>
  </div>
</div>
<button role="button" class="btn-danger" data-toggle="collapse" data-target="#demo">
      simple horizontal collapsible
    </button>

    <div id="demo" class="collapse in width">
      <div style="width: 400px;">
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      </div>
    </div>

    <!-- <button role="button" class="btn-danger" data-toggle="collapse" data-target="#demo2">
      simple vertical collapsible
    </button>

    <div id="demo2" class="collapse in height">
      <div style="width: 400px;">
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      </div>
</div> -->
  
  
</body>
<script src="jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
</html>