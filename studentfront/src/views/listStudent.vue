<template>
  <!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Forms</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Layouts</li>
								</ol>
							</nav>
						</div>
					</div>
					<!--end breadcrumb-->
                    <form action="">
                        <table style= "align:center;" class="table table-striped table-bordered table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th  colspan="4" style="text-align:center;"><H5><Strong>STUDENT LIST</Strong></H5></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <select class="form-control" id="field" name="field" style="width:175px; height: 35px;">
                                            <option selected disabled>--SELECT FIELD--</option>
                                            <option value="surname" >Surname</option>
                                            <option value="user_login" >Email</option>
                                            <option value="mobile_phone" >Phone Number</option>
                                            <option value = "indexnumber">Index Number</option>
                                            <option value = "campus">Campus</option>
                                            <option value = "level">Level</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control" id="operator" name="operator" style="width:175px; height: 35px;">
                                            <option selected disabled>--SELECT OPERATOR--</option>
                                            <option value="equal" >Equal To</option>
                                            <option value="contain" >Contains</option>
                                            <option value="null">Is Null</option>
                                            <option value="empty">Is Empty</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control " id="search_parameter" name="search_parameter" placeholder="Search Parameter">
                                    </td>
                                    <td>
                                        <input  type="submit" name="find" id="find" class="btn btn-primary" value="Search">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
				</div>
            </div>
        </div>
</template>

<script>
export default {
    name:"listStudent",
}
</script>

<style>

</style>