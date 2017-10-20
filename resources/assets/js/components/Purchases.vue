<template>
		<div>
			<div>
				ini adalah Purchase
			</div>
			
			<div id="app2">
				<router-link :to="{ name: 'DisplayPurchasedetail' }" class="btn btn-primary">Display Purchase Detail</router-link>
				<transition name="fade">
					<router-view></router-view>
				</transition>
			</div>
		
		</div>


</template>
<script>
	import Vue from 'vue';
	
	import VueRouter from 'vue-router';
	Vue.use(VueRouter);
	
	import DisplayPurchasedetail from './DisplayPurchasedetail.vue';
	
	const routes = [
		{
			name: 'DisplayPurchasedetail',
			path: '/',
			component: DisplayPurchasedetail
		}
	]
	
	export default{
		data(){
			return{
				purchase:{},
				purchasedetail:{},
				items:{}
				}
		}
		


	}
	
	const router = new VueRouter({ routes });

	const app = new Vue({
		router
	}).$mount('#app2');

</script>