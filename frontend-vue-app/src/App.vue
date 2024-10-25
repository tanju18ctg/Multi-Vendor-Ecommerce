<script setup>
import {
  HeaderPart,
  Navbar,
  CartSide,
  MobileMenu,
  NewsPart,
  Footer,
} from "@/components";
</script>

<template>
  <div>
    <div class="backdrop"></div>
    <a class="backtop fas fa-arrow-up" href="#"></a>
    <!-- header Part  -->
    <HeaderPart />
    <Navbar />
    <CartSide />
    <MobileMenu />
    <router-view></router-view>
    <NewsPart />
    <Footer />
  </div>
</template>