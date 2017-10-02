<template>
    <div>
        <h1>Update Purchasedetail</h1>
        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2"><router-link :to="{ name: 'DisplayPurchasedetail' }" class="btn btn-success">Return to Purchasedetails</router-link></div>
        </div>

        <form v-on:submit.prevent="updatePurchasedetail">
            <div class="form-group">
                <label>Pembeli</label>
                <input type="text" class="form-control" v-model="purchasedetail.pembeli">
            </div>

            <div class="form-group">
                <label name="product_price">Item ID</label>
                <input type="text" class="form-control" v-model="purchasedetail.item_id">
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
                purchasedetail:{}
            }
        },

        created: function(){
            this.getPurchasedetail();
        },

        methods: {
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