<!-- Owl-carousel -->
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./assets/grocery slider.png" alt=""  width="100%">
    </div>
    
    <div class="carousel-item">
      <img src="./assets/furniture slider.png" alt=""  width="100%">
    </div>

    <div class="carousel-item">
      <img src="./assets/fashion slider.jpg" alt=""  width="100%">
    </div>
  </div>
  
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<br>
<style>
    #carousel-indicators { 
  margin: 50px auto; 
  position: relative; 
  width: 240px; 
  height: 240px; 
  padding: 10px; 
  box-shadow: 0 0 20px rgba(0,0,0,0.4); 
}

#carousel-indicators > div { 
  position: absolute; 
  top: 10px; 
  left: 10px; 
  right: 10px; 
  bottom: 10px; 
}
</style>
<!-- !Owl-carousel -->
