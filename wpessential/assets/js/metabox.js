/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/WpeMetabox.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/WpeMetabox.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _mixins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./mixins */ "./src/options/mixins.js");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  mixins: [_mixins__WEBPACK_IMPORTED_MODULE_0__["WpeMixins"]],
  data: function data() {
    return {
      classID: ["wpessential-metabox-settings", "row-bottom-gap-15"],
      post_id: jQuery('#post_ID').val(),
      meta_id: this.$parent.$el.attributes.meta_id.value
    };
  },
  mounted: function mounted() {
    this.get_data();
  },
  methods: {
    data: function data(tab) {
      console.log(tab);
    },
    get_data: function get_data() {
      var _this = this;

      this.loader = true;
      var get_data = {
        security: WPEssential.nonce,
        action: "wpessential_admin_metabox_data",
        post_id: this.post_id,
        meta_id: this.meta_id
      };
      axios.post(WPEssential.ajaxshort, Qs.stringify(get_data))["catch"](function (error) {
        _this.loader = false;

        _this.notify_error(error);
      }).then(function (response) {
        _this.loader = false;

        if (response.data.success == true) {
          _this.tabs = response.data.data.metabox_options;
          _this.options = response.data.data.saved_options;
          jQuery.each(_this.tabs, function (tab_index, tab) {
            jQuery.each(tab.tab_fields, function (index, item) {
              if (_this.options[item.id]) {
                _this.options[item.id] = _this.options[item.id];
              } else {
                if (item.defined) {
                  // console.log(item.defined);
                  _this.options[item.id] = item.defined;
                } else {
                  _this.options[item.id] = '';
                }
              }
            });
          });
        } else {
          _this.error_message = "No data founded";

          _this.notify_error();
        }
      });
    },
    onSubmit: function onSubmit() {
      var _this2 = this;

      this.loader = true;
      var set_data = {
        security: WPEssential.nonce,
        action: "wpessential_admin_save_metabox",
        post_id: this.post_id,
        meta_id: this.meta_id,
        save_options: this.options
      };
      axios.post(WPEssential.ajaxshort, Qs.stringify(set_data))["catch"](function (error) {
        _this2.loader = false;

        _this2.notify_error(error);
      }).then(function (response) {
        _this2.loader = false;

        if (response.data.success == true) {
          _this2.success_message = response.data.data;

          _this2.notify_success();
        } else {
          _this2.error_message = response.data.data;

          _this2.notify_error();
        }
      });
    },
    reset_form: function reset_form(formName) {
      console.log(formName);
      this.$refs[formName].resetFields();
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/WpeMetabox.vue?vue&type=template&id=7347b5a4&":
/*!*************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/WpeMetabox.vue?vue&type=template&id=7347b5a4& ***!
  \*************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    {
      directives: [
        {
          name: "loading",
          rawName: "v-loading",
          value: _vm.loader,
          expression: "loader"
        }
      ],
      class: this.classID[0],
      attrs: { id: this.classID[0] }
    },
    [
      _c(
        "el-form",
        { ref: "options" },
        [
          _c(
            "el-form-item",
            [
              _vm.show_alert
                ? _c("el-alert", {
                    attrs: {
                      "show-icon": "",
                      type: "warning",
                      title:
                        "Please save the changes by clicking on save button"
                    }
                  })
                : _vm._e(),
              _vm._v(" "),
              _vm.tabs.length > 1
                ? _c(
                    "el-tabs",
                    {
                      attrs: { "tab-position": "left", type: "card" },
                      model: {
                        value: _vm.active_tab_id,
                        callback: function($$v) {
                          _vm.active_tab_id = $$v
                        },
                        expression: "active_tab_id"
                      }
                    },
                    _vm._l(_vm.tabs, function(tab, index) {
                      return _c(
                        "el-tab-pane",
                        _vm._b(
                          {
                            key: tab.tab_id,
                            attrs: { lazy: true, name: tab.tab_id }
                          },
                          "el-tab-pane",
                          _vm.tab_args_check(tab, index),
                          false
                        ),
                        [
                          _c(
                            "span",
                            { attrs: { slot: "label" }, slot: "label" },
                            [
                              _c("i", { class: tab.tab_icon }),
                              _vm._v(
                                "\n                    " +
                                  _vm._s(tab.tab_title) +
                                  "\n                  "
                              )
                            ]
                          ),
                          _vm._v(" "),
                          _c("div", { staticClass: "wpessential-tab-info" }, [
                            tab.tab_title
                              ? _c("h1", [_vm._v(_vm._s(tab.tab_title))])
                              : _vm._e(),
                            _vm._v(" "),
                            tab.tab_desc
                              ? _c("span", [_vm._v(_vm._s(tab.tab_desc))])
                              : _vm._e()
                          ]),
                          _vm._v(" "),
                          _vm._l(tab.tab_fields, function(field) {
                            return tab.tab_fields
                              ? _c(field.type, {
                                  key: field.id,
                                  tag: "component",
                                  attrs: {
                                    field: field,
                                    options_set: _vm.options
                                  }
                                })
                              : _vm._e()
                          })
                        ],
                        2
                      )
                    }),
                    1
                  )
                : _vm.tabs.length == 1
                ? _vm._t("default", [
                    _c("div", { staticClass: "wpessential-tab-info" }, [
                      _vm.tabs[0].tab_title
                        ? _c("h1", [_vm._v(_vm._s(_vm.tabs[0].tab_title))])
                        : _vm._e(),
                      _vm._v(" "),
                      _vm.tabs[0].tab_desc
                        ? _c("span", [_vm._v(_vm._s(_vm.tabs[0].tab_desc))])
                        : _vm._e()
                    ]),
                    _vm._v(" "),
                    _vm._l(_vm.tabs[0].tab_fields, function(field) {
                      return _vm.tabs[0].tab_fields
                        ? _c(field.type, {
                            key: field.id,
                            tag: "component",
                            attrs: { field: field, options_set: _vm.options }
                          })
                        : _vm._e()
                    })
                  ])
                : _vm._e()
            ],
            2
          ),
          _vm._v(" "),
          _c(
            "el-form-item",
            [
              _c(
                "el-button",
                {
                  attrs: { type: "primary" },
                  on: {
                    click: function($event) {
                      $event.preventDefault()
                      return _vm.onSubmit($event)
                    }
                  }
                },
                [_vm._v("Create")]
              ),
              _vm._v(" "),
              _c("el-button", { on: { click: _vm.reset_form } }, [
                _vm._v("Reset All")
              ]),
              _vm._v(" "),
              _vm.tabs.length > 1
                ? _c("el-button", { on: { click: _vm.tab_rest } }, [
                    _vm._v("Reset Section")
                  ])
                : _vm._e()
            ],
            1
          )
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js":
/*!********************************************************************!*\
  !*** ./node_modules/vue-loader/lib/runtime/componentNormalizer.js ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return normalizeComponent; });
/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file (except for modules).
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

function normalizeComponent (
  scriptExports,
  render,
  staticRenderFns,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier, /* server only */
  shadowMode /* vue-cli only */
) {
  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (render) {
    options.render = render
    options.staticRenderFns = staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = 'data-v-' + scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = shadowMode
      ? function () {
        injectStyles.call(
          this,
          (options.functional ? this.parent : this).$root.$options.shadowRoot
        )
      }
      : injectStyles
  }

  if (hook) {
    if (options.functional) {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functional component in vue file
      var originalRender = options.render
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return originalRender(h, context)
      }
    } else {
      // inject component registration as beforeCreate hook
      var existing = options.beforeCreate
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    }
  }

  return {
    exports: scriptExports,
    options: options
  }
}


/***/ }),

/***/ "./src/metabox.js":
/*!************************!*\
  !*** ./src/metabox.js ***!
  \************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _options_WpeMetabox__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./options/WpeMetabox */ "./src/options/WpeMetabox.vue");

Vue.component('WpeMetabox', _options_WpeMetabox__WEBPACK_IMPORTED_MODULE_0__["default"]);
new Vue({
  el: ".wpe-metabox-wrapper"
});

/***/ }),

/***/ "./src/options/WpeMetabox.vue":
/*!************************************!*\
  !*** ./src/options/WpeMetabox.vue ***!
  \************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeMetabox_vue_vue_type_template_id_7347b5a4___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeMetabox.vue?vue&type=template&id=7347b5a4& */ "./src/options/WpeMetabox.vue?vue&type=template&id=7347b5a4&");
/* harmony import */ var _WpeMetabox_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeMetabox.vue?vue&type=script&lang=js& */ "./src/options/WpeMetabox.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeMetabox_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeMetabox_vue_vue_type_template_id_7347b5a4___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeMetabox_vue_vue_type_template_id_7347b5a4___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/WpeMetabox.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/WpeMetabox.vue?vue&type=script&lang=js&":
/*!*************************************************************!*\
  !*** ./src/options/WpeMetabox.vue?vue&type=script&lang=js& ***!
  \*************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeMetabox_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/babel-loader/lib??ref--4-0!../../node_modules/vue-loader/lib??vue-loader-options!./WpeMetabox.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/WpeMetabox.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeMetabox_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/WpeMetabox.vue?vue&type=template&id=7347b5a4&":
/*!*******************************************************************!*\
  !*** ./src/options/WpeMetabox.vue?vue&type=template&id=7347b5a4& ***!
  \*******************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeMetabox_vue_vue_type_template_id_7347b5a4___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../node_modules/vue-loader/lib??vue-loader-options!./WpeMetabox.vue?vue&type=template&id=7347b5a4& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/WpeMetabox.vue?vue&type=template&id=7347b5a4&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeMetabox_vue_vue_type_template_id_7347b5a4___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeMetabox_vue_vue_type_template_id_7347b5a4___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/mixins.js":
/*!*******************************!*\
  !*** ./src/options/mixins.js ***!
  \*******************************/
/*! exports provided: WpeMixins */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "WpeMixins", function() { return WpeMixins; });
var WpeMixins = {
  props: {
    help: String,
    field: Object,
    options_set: {
      Array: Array,
      Object: Object
    }
  },
  data: function data() {
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
    };
  },
  methods: {
    tab_args_check: function tab_args_check(tab) {
      var index = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : '';

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
    field_args_check: function field_args_check() {
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
    get_value: function get_value() {
      console.log(this.options_set);

      if (this.options_set[this.field.id]) {
        return this.value = this.options_set[this.field.id];
      }
    },
    attributes: function attributes() {
      var atts = {};

      if (this.field.settings !== undefined || this.field.settings !== null) {
        jQuery.each(this.field.settings, function (attr, value) {
          atts[attr] = value;
        });
        return this.attr = atts;
      }

      return this.atts = {};
    },
    on_change: function on_change() {
      this.show_alert = true;
      this.options_set[this.field.id] = this.value;
    },
    select_change: function select_change() {
      this.show_alert = true;
      this.options_set[this.field.id] = this.value;
    },
    tab_rest: function tab_rest() {
      return this.active_tab_id;
    },
    v_if_double: function v_if_double() {
      var data1 = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : '';
      var compare = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : '';
      var data2 = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : '';
      var create1 = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : '';
      var create2 = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : '';

      if (data1 + compare + data2) {
        return create1;
      } else {
        return create2;
      }
    },
    v_if_single: function v_if_single() {
      var data1 = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : '';
      var create1 = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : '';
      var create2 = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : '';

      if (data1 !== undefined || data1 !== '') {
        return create1;
      } else {
        return create2;
      }
    },
    notify_error: function notify_error() {
      return this.$notify({
        type: "error",
        title: "Error!!!",
        message: this.error_message,
        duration: 10000,
        showClose: true,
        customClass: 'error_notify'
      });
    },
    notify_success: function notify_success() {
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
};

/***/ }),

/***/ 2:
/*!******************************!*\
  !*** multi ./src/metabox.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! F:\MAMP\htdocs\wpe\wp-content\plugins\wpessential\src\metabox.js */"./src/metabox.js");


/***/ })

/******/ });