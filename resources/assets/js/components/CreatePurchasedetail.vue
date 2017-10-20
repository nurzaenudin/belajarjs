<template>
  <div>
	
    <h1>Create An Purchasedetail</h1>
    <form v-on:submit.prevent="addPurchasedetail">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Purchase ID:</label>
            <input type="text" class="form-control" v-model="purchasedetail.purchase_id">
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Item ID:</label>
              <select v-model="purchasedetail.item_id">
				<option disabled value="">Please select one</option>
				<option v-for="item in items" v-bind:value="item.id">{{item.name}}</option>
			</select>
			  
            </div>
          </div>
        </div><br />
        <div class="form-group">
          <button class="btn btn-primary">Add Purchasedetail</button>
        </div>
    </form>
  </div>
</template>
<script>
  export default {
    data(){
        return{
			purchasedetail:{},
			items:{}
        }
    },
	
	created: function()
        {
            this.fetchItems();
        },
		
		
    methods: {
	
		fetchItems(){
              let uri = '/items';
              this.axios.get(uri).then((response) => {
                  this.items = response.data;
				    
              });
			  
        },
			
		addPurchasedetail(){
			let uri = '/purchasedetails';
			this.axios.post(uri, this.purchasedetail).then((response) => {
			  this.$router.push({name: 'DisplayPurchasedetail'})
			})
		}

    }
}
</script>