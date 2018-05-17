<template>
   <div class="container-fluid mb-5 bg-transparent">
      <div class="text-center mt-5" style="padding: 15px">
         <h1 class="display-4">Brainiac</h1>
         <hr />
         <p>Sistemas Expertos | Tarea #1</p>      
         <p>- Jose Daniel Castillo Leiva | UCR -</p>
      </div>

      <div class="row mb-4">
         <!-- Objetivo 1 -->
         <div class="col-md-4">
            <div class="card card-body">
               <router-link to="learning-style" tag="a">
                  <h5>Estilo de Aprendizaje</h5>
               </router-link>
               <!-- <hr /> -->
            </div>
         </div>

         <!-- Objetivo 2 -->
         <div class="col-md-4">
            <div class="card card-body">
               <router-link to="student-campus" tag="a">
                  <h5>Recinto</h5>
               </router-link>
               <!-- <hr /> -->
            </div>
         </div>

         <!-- Objetivo 3 -->
         <div class="col-md-4">
            <div class="card card-body">
               <router-link to="student-gender" tag="a">
                  <h5>Sexo del Estudiante</h5>
               </router-link>
            </div>
         </div>
      </div>

      <div class="row mb-5">
         <!-- Objetivo 4 -->
         <div class="col-md-4">
            <div class="card card-body">
               <router-link to="student-style" tag="a">
                  <h5>Aprendizaje del Estudiante</h5>
               </router-link>
            </div>
         </div>

         <!-- Objetivo 5 -->
         <div class="col-md-4">
            <div class="card card-body">
               <router-link to="professor-type" tag="a">
                  <h5>Tipo del Profesor</h5>
               </router-link>
            </div>
         </div>

         <!-- Objetivo 6 -->
         <div class="col-md-4">
            <div class="card card-body">
               <router-link to="networks" tag="a">
                  <h5>Redes</h5>
               </router-link>
            </div>
         </div>
      </div>
      <br />
      <br />
   </div>
</template>

<style scoped>
   .card-body {
      background-color: rgba(255, 255, 255, 0.500);
   }
   h5 {
      text-align: center;
      color: black;
   }
   hr {
      background-color: white;
      height: .1em;
   }
   h5 {
      overflow: hidden;
      text-align: center;
   }
   h5:before,
   h5:after {
      background-color: rgb(190, 99, 99);
      content: "";
      display: inline-block;
      height: 1px;
      position: relative;
      vertical-align: middle;
      width: 15%;
   }
   h5:before {
      right: 0.5em;
      margin-left: -15%;
   }
   h5:after {
      left: 0.5em;
      margin-right: -15%;
   }
</style>
