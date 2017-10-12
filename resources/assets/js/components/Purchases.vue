<template>
		<div>
			<CreatePurchase></CreatePurchase>
			<DisplayPurchasedetail></DisplayPurchasedetail>
		</div>
</template>
<script>
	import CreatePurchase from './CreatePurchase.vue';
	import DisplayPurchasedetail from './DisplayPurchasedetail.vue';

	export default{
		components:{
			'CreatePurchase':CreatePurchase,
			'DisplayPurchasedetail':DisplayPurchasedetail
		}

	}

</script>