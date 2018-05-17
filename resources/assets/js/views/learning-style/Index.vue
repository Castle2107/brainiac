<template>
   <div class="container-fluid">

      <instructions title="Estilo de Aprendizaje"
         text1="Para utilizar el instrumento usted debe conceder una calificación alta a aquellas 
         palabras que mejor caracterizan la forma en que usted aprende, y, una calificación baja 
         a las palabras que menos caracterizan su estilo de aprendizaje."
         text2="De inmediato encontrará nueve series de cuatro palabras de cada línea. Ordene de mayor a menor 
         cada serie o juego de cuatro palabras, ubicando 4 en la palabra que mejor caracteriza su 
         estilo de aprendizaje, un 3 en la palabra siguiente en cuanto a la correspondencia con 
         su estilo; a la siguiente un 2, y un 1 a la palabra que menos caracteriza su estilo. 
         Tenga cuidado de ubicar un número distinto al lado de cada palabra." />

      <form @submit.prevent="handleSubmit">

         <!-- Using v-model and composed style array [ { text: 'xyz', val: 1 } ] -->

         <div class="row">
            <div class="col-md-3 mb-3" v-for="(styleColumn, key, index) in styles" :key="index">
               <div class="card">
                  <h3 class="text-center mt-2">
                     <span class="col-md-2 badge badge-dark">{{ key.toUpperCase() }}</span>
                  </h3>
                  <div class="mt-2 ml-2 mb-1" v-for="(style, index) in styleColumn" :key="index">
                     <select class="mr-1" :ref="key + '-' + index" v-model="styles[key][index].val">
                        <option v-for="n in 4" :value="n" :key="n">
                           {{ n }}
                        </option>
                     </select>
                     <b>{{ style.text }}</b>
                  </div>
               </div>
            </div>
         </div>

         <!-- Using refs and simple style array -->

         <!-- <div class="row">
            <div class="col-md-3" v-for="(styleColumn, key, index) in styles" :key="index">
               <div class="card card-body text-center">
                  <h3>{{ key.toUpperCase() }}</h3>
                  <select-option :styles="styleColumn" />
                  <div class="col-md-12 text-center mt-2" v-for="(style_name, index) in styleColumn" :key="index">
                     {{ style_name }}
                     <br/>
                     <select :ref="key + '-' + index">
                        <option v-for="n in 4" :value="n" :key="n">
                           {{ n }}
                        </option>
                     </select>
                  </div>
               </div>
            </div>
         </div> -->

         <button class="btn btn-dark btn-sm mt-3 mb-3 offset-md-11" type="submit" :disabled="loading">Consultar</button>

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
</template>

<script>
   import Spinner from '../../components/Spinner';
   import Result from '../../components/Result';
   import ErrorMessage from '../../components/ErrorMessage';   
   import Instructions from '../../components/Instructions';
   import { ca, ec, ea, or } from '../../static-data/styles.js';

   export default {
      components: { Spinner, Result, Instructions, ErrorMessage },

      data() {
         return {
            loading: false,
            styles: {
               ec: ec,
               or: or,
               ca: ca,
               ea: ea,
            },
            learningStyle: '',
            showSuccessMsg: false,
            showErrorMsg: false,
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
            const colStyles = this.getColumnStyles();

            axios.post('/learning-style', colStyles)
               .then(({ data }) => {
                  this.learningStyle = data.learningStyle;
                  this.displaySuccessMsg();
               })
               .catch(error => {
                  this.displayErrorMsg();              
               });
         },

         displaySuccessMsg(flag = true) {
            if (flag) {
               setTimeout(() => {
                  this.displaySpinner(false);
                  this.showSuccessMsg = true;
               }, 1500);
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

         getColumnStyles() {
            let ec = this.calcColStyle('ec');
            let or = this.calcColStyle('or');
            let ca = this.calcColStyle('ca');
            let ea = this.calcColStyle('ea');
            
            return { ca, ec, ea, or };
         },

         displaySpinner(flag = true) {
            this.loading = flag;
         },

         calcColStyle(column) {
            let result = 0;
            this.styles[column].forEach(element => {
               result += (element.val);
            });
            return result;
         },

         calcColumnByRef(column) {
            // let index = 0;
            // let select = this.$refs[`ca-${a}`];
            // let selectValue = this.$refs[`ca-${a}`][0].value;
            let result = 0;
            for (let index = 0; index < 8; index++) {
               result += Number.parseInt(this.$refs[`${column}-${index}`][0].value);
            }
            return result;
         },
      }
   }
</script>


<style scoped>

</style>
