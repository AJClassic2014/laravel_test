import { createRouter, createWebHistory } from 'vue-router';

const routes = [
    {
      path: '/',
      component: () => import('./components/Sectionone.vue')
    },
    {
      path: '/sectwo',
      component: () => import('./components/Sectiontwo.vue')
    },
    {
        path: '/secthree',
        component: () => import('./components/Sectionthree.vue')
    }
  ];
  
  const router = createRouter({
    history: createWebHistory(),
    routes
});
  
export default router;