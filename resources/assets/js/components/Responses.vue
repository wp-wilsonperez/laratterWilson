<template>

	<div class="row">
		<a href="#" v-on:click="load">Ver respuestas</a>
		<div class="card" v-for="response in responses">
			{{ response.message }}
		</div>
	</div>
	
</template>

<script type="text/javascript">
	export default{
		props:['message'],
		data(){
			return{
				responses:[]
			}

		},
		methods:{
			load(){
				axios.get('/api/messages/'+this.message+'/responses')
					.then(res=>{
						this.responses = res.data;
					});
			}
		}
	}
</script>