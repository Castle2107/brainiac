<template>
   <div class="container text-center">
      <template v-if="loading">
         <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
         </div>
         <h5>Loading...</h5>
         <!-- <div id="overlay">
            <div class="spinner spinner-1">
               <span class="text-center">Loading...</span>
            </div>
         </div> -->
      </template>
   </div>
</template>

<script>
   export default {
      props: ['loading'],

      watch: {
         loading(newVal, oldVal) {
            // if (!newVal) {
            //    document.getElementById("overlay").style.display = 'none';
            // }
            this.scrollAnimation();
         }
      },

      methods: {
         scrollAnimation() {
            $('body, html').animate({
               scrollTop: '500px'
            }, 200);
         }
       }
   }
</script>


<style>
   .sk-cube-grid {
      width: 40px;
      height: 40px;
      margin: 40px auto;
   }
  .sk-cube-grid .sk-cube {
      width: 33.33%;
      height: 33.33%;
      background-color: #333;
      float: left;
      -webkit-animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out;
      animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out; }
  .sk-cube-grid .sk-cube1 {
      -webkit-animation-delay: 0.2s;
      animation-delay: 0.2s; }
  .sk-cube-grid .sk-cube2 {
      -webkit-animation-delay: 0.3s;
      animation-delay: 0.3s; }
  .sk-cube-grid .sk-cube3 {
      -webkit-animation-delay: 0.4s;
      animation-delay: 0.4s; }
  .sk-cube-grid .sk-cube4 {
      -webkit-animation-delay: 0.1s;
      animation-delay: 0.1s; }
  .sk-cube-grid .sk-cube5 {
      -webkit-animation-delay: 0.2s;
      animation-delay: 0.2s; }
  .sk-cube-grid .sk-cube6 {
      -webkit-animation-delay: 0.3s;
      animation-delay: 0.3s; }
  .sk-cube-grid .sk-cube7 {
      -webkit-animation-delay: 0.0s;
      animation-delay: 0.0s; }
  .sk-cube-grid .sk-cube8 {
      -webkit-animation-delay: 0.1s;
      animation-delay: 0.1s; }
  .sk-cube-grid .sk-cube9 {
      -webkit-animation-delay: 0.2s;
      animation-delay: 0.2s; }

@-webkit-keyframes sk-cubeGridScaleDelay {
   0%, 70%, 100% {
      -webkit-transform: scale3D(1, 1, 1);
      transform: scale3D(1, 1, 1); }
   35% {
      -webkit-transform: scale3D(0, 0, 1);
      transform: scale3D(0, 0, 1); } }

@keyframes sk-cubeGridScaleDelay {
   0%, 70%, 100% {
      -webkit-transform: scale3D(1, 1, 1);
      transform: scale3D(1, 1, 1); }
   35% {
      -webkit-transform: scale3D(0, 0, 1);
      transform: scale3D(0, 0, 1); } }

   
   /* .spinner {
      width: 100px;
      height: 100px;
      background: #eee;
      border-radius: 50%;
      position: absolute;
      display: inline-block;
      top:0;
      bottom:0;
      left:0;
      right: 0;
      margin: auto;
   }
   .spinner:after, .spinner:before {
      content: "";
      display: block;
      width: 100px;
      height: 100px;
      border-radius: 50%;
   }

   .spinner-1:after {
      position: absolute;
      top: -4px;
      left: -4px;
      border: 4px solid transparent;
      border-top-color: rgba(201, 70, 77, 0.555);
      border-bottom-color: rgba(128, 140, 253, 0.555);
      -webkit-animation: spinny 1s linear infinite;
      animation: spinny 1s linear infinite;
   }
   #overlay{
      height:100%;
      width:100%;
      background:rgba(119, 117, 117, 0.4);
      position:fixed;
      left:0;
      top:0;
   }
   @-webkit-keyframes spinny {
      0% {
         -webkit-transform: rotate(0deg) scale(1);
         transform: rotate(0deg) scale(1);
      }
      50% {
         -webkit-transform: rotate(45deg) scale(1.2);
         transform: rotate(45deg) scale(1.2);
      }
      100% {
         -webkit-transform: rotate(360deg) scale(1);
         transform: rotate(360deg) scale(1);
      }
   }

   @keyframes spinny {
      0% {
         -webkit-transform: rotate(0deg) scale(1);
         transform: rotate(0deg) scale(1);
      }
      50% {
         -webkit-transform: rotate(45deg) scale(1.2);
         transform: rotate(45deg) scale(1.2);
      }
      100% {
         -webkit-transform: rotate(360deg) scale(1);
         transform: rotate(360deg) scale(1);
      }
   } */
</style>
