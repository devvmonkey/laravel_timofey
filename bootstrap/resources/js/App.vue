<template>
	<div id="app">
		<header>
			<div id="branding">
				<div @click="goHome" class="logo">
					<img src="https://vuejs.org/images/logo.png" alt="Logo" title="Home page" class="img-fluid"/>
				</div>
			    <h1>Vue.js CRUD</h1>
			</div>
		</header>
		<hr>
		<router-view></router-view>
	</div>
</template>

<script>
	import UserTable from './components/users/UsersTable.vue';

	export default {
		components: {
			UserTable
		},
		methods: {
			goHome(){
				this.$router.push({name: 'home'});
			}
		}
	}	
</script>

<style>
#app {
	width: 70%;
	margin: auto;
}

#branding {
	display: flex;
	align-items: center;
	justify-content: center;
	padding: 2em;
}

.logo {
	width: 100px;
	cursor: pointer;
}
</style>