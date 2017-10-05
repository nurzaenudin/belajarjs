<template>
    <div>
        <h1>Update Purchasedetail</h1>
        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2"><router-link :to="{ name: 'DisplayPurchasedetail' }" class="btn btn-success">Return to Purchasedetails</router-link></div>
        </div>

        <form v-on:submit.prevent="updatePurchasedetail">
            <div class="form-group">
                <label>Purchase ID</label>
                <input type="text" class="form-control" v-model="purchasedetail.purchase_id">
            </div>

            <div class="form-group">
                <label name="product_price">Item ID</label>
              <label>Item ID:</label>
              <select v-model="purchasedetail.item_id">
				<option disabled value="">Please select one</option>
				<option v-for="item in items" v-bind:value="item.id">{{item.name}}</option>
			</select>
            </div>

            <div class="form-group">
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</template>

<script>

    export default{
        data(){
            return{
                purchasedetail:{},
				items:{}
            }
        },

        created: function(){
            this.getPurchasedetail();
			this.fetchItems();
        },

        methods: {
            
			fetchItems(){
              let uri = '/items';
              this.axios.get(uri).then((response) => {
                  this.items = response.data;
				    
              });
			  
			},
			
			getPurchasedetail()
            {
              let uri = `/purchasedetails/${this.$route.params.id}/edit`;
                this.axios.get(uri).then((response) => {
                    this.purchasedetail = response.data;
                });
            },

            updatePurchasedetail()
            {
              let uri = '/purchasedetails/'+this.$route.params.id;
                this.axios.patch(uri, this.purchasedetail).then((response) => {
                  this.$router.push({name: 'DisplayPurchasedetail'});
                });
            }
        }
    }
</script>