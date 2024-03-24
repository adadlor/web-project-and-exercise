<template>
    <div class="gallerie">
    <h2>GALLERIE</h2>
    <div class="till">
        <figure class="bigPicture">
            <img :src="baseUrl + image">
            <figcaption>{{ titre }}</figcaption>
        </figure>
    </div>
    <ul>
        <li v-for="(photo, indice) in photos" :key="indice">
            
                <img :src="baseUrl + photo.mini" alt="" @mouseenter="$event => hovertill(photo)">
            

        </li>
    </ul>
</div>
  </template>
  
  <script setup>
    import { ref } from 'vue'; // à ne faire qu’une fois pour toutes les variables
    const baseUrl = ref('https://ntrugeon.lpmiaw.univ-lr.fr/Cours/CoursVueL2/');
    const photos = ref([
    {
        lien : 'images/grandes/clouds.jpg',
        titre: 'Nuages sur les Alpes',
        mini: 'images/petites/clouds.jpg'
    },
    {
        lien : 'images/grandes/colorfull.jpg',
        titre: 'Lac de montagne',
        mini: 'images/petites/colorfull.jpg'
    },
    {
        lien : 'images/grandes/melbourne.jpg',
        titre: 'Falaises de Melbourne',
        mini: 'images/petites/melbourne.jpg'
    },
    {
        lien : 'images/grandes/road.jpg',
        titre: 'Route des Rocheuses',
        mini: 'images/petites/road.jpg'
    },
    {
        lien : 'images/grandes/rocks.jpg',
        titre: 'Pic',
        mini: 'images/petites/rocks.jpg'
    },
    {
        lien : 'images/grandes/viaduc.jpg',
        titre: 'Viaduc',
        mini: 'images/petites/viaduc.jpg'
    },
    ]);
    const image = ref(photos.value[0].lien);
    const titre = ref(photos.value[0].titre);

    function hovertill(element){
        image.value = element.lien;
        titre.value = element.titre;
    }

  </script>
  
  <style type="text/css" scoped>

    .gallerie {
        background-color: black;
        color: white;
    }

    h2 {
        padding: 0.5em;
        font-size: 400%;
    }

    .till {
        display: flex;
        justify-content: center;
    }
    .bigPicture{
        display: flex;
        flex-direction: column;
    }

    ul {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
    }
    
    li {
        list-style: none;
    }

    img {
        padding: 1em;
    }
    
  </style>