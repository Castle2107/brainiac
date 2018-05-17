<template>
   <div class="mt-5" style="padding: 15px;">
      <h1 class="text-center mb-2">{{ title }}</h1>
      <h5>Instrucciones:</h5>
      <hr class="line-left" />       
      <p>{{ text1 }}</p>
      <p>{{ text2 }}</p>
   </div>
</template>

<script>
   export default {
      props: ['title', 'text1', 'text2']
   }
</script>

<style scoped>
   h1 {
      overflow: hidden;
      text-align: center;
   }
   h1:before,
   h1:after {
      background-color: rgb(190, 99, 99);
      content: "";
      display: inline-block;
      height: 1px;
      position: relative;
      vertical-align: middle;
      width: 15%;
   }
   h1:before {
      right: 0.5em;
      margin-left: -15%;
   }
   h1:after {
      left: 0.5em;
      margin-right: -15%;
   }
   hr.line-left {
      border: 0;
      height: 1.5px;
      background-color: rgb(190, 99, 99);
      width: 50px;
      margin-left: 0px;
      margin: 0%;
      margin-bottom: 1em;
   }
   hr.line-center {
      border: 0;
      height: 1.5px;
      background-color: #f57e3a;
      width: 166px;
   }
   hr.line-right {
      border: 0;
      height: 5px;
      background-color: #2cba6c;
      width: 66px;
      margin-right: 0px;
   }
</style>


