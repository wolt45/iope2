Backbone.View.prototype.close = function () {
    console.log('Closing view ' + this);
    if (this.beforeClose) {
        this.beforeClose();
    }
    this.remove();
    this.unbind();
};

var AppRouter = Backbone.Router.extend({

    initialize:function () {
        $('#header').html(new HeaderView().render().el);
		
        $('#header').on('click', '.refresh_key', function(event) {
            window.history.back();
            return false;
        });
		
		//$('#search-bar').on('keyup', '.search-key', function(event) {
        //    //var search = this.search();
			
		//	alert ("SEARCH HELP!!!");
			
        //    return false;
        //});
    },

    routes:{
        "":"list",
        "wines/new":"newWine",
        "wines/:PxRID":"wineDetails"
	},
	
	events: {
        "keyup .search-key": "search"
    },
	
	search: function(event) {
        var key = $('.search-key').val();
        this.model.findByName(key);
    },

    list:function () {
        this.before();
    },

    wineDetails:function (PxRID) {
        this.before(function () {
            var wine = app.wineList.get(PxRID);
            app.showView('#content', new WineView({model:wine}));
        });
    },

    newWine:function () {
        this.before(function () {
            app.showView('#content', new WineView({model:new Wine()}));
        });
    },

    showView:function (selector, view) {
        if (this.currentView)
            this.currentView.close();
        $(selector).html(view.render().el);
        this.currentView = view;
        return view;
    },

    before:function (callback) {
        if (this.wineList) {
            if (callback) callback();
        } else {
            this.wineList = new WineCollection();
			
            this.wineList.fetch({success:function () {
                $('#sidebar').html(new WineListView({model:app.wineList}).render().el);
                if (callback) callback();
            }});
        }
    }
});

var RegsSearchy = Backbone.View.extend({
	template:_.template($('#tpl-search').html()),
    render:function () {
        $(this.el).html(this.template(this.model));
        return this;
    }
});

$(document).on("ready", function () {
	tpl.loadTemplates(['header', 'px-details', 'px-list-item'], function () {
		app = new AppRouter();
		Backbone.history.start();
	});
});