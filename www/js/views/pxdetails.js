window.WineView = Backbone.View.extend({

    tagName:"div", // Not required since 'div' is the default if no el or tagName specified

    initialize:function () {
        this.template = _.template(tpl.get('px-details'));
        this.model.bind("change", this.render, this);
    },

    render:function (eventName) {
        $(this.el).html(this.template(this.model.toJSON()));
        return this;
    },

    events:{
        "change input":"change",
        "click .save":"saveWine",
        "click .delete":"deleteWine",
        "click .isInsured":"modifyInsured",
        "click .Sex":"modifySex",
        "click .SexF":"modifySexF",
        "click .Race":"modifyRace",
        "click .RaceW":"modifyRaceW",
        "click .RaceB":"modifyRaceB",
	},
	
	modifyInsured: function(e) {
		var status = e.currentTarget.checked ? 1 : 0;
		this.model.set({isInsured: status});
		alert (status);
		/*if (status === 1) {
			this.$el.find('td').addClass('finished');
		} else {
			this.$el.find('td').removeClass('finished');
		}*/
	},
	
	modifySex: function(e) {
		var sex = e.currentTarget.checked ? "Male" : "Female";
		this.model.set({Sex: sex});
		alert (sex);
	},
	
	modifySexF: function(e) {
		var sex = e.currentTarget.checked ? "Female" : "Male";
		this.model.set({Sex: sex});
		alert (sex);
	},
	
	modifyRace: function(e) {
		var race = e.currentTarget.checked ? "Asian" : "";
		this.model.set({Race: race});
		alert (race);
	},
	
	modifyRaceW: function(e) {
		var race = e.currentTarget.checked ? "White" : "";
		this.model.set({Race: race});
		alert (race);
	},

	modifyRaceB: function(e) {
		var race = e.currentTarget.checked ? "Black" : "";
		this.model.set({Race: race});
		alert (race);
	},
	
    change:function (event) {
        var target = event.target;
        //console.log('changing ' + target.id + ' from: ' + target.defaultValue + ' to: ' + target.value);
        // You could change your model on the spot, like this:
        // var change = {};
        // change[target.name] = target.value;
        // this.model.set(change);
    },

    saveWine:function () {
		var isinsured = "";
		var wchSex = "";
		var wchRace = "";
		
		var ischecked = $('#isInsured').attr('checked');
		isinsured = (ischecked === "checked")? 1:0;
		
		ischecked = $('#Sex').attr('checked');
		wchSex = (ischecked === "checked")? "Male":"Female";
		
		wchRace = ($('#Race').attr('checked') === "checked")? "Asian" :
				  ($('#RaceW').attr('checked') === "checked")? "White" : "Black";
		
        this.model.set({
            LastName:$('#LastName').val(),
            FirstName:$('#FirstName').val(),
            DOB:$('#DOB').val(),
            City:$('#City').val(),
            MiddleName:$('#MiddleName').val(),
            Street:$('#Street').val(),
            Province:$('#Province').val(),
            MobileCon:$('#MobileCon').val(),
            OfficeCon:$('#OfficeCon').val(),
            HomeCon:$('#HomeCon').val(),
            Email:$('#Email').val(),
            Occupation:$('#Occupation').val(),
            Employer:$('#Employer').val(),
            SpouseName:$('#SpouseName').val(),
            Insurance:$('#Insurance').val(),
            FamilyDoctorSpecialty:$('#FamilyDoctorSpecialty').val(),
            FamilyDoctorPhone:$('#FamilyDoctorPhone').val(),
            NearestRelative:$('#NearestRelative').val(),
            RelativeCon:$('#RelativeCon').val(),
            FamilyDoctor:$('#FamilyDoctor').val(),
            ReferralType:$('#ReferralType').val(),
            ReferredBy:$('#ReferredBy').val(),
            Sex: wchSex,
            Race: wchRace,
            isInsured: isinsured
        });
        if (this.model.isNew()) {
            var self = this;
            app.wineList.create(this.model, {
                success:function () {
                    app.navigate('wines/' + self.model.PxRID, false);
					alert('Patient info SAVED successfully!');
                }
            });
        } else {
            this.model.save();
			alert('Patient info UPDATED successfully!');
        }
        return false;
    },

    deleteWine:function () {
        this.model.destroy({
            success:function () {
                alert('Paitient info DELETED successfully!');
                window.history.back();
            }
        });
        return false;
    }
});