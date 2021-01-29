<template>
	<div id="app1">
		<header>
			<div id="branding">
			    <h1>YEs</h1>
			</div>
		</header>
		<hr>
		<page-table></page-table>
	</div>
</template>

<script>
	import PageTable from './components/pages/PagesTable.vue';

	export default {
		components: {
			PageTable
		}
	}	
</script>

<style>
#app1 {
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
