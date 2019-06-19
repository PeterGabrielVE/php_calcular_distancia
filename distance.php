<?php include_once 'header.php'; ?>

<div class="container" style="margin: 6rem;">
    <div class="row">
       <h2>Mapbox/PHP/MySQL</h2><br/><hr>
    </div>
    <div class="row">
    	 <h5>Calcula Distancia</h5>
    </div>
    <div class="row">
      <div class="col-md-6">
            <form action="" id="signupForm">

                <div class="row">
                  <label for="lat">Latitud:</label>
                  <input type="text" id="lat" name="lat" placeholder="Latitud">
                </div>

                <div class="row">
                  <label for="lng">Longitud:</label>
                  <input type="text" id="lng" name="lng" placeholder="Longitud">
                </div>

                <div class="row">
                  <input type="submit" value="Calcular" >
                </div>

            </form>
      </div>
    <div class="col-md-6">
        <div class="geocoder">
            <div id="geocoder" ></div>
        </div>
        <div id="map"></div>
    </div>
  </div>
</div>

<?php include_once 'footer.php'; ?>

