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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/WpeHealth.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/components/WpeHealth.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wpessential_mixin_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../wpessential-mixin.js */ "./src/wpessential-mixin.js");
/* harmony import */ var _info_WpeConstants__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./info/WpeConstants */ "./src/components/info/WpeConstants.vue");
/* harmony import */ var _info_WpePlugins__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./info/WpePlugins */ "./src/components/info/WpePlugins.vue");
/* harmony import */ var _info_WpePluginsHooks__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./info/WpePluginsHooks */ "./src/components/info/WpePluginsHooks.vue");
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
  components: {
    WpePluginsHooks: _info_WpePluginsHooks__WEBPACK_IMPORTED_MODULE_3__["default"],
    WpePlugins: _info_WpePlugins__WEBPACK_IMPORTED_MODULE_2__["default"],
    WpeConstants: _info_WpeConstants__WEBPACK_IMPORTED_MODULE_1__["default"]
  },
  mixins: [_wpessential_mixin_js__WEBPACK_IMPORTED_MODULE_0__["default"]],
  name: "wpe-health",
  data: function data() {
    return {};
  },
  mounted: function mounted() {
    this.page_loader = false;
  },
  methods: {}
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/WpeIndex.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/components/WpeIndex.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wpessential_mixin_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../wpessential-mixin.js */ "./src/wpessential-mixin.js");
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
  mixins: [_wpessential_mixin_js__WEBPACK_IMPORTED_MODULE_0__["default"]],
  name: "wpe-index",
  data: function data() {
    return {};
  },
  mounted: function mounted() {
    this.$WPEssential.options_routes = {};
    this.page_loader = false;
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/WpeNavigation.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/components/WpeNavigation.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wpessential_mixin__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../wpessential-mixin */ "./src/wpessential-mixin.js");
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
  mixins: [_wpessential_mixin__WEBPACK_IMPORTED_MODULE_0__["default"]],
  name: "wpe-navigation",
  data: function data() {
    return {};
  },
  mounted: function mounted() {},
  methods: {}
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/WpeOptions.vue?vue&type=script&lang=js&":
/*!************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/components/WpeOptions.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _options_controls_WpeTab__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./options-controls/WpeTab */ "./src/components/options-controls/WpeTab.vue");
/* harmony import */ var _options_controls_WpeForm__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./options-controls/WpeForm */ "./src/components/options-controls/WpeForm.vue");
/* harmony import */ var _wpessential_mixin__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../wpessential-mixin */ "./src/wpessential-mixin.js");
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
  components: {
    WpeForm: _options_controls_WpeForm__WEBPACK_IMPORTED_MODULE_1__["default"],
    WpeTab: _options_controls_WpeTab__WEBPACK_IMPORTED_MODULE_0__["default"]
  },
  mixins: [_wpessential_mixin__WEBPACK_IMPORTED_MODULE_2__["default"]],
  name: "wpe-theme-options",
  data: function data() {
    return {
      form_args: this.$WPEssential.global_options_args,
      form: {},
      form_rules: {
        name: [{
          required: true,
          message: 'Please input Activity name',
          trigger: 'blur'
        }, {
          min: 3,
          max: 5,
          message: 'Length should be 3 to 5',
          trigger: 'blur'
        }]
      }
    };
  },
  mounted: function mounted() {
    this.page_loader = false;
  },
  methods: {}
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/WpeRouter.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/components/WpeRouter.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeIndex__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeIndex */ "./src/components/WpeIndex.vue");
/* harmony import */ var _WpeOptions__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeOptions */ "./src/components/WpeOptions.vue");
/* harmony import */ var _WpeHealth__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./WpeHealth */ "./src/components/WpeHealth.vue");
var _this = undefined;




console.log(WPEssential.options_routes);

if (WPEssential.options_routes) {
  console.log(WPEssential.options_routes);
  $.each(undefined.$WPEssential.options_routes, function (index, route) {
    console.log(route); //return;

    _this.$router.addRoute(route);
  });
}

var routes = [{
  path: '/',
  redirect: '/home'
}, {
  path: '/home',
  component: _WpeIndex__WEBPACK_IMPORTED_MODULE_0__["default"],
  name: 'Index'
}
/*{
    path: '/health-info',
    component: WpeHealth,
    name: 'Healt'
},
{
    path: '/theme',
    component: WpeOptions,
    name: 'Theme Options'
}*/
];
/* harmony default export */ __webpack_exports__["default"] = (routes);
/*export default {
    name: "wpe-router",
    data () {
        return {}

    },
    mounted () {
        if ( this.$WPEssential.admin_pages ) {
            var temp = {
                index: WpeIndex,
                options: WpeOptions,
                health: WpeHealth
            };
            $.each( this.$WPEssential.admin_pages, ( index, route ) => {
                let comp = "wpe" + temp[ route.component ];
                routes.push( {
                    path: route.path,
                    component: { template: comp },
                    name: route.title
                } )
            } );
        }
        return routes;
    },
    methods: {}
}*/

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/info/WpeConstants.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/components/info/WpeConstants.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wpessential_mixin_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../wpessential-mixin.js */ "./src/wpessential-mixin.js");
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
  mixins: [_wpessential_mixin_js__WEBPACK_IMPORTED_MODULE_0__["default"]],
  name: "wpe-constants",
  data: function data() {
    return {
      toggle_data: null,
      table_data: []
    };
  },
  mounted: function mounted() {
    this.get_data();
  },
  methods: {
    get_data: function get_data() {
      var _this = this;

      this.ajax_loader = true;
      $.ajax({
        url: this.$WPEssential.ajaxurl,
        type: "POST",
        data: {
          action: "wpe_admin_health_info",
          subaction: "constants",
          nonce: this.$WPEssential.nonce
        },
        success: function success(res) {
          _this.toggle_data = res.data;
          _this.ajax_loader = false;
        },
        error: function error(res) {
          _this.ajax_res = res.responseJSON.data;

          _this.ajax_error();

          _this.ajax_loader = false;
        }
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/info/WpePlugins.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/components/info/WpePlugins.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wpessential_mixin_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../wpessential-mixin.js */ "./src/wpessential-mixin.js");
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
  mixins: [_wpessential_mixin_js__WEBPACK_IMPORTED_MODULE_0__["default"]],
  name: "wpe-plugins",
  data: function data() {
    return {
      toggle_data: null,
      table_data: []
    };
  },
  mounted: function mounted() {
    this.get_data();
  },
  methods: {
    get_data: function get_data() {
      var _this = this;

      this.ajax_loader = true;
      $.ajax({
        url: this.$WPEssential.ajaxurl,
        type: "POST",
        data: {
          action: "wpe_admin_health_info",
          subaction: "active_plugins",
          nonce: this.$WPEssential.nonce
        },
        success: function success(res) {
          _this.toggle_data = res.data;
          _this.ajax_loader = false;
        },
        error: function error(res) {
          _this.ajax_res = res.responseJSON.data;

          _this.ajax_error();

          _this.ajax_loader = false;
        }
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/info/WpePluginsHooks.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/components/info/WpePluginsHooks.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wpessential_mixin_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../wpessential-mixin.js */ "./src/wpessential-mixin.js");
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
  mixins: [_wpessential_mixin_js__WEBPACK_IMPORTED_MODULE_0__["default"]],
  name: "wpe-plugins-hooks",
  data: function data() {
    return {
      toggle_data: null,
      table_data: []
    };
  },
  mounted: function mounted() {
    this.get_data();
  },
  methods: {
    get_data: function get_data() {
      var _this = this;

      this.ajax_loader = true;
      $.ajax({
        url: this.$WPEssential.ajaxurl,
        type: "POST",
        data: {
          action: "wpe_admin_health_info",
          subaction: "wpe_used_hooks",
          nonce: this.$WPEssential.nonce
        },
        success: function success(res) {
          _this.toggle_data = res.data;
          _this.ajax_loader = false;
        },
        error: function error(res) {
          _this.ajax_res = res.responseJSON.data;

          _this.ajax_error();

          _this.ajax_loader = false;
        }
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/options-controls/WpeForm.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/components/options-controls/WpeForm.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeText_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeText.vue */ "./src/components/options-controls/WpeText.vue");
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
  name: "wpe-form",
  components: {
    WpeText: _WpeText_vue__WEBPACK_IMPORTED_MODULE_0__["default"]
  },
  data: function data() {
    return {
      form: {
        name: "test"
      }
    };
  },
  mounted: function mounted() {}
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/options-controls/WpeNote.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/components/options-controls/WpeNote.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  props: ['content', 'title', 'icon'],
  data: function data() {
    return {
      args: this.$WPEssential.tab_args.note
    };
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/options-controls/WpeTab.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/components/options-controls/WpeTab.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeNote__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeNote */ "./src/components/options-controls/WpeNote.vue");
/* harmony import */ var _WpeForm__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeForm */ "./src/components/options-controls/WpeForm.vue");
/* harmony import */ var _wpessential_mixin__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../wpessential-mixin */ "./src/wpessential-mixin.js");
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
  mixins: [_wpessential_mixin__WEBPACK_IMPORTED_MODULE_2__["default"]],
  name: "wpe-tab",
  components: {
    WpeNote: _WpeNote__WEBPACK_IMPORTED_MODULE_0__["default"]
  },
  data: function data() {
    return {
      global_tabs_args: this.$WPEssential.global_tabs_args,
      options_tabs: {},
      options_routes: []
    };
  },
  mounted: function mounted() {
    this.wpe_tab();
  },
  methods: {
    wpe_tab: function wpe_tab() {
      var find_in = this.$WPEssential.tabs;

      if (find_in[this.wpe_get_route_id()]) {
        this.options_tabs = find_in[this.wpe_get_route_id()];
        this.wpe_tab_children(find_in[this.wpe_get_route_id()]);
      }

      this.$WPEssential.options_routes = this.options_routes;
      console.log(find_in[this.wpe_get_route_id()]);
    },
    wpe_tab_children: function wpe_tab_children(tabs) {
      var _this = this;

      $.each(tabs, function (index, tab) {
        if (tab.children) {
          _this.options_routes[tab.id] = {
            path: _this.wpe_get_route_id() + "/" + tab.id,
            name: tab.title,
            componente: _WpeForm__WEBPACK_IMPORTED_MODULE_1__["default"]
          };
          $.each(tab.children, function (index, tab_child) {
            _this.options_routes[tab_child.id] = {
              path: _this.wpe_get_route_id() + "/" + tab.id + "/" + tab_child.id,
              name: tab.title,
              componente: _WpeForm__WEBPACK_IMPORTED_MODULE_1__["default"]
            };
          });
        } else {
          _this.options_routes[tab.id] = {
            path: _this.wpe_get_route_id() + "/" + tab.id,
            name: tab.title,
            componente: _WpeForm__WEBPACK_IMPORTED_MODULE_1__["default"]
          };
        }
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/options-controls/WpeText.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/components/options-controls/WpeText.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
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
//import { WpeMixins } from "../mixins";
/* harmony default export */ __webpack_exports__["default"] = ({
  //mixins: [ WpeMixins ],
  mounted: function mounted() {
    /*this.get_value();
    this.field_args_check();
    this.attributes();*/
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/WpeHealth.vue?vue&type=template&id=7c042e28&":
/*!***************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/components/WpeHealth.vue?vue&type=template&id=7c042e28& ***!
  \***************************************************************************************************************************************************************************************************/
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
          value: _vm.page_loader,
          expression: "page_loader"
        }
      ],
      staticClass: "wpe-health-info"
    },
    [
      _c(
        "section",
        [
          _c(
            "el-row",
            { attrs: { gutter: 30, type: "flex" } },
            [
              _c("el-col", { attrs: { span: 24 } }, [
                _c("div", { staticClass: "title-section" }, [
                  _c("h1", [
                    _vm._v(
                      _vm._s(_vm.$WPEssential.admin_pages.health.page_title)
                    )
                  ]),
                  _vm._v(" "),
                  _c("p", [
                    _vm._v(
                      _vm._s(_vm.$WPEssential.admin_pages.health.page_desc)
                    )
                  ])
                ])
              ])
            ],
            1
          )
        ],
        1
      ),
      _vm._v(" "),
      _c("wpe-plugins-hooks"),
      _vm._v(" "),
      _c("wpe-plugins"),
      _vm._v(" "),
      _c("wpe-constants")
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/WpeIndex.vue?vue&type=template&id=f0873694&":
/*!**************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/components/WpeIndex.vue?vue&type=template&id=f0873694& ***!
  \**************************************************************************************************************************************************************************************************/
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
          value: _vm.page_loader,
          expression: "page_loader"
        }
      ],
      staticClass: "wpe-home"
    },
    [
      _c("section", [
        _c(
          "div",
          {
            staticClass: "block",
            staticStyle: {
              width: "100%",
              margin: "0 auto",
              "text-align": "center",
              height: "100vh"
            }
          },
          [
            _c(
              "el-image",
              {
                staticStyle: { transform: "translateY(50%)" },
                attrs: {
                  src: "https://ps.w.org/wpessential/assets/banner-772x250.jpg"
                }
              },
              [
                _c(
                  "div",
                  {
                    staticClass: "image-slot",
                    attrs: { slot: "placeholder" },
                    slot: "placeholder"
                  },
                  [
                    _vm._v("\n                    Loading"),
                    _c("span", { staticClass: "dot" }, [_vm._v("...")])
                  ]
                )
              ]
            )
          ],
          1
        )
      ])
    ]
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/WpeNavigation.vue?vue&type=template&id=111bdfe0&":
/*!*******************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/components/WpeNavigation.vue?vue&type=template&id=111bdfe0& ***!
  \*******************************************************************************************************************************************************************************************************/
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
    "el-header",
    [
      _c(
        "el-menu",
        {
          staticClass: "el-menu-demo",
          attrs: {
            "default-active": "/theme-options",
            mode: "horizontal",
            router: true
          }
        },
        [
          _vm._l(_vm.$WPEssential.admin_pages, function(page) {
            return [
              _c("el-menu-item", { attrs: { index: page.path } }, [
                _vm._v(_vm._s(page.menu_title))
              ])
            ]
          })
        ],
        2
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/WpeOptions.vue?vue&type=template&id=64c49982&":
/*!****************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/components/WpeOptions.vue?vue&type=template&id=64c49982& ***!
  \****************************************************************************************************************************************************************************************************/
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
          value: _vm.page_loader,
          expression: "page_loader"
        }
      ],
      staticClass: "wpe-theme-options"
    },
    [
      _c(
        "section",
        [
          _c(
            "el-row",
            { attrs: { gutter: 30, type: "flex" } },
            [
              _c("el-col", { attrs: { span: 24 } }, [
                _c("div", { staticClass: "title-section" }, [
                  _c("h1", [
                    _vm._v(
                      _vm._s(
                        _vm.$WPEssential.admin_pages.theme_options.page_title
                      )
                    )
                  ]),
                  _vm._v(" "),
                  _c("p", [
                    _vm._v(
                      _vm._s(
                        _vm.$WPEssential.admin_pages.theme_options.page_desc
                      )
                    )
                  ])
                ])
              ])
            ],
            1
          )
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "section",
        [
          _c(
            "el-form",
            _vm._b(
              {
                ref: "form",
                attrs: { model: _vm.form, rules: _vm.form_rules }
              },
              "el-form",
              _vm.form_args,
              false
            ),
            [
              _c(
                "el-row",
                { attrs: { type: "flex", gutter: 30 } },
                [_c("wpe-tab"), _vm._v(" "), _c("router-view")],
                1
              )
            ],
            1
          )
        ],
        1
      )
    ]
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/info/WpeConstants.vue?vue&type=template&id=59024004&":
/*!***********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/components/info/WpeConstants.vue?vue&type=template&id=59024004& ***!
  \***********************************************************************************************************************************************************************************************************/
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
    "section",
    {
      directives: [
        {
          name: "loading",
          rawName: "v-loading",
          value: _vm.ajax_loader,
          expression: "ajax_loader"
        }
      ],
      staticClass: "wpe-contents"
    },
    [
      _vm.toggle_data
        ? _c(
            "el-collapse",
            [
              _c(
                "el-row",
                { attrs: { gutter: 30, type: "flex" } },
                [
                  _c("el-col", { attrs: { span: 24 } }, [
                    _c("div", { staticClass: "title-section" }, [
                      _c("h2", [_vm._v(_vm._s(_vm.toggle_data.title))]),
                      _vm._v(" "),
                      _c("p", [_vm._v(_vm._s(_vm.toggle_data.desc))])
                    ])
                  ])
                ],
                1
              ),
              _vm._v(" "),
              _vm._l(_vm.toggle_data.list, function(data_set_again, _index) {
                return _c(
                  "el-row",
                  { key: _index, attrs: { gutter: 30, type: "flex" } },
                  [
                    _c(
                      "el-col",
                      { attrs: { span: 24 } },
                      [
                        _c(
                          "el-collapse-item",
                          {
                            attrs: { title: data_set_again.title, name: _index }
                          },
                          [
                            _vm._l(data_set_again.list, function(
                              table_data,
                              td_index
                            ) {
                              return [
                                _c(
                                  "div",
                                  { staticClass: "info-table" },
                                  [
                                    _c(
                                      "el-table",
                                      {
                                        staticStyle: { width: "100%" },
                                        attrs: {
                                          data: table_data.list,
                                          stripe: ""
                                        }
                                      },
                                      [
                                        _c("el-table-column", {
                                          attrs: {
                                            label:
                                              data_set_again.column_labels
                                                .first +
                                              " (" +
                                              td_index +
                                              ")",
                                            prop: "first"
                                          }
                                        }),
                                        _vm._v(" "),
                                        _c("el-table-column", {
                                          attrs: {
                                            label:
                                              data_set_again.column_labels
                                                .second +
                                              " (" +
                                              td_index +
                                              ")",
                                            prop: "second"
                                          }
                                        })
                                      ],
                                      1
                                    )
                                  ],
                                  1
                                )
                              ]
                            })
                          ],
                          2
                        )
                      ],
                      1
                    )
                  ],
                  1
                )
              })
            ],
            2
          )
        : _vm._e()
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/info/WpePlugins.vue?vue&type=template&id=a4ea4dd6&":
/*!*********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/components/info/WpePlugins.vue?vue&type=template&id=a4ea4dd6& ***!
  \*********************************************************************************************************************************************************************************************************/
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
    "section",
    {
      directives: [
        {
          name: "loading",
          rawName: "v-loading",
          value: _vm.ajax_loader,
          expression: "ajax_loader"
        }
      ],
      staticClass: "wpe-plugins"
    },
    [
      _vm.toggle_data
        ? _c(
            "el-collapse",
            [
              _c(
                "el-row",
                { attrs: { gutter: 30, type: "flex" } },
                [
                  _c("el-col", { attrs: { span: 24 } }, [
                    _c("div", { staticClass: "title-section" }, [
                      _c("h2", [_vm._v(_vm._s(_vm.toggle_data.title))]),
                      _vm._v(" "),
                      _c("p", [_vm._v(_vm._s(_vm.toggle_data.desc))])
                    ])
                  ])
                ],
                1
              ),
              _vm._v(" "),
              _vm._l(_vm.toggle_data.list, function(data_set_again, _index) {
                return _c(
                  "el-row",
                  { key: _index, attrs: { gutter: 30, type: "flex" } },
                  [
                    _c(
                      "el-col",
                      { attrs: { span: 24 } },
                      [
                        _c(
                          "el-collapse-item",
                          {
                            attrs: { title: data_set_again.title, name: _index }
                          },
                          [
                            _vm._l(data_set_again.list, function(
                              table_data,
                              td_index
                            ) {
                              return [
                                _c(
                                  "div",
                                  { staticClass: "info-table" },
                                  [
                                    _c(
                                      "el-table",
                                      {
                                        staticStyle: { width: "100%" },
                                        attrs: {
                                          data: table_data.list,
                                          stripe: ""
                                        }
                                      },
                                      [
                                        _c("el-table-column", {
                                          attrs: {
                                            label:
                                              td_index +
                                              ": " +
                                              data_set_again.column_labels
                                                .first,
                                            prop: "first"
                                          }
                                        }),
                                        _vm._v(" "),
                                        _c("el-table-column", {
                                          attrs: {
                                            label:
                                              td_index +
                                              ": " +
                                              data_set_again.column_labels
                                                .second,
                                            prop: "second"
                                          },
                                          scopedSlots: _vm._u(
                                            [
                                              {
                                                key: "default",
                                                fn: function(scope) {
                                                  return [
                                                    _c("div", {
                                                      domProps: {
                                                        innerHTML: _vm._s(
                                                          scope.row.second
                                                        )
                                                      }
                                                    })
                                                  ]
                                                }
                                              }
                                            ],
                                            null,
                                            true
                                          )
                                        })
                                      ],
                                      1
                                    )
                                  ],
                                  1
                                )
                              ]
                            })
                          ],
                          2
                        )
                      ],
                      1
                    )
                  ],
                  1
                )
              })
            ],
            2
          )
        : _vm._e()
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/info/WpePluginsHooks.vue?vue&type=template&id=998eec6a&":
/*!**************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/components/info/WpePluginsHooks.vue?vue&type=template&id=998eec6a& ***!
  \**************************************************************************************************************************************************************************************************************/
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
    "section",
    {
      directives: [
        {
          name: "loading",
          rawName: "v-loading",
          value: _vm.ajax_loader,
          expression: "ajax_loader"
        }
      ],
      staticClass: "wpe-plugins-hooks"
    },
    [
      _vm.toggle_data
        ? _c(
            "el-collapse",
            [
              _c(
                "el-row",
                { attrs: { gutter: 30, type: "flex" } },
                [
                  _c("el-col", { attrs: { span: 24 } }, [
                    _c("div", { staticClass: "title-section" }, [
                      _c("h2", [_vm._v(_vm._s(_vm.toggle_data.title))]),
                      _vm._v(" "),
                      _c("p", [_vm._v(_vm._s(_vm.toggle_data.desc))])
                    ])
                  ])
                ],
                1
              ),
              _vm._v(" "),
              _vm._l(_vm.toggle_data.list, function(data_set_again, _index) {
                return _c(
                  "el-row",
                  { key: _index, attrs: { gutter: 30, type: "flex" } },
                  [
                    _c(
                      "el-col",
                      { attrs: { span: 24 } },
                      [
                        _c(
                          "el-collapse-item",
                          {
                            attrs: { title: data_set_again.title, name: _index }
                          },
                          [
                            _c(
                              "div",
                              { staticClass: "info-table" },
                              [
                                _c(
                                  "el-table",
                                  {
                                    staticStyle: { width: "100%" },
                                    attrs: {
                                      data: data_set_again.list,
                                      stripe: ""
                                    }
                                  },
                                  [
                                    _c("el-table-column", {
                                      attrs: {
                                        label:
                                          data_set_again.column_labels.first,
                                        prop: "filter"
                                      }
                                    })
                                  ],
                                  1
                                )
                              ],
                              1
                            )
                          ]
                        )
                      ],
                      1
                    )
                  ],
                  1
                )
              })
            ],
            2
          )
        : _vm._e()
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/options-controls/WpeForm.vue?vue&type=template&id=0dd92576&":
/*!******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/components/options-controls/WpeForm.vue?vue&type=template&id=0dd92576& ***!
  \******************************************************************************************************************************************************************************************************************/
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
    "el-col",
    { attrs: { lg: 18 } },
    [
      _c(
        "el-form-item",
        [
          _c(
            "el-form-item",
            { attrs: { label: "Activity name", prop: "name" } },
            [
              _c("el-input", {
                model: {
                  value: _vm.form.name,
                  callback: function($$v) {
                    _vm.$set(_vm.form, "name", $$v)
                  },
                  expression: "form.name"
                }
              })
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/options-controls/WpeNote.vue?vue&type=template&id=4fdb81a4&":
/*!******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/components/options-controls/WpeNote.vue?vue&type=template&id=4fdb81a4& ***!
  \******************************************************************************************************************************************************************************************************************/
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
    "el-popover",
    _vm._b(
      { attrs: { title: _vm.title, content: _vm.content } },
      "el-popover",
      _vm.args,
      false
    ),
    [
      _c("el-button", { attrs: { slot: "reference" }, slot: "reference" }, [
        _c("i", { class: _vm.icon })
      ])
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/options-controls/WpeTab.vue?vue&type=template&id=588bcc53&":
/*!*****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/components/options-controls/WpeTab.vue?vue&type=template&id=588bcc53& ***!
  \*****************************************************************************************************************************************************************************************************************/
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
    "el-col",
    { attrs: { lg: 6 } },
    [
      _c(
        "el-radio-group",
        {
          model: {
            value: _vm.global_tabs_args.main.collapse,
            callback: function($$v) {
              _vm.$set(_vm.global_tabs_args.main, "collapse", $$v)
            },
            expression: "global_tabs_args.main.collapse"
          }
        },
        [
          _c("el-radio-button", { attrs: { label: false } }, [
            _vm._v("expand")
          ]),
          _vm._v(" "),
          _c("el-radio-button", { attrs: { label: true } }, [
            _vm._v("collapse")
          ])
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "el-menu",
        _vm._b(
          {
            staticClass: "el-menu-vertical-demo",
            attrs: { "default-active": "2" }
          },
          "el-menu",
          _vm.global_tabs_args.main,
          false
        ),
        [
          _vm._l(_vm.options_tabs, function(tabs, index) {
            return _vm.options_tabs
              ? [
                  tabs.children
                    ? _c(
                        "el-submenu",
                        _vm._b(
                          { attrs: { index: tabs.id } },
                          "el-submenu",
                          _vm.global_tabs_args.children,
                          false
                        ),
                        [
                          _c("template", { slot: "title" }, [
                            tabs.icon
                              ? _c("i", { class: tabs.icon })
                              : tabs.img_icon
                              ? _c("i", { staticClass: "img-icon" }, [
                                  _c("img", {
                                    attrs: {
                                      src: tabs.img_icon,
                                      alt: tabs.img_icon
                                    }
                                  })
                                ])
                              : _vm._e(),
                            _vm._v(" "),
                            _c(
                              "span",
                              { attrs: { slot: "title" }, slot: "title" },
                              [
                                _vm._v(
                                  "\n                        " +
                                    _vm._s(tabs.title) +
                                    "\n                        "
                                ),
                                tabs.note
                                  ? _c("wpe-note", {
                                      attrs: {
                                        icon: tabs.note_icon,
                                        content: tabs.note,
                                        title: tabs.title
                                      }
                                    })
                                  : _vm._e()
                              ],
                              1
                            )
                          ]),
                          _vm._v(" "),
                          _vm._l(tabs.children, function(_tabs, _index) {
                            return [
                              _c(
                                "el-menu-item",
                                {
                                  attrs: { index: _vm.options_routes[_tabs.id] }
                                },
                                [
                                  _tabs.icon
                                    ? _c("i", { class: _tabs.icon })
                                    : _tabs.img_icon
                                    ? _c("i", { staticClass: "img-icon" }, [
                                        _c("img", {
                                          attrs: {
                                            src: _tabs.img_icon,
                                            alt: _tabs.img_icon
                                          }
                                        })
                                      ])
                                    : _vm._e(),
                                  _vm._v(" "),
                                  _tabs.title
                                    ? _c(
                                        "span",
                                        {
                                          attrs: { slot: "title" },
                                          slot: "title"
                                        },
                                        [
                                          _vm._v(
                                            "\n                            " +
                                              _vm._s(_tabs.title) +
                                              "\n                            "
                                          ),
                                          _tabs.note
                                            ? _c("wpe-note", {
                                                attrs: {
                                                  icon: _tabs.note_icon,
                                                  content: _tabs.note,
                                                  title: _tabs.title
                                                }
                                              })
                                            : _vm._e()
                                        ],
                                        1
                                      )
                                    : _vm._e()
                                ]
                              )
                            ]
                          })
                        ],
                        2
                      )
                    : [
                        _c(
                          "el-menu-item",
                          { attrs: { index: _vm.options_routes[tabs.id] } },
                          [
                            tabs.icon
                              ? _c("i", { class: tabs.icon })
                              : tabs.img_icon
                              ? _c("i", { staticClass: "img-icon" }, [
                                  _c("img", {
                                    attrs: {
                                      src: tabs.img_icon,
                                      alt: tabs.img_icon
                                    }
                                  })
                                ])
                              : _vm._e(),
                            _vm._v(" "),
                            tabs.title
                              ? _c(
                                  "span",
                                  { attrs: { slot: "title" }, slot: "title" },
                                  [
                                    _vm._v(
                                      "\n                        " +
                                        _vm._s(tabs.title) +
                                        "\n                        "
                                    ),
                                    tabs.note
                                      ? _c("wpe-note", {
                                          attrs: {
                                            icon: tabs.note_icon,
                                            content: tabs.note,
                                            title: tabs.title
                                          }
                                        })
                                      : _vm._e()
                                  ],
                                  1
                                )
                              : _vm._e()
                          ]
                        )
                      ]
                ]
              : _vm._e()
          })
        ],
        2
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/options-controls/WpeText.vue?vue&type=template&id=9469fd42&":
/*!******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/components/options-controls/WpeText.vue?vue&type=template&id=9469fd42& ***!
  \******************************************************************************************************************************************************************************************************************/
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
    "el-row",
    { attrs: { gutter: 15, type: "flex" } },
    [
      _vm.field.heading
        ? _c("wpe-heading", {
            attrs: { heading: _vm.field.heading, subtitle: _vm.field.subtitle }
          })
        : _vm._e(),
      _vm._v(" "),
      _c(
        "el-col",
        {
          staticClass: "wpessential-field",
          attrs: { span: _vm.v_if_single(_vm.field.help, 13, 16) }
        },
        [
          _c(
            "el-input",
            _vm._b(
              {
                staticClass: "wpessential-form-input-text",
                attrs: { name: _vm.field.id, type: "text" },
                on: { input: _vm.on_change },
                model: {
                  value: _vm.value,
                  callback: function($$v) {
                    _vm.value = $$v
                  },
                  expression: "value"
                }
              },
              "el-input",
              _vm.attr,
              false
            )
          ),
          _vm._v(" "),
          _vm.field.desc
            ? _c(
                "div",
                { staticClass: "wpessential-field-desc el-col el-col-24" },
                [_vm._v(_vm._s(_vm.field.desc))]
              )
            : _vm._e()
        ],
        1
      ),
      _vm._v(" "),
      _vm.field.help
        ? _c("wpe-help", { attrs: { help: _vm.field.help } })
        : _vm._e()
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

/***/ "./src/components/WpeHealth.vue":
/*!**************************************!*\
  !*** ./src/components/WpeHealth.vue ***!
  \**************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeHealth_vue_vue_type_template_id_7c042e28___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeHealth.vue?vue&type=template&id=7c042e28& */ "./src/components/WpeHealth.vue?vue&type=template&id=7c042e28&");
/* harmony import */ var _WpeHealth_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeHealth.vue?vue&type=script&lang=js& */ "./src/components/WpeHealth.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeHealth_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeHealth_vue_vue_type_template_id_7c042e28___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeHealth_vue_vue_type_template_id_7c042e28___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/components/WpeHealth.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/components/WpeHealth.vue?vue&type=script&lang=js&":
/*!***************************************************************!*\
  !*** ./src/components/WpeHealth.vue?vue&type=script&lang=js& ***!
  \***************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeHealth_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/babel-loader/lib??ref--4-0!../../node_modules/vue-loader/lib??vue-loader-options!./WpeHealth.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/WpeHealth.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeHealth_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/components/WpeHealth.vue?vue&type=template&id=7c042e28&":
/*!*********************************************************************!*\
  !*** ./src/components/WpeHealth.vue?vue&type=template&id=7c042e28& ***!
  \*********************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeHealth_vue_vue_type_template_id_7c042e28___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../node_modules/vue-loader/lib??vue-loader-options!./WpeHealth.vue?vue&type=template&id=7c042e28& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/WpeHealth.vue?vue&type=template&id=7c042e28&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeHealth_vue_vue_type_template_id_7c042e28___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeHealth_vue_vue_type_template_id_7c042e28___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/components/WpeIndex.vue":
/*!*************************************!*\
  !*** ./src/components/WpeIndex.vue ***!
  \*************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeIndex_vue_vue_type_template_id_f0873694___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeIndex.vue?vue&type=template&id=f0873694& */ "./src/components/WpeIndex.vue?vue&type=template&id=f0873694&");
/* harmony import */ var _WpeIndex_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeIndex.vue?vue&type=script&lang=js& */ "./src/components/WpeIndex.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeIndex_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeIndex_vue_vue_type_template_id_f0873694___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeIndex_vue_vue_type_template_id_f0873694___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/components/WpeIndex.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/components/WpeIndex.vue?vue&type=script&lang=js&":
/*!**************************************************************!*\
  !*** ./src/components/WpeIndex.vue?vue&type=script&lang=js& ***!
  \**************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeIndex_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/babel-loader/lib??ref--4-0!../../node_modules/vue-loader/lib??vue-loader-options!./WpeIndex.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/WpeIndex.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeIndex_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/components/WpeIndex.vue?vue&type=template&id=f0873694&":
/*!********************************************************************!*\
  !*** ./src/components/WpeIndex.vue?vue&type=template&id=f0873694& ***!
  \********************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeIndex_vue_vue_type_template_id_f0873694___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../node_modules/vue-loader/lib??vue-loader-options!./WpeIndex.vue?vue&type=template&id=f0873694& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/WpeIndex.vue?vue&type=template&id=f0873694&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeIndex_vue_vue_type_template_id_f0873694___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeIndex_vue_vue_type_template_id_f0873694___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/components/WpeNavigation.vue":
/*!******************************************!*\
  !*** ./src/components/WpeNavigation.vue ***!
  \******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeNavigation_vue_vue_type_template_id_111bdfe0___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeNavigation.vue?vue&type=template&id=111bdfe0& */ "./src/components/WpeNavigation.vue?vue&type=template&id=111bdfe0&");
/* harmony import */ var _WpeNavigation_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeNavigation.vue?vue&type=script&lang=js& */ "./src/components/WpeNavigation.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeNavigation_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeNavigation_vue_vue_type_template_id_111bdfe0___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeNavigation_vue_vue_type_template_id_111bdfe0___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/components/WpeNavigation.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/components/WpeNavigation.vue?vue&type=script&lang=js&":
/*!*******************************************************************!*\
  !*** ./src/components/WpeNavigation.vue?vue&type=script&lang=js& ***!
  \*******************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeNavigation_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/babel-loader/lib??ref--4-0!../../node_modules/vue-loader/lib??vue-loader-options!./WpeNavigation.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/WpeNavigation.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeNavigation_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/components/WpeNavigation.vue?vue&type=template&id=111bdfe0&":
/*!*************************************************************************!*\
  !*** ./src/components/WpeNavigation.vue?vue&type=template&id=111bdfe0& ***!
  \*************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeNavigation_vue_vue_type_template_id_111bdfe0___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../node_modules/vue-loader/lib??vue-loader-options!./WpeNavigation.vue?vue&type=template&id=111bdfe0& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/WpeNavigation.vue?vue&type=template&id=111bdfe0&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeNavigation_vue_vue_type_template_id_111bdfe0___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeNavigation_vue_vue_type_template_id_111bdfe0___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/components/WpeOptions.vue":
/*!***************************************!*\
  !*** ./src/components/WpeOptions.vue ***!
  \***************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeOptions_vue_vue_type_template_id_64c49982___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeOptions.vue?vue&type=template&id=64c49982& */ "./src/components/WpeOptions.vue?vue&type=template&id=64c49982&");
/* harmony import */ var _WpeOptions_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeOptions.vue?vue&type=script&lang=js& */ "./src/components/WpeOptions.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeOptions_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeOptions_vue_vue_type_template_id_64c49982___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeOptions_vue_vue_type_template_id_64c49982___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/components/WpeOptions.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/components/WpeOptions.vue?vue&type=script&lang=js&":
/*!****************************************************************!*\
  !*** ./src/components/WpeOptions.vue?vue&type=script&lang=js& ***!
  \****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeOptions_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/babel-loader/lib??ref--4-0!../../node_modules/vue-loader/lib??vue-loader-options!./WpeOptions.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/WpeOptions.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeOptions_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/components/WpeOptions.vue?vue&type=template&id=64c49982&":
/*!**********************************************************************!*\
  !*** ./src/components/WpeOptions.vue?vue&type=template&id=64c49982& ***!
  \**********************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeOptions_vue_vue_type_template_id_64c49982___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../node_modules/vue-loader/lib??vue-loader-options!./WpeOptions.vue?vue&type=template&id=64c49982& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/WpeOptions.vue?vue&type=template&id=64c49982&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeOptions_vue_vue_type_template_id_64c49982___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeOptions_vue_vue_type_template_id_64c49982___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/components/WpeRouter.vue":
/*!**************************************!*\
  !*** ./src/components/WpeRouter.vue ***!
  \**************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeRouter_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeRouter.vue?vue&type=script&lang=js& */ "./src/components/WpeRouter.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");
var render, staticRenderFns




/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__["default"])(
  _WpeRouter_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"],
  render,
  staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/components/WpeRouter.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/components/WpeRouter.vue?vue&type=script&lang=js&":
/*!***************************************************************!*\
  !*** ./src/components/WpeRouter.vue?vue&type=script&lang=js& ***!
  \***************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeRouter_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/babel-loader/lib??ref--4-0!../../node_modules/vue-loader/lib??vue-loader-options!./WpeRouter.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/WpeRouter.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeRouter_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/components/info/WpeConstants.vue":
/*!**********************************************!*\
  !*** ./src/components/info/WpeConstants.vue ***!
  \**********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeConstants_vue_vue_type_template_id_59024004___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeConstants.vue?vue&type=template&id=59024004& */ "./src/components/info/WpeConstants.vue?vue&type=template&id=59024004&");
/* harmony import */ var _WpeConstants_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeConstants.vue?vue&type=script&lang=js& */ "./src/components/info/WpeConstants.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeConstants_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeConstants_vue_vue_type_template_id_59024004___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeConstants_vue_vue_type_template_id_59024004___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/components/info/WpeConstants.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/components/info/WpeConstants.vue?vue&type=script&lang=js&":
/*!***********************************************************************!*\
  !*** ./src/components/info/WpeConstants.vue?vue&type=script&lang=js& ***!
  \***********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeConstants_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeConstants.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/info/WpeConstants.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeConstants_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/components/info/WpeConstants.vue?vue&type=template&id=59024004&":
/*!*****************************************************************************!*\
  !*** ./src/components/info/WpeConstants.vue?vue&type=template&id=59024004& ***!
  \*****************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeConstants_vue_vue_type_template_id_59024004___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeConstants.vue?vue&type=template&id=59024004& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/info/WpeConstants.vue?vue&type=template&id=59024004&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeConstants_vue_vue_type_template_id_59024004___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeConstants_vue_vue_type_template_id_59024004___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/components/info/WpePlugins.vue":
/*!********************************************!*\
  !*** ./src/components/info/WpePlugins.vue ***!
  \********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpePlugins_vue_vue_type_template_id_a4ea4dd6___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpePlugins.vue?vue&type=template&id=a4ea4dd6& */ "./src/components/info/WpePlugins.vue?vue&type=template&id=a4ea4dd6&");
/* harmony import */ var _WpePlugins_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpePlugins.vue?vue&type=script&lang=js& */ "./src/components/info/WpePlugins.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpePlugins_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpePlugins_vue_vue_type_template_id_a4ea4dd6___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpePlugins_vue_vue_type_template_id_a4ea4dd6___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/components/info/WpePlugins.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/components/info/WpePlugins.vue?vue&type=script&lang=js&":
/*!*********************************************************************!*\
  !*** ./src/components/info/WpePlugins.vue?vue&type=script&lang=js& ***!
  \*********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpePlugins_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpePlugins.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/info/WpePlugins.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpePlugins_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/components/info/WpePlugins.vue?vue&type=template&id=a4ea4dd6&":
/*!***************************************************************************!*\
  !*** ./src/components/info/WpePlugins.vue?vue&type=template&id=a4ea4dd6& ***!
  \***************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpePlugins_vue_vue_type_template_id_a4ea4dd6___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpePlugins.vue?vue&type=template&id=a4ea4dd6& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/info/WpePlugins.vue?vue&type=template&id=a4ea4dd6&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpePlugins_vue_vue_type_template_id_a4ea4dd6___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpePlugins_vue_vue_type_template_id_a4ea4dd6___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/components/info/WpePluginsHooks.vue":
/*!*************************************************!*\
  !*** ./src/components/info/WpePluginsHooks.vue ***!
  \*************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpePluginsHooks_vue_vue_type_template_id_998eec6a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpePluginsHooks.vue?vue&type=template&id=998eec6a& */ "./src/components/info/WpePluginsHooks.vue?vue&type=template&id=998eec6a&");
/* harmony import */ var _WpePluginsHooks_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpePluginsHooks.vue?vue&type=script&lang=js& */ "./src/components/info/WpePluginsHooks.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpePluginsHooks_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpePluginsHooks_vue_vue_type_template_id_998eec6a___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpePluginsHooks_vue_vue_type_template_id_998eec6a___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/components/info/WpePluginsHooks.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/components/info/WpePluginsHooks.vue?vue&type=script&lang=js&":
/*!**************************************************************************!*\
  !*** ./src/components/info/WpePluginsHooks.vue?vue&type=script&lang=js& ***!
  \**************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpePluginsHooks_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpePluginsHooks.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/info/WpePluginsHooks.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpePluginsHooks_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/components/info/WpePluginsHooks.vue?vue&type=template&id=998eec6a&":
/*!********************************************************************************!*\
  !*** ./src/components/info/WpePluginsHooks.vue?vue&type=template&id=998eec6a& ***!
  \********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpePluginsHooks_vue_vue_type_template_id_998eec6a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpePluginsHooks.vue?vue&type=template&id=998eec6a& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/info/WpePluginsHooks.vue?vue&type=template&id=998eec6a&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpePluginsHooks_vue_vue_type_template_id_998eec6a___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpePluginsHooks_vue_vue_type_template_id_998eec6a___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/components/options-controls/WpeForm.vue":
/*!*****************************************************!*\
  !*** ./src/components/options-controls/WpeForm.vue ***!
  \*****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeForm_vue_vue_type_template_id_0dd92576___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeForm.vue?vue&type=template&id=0dd92576& */ "./src/components/options-controls/WpeForm.vue?vue&type=template&id=0dd92576&");
/* harmony import */ var _WpeForm_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeForm.vue?vue&type=script&lang=js& */ "./src/components/options-controls/WpeForm.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeForm_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeForm_vue_vue_type_template_id_0dd92576___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeForm_vue_vue_type_template_id_0dd92576___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/components/options-controls/WpeForm.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/components/options-controls/WpeForm.vue?vue&type=script&lang=js&":
/*!******************************************************************************!*\
  !*** ./src/components/options-controls/WpeForm.vue?vue&type=script&lang=js& ***!
  \******************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeForm_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeForm.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/options-controls/WpeForm.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeForm_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/components/options-controls/WpeForm.vue?vue&type=template&id=0dd92576&":
/*!************************************************************************************!*\
  !*** ./src/components/options-controls/WpeForm.vue?vue&type=template&id=0dd92576& ***!
  \************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeForm_vue_vue_type_template_id_0dd92576___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeForm.vue?vue&type=template&id=0dd92576& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/options-controls/WpeForm.vue?vue&type=template&id=0dd92576&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeForm_vue_vue_type_template_id_0dd92576___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeForm_vue_vue_type_template_id_0dd92576___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/components/options-controls/WpeNote.vue":
/*!*****************************************************!*\
  !*** ./src/components/options-controls/WpeNote.vue ***!
  \*****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeNote_vue_vue_type_template_id_4fdb81a4___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeNote.vue?vue&type=template&id=4fdb81a4& */ "./src/components/options-controls/WpeNote.vue?vue&type=template&id=4fdb81a4&");
/* harmony import */ var _WpeNote_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeNote.vue?vue&type=script&lang=js& */ "./src/components/options-controls/WpeNote.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeNote_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeNote_vue_vue_type_template_id_4fdb81a4___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeNote_vue_vue_type_template_id_4fdb81a4___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/components/options-controls/WpeNote.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/components/options-controls/WpeNote.vue?vue&type=script&lang=js&":
/*!******************************************************************************!*\
  !*** ./src/components/options-controls/WpeNote.vue?vue&type=script&lang=js& ***!
  \******************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeNote_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeNote.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/options-controls/WpeNote.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeNote_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/components/options-controls/WpeNote.vue?vue&type=template&id=4fdb81a4&":
/*!************************************************************************************!*\
  !*** ./src/components/options-controls/WpeNote.vue?vue&type=template&id=4fdb81a4& ***!
  \************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeNote_vue_vue_type_template_id_4fdb81a4___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeNote.vue?vue&type=template&id=4fdb81a4& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/options-controls/WpeNote.vue?vue&type=template&id=4fdb81a4&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeNote_vue_vue_type_template_id_4fdb81a4___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeNote_vue_vue_type_template_id_4fdb81a4___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/components/options-controls/WpeTab.vue":
/*!****************************************************!*\
  !*** ./src/components/options-controls/WpeTab.vue ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeTab_vue_vue_type_template_id_588bcc53___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeTab.vue?vue&type=template&id=588bcc53& */ "./src/components/options-controls/WpeTab.vue?vue&type=template&id=588bcc53&");
/* harmony import */ var _WpeTab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeTab.vue?vue&type=script&lang=js& */ "./src/components/options-controls/WpeTab.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeTab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeTab_vue_vue_type_template_id_588bcc53___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeTab_vue_vue_type_template_id_588bcc53___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/components/options-controls/WpeTab.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/components/options-controls/WpeTab.vue?vue&type=script&lang=js&":
/*!*****************************************************************************!*\
  !*** ./src/components/options-controls/WpeTab.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeTab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeTab.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/options-controls/WpeTab.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeTab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/components/options-controls/WpeTab.vue?vue&type=template&id=588bcc53&":
/*!***********************************************************************************!*\
  !*** ./src/components/options-controls/WpeTab.vue?vue&type=template&id=588bcc53& ***!
  \***********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeTab_vue_vue_type_template_id_588bcc53___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeTab.vue?vue&type=template&id=588bcc53& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/options-controls/WpeTab.vue?vue&type=template&id=588bcc53&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeTab_vue_vue_type_template_id_588bcc53___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeTab_vue_vue_type_template_id_588bcc53___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/components/options-controls/WpeText.vue":
/*!*****************************************************!*\
  !*** ./src/components/options-controls/WpeText.vue ***!
  \*****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeText_vue_vue_type_template_id_9469fd42___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeText.vue?vue&type=template&id=9469fd42& */ "./src/components/options-controls/WpeText.vue?vue&type=template&id=9469fd42&");
/* harmony import */ var _WpeText_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeText.vue?vue&type=script&lang=js& */ "./src/components/options-controls/WpeText.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeText_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeText_vue_vue_type_template_id_9469fd42___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeText_vue_vue_type_template_id_9469fd42___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/components/options-controls/WpeText.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/components/options-controls/WpeText.vue?vue&type=script&lang=js&":
/*!******************************************************************************!*\
  !*** ./src/components/options-controls/WpeText.vue?vue&type=script&lang=js& ***!
  \******************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeText_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeText.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/options-controls/WpeText.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeText_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/components/options-controls/WpeText.vue?vue&type=template&id=9469fd42&":
/*!************************************************************************************!*\
  !*** ./src/components/options-controls/WpeText.vue?vue&type=template&id=9469fd42& ***!
  \************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeText_vue_vue_type_template_id_9469fd42___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeText.vue?vue&type=template&id=9469fd42& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/options-controls/WpeText.vue?vue&type=template&id=9469fd42&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeText_vue_vue_type_template_id_9469fd42___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeText_vue_vue_type_template_id_9469fd42___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/wpessential-admin.js":
/*!**********************************!*\
  !*** ./src/wpessential-admin.js ***!
  \**********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_WpeNavigation__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/WpeNavigation */ "./src/components/WpeNavigation.vue");
/* harmony import */ var _components_WpeRouter__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/WpeRouter */ "./src/components/WpeRouter.vue");


window.$ = jQuery;
Vue.prototype.$WPEssential = WPEssential;
var router = new VueRouter({
  routes: _components_WpeRouter__WEBPACK_IMPORTED_MODULE_1__["default"]
});
var app = new Vue({
  router: router,
  el: '#wpessential-admin',
  components: {
    WpeNavigation: _components_WpeNavigation__WEBPACK_IMPORTED_MODULE_0__["default"]
  },
  mounted: function mounted() {
    this.append_routes();
  },
  methods: {
    append_routes: function append_routes() {
      /*if ( this.$WPEssential.options_routes ) {
          $.each( this.$WPEssential.options_routes, ( index, route ) => {
              console.log( route );//return;
              this.$router.addRoute( route );
          } );
      }*/
    }
  }
});

/***/ }),

/***/ "./src/wpessential-admin.scss":
/*!************************************!*\
  !*** ./src/wpessential-admin.scss ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./src/wpessential-mixin.js":
/*!**********************************!*\
  !*** ./src/wpessential-mixin.js ***!
  \**********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var WpessentialMixin = {
  data: function data() {
    return {
      page_loader: true,
      ajax_loader: false,
      load_more_loader: false,
      ajax_res: null
      /*ajax_data: {
          nonce: WPEssential.nonce,
          action: "",
      },
      ajax_args: {
          url: WPEssential.ajaxurl,
          type: "GET",
          data: this.ajax_data,
          sucess: ( res ) => {
              this.ajax_res = res.data;
              this.ajax_success( res );
          },
          error: ( res ) => {
              this.ajax_res = res.responseJSON.data;
              this.ajax_error();
          }
      }*/

    };
  },
  methods: {
    wpe_get_route_id: function wpe_get_route_id() {
      var current_path = this.$router.currentRoute.path;
      current_path = current_path.replace('/', '');
      return current_path;
    },
    wpe_error: function wpe_error(data) {
      console.log(data);
    },
    ajax_success: function ajax_success(res) {
      this.$notify.success({
        title: this.ajax_res.title,
        message: this.ajax_res.message,
        offset: 30
      });
    },
    ajax_error: function ajax_error() {
      this.$notify.error({
        title: this.ajax_res.title,
        message: this.ajax_res.message,
        offset: 30
      });
    }
  }
};
/* harmony default export */ __webpack_exports__["default"] = (WpessentialMixin);

/***/ }),

/***/ 0:
/*!*********************************************************************!*\
  !*** multi ./src/wpessential-admin.js ./src/wpessential-admin.scss ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! F:\MAMP\htdocs\wpe\wp-content\plugins\wpessential\src\wpessential-admin.js */"./src/wpessential-admin.js");
module.exports = __webpack_require__(/*! F:\MAMP\htdocs\wpe\wp-content\plugins\wpessential\src\wpessential-admin.scss */"./src/wpessential-admin.scss");


/***/ })

/******/ });