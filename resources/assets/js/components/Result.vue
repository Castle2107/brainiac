<template>
   <div class="row text-center">
      <div class="col-md-4 offset-md-4">
         <h3>{{ title }}</h3>
         <h3><span class="badge badge-success">{{ result }}</span></h3>
      </div>
   </div>
</template>

<script>
   export default {
      props: ['title', 'result']
   }
</script>

