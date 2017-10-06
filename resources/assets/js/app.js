import Vue from 'vue';

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);



import App from './App.vue';
import Example from './components/Example.vue';
import CreateItem from './components/CreateItem.vue';
import DisplayItem from './components/DisplayItem.vue';
import EditItem from './components/EditItem.vue';

import CreatePurchasedetail from './components/CreatePurchasedetail.vue';
import DisplayPurchasedetail from './components/DisplayPurchasedetail.vue';
import EditPurchasedetail from './components/EditPurchasedetail.vue';





const routes = [
  {
		name: 'Example',
		path: '/example',
		component: Example
  },
  {
		name: 'CreateItem',
		path: '/items/create',
		component: CreateItem
  },
  {
		name: 'DisplayItem',
		path: '/',
        component: DisplayItem
  },
  {
		name: 'EditItem',
		path: '/edit/:id',
		component: EditItem
   },
   
   
   {
		name: 'CreatePurchasedetail',
		path: '/purchasedetails/create',
		component: CreatePurchasedetail
	},
  {
		name: 'DisplayPurchasedetail',
		path: '/purchasedetailsview',
        component: DisplayPurchasedetail
  },
  {
		name: 'EditPurchasedetail',
		path: '/edit/:id',
		component: EditPurchasedetail
   }
   
   
];


const router = new VueRouter({ mode: 'history', routes: routes});
new Vue(Vue.util.extend({ router }, App)).$mount('#app');

/* const router = new VueRouter({ routes });

const app = new Vue({
  router
}).$mount('#app'); */


