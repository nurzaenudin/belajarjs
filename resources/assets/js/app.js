import Vue from 'vue';

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);



import App from './App.vue';
import Example from './components/Example.vue';
import Items from './components/Items.vue';
import CreateItem from './components/CreateItem.vue';
import DisplayItem from './components/DisplayItem.vue';
import EditItem from './components/EditItem.vue';

import CreatePurchasedetail from './components/CreatePurchasedetail.vue';
import DisplayPurchasedetail from './components/DisplayPurchasedetail.vue';
import EditPurchasedetail from './components/EditPurchasedetail.vue';

import CreatePurchase from './components/CreatePurchase.vue';
import Purchases from './components/Purchases.vue';





const routes = [
  {
		name: '/',
		path: '/',
        component: App
  },  
  
  
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
		path: '/DisplayItem',
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
		name: 'EditPurchasedetail',
		path: '/edit/:id',
		component: EditPurchasedetail
   },
   
    {
		name: 'CreatePurchase',
		path: '/CreatePurchase',
        component: CreatePurchase
  },
  
  {
		name: 'Purchases',
		path: '/Purchases',
        component: Purchases,
		children:
		[
			{
			name: 'DisplayPurchasedetail',
			path: '/Purchase/Details',
			component: DisplayPurchasedetail
			}
		]
  }
   
   
   
];


/* const router = new VueRouter({ mode: 'history', routes: routes});
new Vue(Vue.util.extend({ router }, App)).$mount('#app'); */

const router = new VueRouter({ routes });

const app = new Vue({
	router
}).$mount('#app');


