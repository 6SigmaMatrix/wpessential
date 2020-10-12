jQuery(window).on('elementor:init', function () {
  var Query_ser = elementor.modules.controls.Select2.extend({
    cache: null,
    isTitlesReceived: false,
    getSelect2Placeholder: function getSelect2Placeholder() {
      return {
        id: '',
        text: 'All'
      };
    },
    getSelect2DefaultOptions: function getSelect2DefaultOptions() {
      var self = this;
      return jQuery.extend(elementor.modules.controls.Select2.prototype.getSelect2DefaultOptions.apply(this, arguments), {
        ajax: {
          transport: function transport(params, success, failure) {
            var data = {
              q: params.data.q,
              filter_type: self.model.get('filter_type'),
              object_type: self.model.get('object_type'),
              include_type: self.model.get('include_type'),
              query: self.model.get('query')
            };
            return elementorCommon.ajax.addRequest('panel_posts_control_filter_autocomplete', {
              data: data,
              success: success,
              error: failure
            });
          },
          data: function data(params) {

            return {
              q: params.term,
              page: params.page
            };
          },
          cache: true
        },
        escapeMarkup: function escapeMarkup(markup) {
          return markup;
        },
        minimumInputLength: 1
      });
    },
    getValueTitles: function getValueTitles() {
      var self = this,
          ids = this.getControlValue(),
          filterType = this.model.get('filter_type');
      if (!ids || !filterType) {
        return;
      }
      if (!_.isArray(ids)) {
        ids = [ids];
      }
      elementorCommon.ajax.loadObjects({
        action: 'query_control_value_titles',
        ids: ids,
        data: {
          filter_type: filterType,
          object_type: self.model.get('object_type'),
          include_type: self.model.get('include_type'),
          unique_id: '' + self.cid + filterType
        },
        before: function before() {
          self.addControlSpinner();
        },
        success: function success(data) {
          self.isTitlesReceived = true;
          self.model.set('options', data);
          self.render();
        }
      });
    },
    addControlSpinner: function addControlSpinner() {
      this.ui.select.prop('disabled', true);
      this.$el.find('.elementor-control-title').after('<span class="elementor-control-spinner">&nbsp;<i class="fa fa-spinner fa-spin"></i>&nbsp;</span>');
    },
    onReady: function onReady() {
      // Safari takes it's time to get the original select width
      setTimeout(elementor.modules.controls.Select2.prototype.onReady.bind(this));
      if (!this.isTitlesReceived) {
        this.getValueTitles();
      }
    }
  });
  elementor.addControlView('Query', Query_ser);
});
