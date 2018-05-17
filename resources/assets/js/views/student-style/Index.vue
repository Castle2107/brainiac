<template>
   <div class="container-fluid">

      <instructions title="Estilo del Estudiante" text1="Este formulario busca adivinar el estilo de 
         aprendizaje de un estudiante (divergente, convergente, asimilador, acomodador), 
         donde el usuario seleccionará su recinto (Paraíso o Turrialba), 
         su último promedio para matrícula y su sexo." />

      <div class="card card-body col-md-8 offset-md-2">
         <form @submit.prevent="handleSubmit">

               <!-- Campus -->
               <div class="form-group">
                  <label>Recinto</label>
                  <select v-model="campus" class="form-control">
                     <option value="Paraiso">Paraiso</option>
                     <option value="Turrialba">Turrialba</option>
                  </select>
               </div>

               <!-- Average Grade -->
               <div class="form-group">
                  <label>Promedio</label>
                  <input type="number" class="form-control" maxlength="10" step=".01" min="0" max="10" 
                     v-model="averageGrade"
                     placeholder="7.5"
                     required />
                  <small class="form-text text-muted">El promedio debe estar en base 10. (0 a 10)</small>                  
               </div>
               
               <!-- Gender -->
               <div class="form-group">
                  <label>Sexo</label>
                  <select v-model="gender" class="form-control">
                     <option value="M">Masculino</option>
                     <option value="F">Femenino</option>
                     <option value="NA">NA</option>
                  </select>
               </div>

            <button class="btn btn-dark btn-sm offset-md-11" type="submit" :disabled="loading">Consultar</button>
         </form>

         <spinner :loading="loading" />

         <div v-if="showSuccessMsg">
            <result title="Estilo de Aprendizaje" :result="learningStyle" />
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
      components: { Spinner, Result, Instructions, ErrorMessage },

      data() {
         return {
            gender: 'F',
            averageGrade: '',
            campus: 'Paraiso',
            loading: false,
            showSuccessMsg: false,
            learningStyle: '',
            showErrorMsg: false
         }
      },

      methods: {
         handleSubmit() {
            this.displayErrorMsg(false);
            this.displaySuccessMsg(false);
            this.displaySpinner();
            this.getLearningStyle();
         },

         getLearningStyle() {
            axios.post('/student-style', this.getPayload())
               .then(({ data }) => {
                  this.learningStyle = data.learningStyle;
                  this.displaySuccessMsg();
               })
               .catch(error => {
                  this.displayErrorMsg();
               });
         },

         displaySpinner(flag = true) {
            this.loading = flag;
            // this.$eventHub.$emit('spinner', flag);            
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
               // this.$eventHub.$emit('show-error');                
            } else {
               this.showErrorMsg = false;
               // this.$eventHub.$emit('show-error', false);                                 
            }
         },

         getPayload() {
            return {
               gender: this.gender,
               averageGrade: this.averageGrade,
               campus: this.campus
            };
         }
      }
   }
</script>
