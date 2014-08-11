<div class="panel panel-success">
	<?php include "px-details.ctrl.php"; ?>
	<table class="table">
		<tr class="active">
			<td width="15%">
				<img height="300" src="../pics/<%= Foto %>" class="img-responsive img-rounded" alt="Responsive image">
				<div class="form-inline">
					<div class="form-group">
						<input type="file" class="bg-info" style="font-size:13px; width:99%;">
					</div>
					<div class="form-group">
						<input type="Submit" name="" class="btn btn-warning" value="UPLOAD">
					</div>
				</div>
			</td>
			<td>
				<div class="form-group">
					Chart Number:
				</div>
				<div class="form-group" style="margin-top:25px;">
					Name:
				</div>
				<div class="form-group" style="margin-top:25px;">
					Birth Day:
				</div>
				<div class="form-group" style="margin-top:20px;">
					Sex:
				</div>
				<div class="form-group" style="margin-top:20px;">
					Address:
				</div>
			
			</td>
					
			<td class="wpaddPOSlbl">
				<div class="form-group">
					<input type="text" class="form-control" value="<%= PxRID %>" 
						id="idPxRID" placeholder="Chart Number" READONLY>
						
				</div>
				<div class="form-group">
					<input type="text" class="form-control" value="<%= LastName %>"  
						id="LastName" placeholder="Last Name" tabindex="1" >
				</div>
				<div class="form-group">
					<input type="Date" class="form-control" value="<%= DOB %>"
						id="DOB" tabindex="4">
				</div>
				
				<div class="form-group">
				
				
				
					<input type="radio" class="Sex" id="Sex" name="Sex" <% if(Sex=="Male") print("CHECKED"); %> value="Male" tabindex="9"> Male
					<input type="radio" class="SexF" id="SexF" name="Sex" <% if(Sex=="Female") print("CHECKED"); %> value="Female" tabindex="9"> Female
					
					
					
				</div>
				
				<div class="form-group">
					<input type="text" class="form-control" value="<%= Street %>"id="Street" placeholder="Street" tabindex="6">
				</div>
			</td>
			<td>
				<div class="form-group text-right">
					Date:
				</div>
				<div class="form-group" style="margin-top:25px;">
					<input type="text" class="form-control" value="<%= FirstName %>"
						id="FirstName" placeholder="First Name" tabindex="2">
				</div>
				<div class="form-group text-right" style="margin-top:15px;">
					Age:
				</div>
				<div class="form-group text-right" style="margin-top:25px;">
					Race:
				</div>
				<div class="form-group">
					<input type="text" class="form-control" value="<%= City %>"
						id="City" placeholder="City" tabindex="7">
				</div>
			</td>
			<td>
				<div class="form-group">
					<input type="text" class="form-control" value="<%= RegDate %>"
						id="RegDate" placeholder="Registered Date" READONLY>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" value="<%= MiddleName%>" 
					id="MiddleName" placeholder="Middle Name" tabindex="3">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="age" placeholder="Age" tabindex="5">
				</div>
				<div class="form-group">
				
				
				
					<input type="radio" name="Race" class="RaceW" id="RaceW" <% if(Race=="White") print("CHECKED"); %> tabindex="10" value="White"> White
					<input type="radio" name="Race" class="RaceB" id="RaceB" <% if(Race=="Black") print("CHECKED"); %> tabindex="11" value="Black"> Black
					<input type="radio" name="Race" class="Race" id="Race"  <% if(Race=="Asian") print("CHECKED"); %> tabindex="12" value="Asian"> Asian
					
					
				</div>
				<div class="form-group">
					<input type="text" class="form-control" value="<%= Province %>" 
					id="Province" placeholder="Province" tabindex="8">
				</div>
			</td>
		</tr>
	</table>

	<table class="table">
		<tr class="active">
			<td>Contact Number</td>
			<td><input type="text" class="form-control" value="<%= MobileCon %>" id="MobileCon" placeholder="Mobile" tabindex="11"></td>
			<td><input type="text" class="form-control" value="<%= OfficeCon %>" id="OfficeCon" placeholder="Office" tabindex="12"></td>
			<td><input type="text" class="form-control" value="<%= HomeCon %>" id="HomeCon" placeholder="Home" tabindex="13"></td>
		</tr>
		<tr class="active">
			<td>E-Mail</td>
			<td><input type="email" class="form-control" value="<%= Email %>" id="Email" placeholder="E-Mail" tabindex="14"></td>
			<td class="text-right">Occupation</td>
			<td><input type="text" class="form-control" value="<%= Occupation %>" id="Occupation" placeholder="Occupation" tabindex="15"></td>
		</tr>
		<tr class="active">
			<td>Employer</td>
			<td><input type="text" class="form-control" value="<%= Employer %>" id="Employer" placeholder="Employer" tabindex="16"></td>
			
			<td class="text-right">Status</td>
			<td class="text-center" nowrap>
				<input type="radio" name="Status" value="Single" tabindex="17" checked> Single
				<input type="radio" name="Status" value="Married"> Married
				<input type="radio" name="Status" value="Widowed"> Widowed
			</td>
		</tr>
		<tr class="active">
			<td>Name of Spouse</td>
			<td>
				<input type="text" class="form-control" value="<%= SpouseName %>" id="SpouseName" placeholder="Spouse Name" tabindex="18">
			</td>
			<td colspan="3"></td>
			
		</tr>
		<tr class="active">
			<td>Insurance</td>





			
			<td class="text-center">
				<input type="checkbox" class="isInsured" id="isInsured" <% if(isInsured==1) print("CHECKED"); %> tabindex="19">
			</td>




			
			
			<td colspan="2">
				<input type="text" class="form-control" 
					value="<%= Insurance %>" id="Insurance" placeholder="List All" tabindex="20">
			</td>
		</tr>
		<tr class="active">
			<td>Family Doctor</td>
			<td><input type="text" class="form-control" value="<%= FamilyDoctor %>" id="FamilyDoctor" placeholder="Family Doctor" tabindex="21"></td>
			<td class="text-right">Specialty</td>
			<td><input type="text" class="form-control" value="<%= FamilyDoctorSpecialty %>" id="FamilyDoctorSpecialty" placeholder="Specialty" tabindex="22"></td>
		</tr>
		<tr class="active">
			<td>Doctor Number</td>
			<td><input type="text" class="form-control" value="<%= FamilyDoctorPhone %>" id="FamilyDoctorPhone" placeholder="Contact Number" tabindex="23"></td>
			<td colspan="2"></td>
		</tr>
		<tr class="active">
			<td>Nearest Relative</td>
			<td><input type="text" class="form-control" value="<%= NearestRelative %>" id="NearestRelative"placeholder="Relatives" tabindex="24"></td>
			<td class="text-right">Relative Contact Number</td>
			<td><input type="text" class="form-control" value="<%= RelativeCon %>" id="RelativeCon" placeholder="Numbers" tabindex="25"></td>
		</tr>
			
		<tr class="active">
			<td> Reffered By</td>
	
			<td>
				<select name="Reff" class="form-control" id="ReferralType" value="<%= ReferralType %>" tabindex="26">
					<option <%= ReferralType == "Walk In"? "selected":"" %> value="Walk In"> Walk In </option>
					<option <%= ReferralType == "MD"? "selected":"" %> value="MD"> MD </option>
					<option <%= ReferralType == "Patient"? "selected":"" %> value="Patient"> Patient </option>
					<option <%= ReferralType == "Others"? "selected":"" %> value="Others"> Others </option>
				</select>
			</td>
			
			<td colspan="2"><input type="text" class="form-control" value="<%= ReferredBy %>" id="ReferredBy" placeholder="RefferedBy" tabindex="27"></td>
		</tr>
	</table>
	<?php include "px-details.ctrl.php"; ?>
</div>