<template>
  <div>
    <h1>Create An Purchasedetail</h1>
    <form v-on:submit.prevent="addPurchasedetail">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Pembeli:</label>
            <input type="text" class="form-control" v-model="purchasedetail.pembeli">
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Item ID:</label>
              <input type="text" class="form-control col-md-6" v-model="purchasedetail.item_id" />
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
          purchasedetail:{}
        }
    },
    methods: {
      addPurchasedetail(){
        let uri = '/purchasedetails';
        this.axios.post(uri, this.purchasedetail).then((response) => {
          this.$router.push({name: 'DisplayPurchasedetail'})
        })
    }
  }
}
</script>