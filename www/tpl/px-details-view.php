<div class="panel panel-success">
	<!-- Table -->
	<div class="panel-heading">		
		<button class="btn btn-warning btn-lg edit">Edit</button>
		<button class="btn btn-danger btn-lg delete">Delete</button>
	</div>		
	
	<table class="table">
		<tr class="active">
			<td width="15%" rowspan=5>
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
			</tr>

			<tr>
				<td>Chart #:</td><th class="active" style="text-align:center"><%= PxRID %></th>
				<td>Registered:</td><th class="active" nowrap><%= RegDate %></th>
			</tr>
			
			<tr>
				<td>Name:</td><th class="warning" nowrap><%= LastName %>, <%= FirstName %> <%= MiddleName %></th>
			</tr>
			
			<tr>
				<td>Birth Day:</td><th class="warning" nowrap><%= DOB %></th>
			</tr>
			
			<tr>
			<td>
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
					
			<th>
				<div class="form-group">
					
				</div>
				<div class="form-group">
					<input type="text" class="form-control" value="<%= LastName %>"  
						id="LastName" placeholder="Last Name" tabindex="1" >
				</div>
				<div class="form-group">
					<%= DOB %>
				</div>
				<div class="form-group">
					<input type="radio" name="sex" tabindex="9" checked value="Male"> Male
					<input type="radio" name="sex" value="Female"> Female
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="street" placeholder="Street" tabindex="6">
				</div>
			</th>
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
					<input type="text" class="form-control" name="city" placeholder="City" tabindex="7">
				</div>
			</td>
			<td>
				<div class="form-group">
					<%= RegDate %>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="MiddleName" placeholder="Middle Name" tabindex="3">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="age" placeholder="Age" tabindex="5">
				</div>
				<div class="form-group">
					<input type="radio" name="race" tabindex="10" value="W" checked> W
					<input type="radio" name="race" tabindex="8" value="B"> B
					<input type="radio" name="race" tabindex="8" value="A"> A
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="province" placeholder="Province" tabindex="8">
				</div>
			</td>
		</tr>
	</table>

	<table class="table">
		<tr class="active">
			<td>Contact Number</td>
			<td><input type="text" class="form-control" name="Mobile" placeholder="Mobile" tabindex="11"></td>
			<td><input type="text" class="form-control" name="Office" placeholder="Office" tabindex="12"></td>
			<td><input type="text" class="form-control" name="Home" placeholder="Home" tabindex="13"></td>
		</tr>
		<tr class="active">
			<td>E-Mail</td>
			<td><input type="text" class="form-control" name="Email" placeholder="E-Mail" tabindex="14"></td>
			<td class="text-right">Occupation</td>
			<td><input type="text" class="form-control" name="Occupation" placeholder="Occupation" tabindex="15"></td>
		</tr>
		<tr class="active">
			<td>Employer</td>
			<td><input type="text" class="form-control" name="Employer" placeholder="Employer" tabindex="16"></td>
			
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
				<input type="text" class="form-control" name="Spouse" placeholder="Spouse Name" tabindex="18">
			</td>
			<td colspan="3"></td>
			
		</tr>
		<tr class="active">
			<td>Inssurance</td>
			<td class="text-center"><input type="checkbox" name="InsuranceYN" tabindex="19" value="1"> Y </td>
			<td colspan="2"><input type="text" class="form-control" placeholder="List All" tabindex="20"></td>
		</tr>
		<tr class="active">
			<td>Family Doctor</td>
			<td><input type="text" class="form-control" name="FamilyDoctor" placeholder="Family Doctor" tabindex="21"></td>
			<td class="text-right">Specialty</td>
			<td><input type="text" class="form-control" name="Specialty" placeholder="Specialty" tabindex="22"></td>
		</tr>
		<tr class="active">
			<td>Contact Number</td>
			<td><input type="text" class="form-control" name="ContactNumber" placeholder="Contact Number" tabindex="23"></td>
			<td colspan="2"></td>
		</tr>
		<tr class="active">
			<td>Nearest Relative</td>
			<td><input type="text" class="form-control" name="NeareastRelative"placeholder="Relatives" tabindex="24"></td>
			<td class="text-right">Relative Contact Number</td>
			<td><input type="text" class="form-control" name="RelNumber" placeholder="Numbers" tabindex="25"></td>
		</tr>
			
		<tr class="active">
			<td> Reffered By</td>
	
			<td>
				<select name="Reff" class="form-control" tabindex="26">
					<option value="Walk In"> Walk In 
					<option value="MD"> MD
					<option value="Patient"> Patient
					<option value="Others"> Others
				</select>
			</td>
			
			<td colspan="2"><input type="text" class="form-control" name="ReffBy" placeholder="RefferedBy" tabindex="27"></td>
		</tr>
	</table>
</div>