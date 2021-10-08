<template>
	<!-- wrapper -->
	<div class="wrapper">
		<sidebar></sidebar>
		<top></top>
		<!--page-wrapper-->
		<div class="page-wrapper">
		<router-view />
		</div>
		<!--end page-wrapper-->
		<!--footer -->
		<foot />
		<!-- end footer -->
	</div>
	<!-- end wrapper -->
	<!--start switcher-->
	<switcher />
</template>


<script>
import sidebar from './components/Side.vue'
import top from './components/topbar.vue'
import foot from './components/footer.vue'
import switcher from './components/switcher.vue'

export default {
  name: 'App',
  components: {
     top, sidebar, foot, switcher,
  },
}
</script>

<style>

</style>
