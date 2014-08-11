var current_date = new Date ();
var thismonth = current_date.getMonth()+1;
var today = current_date.getFullYear()+"-"+thismonth+"-"+current_date.getDate();
//var today = thismonth+"/"+current_date.getDate()+"/"+current_date.getFullYear();

//document.getElementById('RegDate').value = new Date().toDateInputValue();
//var today = new Date().toDateInputValue();

window.Wine = Backbone.Model.extend({
    urlRoot:"api/wines",
	
    defaults:{
        "PxRID":null,
        "LastName":"",
        "FirstName":"",
        "MiddleName":"",
        "Foto":"default.jpg",
        "RegDate": today,
        "DOB": "",
        "Street": "",
		"City": "",
        "Province": "",
        "MobileCon": "",
        "OfficeCon": "",
        "HomeCon": "",
        "Email": "",
        "Occupation": "",
        "Insurance": "",
        "FamilyDoctor": "",
        "FamilyDoctorSpecialty": "",
        "FamilyDoctorPhone": "",
        "SpouseName": "",
        "Employer": "",
        "NearestRelative": "",
        "RelativeCon": "",
        "ReferralType": "",
        "ReferredBy": "",
        "Sex": "Male",
        "isInsured": 0,
        "Race": "Asian"
    },
});

window.WineCollection = Backbone.Collection.extend({
    model:Wine,
    url:"api/wines"
});