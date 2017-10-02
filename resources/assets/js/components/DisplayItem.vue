<template>
    <div>
		UDIN
        <h1>Items</h1>

        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2">
            <router-link :to="{ name: 'CreateItem' }" class="btn btn-primary">Create Item</router-link>
			<router-link :to="{ name: 'Example' }" class="btn btn-primary">Example</router-link>
          </div>
        </div><br />

        <table class="table table-hover">
            <thead>
            <tr>
                <td>ID</td>
                <td>Item Name</td>
                <td>Item Price</td>
				<td>Actions</td>
            </tr>
            </thead>

            <tbody>
                <tr v-for="(item, index) in items">
                    <td>{{ item.id }}</td>
                    <td>{{ item.name }}</td>
                    <td>{{ item.price }}</td>
					<td><router-link :to="{name: 'EditItem', params: { id: item.id }}" class="btn btn-primary">Edit</router-link></td>
                    <td><button class="btn btn-danger" v-on:click="deleteItem(item.id, index)">Delete</button></td>
					</tr>
            </tbody>
        </table>
    </div>
</template>

<script>

    export default {
        data(){
            return{
                items: []
            }
        },

        created: function()
        {
            this.fetchItems();
        },

        methods: {
            fetchItems()
            {
              let uri = '/items';
              this.axios.get(uri).then((response) => {
                  this.items = response.data;
				    
              });
			  
            },
            deleteItem(id, index)
            {			
              let uri = `/items/${id}`;
              this.items.splice(index, 1);
              this.axios.delete(uri);
			  
            }
        }
    }
</script>