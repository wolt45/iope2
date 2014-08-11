tpl = {

    // Hash of preloaded templates for the app
    templates:{},

    // Recursively pre-load all the templates for the app.
    // This implementation should be changed in a production environment. 
	// All the template files should be
    // concatenated in a single file.
    loadTemplates:function (tplNames, callback) {

        var that = this;

        var loadTemplate = function (index) {
            var tplname = tplNames[index];
            console.log('Loading template: ' + tplname);
            $.get('tpl/' + tplname + '.php', function (data) {
                that.templates[tplname] = data;
                index++;
                if (index < tplNames.length) {
                    loadTemplate(index);
                } else {
                    callback();
                }
            });
        }

        loadTemplate(0);
    },

    // Get template by name from hash of preloaded templates
    get:function (name) {
        return this.templates[name];
    }

};