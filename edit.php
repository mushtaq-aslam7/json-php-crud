<?php
if (isset($_GET["index"])) {
  $index = (int) $_GET["index"];
  $getfile = file_get_contents('data.json');
  $jsonfile = json_decode($getfile, true);
  $jsonfile = $jsonfile;
  $jsonfile = $jsonfile[$index];
}

if (isset($_POST["index"])) {
  $index = (int) $_POST["index"];
  $getfile = file_get_contents('data.json');
  $all = json_decode($getfile, true);
  $jsonfile = $all ;
  $jsonfile = $jsonfile[$index];

  $post["id"] = isset($_POST["id"]) ? $_POST["id"] : "";
  $post["szPlotIdUniqueKey"] = isset($_POST["szPlotIdUniqueKey"]) ? $_POST["szPlotIdUniqueKey"] : "";
  $post["fPrice"] = isset($_POST["fPrice"]) ? $_POST["fPrice"] : "";
  $post["szRow"] = isset($_POST["szRow"]) ? $_POST["szRow"] : "";
  $post["szPlot"] = isset($_POST["szPlot"]) ? $_POST["szPlot"] : "";
  $post["szLot"] = isset($_POST["szLot"]) ? $_POST["szLot"] : "";
  $post["szCentroidLatitude"] = isset($_POST["szCentroidLatitude"]) ? $_POST["szCentroidLatitude"] : "";
  $post["szCentroidLongtitude"] = isset($_POST["szCentroidLongtitude"]) ? $_POST["szCentroidLongtitude"] : "";
  $post["szCentroidNorthing"] = isset($_POST["szCentroidNorthing"]) ? $_POST["szCentroidNorthing"] : "";
  $post["szCentroidEasting"] = isset($_POST["szCentroidEasting"]) ? $_POST["szCentroidEasting"] : "";
  $post["szNECornerLatitude"] = isset($_POST["szNECornerLatitude"]) ? $_POST["szNECornerLatitude"] : "";
  $post["szNECornerLongitude"] = isset($_POST["szNECornerLongitude"]) ? $_POST["szNECornerLongitude"] : "";
  $post["szNWCornerLatitude"] = isset($_POST["szNWCornerLatitude"]) ? $_POST["szNWCornerLatitude"] : "";
  $post["szNWCornerLongitude"] = isset($_POST["szNWCornerLongitude"]) ? $_POST["szNWCornerLongitude"] : "";
  $post["szSECornerLatitude"] = isset($_POST["szSECornerLatitude"]) ? $_POST["szSECornerLatitude"] : "";
  $post["szSECornerLongitude"] = isset($_POST["szSECornerLongitude"]) ? $_POST["szSECornerLongitude"] : "";
  $post["szSWCornerLatitude"] = isset($_POST["szSWCornerLatitude"]) ? $_POST["szSWCornerLatitude"] : "";
  $post["szSWCornerLongitude"] = isset($_POST["szSWCornerLongitude"]) ? $_POST["szSWCornerLongitude"] : "";
  $post["boundaryPlot"] = isset($_POST["boundaryPlot"]) ? $_POST["boundaryPlot"] : "";
  $post["cornerPlot"] = isset($_POST["cornerPlot"]) ? $_POST["cornerPlot"] : "";
  $post["PriceWithTaxWithExtra"] = isset($_POST["PriceWithTaxWithExtra"]) ? $_POST["PriceWithTaxWithExtra"] : "";



  if ($jsonfile) {
    unset($all [$index]);
    $all [$index] = $post;
    $all  = array_values($all );
    file_put_contents("data.json", json_encode($all, JSON_PRETTY_PRINT));
  }
  header("Location: index.php");
}
?>
<?php if (isset($_GET["index"])) : ?>
  <html>

  <head>
    <title>Edit Index ID: <?php echo $index + 1 ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  </head>

  <body style="background-color: white;">

    <style>
      * {
        color: black;
      }
    </style>

    <center>
      <div class="container"><br><br>
        <h4>Edit Index ID: <?php echo $index + 1 ?></h4><br>

        <form action="edit.php" method="POST">
          <div class="form">
            <input type="hidden" value="<?php echo $index ?>" name="index" />

            <div class="row">
              <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-2">
                    <label for="id">ID:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id" value="<?php echo $jsonfile["id"] ?>" />
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-2">
                    <label for="uniqueId">Unique ID:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="szPlotIdUniqueKey" value="<?php echo $jsonfile["szPlotIdUniqueKey"] ?>" />
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-2">
                    <label for="price">Price:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="fPrice" value="<?php echo $jsonfile["fPrice"] ?>" />
                  </div>
                </div>
              </div>
            </div><br />
            <div class="row">
              <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-2">
                    <label for="row">Row:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="szRow" value="<?php echo $jsonfile["szRow"] ?>" />
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-2">
                    <label for="plotSize">Plot:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="szPlot" value="<?php echo $jsonfile["szPlot"] ?>" />
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-2">
                    <label for="lot">Lot:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="szLot" value="<?php echo $jsonfile["szLot"] ?>" />
                  </div>
                </div>
              </div>
            </div><br />
            <div class="row">
              <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="latitude">Latitude:</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="szCentroidLatitude" value="<?php echo $jsonfile["szCentroidLatitude"] ?>" />
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="longitude">Longitude:</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="szCentroidLongtitude" value="<?php echo $jsonfile["szCentroidLongtitude"] ?>" />
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="northing">Centroid Northing:</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="szCentroidNorthing" value="<?php echo $jsonfile["szCentroidNorthing"] ?>" />
                  </div>
                </div>
              </div>
            </div><br />
            <div class="row">
              <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="easting">Centroid Easting:</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="szCentroidEasting" value="<?php echo $jsonfile["szCentroidEasting"] ?>" />
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="neC_Lt">NE Corner Latitude:</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="szNECornerLatitude" value="<?php echo $jsonfile["szNECornerLatitude"] ?>" />
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="neC_lg">NE Corner Longitude:</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="szNECornerLongitude" value="<?php echo $jsonfile["szNECornerLongitude"] ?>" />
                  </div>
                </div>
              </div>
            </div><br />
            <div class="row">
              <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="nwC_lt">NW Corner Latitude:</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="szNWCornerLatitude" value="<?php echo $jsonfile["szNWCornerLatitude"] ?>" />
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="nwC_lg">NW Corner Longitude:</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="szNWCornerLongitude" value="<?php echo $jsonfile["szNWCornerLongitude"] ?>" />
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="seC_lt">SE Corner Laatitude:</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" " name=" szSECornerLatitude" value="<?php echo $jsonfile["szSECornerLatitude"] ?>" />
                  </div>
                </div>
              </div>
            </div><br />
            <div class="row">

              <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="seC_lg">SE Corner Longitude:</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="szSECornerLongitude" value="<?php echo $jsonfile["szSECornerLongitude"] ?>" />
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="swC_lt">SW Corner Latitude:</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="szSWCornerLatitude" value="<?php echo $jsonfile["szSWCornerLatitude"] ?>" />
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="swC_lg">SW Corner Longitude:</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="szSWCornerLongitude" value="<?php echo $jsonfile["szSWCornerLongitude"] ?>" />
                  </div>
                </div>
              </div>
            </div><br />
            <div class="row">
              <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="boundryPlot">Boundary Plot:</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="boundaryPlot" value="<?php echo $jsonfile["boundaryPlot"] ?>" />
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-2">
                    <label for="cornerPlot">Corner Plot:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="cornerPlot" value="<?php echo $jsonfile["cornerPlot"] ?>" />
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="priceWTax">Price with tax:</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="PriceWithTaxWithExtra" value="<?php echo $jsonfile["PriceWithTaxWithExtra"] ?>" />
                  </div>
                </div>
              </div>
            </div><br />


            <div class="col-auto">
              <input class="btn btn-outline-warning" value="Update" type="submit" /> <a href="index.php" class="btn btn-outline-danger">Cancel</a>
            </div>
          </div>
        </form>
      <?php endif; ?>
      </div>
    </center>
  </body>

  </html>