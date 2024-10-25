<script setup> 
  function showCoupon()
  {
    $(".coupon-btn").hide(), $(".coupon-form").css("display", "flex");
  }
</script>

<template>
  <div>
    <aside class="cart-sidebar">
      <div class="cart-header">
        <div class="cart-total">
          <i class="fas fa-shopping-basket"></i><span>total item (5)</span>
        </div>
        <button class="cart-close"><i class="icofont-close"></i></button>
      </div>
      <ul class="cart-list">
        <li class="cart-item">
          <div class="cart-media">
            <a href="#"
              ><img src="@/assets/images/product/01.jpg" alt="product" /></a
            ><button class="cart-delete">
              <i class="far fa-trash-alt"></i>
            </button>
          </div>
          <div class="cart-info-group">
            <div class="cart-info">
              <h6><a href="product-single.html">existing product name</a></h6>
              <p>Unit Price - $8.75</p>
            </div>
            <div class="cart-action-group">
              <div class="product-action">
                <button class="action-minus" title="Quantity Minus">
                  <i class="icofont-minus"></i></button
                ><input
                  class="action-input"
                  title="Quantity Number"
                  type="text"
                  name="quantity"
                  value="1"
                /><button class="action-plus" title="Quantity Plus">
                  <i class="icofont-plus"></i>
                </button>
              </div>
              <h6>$56.98</h6>
            </div>
          </div>
        </li>
        <li class="cart-item">
          <div class="cart-media">
            <a href="#"
              ><img src="@/assets/images/product/02.jpg" alt="product" /></a
            ><button class="cart-delete">
              <i class="far fa-trash-alt"></i>
            </button>
          </div>
          <div class="cart-info-group">
            <div class="cart-info">
              <h6><a href="product-single.html">existing product name</a></h6>
              <p>Unit Price - $8.75</p>
            </div>
            <div class="cart-action-group">
              <div class="product-action">
                <button class="action-minus" title="Quantity Minus">
                  <i class="icofont-minus"></i></button
                ><input
                  class="action-input"
                  title="Quantity Number"
                  type="text"
                  name="quantity"
                  value="1"
                /><button class="action-plus" title="Quantity Plus">
                  <i class="icofont-plus"></i>
                </button>
              </div>
              <h6>$56.98</h6>
            </div>
          </div>
        </li>
        <li class="cart-item">
          <div class="cart-media">
            <a href="#"
              ><img src="@/assets/images/product/03.jpg" alt="product" /></a
            ><button class="cart-delete">
              <i class="far fa-trash-alt"></i>
            </button>
          </div>
          <div class="cart-info-group">
            <div class="cart-info">
              <h6><a href="product-single.html">existing product name</a></h6>
              <p>Unit Price - $8.75</p>
            </div>
            <div class="cart-action-group">
              <div class="product-action">
                <button class="action-minus" title="Quantity Minus">
                  <i class="icofont-minus"></i></button
                ><input
                  class="action-input"
                  title="Quantity Number"
                  type="text"
                  name="quantity"
                  value="1"
                /><button class="action-plus" title="Quantity Plus">
                  <i class="icofont-plus"></i>
                </button>
              </div>
              <h6>$56.98</h6>
            </div>
          </div>
        </li>
        <li class="cart-item">
          <div class="cart-media">
            <a href="#"
              ><img src="@/assets/images/product/04.jpg" alt="product" /></a
            ><button class="cart-delete">
              <i class="far fa-trash-alt"></i>
            </button>
          </div>
          <div class="cart-info-group">
            <div class="cart-info">
              <h6><a href="product-single.html">existing product name</a></h6>
              <p>Unit Price - $8.75</p>
            </div>
            <div class="cart-action-group">
              <div class="product-action">
                <button class="action-minus" title="Quantity Minus">
                  <i class="icofont-minus"></i></button
                ><input
                  class="action-input"
                  title="Quantity Number"
                  type="text"
                  name="quantity"
                  value="1"
                /><button class="action-plus" title="Quantity Plus">
                  <i class="icofont-plus"></i>
                </button>
              </div>
              <h6>$56.98</h6>
            </div>
          </div>
        </li>
        <li class="cart-item">
          <div class="cart-media">
            <a href="#"
              ><img src="@/assets/images/product/05.jpg" alt="product" /></a
            ><button class="cart-delete">
              <i class="far fa-trash-alt"></i>
            </button>
          </div>
          <div class="cart-info-group">
            <div class="cart-info">
              <h6><a href="product-single.html">existing product name</a></h6>
              <p>Unit Price - $8.75</p>
            </div>
            <div class="cart-action-group">
              <div class="product-action">
                <button class="action-minus" title="Quantity Minus">
                  <i class="icofont-minus"></i></button
                ><input
                  class="action-input"
                  title="Quantity Number"
                  type="text"
                  name="quantity"
                  value="1"
                /><button class="action-plus" title="Quantity Plus">
                  <i class="icofont-plus"></i>
                </button>
              </div>
              <h6>$56.98</h6>
            </div>
          </div>
        </li>
      </ul>
      <div class="cart-footer">
        <button class="coupon-btn" @click="showCoupon">Do you have a coupon code?</button>
        <form class="coupon-form">
          <input type="text" placeholder="Enter your coupon code" /><button
            type="submit"
          >
            <span>apply</span>
          </button>
        </form>
        <a class="cart-checkout-btn" href="checkout.html"
          ><span class="checkout-label">Proceed to Checkout</span
          ><span class="checkout-price">$369.78</span></a
        >
      </div>
    </aside>
    <aside class="nav-sidebar">
      <div class="nav-header">
        <a href="#"><img src="@/assets/images/logo.png" alt="logo" /></a
        ><button class="nav-close"><i class="icofont-close"></i></button>
      </div>
      <div class="nav-content">
        <ul class="nav-list">
          <li>
            <a href="#" class="nav-link"><i class="icofont-home"></i>Home</a>
          </li>

          <li>
            <a class="nav-link" href="contact.html"
              ><i class="icofont-contacts"></i>contact us</a
            >
          </li>

          <li>
            <a class="nav-link" href="login.html"
              ><i class="icofont-logout"></i>logout</a
            >
          </li>
        </ul>
        <div class="nav-info-group">
          <div class="nav-info">
            <i class="icofont-ui-touch-phone"></i>
            <p><small>call us</small><span>(+880) 183 8288 389</span></p>
          </div>
          <div class="nav-info">
            <i class="icofont-ui-email"></i>
            <p><small>email us</small><span>support@greeny.com</span></p>
          </div>
        </div>
      </div>
    </aside>
  </div>
</template>