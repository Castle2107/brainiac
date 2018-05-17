<template>
   <div>
      <Header />
      <!-- <div class="container-fluid"> -->
         <transition name="fade" mode="out-in">
            <router-view></router-view>
         </transition>

         <spinner :loading="loading" />

         <!-- <div v-if="showSuccessMsg">
            <result title="Estilo de Aprendizaje" :result="learningStyle" />
         </div>
         <div v-else>
            <div v-if="showErrorMsg">
               <error-message />
            </div>
         </div> -->

      <!-- </div> -->
    </div>
</template>

<script>

   import Header from './Header';
   import Spinner from './Spinner';
   import ErrorMessage from './ErrorMessage';

    export default {
        name: "app",
        components: { Header, Spinner, ErrorMessage },

        data() {
           return {
              greeting: 'Hi!',
              loading: false,
              showSuccessMsg: false,
              showErrorMsg: false,
           }
        },

        created() {
            this.$eventHub.$on('spinner', (flag = true) => this.loading = flag);
            this.$eventHub.$on('show-error', (flag = true) => this.showErrorMsg = flag);
         },
         beforeDestroy() {
            this.$eventHub.$off('spinner');
            this.$eventHub.$off('show-error');
         },
    };
</script>

<style>
   .fade-enter-active,
   .fade-leave-active {
      transition-property: opacity;
      transition-duration: 0.25s;
   }

   .fade-enter-active {
      transition-delay: 0.25s;
   }

   .fade-enter,
   .fade-leave-active {
      opacity: 0;
   }

   h5 {
      font-size: 1.2em !important;
   }

   p {
      font-size: 1em !important;
   }
   
   label, h5 {
      font-weight: bold;
   }

   .container, .container-fluid {
      background-color: rgba(255, 255, 255, 0.500);      
   }
   
</style>