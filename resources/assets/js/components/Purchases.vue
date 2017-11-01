<template>
		<div>
			<div>
				ini adalah Purchase
				
				<form>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Purchase Name:</label>
								<input type="text" class="form-control" v-model="purchase.name">
							</div>
						</div>
					</div>
					

			
				</form>
			</div>
			
			<div id="app2">
				<router-link :to="{ name: 'DisplayPurchasedetail' }" class="btn btn-primary">Tambah</router-link>
				
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
		},
		
		
		methods: {
            saveTheThing()
            {
				console.log(123456);
			  
            }

        },
		
		beforeRouteUpdate (DisplayPurchasedetail, Purchase, next) {
			this.axios.post("/purchases", this.purchase).then((response) => {
				console.log('sukses');
				console.log(response.data);
			})
			console.log(66666);
			next()
		}


	}
	
	const router = new VueRouter({ routes });

	const app = new Vue({
		router
	}).$mount('#app2');

</script>