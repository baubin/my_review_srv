(function() {
      //"use strict"


      /****
      *
      * MEDIA
      *
      ****/

      /*
      * Media model
      */

      window.Media = Backbone.Model.extend({
        defaults: {
          type: '',
          name: '',
          url: ''
        },

        initialize : function Media() {
          console.log('Media Constructor');
        },

        urlRoot: 'medias'
      });

      /*
      * Media collection
      */

      window.Medias = Backbone.Collection.extend({
            model : Media,
            localStorage : new Store("medias"),
            initialize : function() {
                console.log('Medias collection Constructor');
                this.on("change:name", this.render);
            },

            render : function() {
              console.log('triggeeeeerrreedddd');
            }
        });

      /*
      * Media View
      */

      window.MediaView = Backbone.View.extend({
        el : $('#media-container'),
        initialize : function() {
            this.template = _.template($('#media-template').html());
            //this.collection.bind("change", this.render, this);
            console.log('this: '.this);
            //binding: render when any change apply
            //_.bindAll(this, 'render');
            //this.model.bind('change', this.render);
            //this.bind('change', this.render);

        },

        setModel : function(model) {
          this.model = model;
          return this;
        },

        render : function() {
            var renderedContent = this.template(this.model.toJSON());
            $(this.el).html(renderedContent);
            return this;
        }

      });


      /****
      *
      * NOTE
      *
      ****/

      /*
      * Note model
      */

      window.Note = Backbone.Model.extend({

        defaults : {
          author: 'default note author',
          title : 'default note title',
          description : 'default note description'
        },

        /*validate: function( attributes ){
          if( attributes.author == '') {
            console.log('On est dedans');
            return "Author can't be empty!";
          }
        },*/

        validation: {
          title: {
            required: true
          },
          /*author: function(value) {
            console.log('In validation');
            if(value !== '') {
              console.log('in the IF');
              return 'Author cant be empty!';
            }
          }*/
        },

        initialize : function Note() {
          console.log('Note Constructor');
          this.bind("error", function(model, error){
              console.log( error );
          });
        }
      });

  })();