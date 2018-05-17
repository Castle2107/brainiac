<template>
   <div class="container-fluid">

      <instructions title="Redes" text1="Este formulario es para determinar la clasificación de redes, en 
            redes de clase A o de Clase B, a partir de los siguiente criterios que el usuario definirá" />

      <div class="card card-body col-md-8 offset-md-2">

         <form @submit.prevent="handleSubmit">

            <!-- Reliability -->
            <div class="form-group">
               <label>Confiabilidad de la red</label>
               <select v-model="reliability" class="form-control">
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
               </select>
            </div>

            <!-- Number of links -->
            <div class="form-group">
               <label>Numero de Links</label>
               <select v-model="numLinks" class="form-control">
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
               </select>
            </div>
            
            <!-- Capacity -->
            <div class="form-group">
               <label>Capacidad</label>
               <select v-model="capacity" class="form-control">
                  <option value="low">Baja</option>
                  <option value="medium">Media</option>
                  <option value="high">Alta</option>
               </select>
            </div>

            <!-- Cost -->
            <div class="form-group">
               <label>Costo</label>
               <select v-model="cost" class="form-control">
                  <option value="low" selected>Baja</option>
                  <option value="medium">Medio</option>
                  <option value="high">Alta</option>
               </select>
            </div>
            
            <button class="btn btn-dark btn-sm offset-md-11" type="submit" :disabled="loading">Consultar</button>
         </form>
         
         <spinner :loading="loading" />

         <div v-if="showSuccessMsg">
            <result title="Tipo de Red" :result="network" />
         </div>
         <div v-else>
            <div v-if="showErrorMsg">
               <error-message />
            </div>
         </div>

      </div>
   </div>
</template>

<script>
   import Spinner from '../../components/Spinner';
   import Result from '../../components/Result';
   import ErrorMessage from '../../components/ErrorMessage';
   import Instructions from '../../components/Instructions';

   export default {
      components: { Spinner, Result, ErrorMessage, Instructions },

      data() {
         return {
            reliability: 2,
            numLinks: 7,
            capacity: 'low',
            cost: 'low',
            network: '',
            loading: false,
            showSuccessMsg: false,
            showErrorMsg: false,
         }
      },

      methods: {
         handleSubmit() {
            this.displaySuccessMsg(false);
            this.displayErrorMsg(false);
            this.displaySpinner();
            this.getNetwork();
         },

         getNetwork() {
            axios.post('/networks', this.getPayload())
               .then(({ data }) => {
                  this.network = data.network;
                  this.displaySuccessMsg();
               })
               .catch(error => {
                  this.displayErrorMsg();
               });
         },

         displaySpinner(flag = true) {
            this.loading = flag;
         },

         displaySuccessMsg(flag = true) {
            if (flag) {
               setTimeout(() => {
                  this.displaySpinner(false);
                  this.showSuccessMsg = true;
               }, 500);
            } else {
               this.showSuccessMsg = false;
            }
         },

         displayErrorMsg(flag = true) {
            if (flag) {
               this.displaySpinner(false);
               this.showErrorMsg = true;
            } else {
               this.showErrorMsg = false;
            }
         },

         getPayload() {
            return {
               reliability: this.reliability,
               numLinks: this.numLinks,
               capacity: this.capacity,
               cost: this.cost
            };
         }
      }
   }
</script>
