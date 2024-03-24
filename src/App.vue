<script setup>
import PremierComposant from './components/PremierComposant.vue'
import Gallerie from './components/Gallerie.vue'
import Panier from './components/Panier.vue'


// si vous voulez utilisez pinia , il faut placer ces deux lignes dans le composant de votre choix.
//import { useDefaultStore } from './stores/index'
//const store = useDefaultStore()
</script>

<template>
  <main>
    <PremierComposant />
    <Gallerie />
    <Panier />
  </main>
</template>

<style>

</style>
