!function(t,e){angular.module("widgetkit").service("mediaPicker",["$location","$q","Application",function(t,e,i){function a(t){var e=document.createElement("a");return e.href=t,e}var n=new RegExp("^"+i.baseUrl());return{select:function(i){i=angular.extend({title:"Pick media",multiple:!1,button:{text:"Select"}},i);var r=e.defer(),o=wp.media(i).on("select",function(){var e=o.state().get("selection").map(function(e){var i=e.toJSON(),r=a(i.url);return r.host==t.host()&&(i.url=r.pathname.replace(n,"").replace(/^\//,"")),i});r.resolve(i.multiple?e:e[0])}).open();return r.promise}}}]),t(function(){t("body").on("click",".widgetkit-editor",function(i){i.preventDefault();var a,n=t(this);a=t(n.data("source")?"#"+n.data("source"):"textarea#content"),e.widgetkit.env.editor(a)}).on("click",".widgetkit-widget button",function(i){i.preventDefault();var a=t(this).nextAll("input"),n=t(this).closest("form").find(".widget-control-save");e.widgetkit.env.init("widget",JSON.parse(a.val()),function(t){a.val(JSON.stringify(t)),n.trigger("click")})}).find("[data-app]").addClass("wrap"),t(".widgetkit-editor[data-source]").each(function(){var e=t(this);t("#"+e.data("source")).addClass("uk-margin-small-top").before(e)}),t(document).on("widget-updated",function(t,e){if(e.is('[id*="_text-"]')){var i=e.find("textarea");i.before('<a href="#" class="button add_media widgetkit-editor" title="Add Widget" data-source="'+i.attr("id")+'"><span></span> Widgetkit</a>').addClass("uk-margin-small-top")}})})}(jQuery,window);