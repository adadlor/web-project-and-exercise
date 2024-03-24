<template>
  <h2 class="m-2">POYO POYO {°¬°}</h2>
  <titre class="m-2">{{ titre }}</titre>
  <ul v-if="visible">
    <li v-for="(element, indice) in liste" :key="indice" class="list-group-item">{{element.nom}}</li>
  </ul>
  <button @click="cache" class="btn btn-info ">{{ btnTexte }}</button>
  
  
</template>

<script setup>
import { ref } from 'vue'; // à ne faire qu’une fois pour toutes les variables
const titre = ref("bienvenue");
let visible = ref(true);
let liste = ref([{nom: 'poyo1'},
                 {nom: 'poyo2'},
                 {nom: 'poyo3'}]);

const btnTexte = ref("Cacher");

function cache() {
  visible.value = !visible.value;
  if(visible.value == false){
    btnTexte.value = "Montrer";
  } else{
    btnTexte.value = "Cacher";
  }
 }

</script>

<style scoped>
@import url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
</style>