<template>
	<div>
		<h1>Create An Purchase</h1>
		<form v-on:submit.prevent="addPurchase">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Purchase Name:</label>
						<input type="text" class="form-control" v-model="purchase.name">
					</div>
				</div>
			</div>
			
		
			<div class="form-group">
				<button class="btn btn-primary">Add Purchase</button>
			</div>
			
		</form>
	</div>
</template>
<script>

	
	export default {

		
		data(){
			return{
			purchase:{}
        }
    },
    methods: {
		addPurchase(){
		   
        this.axios.post("/purchases", this.purchase).then((response) => {
          //
        })
    }
  }
}
</script>