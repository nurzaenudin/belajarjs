<template>
    <div>
		UDIN
        <h1>Purchasedetails</h1>

        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2">
            <router-link :to="{ name: 'CreatePurchasedetail' }" class="btn btn-primary">Create Purchasedetail</router-link>
			
          </div>
        </div><br />

        <table class="table table-hover">
            <thead>
            <tr>
                <td>ID</td>
                <td>Purchade ID</td>
                <td>Item_ID</td>
				<td>Item Name</td>
				<td>Actions</td>
            </tr>
            </thead>

            <tbody>
                <tr v-for="(purchasedetail, index) in purchasedetails">
                    <td>{{ purchasedetail.id }}</td>
                    <td>{{ purchasedetail.purchase_id }}</td>
                    <td>{{ purchasedetail.item_id }}</td>
					<td>{{ purchasedetail.item.name }}</td>
					<td><router-link :to="{name: 'EditPurchasedetail', params: { id: purchasedetail.id }}" class="btn btn-primary">Edit</router-link></td>
                    <td><button class="btn btn-danger" v-on:click="deletePurchasedetail(purchasedetail.id, index)">Delete</button></td>
					</tr>
            </tbody>
        </table>
    </div>
</template>

<script>

    export default {
        data(){
            return{
                purchasedetails: []
            }
        },

        created: function()
        {
            this.fetchPurchasedetails();
        },

        methods: {
            fetchPurchasedetails()
            {
              let uri = '/purchasedetails';
              this.axios.get(uri).then((response) => {
                  this.purchasedetails = response.data;
				    
              });
			  
            },
            deletePurchasedetail(id, index)
            {			
              let uri = `/purchasedetails/${id}`;
              this.purchasedetails.splice(index, 1);
              this.axios.delete(uri);
			  
            }
        }
    }
</script>