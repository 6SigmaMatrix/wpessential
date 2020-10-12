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

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpeAuth.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/components/wpeAuth.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************/
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
  name: "wpe-auth",
  data: function data() {
    return {
      log_username: "",
      log_password: "",
      first_name: "",
      last_name: "",
      reg_user: "",
      reg_password: "",
      email: ""
    };
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpeFaqs.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/components/wpeFaqs.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************/
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
  name: "wpe-faqs",
  data: function data() {
    return {
      classID: ["wpe-faqs", "wpe-faqs"]
    };
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpeFooter.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/components/wpeFooter.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************/
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
  name: "wpe-footer",
  data: function data() {
    return {};
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpeHeader.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/components/wpeHeader.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************/
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
  name: "wpe-header",
  data: function data() {
    return {
      /*drawer: false,
      direction: 'rtl',*/
      "class": "wpe-header-main",
      activeIndex: "1"
    };
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpeMain.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/components/wpeMain.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************/
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
  name: "wpe-main",
  data: function data() {
    return {};
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpePlugins.vue?vue&type=script&lang=js&":
/*!************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/components/wpePlugins.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************************************************************************/
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
  name: "wpe-plugins",
  data: function data() {
    return {
      classID: ["tac", "el-menu-vertical-demo"],
      plugins: {
        "names": ["wpessential", "wpessential blog post", "wpessential team", "wpessential portfolio", "wpessential contact", "wpessential social kit"],
        "plugins": {
          "wpessential": {
            "image": "http://wpe/wp-content/plugins/wpessential/assets/images/plugin.jpg",
            "name": "WPEssential",
            "desc": "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
            "ver": "1.0.0",
            "price": "$30"
          },
          "wpessential-blog-post": {
            "image": "http://wpe/wp-content/plugins/wpessential/assets/images/plugin.jpg",
            "name": "WPEssential Blog Post",
            "desc": "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
            "ver": "1.0.0",
            "price": "$30"
          },
          "wpessential-team": {
            "image": "http://wpe/wp-content/plugins/wpessential/assets/images/plugin.jpg",
            "name": "WPEssential Team",
            "desc": "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
            "ver": "1.0.0",
            "price": "$30"
          },
          "wpessential-portfolio": {
            "image": "http://wpe/wp-content/plugins/wpessential/assets/images/plugin.jpg",
            "name": "WPEssential Portfolio",
            "desc": "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
            "ver": "1.0.0",
            "price": "$30"
          },
          "wpessential-contact": {
            "image": "http://wpe/wp-content/plugins/wpessential/assets/images/plugin.jpg",
            "name": "WPEssential Contact",
            "desc": "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
            "ver": "1.0.0",
            "price": "$30"
          },
          "wpessential-social-kit": {
            "image": "http://wpe/wp-content/plugins/wpessential/assets/images/plugin.jpg",
            "name": "WPEssential Social Kit",
            "desc": "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
            "ver": "1.0.0",
            "price": "$30"
          }
        }
      }
    };
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpeSupport.vue?vue&type=script&lang=js&":
/*!************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/components/wpeSupport.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  name: "wpe-Support",
  data: function data() {
    return {};
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/WpeOptionsPage.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/WpeOptionsPage.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************/
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
      classID: ["wpessential-theme-settings", "row-bottom-gap-15"]
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
        action: "theme_options"
      };
      axios.post(WPEssential.ajaxshort, Qs.stringify(get_data))["catch"](function (error) {
        _this.loader = false;

        _this.notify_error(error);
      }).then(function (response) {
        _this.loader = false;

        if (response.data.success == true) {
          _this.tabs = response.data.data.theme_options;
          _this.options = response.data.data.saved_options;
          jQuery.each(_this.tabs, function (tab_index, tab) {
            jQuery.each(tab.tab_fields, function (index, item) {
              if (_this.options[item.id]) {
                _this.options[item.id] = _this.options[item.id];
              } else {
                if (item.defined) {
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
        action: "save_options",
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

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/WpeSettings.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/WpeSettings.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************/
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
      classID: ["wpessential-plugin-settings", "row-bottom-gap-15"],
      options: {}
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
        action: "plugin_options"
      };
      axios.post(WPEssential.ajaxshort, Qs.stringify(get_data))["catch"](function (error) {
        _this.loader = false;

        _this.notify_error(error);
      }).then(function (response) {
        _this.loader = false;

        if (response.data.success == true) {
          _this.tabs = response.data.data.plugin_options;
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
        action: "plugin_save_options",
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

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/wpe.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/wpe.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_wpePlugins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/wpePlugins */ "./src/components/wpePlugins.vue");
/* harmony import */ var _components_wpeAuth__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/wpeAuth */ "./src/components/wpeAuth.vue");
/* harmony import */ var _components_wpeFaqs__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/wpeFaqs */ "./src/components/wpeFaqs.vue");
/* harmony import */ var _components_wpeSupport__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/wpeSupport */ "./src/components/wpeSupport.vue");
/* harmony import */ var _options_WpeSettings__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./options/WpeSettings */ "./src/options/WpeSettings.vue");
/* harmony import */ var _options_WpeOptionsPage__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./options/WpeOptionsPage */ "./src/options/WpeOptionsPage.vue");
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






var router = new VueRouter({
  routes: [{
    path: "/",
    component: {
      template: "<wpe-main></wpe-main>"
    },
    name: "Home"
  }, {
    path: "/plugins",
    component: _components_wpePlugins__WEBPACK_IMPORTED_MODULE_0__["default"],
    name: "Plugins"
  }, {
    path: "/register",
    component: _components_wpeAuth__WEBPACK_IMPORTED_MODULE_1__["default"],
    name: "Auth"
  }, {
    path: "/faqs",
    component: _components_wpeFaqs__WEBPACK_IMPORTED_MODULE_2__["default"],
    name: "FAQ's"
  }, {
    path: "/support",
    component: _components_wpeSupport__WEBPACK_IMPORTED_MODULE_3__["default"],
    name: "Support"
  }, {
    path: "/settings",
    component: _options_WpeSettings__WEBPACK_IMPORTED_MODULE_4__["default"],
    name: "Settings"
  }, {
    path: "/theme-settings",
    component: _options_WpeOptionsPage__WEBPACK_IMPORTED_MODULE_5__["default"],
    name: "Theme Settings"
  }]
});
router.beforeResolve(function (to, from, next) {
  if (to.name) {
    NProgress.start();
  }

  next();
});
router.afterEach(function (to, from) {
  NProgress.done();
});
/* harmony default export */ __webpack_exports__["default"] = ({
  name: "wpe",
  data: function data() {
    return {
      classID: ["wpessential-panel", "wpe-description"],
      transitionName: "slide-left"
    };
  },
  router: router,
  watch: {
    '$route': function $route(to, from) {
      var toDepth = to.path.split('/').length;
      var fromDepth = from.path.split('/').length;
      this.transitionName = toDepth < fromDepth ? 'slide-right' : 'slide-left';
    }
  },
  mounted: function mounted() {
    NProgress.configure({
      parent: "#wpessential-panel"
    });
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpeAuth.vue?vue&type=template&id=211d1894&":
/*!*************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/components/wpeAuth.vue?vue&type=template&id=211d1894& ***!
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
    "el-row",
    { attrs: { gutter: 30, type: "flex" } },
    [
      _c(
        "el-col",
        { attrs: { span: 12 } },
        [
          _c(
            "el-row",
            { attrs: { gutter: 30, type: "flex" } },
            [
              _c(
                "el-col",
                { attrs: { span: 24 } },
                [
                  _c("el-input", {
                    attrs: { placeholder: "Username", clearable: "" },
                    model: {
                      value: _vm.log_username,
                      callback: function($$v) {
                        _vm.log_username = $$v
                      },
                      expression: "log_username"
                    }
                  })
                ],
                1
              )
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "el-row",
            { attrs: { gutter: 30, type: "flex" } },
            [
              _c(
                "el-col",
                { attrs: { span: 24 } },
                [
                  _c("el-input", {
                    attrs: { placeholder: "Password", "show-password": "" },
                    model: {
                      value: _vm.log_password,
                      callback: function($$v) {
                        _vm.log_password = $$v
                      },
                      expression: "log_password"
                    }
                  })
                ],
                1
              )
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "el-row",
            { attrs: { gutter: 30, type: "flex" } },
            [
              _c(
                "el-col",
                { attrs: { span: 24 } },
                [
                  _c("el-button", { attrs: { type: "primary", round: "" } }, [
                    _vm._v("Primary")
                  ])
                ],
                1
              )
            ],
            1
          )
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "el-col",
        { attrs: { span: 12 } },
        [
          _c(
            "el-row",
            { attrs: { gutter: 30, type: "flex" } },
            [
              _c(
                "el-col",
                { attrs: { span: 12 } },
                [
                  _c("el-input", {
                    attrs: { placeholder: "First Name", clearable: "" },
                    model: {
                      value: _vm.first_name,
                      callback: function($$v) {
                        _vm.first_name = $$v
                      },
                      expression: "first_name"
                    }
                  })
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "el-col",
                { attrs: { span: 12 } },
                [
                  _c("el-input", {
                    attrs: { placeholder: "Last Name", clearable: "" },
                    model: {
                      value: _vm.last_name,
                      callback: function($$v) {
                        _vm.last_name = $$v
                      },
                      expression: "last_name"
                    }
                  })
                ],
                1
              )
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "el-row",
            { attrs: { gutter: 30, type: "flex" } },
            [
              _c(
                "el-col",
                { attrs: { span: 24 } },
                [
                  _c("el-input", {
                    attrs: { placeholder: "Username", clearable: "" },
                    model: {
                      value: _vm.reg_user,
                      callback: function($$v) {
                        _vm.reg_user = $$v
                      },
                      expression: "reg_user"
                    }
                  })
                ],
                1
              )
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "el-row",
            { attrs: { gutter: 30, type: "flex" } },
            [
              _c(
                "el-col",
                { attrs: { span: 24 } },
                [
                  _c("el-input", {
                    attrs: { placeholder: "Email Address", clearable: "" },
                    model: {
                      value: _vm.email,
                      callback: function($$v) {
                        _vm.email = $$v
                      },
                      expression: "email"
                    }
                  })
                ],
                1
              )
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "el-row",
            { attrs: { gutter: 30, type: "flex" } },
            [
              _c(
                "el-col",
                { attrs: { span: 24 } },
                [
                  _c("el-input", {
                    attrs: { placeholder: "Password", "show-password": "" },
                    model: {
                      value: _vm.reg_password,
                      callback: function($$v) {
                        _vm.reg_password = $$v
                      },
                      expression: "reg_password"
                    }
                  })
                ],
                1
              )
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "el-row",
            { attrs: { gutter: 30, type: "flex" } },
            [
              _c(
                "el-col",
                { attrs: { span: 24 } },
                [
                  _c("el-button", { attrs: { type: "primary", round: "" } }, [
                    _vm._v("Primary")
                  ])
                ],
                1
              )
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpeFaqs.vue?vue&type=template&id=0202d089&":
/*!*************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/components/wpeFaqs.vue?vue&type=template&id=0202d089& ***!
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
    "el-collapse",
    { class: _vm.classID[0], attrs: { accordion: "", id: _vm.classID[1] } },
    [
      _c("el-collapse-item", { attrs: { title: "Consistency", name: "1" } }, [
        _c("div", [
          _vm._v(
            "Consistent with real life: in line with the process and logic of real life, and comply with languages\n            and habits that the users are used to;\n        "
          )
        ]),
        _vm._v(" "),
        _c("div", [
          _vm._v(
            "Consistent within interface: all elements should be consistent, such as: design style, icons and texts,\n            position of elements, etc.\n        "
          )
        ])
      ]),
      _vm._v(" "),
      _c("el-collapse-item", { attrs: { title: "Feedback", name: "2" } }, [
        _c("div", [
          _vm._v(
            "Operation feedback: enable the users to clearly perceive their operations by style updates and\n            interactive effects;\n        "
          )
        ]),
        _vm._v(" "),
        _c("div", [
          _vm._v(
            "Visual feedback: reflect current state by updating or rearranging elements of the page."
          )
        ])
      ]),
      _vm._v(" "),
      _c("el-collapse-item", { attrs: { title: "Efficiency", name: "3" } }, [
        _c("div", [
          _vm._v(
            "Simplify the process: keep operating process simple and intuitive;"
          )
        ]),
        _vm._v(" "),
        _c("div", [
          _vm._v(
            "Definite and clear: enunciate your intentions clearly so that the users can quickly understand and make\n            decisions;\n        "
          )
        ]),
        _vm._v(" "),
        _c("div", [
          _vm._v(
            "Easy to identify: the interface should be straightforward, which helps the users to identify and frees\n            them from memorizing and recalling.\n        "
          )
        ])
      ]),
      _vm._v(" "),
      _c(
        "el-collapse-item",
        { attrs: { title: "Controllability", name: "4" } },
        [
          _c("div", [
            _vm._v(
              "Decision making: giving advices about operations is acceptable, but do not make decisions for the\n            users;\n        "
            )
          ]),
          _vm._v(" "),
          _c("div", [
            _vm._v(
              "Controlled consequences: users should be granted the freedom to operate, including canceling, aborting\n            or terminating current operation.\n        "
            )
          ])
        ]
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpeFooter.vue?vue&type=template&id=6af4fa07&":
/*!***************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/components/wpeFooter.vue?vue&type=template&id=6af4fa07& ***!
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
    "el-container",
    [_c("el-footer", [_vm._v("\n        Footer\n        ")])],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpeHeader.vue?vue&type=template&id=e7b1440e&":
/*!***************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/components/wpeHeader.vue?vue&type=template&id=e7b1440e& ***!
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
    "el-container",
    [
      _c(
        "el-header",
        { class: this.class },
        [
          _c(
            "el-menu",
            {
              attrs: {
                "default-active": _vm.activeIndex,
                mode: "horizontal",
                router: true
              }
            },
            [
              _c("el-menu-item", { attrs: { index: "/" } }, [
                _c("i", { staticClass: "fas fa-home" }),
                _vm._v(" Home\n            ")
              ]),
              _vm._v(" "),
              _c("el-menu-item", { attrs: { index: "/plugins" } }, [
                _c("i", { staticClass: "fas fa-plug" }),
                _vm._v(" Plugins\n            ")
              ]),
              _vm._v(" "),
              _c("el-menu-item", { attrs: { index: "/settings" } }, [
                _c("i", { staticClass: "fas fa-cog" }),
                _vm._v(" Settings\n            ")
              ]),
              _vm._v(" "),
              _c("el-menu-item", { attrs: { index: "/theme-settings" } }, [
                _c("i", { staticClass: "fas fa-th" }),
                _vm._v(" Theme Settings\n            ")
              ]),
              _vm._v(" "),
              _c("el-menu-item", { attrs: { index: "/register" } }, [
                _c("i", { staticClass: "fas fa-key" }),
                _vm._v(" Register\n            ")
              ]),
              _vm._v(" "),
              _c("el-menu-item", { attrs: { index: "/faqs" } }, [
                _c("i", { staticClass: "fas fa-question-circle" }),
                _vm._v(" FAQ's\n            ")
              ]),
              _vm._v(" "),
              _c("el-menu-item", { attrs: { index: "/support" } }, [
                _c("i", { staticClass: "fas fa-life-ring" }),
                _vm._v(" Support\n            ")
              ])
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpeMain.vue?vue&type=template&id=69845fb6&":
/*!*************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/components/wpeMain.vue?vue&type=template&id=69845fb6& ***!
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
    "el-row",
    { attrs: { type: "flex", gutter: 30 } },
    [
      _c("el-col", { attrs: { span: 24 } }, [
        _c("h1", [
          _vm._v("\n            WPEssential\n            "),
          _c("span", [_vm._v("1.0.0")])
        ]),
        _vm._v(" "),
        _c("p", [
          _vm._v(
            "\n            It is a long established fact that a reader will be distracted by the readable content of a page\n            when\n            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal\n            distribution\n            of letters, as opposed to using 'Content here, content here', making it look like readable\n            English.\n            Many\n            desktop publishing packages and web page editors now use Lorem Ipsum as their default model\n            text,\n            and a\n            search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions\n            have\n            evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the\n            like).\n        "
          )
        ])
      ])
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpePlugins.vue?vue&type=template&id=294d2538&":
/*!****************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/components/wpePlugins.vue?vue&type=template&id=294d2538& ***!
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
    "el-tabs",
    { attrs: { "tab-position": "left", type: "card" } },
    [
      _c(
        "el-tab-pane",
        { attrs: { label: "Free", lazy: true } },
        [
          _c(
            "el-row",
            { attrs: { gutter: 30, type: "flex" } },
            _vm._l(_vm.plugins.plugins, function(plugin) {
              return _c(
                "el-col",
                { key: plugin.id, attrs: { span: 8 } },
                [
                  _c("el-card", { attrs: { shadow: "hover" } }, [
                    _c("div", { staticClass: "wpe-plugin" }, [
                      _c("h2", [_vm._v(_vm._s(plugin.name))]),
                      _vm._v(" "),
                      _c(
                        "div",
                        { staticClass: "wpe-plugin-info" },
                        [
                          _c("el-image", {
                            attrs: { src: plugin.image, fit: "fit" }
                          }),
                          _vm._v(" "),
                          _c("div", { staticClass: "wpe-plugin-desc" }, [
                            _vm._v(_vm._s(plugin.desc))
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "wpe-bar" }, [
                            _c("div", { staticClass: "wpe-plugin-bages" }, [
                              _vm._v(_vm._s(plugin.ver))
                            ]),
                            _vm._v(" "),
                            _c("div", { staticClass: "wpe-plugin-price" }, [
                              _vm._v(_vm._s(plugin.price))
                            ])
                          ])
                        ],
                        1
                      )
                    ])
                  ])
                ],
                1
              )
            }),
            1
          )
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "el-tab-pane",
        { attrs: { label: "Premium", lazy: true } },
        [
          _c(
            "el-row",
            { attrs: { gutter: 30, type: "flex" } },
            _vm._l(_vm.plugins.plugins, function(plugin) {
              return _c(
                "el-col",
                { key: plugin.id, attrs: { span: 8 } },
                [
                  _c("el-card", { attrs: { shadow: "hover" } }, [
                    _c("div", { staticClass: "wpe-plugin" }, [
                      _c("h2", [_vm._v(_vm._s(plugin.name))]),
                      _vm._v(" "),
                      _c(
                        "div",
                        { staticClass: "wpe-plugin-info" },
                        [
                          _c("el-image", {
                            attrs: { src: plugin.image, fit: "fit" }
                          }),
                          _vm._v(" "),
                          _c("div", { staticClass: "wpe-plugin-desc" }, [
                            _vm._v(_vm._s(plugin.desc))
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "wpe-bar" }, [
                            _c("div", { staticClass: "wpe-plugin-bages" }, [
                              _vm._v(_vm._s(plugin.ver))
                            ]),
                            _vm._v(" "),
                            _c("div", { staticClass: "wpe-plugin-price" }, [
                              _vm._v(_vm._s(plugin.price))
                            ])
                          ])
                        ],
                        1
                      )
                    ])
                  ])
                ],
                1
              )
            }),
            1
          )
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "el-tab-pane",
        { attrs: { label: "Premium Pro", lazy: true } },
        [
          _c(
            "el-row",
            { attrs: { gutter: 30, type: "flex" } },
            _vm._l(_vm.plugins.plugins, function(plugin) {
              return _c(
                "el-col",
                { key: plugin.id, attrs: { span: 8 } },
                [
                  _c("el-card", { attrs: { shadow: "hover" } }, [
                    _c("div", { staticClass: "wpe-plugin" }, [
                      _c("h2", [_vm._v(_vm._s(plugin.name))]),
                      _vm._v(" "),
                      _c(
                        "div",
                        { staticClass: "wpe-plugin-info" },
                        [
                          _c("el-image", {
                            attrs: { src: plugin.image, fit: "fit" }
                          }),
                          _vm._v(" "),
                          _c("div", { staticClass: "wpe-plugin-desc" }, [
                            _vm._v(_vm._s(plugin.desc))
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "wpe-bar" }, [
                            _c("div", { staticClass: "wpe-plugin-bages" }, [
                              _vm._v(_vm._s(plugin.ver))
                            ]),
                            _vm._v(" "),
                            _c("div", { staticClass: "wpe-plugin-price" }, [
                              _vm._v(_vm._s(plugin.price))
                            ])
                          ])
                        ],
                        1
                      )
                    ])
                  ])
                ],
                1
              )
            }),
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpeSupport.vue?vue&type=template&id=4677c613&":
/*!****************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/components/wpeSupport.vue?vue&type=template&id=4677c613& ***!
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
  return _c("el-footer", [_vm._v("Footer")])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/WpeOptionsPage.vue?vue&type=template&id=306d57cb&":
/*!*****************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/WpeOptionsPage.vue?vue&type=template&id=306d57cb& ***!
  \*****************************************************************************************************************************************************************************************************/
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
              _vm.message_change
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/WpeSettings.vue?vue&type=template&id=a44f4cd6&":
/*!**************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/WpeSettings.vue?vue&type=template&id=a44f4cd6& ***!
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
              _vm.message_change
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/wpe.vue?vue&type=template&id=2bbac33a&":
/*!**********************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/wpe.vue?vue&type=template&id=2bbac33a& ***!
  \**********************************************************************************************************************************************************************************/
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
    { class: this.classID[0], attrs: { id: this.classID[0] } },
    [
      _c("wpe-header"),
      _vm._v(" "),
      _c(
        "el-container",
        [
          _c(
            "el-main",
            { class: this.classID[1], attrs: { id: this.classID[1] } },
            [
              _c(
                "transition",
                { attrs: { name: _vm.transitionName } },
                [_c("router-view", { staticClass: "view" })],
                1
              )
            ],
            1
          )
        ],
        1
      ),
      _vm._v(" "),
      _c("wpe-footer")
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

/***/ "./src/admin.js":
/*!**********************!*\
  !*** ./src/admin.js ***!
  \**********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_wpeHeader__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/wpeHeader */ "./src/components/wpeHeader.vue");
/* harmony import */ var _components_wpeFooter__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/wpeFooter */ "./src/components/wpeFooter.vue");
/* harmony import */ var _components_wpeMain__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/wpeMain */ "./src/components/wpeMain.vue");
/* harmony import */ var _wpe__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./wpe */ "./src/wpe.vue");




Vue.component('wpe', _wpe__WEBPACK_IMPORTED_MODULE_3__["default"]);
Vue.component('wpe-header', _components_wpeHeader__WEBPACK_IMPORTED_MODULE_0__["default"]);
Vue.component('wpe-main', _components_wpeMain__WEBPACK_IMPORTED_MODULE_2__["default"]);
Vue.component('wpe-footer', _components_wpeFooter__WEBPACK_IMPORTED_MODULE_1__["default"]);
new Vue({
  el: "#wpbody"
});

/***/ }),

/***/ "./src/components/wpeAuth.vue":
/*!************************************!*\
  !*** ./src/components/wpeAuth.vue ***!
  \************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wpeAuth_vue_vue_type_template_id_211d1894___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./wpeAuth.vue?vue&type=template&id=211d1894& */ "./src/components/wpeAuth.vue?vue&type=template&id=211d1894&");
/* harmony import */ var _wpeAuth_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./wpeAuth.vue?vue&type=script&lang=js& */ "./src/components/wpeAuth.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _wpeAuth_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _wpeAuth_vue_vue_type_template_id_211d1894___WEBPACK_IMPORTED_MODULE_0__["render"],
  _wpeAuth_vue_vue_type_template_id_211d1894___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/components/wpeAuth.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/components/wpeAuth.vue?vue&type=script&lang=js&":
/*!*************************************************************!*\
  !*** ./src/components/wpeAuth.vue?vue&type=script&lang=js& ***!
  \*************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeAuth_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/babel-loader/lib??ref--4-0!../../node_modules/vue-loader/lib??vue-loader-options!./wpeAuth.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpeAuth.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeAuth_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/components/wpeAuth.vue?vue&type=template&id=211d1894&":
/*!*******************************************************************!*\
  !*** ./src/components/wpeAuth.vue?vue&type=template&id=211d1894& ***!
  \*******************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeAuth_vue_vue_type_template_id_211d1894___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../node_modules/vue-loader/lib??vue-loader-options!./wpeAuth.vue?vue&type=template&id=211d1894& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpeAuth.vue?vue&type=template&id=211d1894&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeAuth_vue_vue_type_template_id_211d1894___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeAuth_vue_vue_type_template_id_211d1894___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/components/wpeFaqs.vue":
/*!************************************!*\
  !*** ./src/components/wpeFaqs.vue ***!
  \************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wpeFaqs_vue_vue_type_template_id_0202d089___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./wpeFaqs.vue?vue&type=template&id=0202d089& */ "./src/components/wpeFaqs.vue?vue&type=template&id=0202d089&");
/* harmony import */ var _wpeFaqs_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./wpeFaqs.vue?vue&type=script&lang=js& */ "./src/components/wpeFaqs.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _wpeFaqs_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _wpeFaqs_vue_vue_type_template_id_0202d089___WEBPACK_IMPORTED_MODULE_0__["render"],
  _wpeFaqs_vue_vue_type_template_id_0202d089___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/components/wpeFaqs.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/components/wpeFaqs.vue?vue&type=script&lang=js&":
/*!*************************************************************!*\
  !*** ./src/components/wpeFaqs.vue?vue&type=script&lang=js& ***!
  \*************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeFaqs_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/babel-loader/lib??ref--4-0!../../node_modules/vue-loader/lib??vue-loader-options!./wpeFaqs.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpeFaqs.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeFaqs_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/components/wpeFaqs.vue?vue&type=template&id=0202d089&":
/*!*******************************************************************!*\
  !*** ./src/components/wpeFaqs.vue?vue&type=template&id=0202d089& ***!
  \*******************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeFaqs_vue_vue_type_template_id_0202d089___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../node_modules/vue-loader/lib??vue-loader-options!./wpeFaqs.vue?vue&type=template&id=0202d089& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpeFaqs.vue?vue&type=template&id=0202d089&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeFaqs_vue_vue_type_template_id_0202d089___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeFaqs_vue_vue_type_template_id_0202d089___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/components/wpeFooter.vue":
/*!**************************************!*\
  !*** ./src/components/wpeFooter.vue ***!
  \**************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wpeFooter_vue_vue_type_template_id_6af4fa07___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./wpeFooter.vue?vue&type=template&id=6af4fa07& */ "./src/components/wpeFooter.vue?vue&type=template&id=6af4fa07&");
/* harmony import */ var _wpeFooter_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./wpeFooter.vue?vue&type=script&lang=js& */ "./src/components/wpeFooter.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _wpeFooter_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _wpeFooter_vue_vue_type_template_id_6af4fa07___WEBPACK_IMPORTED_MODULE_0__["render"],
  _wpeFooter_vue_vue_type_template_id_6af4fa07___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/components/wpeFooter.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/components/wpeFooter.vue?vue&type=script&lang=js&":
/*!***************************************************************!*\
  !*** ./src/components/wpeFooter.vue?vue&type=script&lang=js& ***!
  \***************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeFooter_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/babel-loader/lib??ref--4-0!../../node_modules/vue-loader/lib??vue-loader-options!./wpeFooter.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpeFooter.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeFooter_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/components/wpeFooter.vue?vue&type=template&id=6af4fa07&":
/*!*********************************************************************!*\
  !*** ./src/components/wpeFooter.vue?vue&type=template&id=6af4fa07& ***!
  \*********************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeFooter_vue_vue_type_template_id_6af4fa07___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../node_modules/vue-loader/lib??vue-loader-options!./wpeFooter.vue?vue&type=template&id=6af4fa07& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpeFooter.vue?vue&type=template&id=6af4fa07&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeFooter_vue_vue_type_template_id_6af4fa07___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeFooter_vue_vue_type_template_id_6af4fa07___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/components/wpeHeader.vue":
/*!**************************************!*\
  !*** ./src/components/wpeHeader.vue ***!
  \**************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wpeHeader_vue_vue_type_template_id_e7b1440e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./wpeHeader.vue?vue&type=template&id=e7b1440e& */ "./src/components/wpeHeader.vue?vue&type=template&id=e7b1440e&");
/* harmony import */ var _wpeHeader_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./wpeHeader.vue?vue&type=script&lang=js& */ "./src/components/wpeHeader.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _wpeHeader_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _wpeHeader_vue_vue_type_template_id_e7b1440e___WEBPACK_IMPORTED_MODULE_0__["render"],
  _wpeHeader_vue_vue_type_template_id_e7b1440e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/components/wpeHeader.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/components/wpeHeader.vue?vue&type=script&lang=js&":
/*!***************************************************************!*\
  !*** ./src/components/wpeHeader.vue?vue&type=script&lang=js& ***!
  \***************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeHeader_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/babel-loader/lib??ref--4-0!../../node_modules/vue-loader/lib??vue-loader-options!./wpeHeader.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpeHeader.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeHeader_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/components/wpeHeader.vue?vue&type=template&id=e7b1440e&":
/*!*********************************************************************!*\
  !*** ./src/components/wpeHeader.vue?vue&type=template&id=e7b1440e& ***!
  \*********************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeHeader_vue_vue_type_template_id_e7b1440e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../node_modules/vue-loader/lib??vue-loader-options!./wpeHeader.vue?vue&type=template&id=e7b1440e& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpeHeader.vue?vue&type=template&id=e7b1440e&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeHeader_vue_vue_type_template_id_e7b1440e___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeHeader_vue_vue_type_template_id_e7b1440e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/components/wpeMain.vue":
/*!************************************!*\
  !*** ./src/components/wpeMain.vue ***!
  \************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wpeMain_vue_vue_type_template_id_69845fb6___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./wpeMain.vue?vue&type=template&id=69845fb6& */ "./src/components/wpeMain.vue?vue&type=template&id=69845fb6&");
/* harmony import */ var _wpeMain_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./wpeMain.vue?vue&type=script&lang=js& */ "./src/components/wpeMain.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _wpeMain_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _wpeMain_vue_vue_type_template_id_69845fb6___WEBPACK_IMPORTED_MODULE_0__["render"],
  _wpeMain_vue_vue_type_template_id_69845fb6___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/components/wpeMain.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/components/wpeMain.vue?vue&type=script&lang=js&":
/*!*************************************************************!*\
  !*** ./src/components/wpeMain.vue?vue&type=script&lang=js& ***!
  \*************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeMain_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/babel-loader/lib??ref--4-0!../../node_modules/vue-loader/lib??vue-loader-options!./wpeMain.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpeMain.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeMain_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/components/wpeMain.vue?vue&type=template&id=69845fb6&":
/*!*******************************************************************!*\
  !*** ./src/components/wpeMain.vue?vue&type=template&id=69845fb6& ***!
  \*******************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeMain_vue_vue_type_template_id_69845fb6___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../node_modules/vue-loader/lib??vue-loader-options!./wpeMain.vue?vue&type=template&id=69845fb6& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpeMain.vue?vue&type=template&id=69845fb6&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeMain_vue_vue_type_template_id_69845fb6___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeMain_vue_vue_type_template_id_69845fb6___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/components/wpePlugins.vue":
/*!***************************************!*\
  !*** ./src/components/wpePlugins.vue ***!
  \***************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wpePlugins_vue_vue_type_template_id_294d2538___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./wpePlugins.vue?vue&type=template&id=294d2538& */ "./src/components/wpePlugins.vue?vue&type=template&id=294d2538&");
/* harmony import */ var _wpePlugins_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./wpePlugins.vue?vue&type=script&lang=js& */ "./src/components/wpePlugins.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _wpePlugins_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _wpePlugins_vue_vue_type_template_id_294d2538___WEBPACK_IMPORTED_MODULE_0__["render"],
  _wpePlugins_vue_vue_type_template_id_294d2538___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/components/wpePlugins.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/components/wpePlugins.vue?vue&type=script&lang=js&":
/*!****************************************************************!*\
  !*** ./src/components/wpePlugins.vue?vue&type=script&lang=js& ***!
  \****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_wpePlugins_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/babel-loader/lib??ref--4-0!../../node_modules/vue-loader/lib??vue-loader-options!./wpePlugins.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpePlugins.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_wpePlugins_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/components/wpePlugins.vue?vue&type=template&id=294d2538&":
/*!**********************************************************************!*\
  !*** ./src/components/wpePlugins.vue?vue&type=template&id=294d2538& ***!
  \**********************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_wpePlugins_vue_vue_type_template_id_294d2538___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../node_modules/vue-loader/lib??vue-loader-options!./wpePlugins.vue?vue&type=template&id=294d2538& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpePlugins.vue?vue&type=template&id=294d2538&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_wpePlugins_vue_vue_type_template_id_294d2538___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_wpePlugins_vue_vue_type_template_id_294d2538___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/components/wpeSupport.vue":
/*!***************************************!*\
  !*** ./src/components/wpeSupport.vue ***!
  \***************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wpeSupport_vue_vue_type_template_id_4677c613___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./wpeSupport.vue?vue&type=template&id=4677c613& */ "./src/components/wpeSupport.vue?vue&type=template&id=4677c613&");
/* harmony import */ var _wpeSupport_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./wpeSupport.vue?vue&type=script&lang=js& */ "./src/components/wpeSupport.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _wpeSupport_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _wpeSupport_vue_vue_type_template_id_4677c613___WEBPACK_IMPORTED_MODULE_0__["render"],
  _wpeSupport_vue_vue_type_template_id_4677c613___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/components/wpeSupport.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/components/wpeSupport.vue?vue&type=script&lang=js&":
/*!****************************************************************!*\
  !*** ./src/components/wpeSupport.vue?vue&type=script&lang=js& ***!
  \****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeSupport_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/babel-loader/lib??ref--4-0!../../node_modules/vue-loader/lib??vue-loader-options!./wpeSupport.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpeSupport.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeSupport_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/components/wpeSupport.vue?vue&type=template&id=4677c613&":
/*!**********************************************************************!*\
  !*** ./src/components/wpeSupport.vue?vue&type=template&id=4677c613& ***!
  \**********************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeSupport_vue_vue_type_template_id_4677c613___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../node_modules/vue-loader/lib??vue-loader-options!./wpeSupport.vue?vue&type=template&id=4677c613& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/components/wpeSupport.vue?vue&type=template&id=4677c613&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeSupport_vue_vue_type_template_id_4677c613___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_wpeSupport_vue_vue_type_template_id_4677c613___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/WpeOptionsPage.vue":
/*!****************************************!*\
  !*** ./src/options/WpeOptionsPage.vue ***!
  \****************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeOptionsPage_vue_vue_type_template_id_306d57cb___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeOptionsPage.vue?vue&type=template&id=306d57cb& */ "./src/options/WpeOptionsPage.vue?vue&type=template&id=306d57cb&");
/* harmony import */ var _WpeOptionsPage_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeOptionsPage.vue?vue&type=script&lang=js& */ "./src/options/WpeOptionsPage.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeOptionsPage_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeOptionsPage_vue_vue_type_template_id_306d57cb___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeOptionsPage_vue_vue_type_template_id_306d57cb___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/WpeOptionsPage.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/WpeOptionsPage.vue?vue&type=script&lang=js&":
/*!*****************************************************************!*\
  !*** ./src/options/WpeOptionsPage.vue?vue&type=script&lang=js& ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeOptionsPage_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/babel-loader/lib??ref--4-0!../../node_modules/vue-loader/lib??vue-loader-options!./WpeOptionsPage.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/WpeOptionsPage.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeOptionsPage_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/WpeOptionsPage.vue?vue&type=template&id=306d57cb&":
/*!***********************************************************************!*\
  !*** ./src/options/WpeOptionsPage.vue?vue&type=template&id=306d57cb& ***!
  \***********************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeOptionsPage_vue_vue_type_template_id_306d57cb___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../node_modules/vue-loader/lib??vue-loader-options!./WpeOptionsPage.vue?vue&type=template&id=306d57cb& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/WpeOptionsPage.vue?vue&type=template&id=306d57cb&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeOptionsPage_vue_vue_type_template_id_306d57cb___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeOptionsPage_vue_vue_type_template_id_306d57cb___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/WpeSettings.vue":
/*!*************************************!*\
  !*** ./src/options/WpeSettings.vue ***!
  \*************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeSettings_vue_vue_type_template_id_a44f4cd6___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeSettings.vue?vue&type=template&id=a44f4cd6& */ "./src/options/WpeSettings.vue?vue&type=template&id=a44f4cd6&");
/* harmony import */ var _WpeSettings_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeSettings.vue?vue&type=script&lang=js& */ "./src/options/WpeSettings.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeSettings_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeSettings_vue_vue_type_template_id_a44f4cd6___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeSettings_vue_vue_type_template_id_a44f4cd6___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/WpeSettings.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/WpeSettings.vue?vue&type=script&lang=js&":
/*!**************************************************************!*\
  !*** ./src/options/WpeSettings.vue?vue&type=script&lang=js& ***!
  \**************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeSettings_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/babel-loader/lib??ref--4-0!../../node_modules/vue-loader/lib??vue-loader-options!./WpeSettings.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/WpeSettings.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeSettings_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/WpeSettings.vue?vue&type=template&id=a44f4cd6&":
/*!********************************************************************!*\
  !*** ./src/options/WpeSettings.vue?vue&type=template&id=a44f4cd6& ***!
  \********************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeSettings_vue_vue_type_template_id_a44f4cd6___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../node_modules/vue-loader/lib??vue-loader-options!./WpeSettings.vue?vue&type=template&id=a44f4cd6& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/WpeSettings.vue?vue&type=template&id=a44f4cd6&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeSettings_vue_vue_type_template_id_a44f4cd6___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeSettings_vue_vue_type_template_id_a44f4cd6___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



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

/***/ "./src/wpe.vue":
/*!*********************!*\
  !*** ./src/wpe.vue ***!
  \*********************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wpe_vue_vue_type_template_id_2bbac33a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./wpe.vue?vue&type=template&id=2bbac33a& */ "./src/wpe.vue?vue&type=template&id=2bbac33a&");
/* harmony import */ var _wpe_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./wpe.vue?vue&type=script&lang=js& */ "./src/wpe.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _wpe_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _wpe_vue_vue_type_template_id_2bbac33a___WEBPACK_IMPORTED_MODULE_0__["render"],
  _wpe_vue_vue_type_template_id_2bbac33a___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/wpe.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/wpe.vue?vue&type=script&lang=js&":
/*!**********************************************!*\
  !*** ./src/wpe.vue?vue&type=script&lang=js& ***!
  \**********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_wpe_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../node_modules/babel-loader/lib??ref--4-0!../node_modules/vue-loader/lib??vue-loader-options!./wpe.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/wpe.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_wpe_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/wpe.vue?vue&type=template&id=2bbac33a&":
/*!****************************************************!*\
  !*** ./src/wpe.vue?vue&type=template&id=2bbac33a& ***!
  \****************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_wpe_vue_vue_type_template_id_2bbac33a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../node_modules/vue-loader/lib??vue-loader-options!./wpe.vue?vue&type=template&id=2bbac33a& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/wpe.vue?vue&type=template&id=2bbac33a&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_wpe_vue_vue_type_template_id_2bbac33a___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_wpe_vue_vue_type_template_id_2bbac33a___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ 0:
/*!****************************!*\
  !*** multi ./src/admin.js ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! F:\MAMP\htdocs\wpe\wp-content\plugins\wpessential\src\admin.js */"./src/admin.js");


/***/ })

/******/ });