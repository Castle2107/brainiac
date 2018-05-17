<template>
   <div class="container-fluid">

      <instructions title="Tipo de Profesor" text1="Este formulario determina el tipo de profesor (beginner, 
            intermediate, advanced), a partir de los siguientes criterios que se van a definir:" />

      <div class="card card-body mb-4">
         
         <form @submit.prevent="handleSubmit">
            <div class="form-row">
               <!-- Age -->
               <div class="form-group col-md-6">
                  <label>Edad</label>
                  <select v-model="age" class="form-control">
                     <option value="1">Menor o igual a 30</option>
                     <option value="2">Mayor que 30 o menor o igual a 55</option>
                     <option value="3">Mayor a 55</option>
                  </select>
               </div>
            
               <!-- Gender -->
               <div class="form-group col-md-6">
                  <label>Sexo</label>
                  <select v-model="gender" class="form-control">
                     <option value="M">Masculino</option>
                     <option value="F">Femenino</option>
                     <option value="NA">NA</option>
                  </select>
               </div>
            </div>

            <div class="form-row">
               <!-- Self-evaluation -->
               <div class="form-group col-md-6">
                  <label>Auto-Evaluacion</label>
                  <select v-model="selfEval" class="form-control">
                     <option value="B">Beginner</option>
                     <option value="I">Intermediate</option>
                     <option value="A">Advanced</option>
                  </select>
               </div>

               <!-- Expertise -->
               <div class="form-group col-md-6">
                  <label>Disciplina</label>
                  <select v-model="expertiseArea" class="form-control">
                     <option value="DM">Toma de decisiones</option>
                     <option value="ND">Diseño de redes</option>
                     <option value="OT">Otros</option>
                  </select>
               </div>
            </div>

            <div class="form-row">
               <!-- Teaching lapse -->
               <div class="form-group col-md-6">
                  <label>Tiempo de enseñanza</label>
                  <select v-model="teachingPeriod" class="form-control">
                     <option value="1">Nunca</option>
                     <option value="2">De 0 a 5</option>
                     <option value="3">Mas de 5</option>
                  </select>
               </div>

               <!-- Computer skill -->
               <div class="form-group col-md-6">
                  <label>Habilidad para usar la computadora</label>
                  <select v-model="computerSkill" class="form-control">
                     <option value="L">Baja</option>
                     <option value="A">Media</option>
                     <option value="H">Alta</option>
                  </select>
               </div>
            </div>

            <div class="form-row">
               <!-- Web experience -->
               <div class="form-group col-md-6">
                  <label>Experencia en el uso de tecnologías web para enseñar</label>
                  <select v-model="webBasedTechExp" class="form-control">
                     <option value="N">Nunca</option>
                     <option value="S">Algunas veces</option>
                     <option value="O">Frecuentemente</option>
                  </select>
               </div>

               <!-- Website experience -->
               <div class="form-group col-md-6">
                  <label>Experencia en el uso de un sitio web</label>
                  <select v-model="websiteExperience" class="form-control">
                     <option value="N">Nunca</option>
                     <option value="S">Algunas veces</option>
                     <option value="O">Frecuentemente</option>
                  </select>
               </div>
            </div>

            <button class="btn btn-dark btn-sm offset-md-11" type="submit" :disabled="loading">Consultar</button>
         </form> 

         <spinner :loading="loading" />

         <div v-if="showSuccessMsg">
            <result title="Tipo de Profesor" :result="professorType" />
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
            age: 1, // 1: menor de 30, 3: mayor que 30 y menor o igual que 50, 7: mayor que 50
            gender: 'F', // F, M
            selfEval: 'B', //beginner, intermediate, advanced
            teachingPeriod: '1', // 0: nunca, 5: de 0 a 5, 7: mas de 5
            computerSkill: 'L', //L, M, H
            expertiseArea: 'DM', //DM: toma de decisiones, ND: diseno de redes, OT: otros
            webBasedTechExp: 'N', //never, sometimes, frecuently
            websiteExperience: 'N', //never, sometimes, frecuently
            loading: false,
            showSuccessMsg: false,
            professorType: '',
            showErrorMsg: false
         }
      },

      methods: {
         handleSubmit() {
            this.displaySuccessMsg(false);
            this.displayErrorMsg(false);
            this.displaySpinner();
            this.getProfessorType();
         },

         getProfessorType() {
            axios.post('/professor-type', this.getPayload())
               .then(({ data }) => {
                  this.professorType = data.professorType;
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
               age: this.age,
               gender: this.gender,
               selfEval: this.selfEval,
               teachingPeriod: this.teachingPeriod,
               computerSkill: this.computerSkill,
               expertiseArea: this.expertiseArea,
               webBasedTechExp: this.webBasedTechExp,
               websiteExperience: this.websiteExperience
            };
         }
      }
   }
</script>
