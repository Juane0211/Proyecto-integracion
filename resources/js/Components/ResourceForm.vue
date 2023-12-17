<script setup>   
import { ref }   from "vue";

let title=ref('');
let decription=ref('');
let link=ref('');

function createResource() {
    console.log ("Creando recurso...");
    console.log (title.value);
    console.log (decription.value);
    console.log (link.value);
    
}

</script>
<template>
    <div class="m-8">
        
        <input type="text" v-model="title">   
        <input type="text" v-model="description">   
        <input type="text" v-model="link"> 
        <button @click="createResource">Crear recurso</button>  
    </div>
</template>