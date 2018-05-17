<template>
   <div class="container-fluid">

      <instructions title="Genero del Estudiante" text1="Este formulario es para adivinar el sexo de un estudiante, 
         donde el usuario seleccionará su estilo de aprendizaje de los cuatro usados 
         (divergente, convergente, asimilador,acomodador),
         su último promedio para matrícula y su recinto (Paraíso o Turrialba)." />

      <div class="card card-body col-md-8 offset-md-2">
         <form @submit.prevent="handleSubmit">

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
               <input type="number" class="form-control" maxlength="12" step="0.1" min="0" max="10" 
                  v-model="averageGrade"
                  placeholder="7.5"
                  required />
               <small class="form-text text-muted">El promedio debe estar en base 10. (0 a 10)</small>               
            </div>

            <!-- Campus -->
            <div class="form-group">
               <label>Recinto</label>
               <select v-model="campus" class="form-control">
                  <option value="Paraiso">Paraiso</option>
                  <option value="Turrialba">Turrialba</option>
               </select>
            </div>
            
            <button class="btn btn-dark btn-sm offset-md-11" type="submit" :disabled="loading">Consultar</button>
         </form>

         <spinner :loading="loading" />

         <div v-if="showSuccessMsg">
            <result title="Sexo de Estudiante" :result="gender" />
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
            learningStyle: 'CONVERGENTE',
            averageGrade: '',
            campus: 'Paraiso',
            loading: false,
            showSuccessMsg: false,
            gender: '',
            showErrorMsg: false            
         }
      },

      methods: {
         handleSubmit() {
            this.displayErrorMsg(false);
            this.displaySuccessMsg(false);
            this.displaySpinner();
            this.getStudentGender();
         },

         getStudentGender() {
            axios.post('/student-gender', this.getPayload())
               .then(({ data }) => {
                  this.gender = this.getFullWordGender(data.gender);
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
               campus: this.campus
            };
         },

         getFullWordGender(gender) {
            switch (gender) {
               case 'M':
                  return 'Masculino';
               case 'F':
                  return 'Femenino';
               default:
                  return 'NA';
            }
         }
      }
   }
</script>
