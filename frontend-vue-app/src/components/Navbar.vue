<script setup> 
  function categoryClose()
  {
    $(".category-close").on("click", function () {
        $("body").css("overflow", "inherit"),
          $(".category-sidebar").removeClass("active"),
          $(".backdrop").fadeOut();
      });
  }
</script>

<template>
  <div>
    <nav class="navbar-part">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="navbar-content">
              <ul class="navbar-list">
                <li class="navbar-item dropdown">
                  <a class="navbar-link" href="#">home</a>
                </li>

                <li class="navbar-item dropdown-megamenu">
                  <a class="navbar-link dropdown-arrow" href="#">Categories</a>
                  <div class="megamenu">
                    <div class="container">
                      <div class="row row-cols-5">
                        <div class="col">
                          <div class="megamenu-wrap">
                            <h5 class="megamenu-title">vegetables</h5>
                            <ul class="megamenu-list">
                              <li><a href="#">carrot</a></li>
                              <li><a href="#">broccoli</a></li>
                              <li><a href="#">asparagus</a></li>
                              <li><a href="#">cauliflower</a></li>
                              <li><a href="#">eggplant</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col">
                          <div class="megamenu-wrap">
                            <h5 class="megamenu-title">fruits</h5>
                            <ul class="megamenu-list">
                              <li><a href="#">Apple</a></li>
                              <li><a href="#">orange</a></li>
                              <li><a href="#">banana</a></li>
                              <li><a href="#">strawberrie</a></li>
                              <li><a href="#">watermelon</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col">
                          <div class="megamenu-wrap">
                            <h5 class="megamenu-title">dairy farms</h5>
                            <ul class="megamenu-list">
                              <li><a href="#">Butter</a></li>
                              <li><a href="#">Cheese</a></li>
                              <li><a href="#">Milk</a></li>
                              <li><a href="#">Eggs</a></li>
                              <li><a href="#">cream</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col">
                          <div class="megamenu-wrap">
                            <h5 class="megamenu-title">seafoods</h5>
                            <ul class="megamenu-list">
                              <li><a href="#">Lobster</a></li>
                              <li><a href="#">Octopus</a></li>
                              <li><a href="#">Shrimp</a></li>
                              <li><a href="#">Halabos</a></li>
                              <li><a href="#">Maeuntang</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col">
                          <div class="megamenu-wrap">
                            <h5 class="megamenu-title">diet foods</h5>
                            <ul class="megamenu-list">
                              <li><a href="#">Salmon</a></li>
                              <li><a href="#">Avocados</a></li>
                              <li><a href="#">Leafy Greens</a></li>
                              <li><a href="#">Boiled Potatoes</a></li>
                              <li><a href="#">Cottage Cheese</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col">
                          <div class="megamenu-wrap">
                            <h5 class="megamenu-title">fast foods</h5>
                            <ul class="megamenu-list">
                              <li><a href="#">burger</a></li>
                              <li><a href="#">milkshake</a></li>
                              <li><a href="#">sandwich</a></li>
                              <li><a href="#">doughnut</a></li>
                              <li><a href="#">pizza</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col">
                          <div class="megamenu-wrap">
                            <h5 class="megamenu-title">drinks</h5>
                            <ul class="megamenu-list">
                              <li><a href="#">cocktail</a></li>
                              <li><a href="#">hard soda</a></li>
                              <li><a href="#">shampain</a></li>
                              <li><a href="#">Wine</a></li>
                              <li><a href="#">barley</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col">
                          <div class="megamenu-wrap">
                            <h5 class="megamenu-title">meats</h5>
                            <ul class="megamenu-list">
                              <li><a href="#">Meatball</a></li>
                              <li><a href="#">Sausage</a></li>
                              <li><a href="#">Poultry</a></li>
                              <li><a href="#">chicken</a></li>
                              <li><a href="#">Cows</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col">
                          <div class="megamenu-wrap">
                            <h5 class="megamenu-title">fishes</h5>
                            <ul class="megamenu-list">
                              <li><a href="#">scads</a></li>
                              <li><a href="#">pomfret</a></li>
                              <li><a href="#">groupers</a></li>
                              <li><a href="#">anchovy</a></li>
                              <li><a href="#">mackerel</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col">
                          <div class="megamenu-wrap">
                            <h5 class="megamenu-title">dry foods</h5>
                            <ul class="megamenu-list">
                              <li><a href="#">noodles</a></li>
                              <li><a href="#">Powdered milk</a></li>
                              <li><a href="#">nut & yeast</a></li>
                              <li><a href="#">almonds</a></li>
                              <li><a href="#">pumpkin</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="navbar-item dropdown-megamenu">
                  <a class="navbar-link" href="#">shop</a>
                </li>

                <li class="navbar-item dropdown-megamenu">
                  <a class="navbar-link" href="#">Seller List</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <aside class="category-sidebar">
      <div class="category-header">
        <h4 class="category-title">
          <i class="fas fa-align-left"></i><span>categories</span>
        </h4>
        <button class="category-close" @click="categoryClose"><i class="icofont-close"></i></button>
      </div>
      <ul class="category-list">
        <li class="category-item">
          <a class="category-link dropdown-link" href="#"
            ><i class="flaticon-vegetable"></i><span>vegetables</span></a
          >
          <ul class="dropdown-list">
            <li><a href="#">asparagus</a></li>
            <li><a href="#">broccoli</a></li>
            <li><a href="#">carrot</a></li>
          </ul>
        </li>
        <li class="category-item">
          <a class="category-link dropdown-link" href="#"
            ><i class="flaticon-groceries"></i><span>groceries</span></a
          >
          <ul class="dropdown-list">
            <li><a href="#">Grains & Bread</a></li>
            <li><a href="#">Dairy & Eggs</a></li>
            <li><a href="#">Oil & Fat</a></li>
          </ul>
        </li>
        <li class="category-item">
          <a class="category-link dropdown-link" href="#"
            ><i class="flaticon-fruit"></i><span>fruits</span></a
          >
          <ul class="dropdown-list">
            <li><a href="#">Apple</a></li>
            <li><a href="#">Orange</a></li>
            <li><a href="#">Strawberry</a></li>
          </ul>
        </li>
        <li class="category-item">
          <a class="category-link dropdown-link" href="#"
            ><i class="flaticon-dairy-products"></i><span>dairy farm</span></a
          >
          <ul class="dropdown-list">
            <li><a href="#">Egg</a></li>
            <li><a href="#">milk</a></li>
            <li><a href="#">butter</a></li>
          </ul>
        </li>
        <li class="category-item">
          <a class="category-link dropdown-link" href="#"
            ><i class="flaticon-crab"></i><span>sea foods</span></a
          >
          <ul class="dropdown-list">
            <li><a href="#">Lobster</a></li>
            <li><a href="#">Octopus</a></li>
            <li><a href="#">Shrimp</a></li>
          </ul>
        </li>
        <li class="category-item">
          <a class="category-link dropdown-link" href="#"
            ><i class="flaticon-salad"></i><span>diet foods</span></a
          >
          <ul class="dropdown-list">
            <li><a href="#">Salmon</a></li>
            <li><a href="#">Potatoes</a></li>
            <li><a href="#">Greens</a></li>
          </ul>
        </li>
        <li class="category-item">
          <a class="category-link dropdown-link" href="#"
            ><i class="flaticon-dried-fruit"></i><span>dry foods</span></a
          >
          <ul class="dropdown-list">
            <li><a href="#">noodles</a></li>
            <li><a href="#">Powdered milk</a></li>
            <li><a href="#">nut & yeast</a></li>
          </ul>
        </li>
        <li class="category-item">
          <a class="category-link dropdown-link" href="#"
            ><i class="flaticon-fast-food"></i><span>fast foods</span></a
          >
          <ul class="dropdown-list">
            <li><a href="#">mango</a></li>
            <li><a href="#">plumsor</a></li>
            <li><a href="#">raisins</a></li>
          </ul>
        </li>
        <li class="category-item">
          <a class="category-link dropdown-link" href="#"
            ><i class="flaticon-cheers"></i><span>drinks</span></a
          >
          <ul class="dropdown-list">
            <li><a href="#">Wine</a></li>
            <li><a href="#">Juice</a></li>
            <li><a href="#">Water</a></li>
          </ul>
        </li>
        <li class="category-item">
          <a class="category-link dropdown-link" href="#"
            ><i class="flaticon-beverage"></i><span>coffee</span></a
          >
          <ul class="dropdown-list">
            <li><a href="#">Cappuchino</a></li>
            <li><a href="#">Espresso</a></li>
            <li><a href="#">Latte</a></li>
          </ul>
        </li>
        <li class="category-item">
          <a class="category-link dropdown-link" href="#"
            ><i class="flaticon-barbecue"></i><span>meats</span></a
          >
          <ul class="dropdown-list">
            <li><a href="#">Meatball</a></li>
            <li><a href="#">Sausage</a></li>
            <li><a href="#">Poultry</a></li>
          </ul>
        </li>
        <li class="category-item">
          <a class="category-link dropdown-link" href="#"
            ><i class="flaticon-fish"></i><span>fishes</span></a
          >
          <ul class="dropdown-list">
            <li><a href="#">Agujjim</a></li>
            <li><a href="#">saltfish</a></li>
            <li><a href="#">pazza</a></li>
          </ul>
        </li>
      </ul>
      <div class="category-footer">
        <p>All Rights Reserved by <a href="#">W3Coders</a></p>
      </div>
    </aside>
  </div>
</template>