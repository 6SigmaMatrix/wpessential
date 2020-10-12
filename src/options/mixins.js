export const WpeMixins = {
    props: {
        help: String,
        field: Object,
        options_set: {Array, Object},
    },
    data() {
        return {
            loader: false,
            tabs: {},
            tab_id_record: {},
            active_tab_id: null,
            attr: {},
            value: null,
            error_message: null,
            success_message: null,
            show_alert: false
        }
    },
    methods: {
        tab_args_check(tab, index = '') {

            if (tab.tab_id == undefined) {
                this.error_message = 'Tab need a unique "ID"';
                this.notify_error();
            }

            if (index == 0) {
                this.active_tab_id = tab.tab_id;
            }

            if (tab.tab_title == undefined) {
                this.error_message = 'Tab need a "Title"';
                this.notify_error();
            }

            if (tab.tab_desc == undefined) {
                tab.tab_desc = '';
            }

            if (tab.tab_icon == undefined) {
                tab.tab_icon = '';
            }

            if (tab.is_child == undefined) {
                tab.is_child = false;
            }

            if (tab.tab_fields == undefined) {
                this.error_message = 'Tab need the "Fields"';
                this.notify_error();
            }
        },
        field_args_check() {
            if (this.field.id == undefined) {
                this.error_message = 'Tab field need a unique "ID"';
                this.notify_error();
            }

            if (this.field.type == undefined) {
                this.field.type = 'wpe-text';
            }

            if (this.field.heading == undefined) {
                this.field.heading = '';
            }

            if (this.field.subtitle == undefined) {
                this.field.subtitle = '';
            }

            if (this.field.desc == undefined) {
                this.field.desc = '';
            }

            if (this.field.defined == undefined) {
                this.field.defined = '';
            }

            if (this.field.help == undefined) {
                this.field.help = '';
            }

            if (this.field.settings == undefined) {
                this.field.settings = {};
            }
        },
        get_value() {
            console.log(this.options_set);
            if (this.options_set[this.field.id]) {
                return this.value = this.options_set[this.field.id];
            }
        },
        attributes() {
            let atts = {};
            if (this.field.settings !== undefined || this.field.settings !== null) {

                jQuery.each(this.field.settings, function (attr, value) {
                    atts[attr] = value;
                });

                return this.attr = atts;
            }

            return this.atts = {};
        },
        on_change() {
            this.show_alert = true;
            this.options_set[this.field.id] = this.value;
        },
        select_change() {
            this.show_alert = true;
            this.options_set[this.field.id] = this.value;
        },
        tab_rest() {
            return this.active_tab_id;
        },
        v_if_double(data1 = '', compare = '', data2 = '', create1 = '', create2 = '') {
            if (data1 + compare + data2) {
                return create1;
            } else {
                return create2;
            }
        },
        v_if_single(data1 = '', create1 = '', create2 = '') {
            if (data1 !== undefined || data1 !== '') {
                return create1;
            } else {
                return create2;
            }
        },
        notify_error() {
            return this.$notify({
                type: "error",
                title: "Error!!!",
                message: this.error_message,
                duration: 10000,
                showClose: true,
                customClass: 'error_notify'
            });
        },
        notify_success() {
            return this.$notify({
                type: "success",
                title: "Success",
                message: this.success_message,
                duration: 10000,
                showClose: true,
                customClass: 'success_notify'
            });
        }
    }
}
