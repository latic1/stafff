<template>
	<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Student</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Create Student</li>
								</ol>
							</nav>
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="col-12 col-lg-9 mx-auto">
							<div class="card border-lg-top-danger">
								<form @submit.prevent="postData">
								<div class="card-body p-5">
									<div class="card-title d-flex align-items-center">
										<div><i class='bx bxs-user mr-1 font-24 text-danger'></i>
										</div>
										<h4 class="mb-0 text-danger">Create Student</h4>
									</div>
									<hr/>
									<div class="form-body">
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Title</label>
												<select name="" id="" class="form-control radius-30" v-model="fields.title">
													<option value="">-- Select Title --</option>
													<option value="Mr">Mr</option>
													<option value="Mrs">Mrs</option>
													<option value="Miss">Miss</option>
													<option value="Dr">Dr</option>
													<option value="Prof">Prof</option>
													<option value="Rev">Rev</option>
												</select>
											</div>
											<div class="form-group col-md-6">
												<label>Surname</label>
												<input type="text" class="form-control radius-30" v-model="fields.surname"/>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>First Name</label>
												<input type="text" class="form-control radius-30" v-model="fields.firstname"/>
											</div>
											<div class="form-group col-md-6">
												<label>Middle Name</label>
												<input type="text" class="form-control radius-30" v-model="fields.middlename"/>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Gender</label>
												<select name="" id="" class="form-control radius-30" v-model="fields.gender">
													<option value="">-- Select Gender --</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select>
											</div>
											<div class="form-group col-md-6">
												<label>Date of Birth</label>
												<input type="date" id="birthday" name="birthday" v-model="fields.dob">
											</div>
										</div>
										<hr>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>SSNIT Number</label>
												<input type="text" class="form-control radius-30" v-model="fields.ssnit"/>
											</div>
											<div class="form-group col-md-6">
												<label>Nationality</label>
												<select name="" id="" class="form-control radius-30" v-model="fields.nationality">
													<option value="{{cont.name}}" v-for="cont in country" :key="cont.code">{{cont.name}}</option>
												</select>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Telephone</label>
												<input type="text" class="form-control radius-30" v-model="fields.telephone"/>
											</div>
											<div class="form-group col-md-6">
												<label>Mobile Phone</label>
												<input type="text" class="form-control radius-30" v-model="fields.mobile_phone"/>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Email</label>
												<input type="text" class="form-control radius-30" v-model="fields.email"/>
											</div>
											<div class="form-group col-md-6">
												<label>NHIS</label>
												<input type="text" class="form-control radius-30" v-model="fields.nhis"/>
											</div>
										</div>
										<hr>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Index Number</label>
												<input type="text" class="form-control radius-30" v-model="fields.indexnumber"/>
											</div>
											<div class="form-group col-md-6">
												<label>Program</label>
												<select name="" id="" class="form-control radius-30" v-model="fields.progid">
													<option value=""></option>
												</select>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Program Duration</label>
												<select name="" id="" class="form-control radius-30" v-model="fields.programduration">
													<option value="">--- Select ---</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
												</select>
											</div>
											<div class="form-group col-md-6">
												<label>Date of Admission</label>
												<input type="date"  v-model="fields.doa">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Date of Completion</label>
												<input type="date"  v-model="fields.doc">
											</div>
											<div class="form-group col-md-6">
												<label>Session</label>
												<select name="" id="" class="form-control radius-30" >
													<option value="">--- Select ---</option>
													<option value="Morning">Morning</option>
													<option value="Evening">Evening</option>
													<option value="Weekend">Weekend</option>
												</select>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Entry Level</label>
												<select name="" id="" class="form-control radius-30" v-model="fields.entrylevel">
													<option value="">--- Select ---</option>
													<option value="100" selected="selected">L100</option>
													<option value="200">L200</option>
													<option value="300">L300</option>
												</select>
											</div>
										</div>
										<hr>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Student Type</label>
												<select name="" id="" class="form-control radius-30" v-model="fields.student_type">
													<option value="">--- Select ---</option>
													<option value="REGULAR" selected="selected">REGULAR</option>
													<option value="MATURED">MATURED</option>
												</select>
											</div>
											<div class="form-group col-md-6">
												<label>Current Level</label>
												<input type="text" class="form-control radius-30" v-model="fields.level" />
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Campus:</label>
												<select name="" id="" class="form-control radius-30" v-model="fields.campus">
													<option value="">--- Select Campus ---</option>
													<option value="Tesano" selected="selected">Tesano</option>
													<option value="Abeka">Abeka</option>
													<option value="Ho">Ho</option>
													<option value="Koforidua">Koforidua</option>
													<option value="Kumasi">Kumasi</option>
													<option value="Takoradi">Takoradi</option>
												</select>
											</div>
											<div class="form-group col-md-6">
												<label>Housing</label>
												<select name="" id="" class="form-control radius-30" >
													<option value="" selected>--- Select Accommodation ---</option>
													<option value="Campus Housing">Campus Housing</option>
													<option value="Off Campus Housing">Off Campus Housing</option>
													<option value="No Housing">No Housing</option>
												</select>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Cohort:</label>
												<select name="" id="" class="form-control radius-30" v-model="fields.admitted_cohort">
													<option value=""></option>
												</select>
											</div>
										</div>
										<hr>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Contact Name:</label>
												<input type="text" class="form-control radius-30" v-model="fields.contact_name">
											</div>
											<div class="form-group col-md-6">
												<label>Contact Address</label>
												<textarea class="form-control" placeholder="Enter Address" rows="3" cols="3" v-model="fields.contact_address"></textarea>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Contact Email:</label>
												<input type="text" class="form-control radius-30" v-model="fields.contact_email">
											</div>
											<div class="form-group col-md-6">
												<label>Contact Phone</label>
												<input type="text" class="form-control radius-30" v-model="fields.contact_phone">
											</div>
										</div>
										<button type="submit" class="btn btn-danger px-5">ADD STUDENT DETAILS</button>
									</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
</template>
<script>
import axios from 'axios'
import dataSourcs from '@/countries.json'

export default {
	data() {
	return{
		country: dataSourcs.countries,
		fields:{
			user_login:'',
			user_pass:'',
			application_number:'',
			indexnumber:'',
			regno2:'',
			surname:'',
			firstname:'',
			middlename:'',
			title:'',
			gender:'',
			dob:'',
			doa:'',
			doc:'',
			progid:'',
			major:'',
			level:'',
			entrylevel:'',
			hall:'',
			ssnit:'',
			nationality:'',
			telephone:'',
			mobile_phone:'',
			email:'',
			nhis:'',
			student_type:'',
			completed:'',
			graduate:'',
			classification:'',
			status:'',
			nat_id:'',
			campus:'',
			class:'',
			contact_name:'',
			contact_address:'',
			contact_email:'',
			contact_phone:'',
			picture:'',
			created_by:'',
			updated_by:'',
			account_status:'',
			admitted_cohort:'',
			current_cohort:'',
			editable_email:'',
			editable_mobile:'',
			programduration:'',
		}
	}
	},
	methods:{
		postData(){
            axios.post("http://127.0.0.1:8000/api/student",this.fields)
            .then((response)=>console.log(response))
            .catch((error) => console.log(error))
        },
	}
	
}
</script>

<style>
</style>