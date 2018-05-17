<template>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <router-link to="/" tag="a" class="navbar-brand">
         Brainiac
      </router-link>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
            <router-link to="learning-style" tag="li" class="nav-item">
               <a class="nav-link">Estilo de Aprendizaje</a>
            </router-link>
            <router-link to="student-campus" tag="li" class="nav-item">
               <a class="nav-link">Recinto</a>
            </router-link>
            <router-link to="student-gender" tag="li" class="nav-item">
               <a class="nav-link">Sexo de Estudiante</a>
            </router-link>
            <router-link to="student-style" tag="li" class="nav-item">
               <a class="nav-link">Aprendizaje de Estudiante</a>
            </router-link>
            <router-link to="professor-type" tag="li" class="nav-item">
               <a class="nav-link">Tipo de Profesor</a>
            </router-link>
            <router-link to="networks" tag="li" class="nav-item">
               <a class="nav-link">Redes</a>
            </router-link>
         </ul>
      </div>
   </nav>
</template>

<style>
   a {
      font-weight: bold !important;
   }
</style>
