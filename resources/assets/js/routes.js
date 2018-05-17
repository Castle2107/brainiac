import VueRouter from 'vue-router';

let routes = [
	{
        path: '/',
        component: require('./components/Home')
   },
   {
      path: '/learning-style',
      component: require('./views/learning-style/Index.vue')
   },
   {
      path: '/student-campus',
      component: require('./views/student-campus/Index.vue')
   },
   {
      path: '/student-gender',
      component: require('./views/student-gender/Index.vue')
   },
   {
      path: '/student-style',
      component: require('./views/student-style/Index.vue')
   },
   {
      path: '/professor-type',
      component: require('./views/professor-type/Index.vue')
   },
   {
      path: '/networks',
      component: require('./views/networks/Index.vue')
   },
];

const router = new VueRouter({
   mode: 'hash', 
   routes,
   'linkActiveClass': 'is-active',
   base: '/'
});

// router.beforeEach((to, from, next) => {

// });

export default router;