<template>
   <div class="container-fluid">

      <instructions title="Recinto del Estudiante" text1="Para adivinar el recinto de origen de un estudiante 
         (Paraíso o Turrialba), el usuario seleccionará su estilo de aprendizaje de los cuatro 
         usados (divergente, convergente, asimilador, acomodador), 
         su último promedio para matrícula y su sexo." />
      
      <div class="card card-body col-md-8 offset-md-2">
         <form @submit.prevent="handleSubmit">
            <!-- <div class="form-row"> -->
               
               <!-- Learning Manner -->
               <div class="form-group">
                  <label>Estilo de apendizaje</label>
                  <select v-model="learningStyle" class="form-control">
                     <option value="DIVERGENTE">Divergente</option>
                     <option value="CONVERGENTE">Convergente</option>
                     <option value="ASIMILADOR">Asimilador</option>
                     <option value="ACOMODADOR">Acomodador</option>
                  </select>
               </div>

               <!-- Average Grade -->
               <div class="form-group">
                  <label>Promedio</label>
                  <input type="number" class="form-control" maxlength="10" step="0.1" min="0" max="10" 
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

            <!-- </div> -->
            
            <button class="btn btn-dark btn-sm offset-md-11" type="submit" :disabled="loading">Consultar</button>
         </form>

         <spinner :loading="loading" />

         <div v-if="showSuccessMsg">
            <result title="Recinto de Estudiante" :result="campus" />
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
            learningStyle: 'CONVERGENTE',
            averageGrade: '',
            gender: 'F',
            loading: false,
            showSuccessMsg: false,
            campus: '',
            showErrorMsg: false
         }
      },

      methods: {
         handleSubmit() {
            this.displayErrorMsg(false);
            this.displaySuccessMsg(false);
            this.displaySpinner();
            this.getStudentCampus();
         },

         getStudentCampus() {
            axios.post('/student-campus', this.getPayload())
               .then(({ data }) => {
                  this.campus = data.campus;
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
               learningStyle: this.learningStyle,
               averageGrade: this.averageGrade,
               gender: this.gender
            };
         },

      }
   }
</script>
