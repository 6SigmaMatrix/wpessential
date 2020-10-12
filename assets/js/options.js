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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/WpeHeading.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/WpeHeading.vue?vue&type=script&lang=js& ***!
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
/* harmony default export */ __webpack_exports__["default"] = ({
  props: {
    heading: String,
    subtitle: String
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/WpeHelp.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/WpeHelp.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************/
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
  props: {
    help: String
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

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeBackground.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeBackground.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _mixins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../mixins */ "./src/options/mixins.js");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
      value: {},
      attachment: {},
      loading: false,
      field_id: this.field.id
    };
  },
  mounted: function mounted() {
    this.get_value();
    this.field_args_check();

    if (this.value >= 1) {
      this.get_media();
    }
  },
  methods: {
    get_media: function get_media() {
      var _this = this;

      this.loading = true;
      var get_data = {
        nonce: WPEssential.nonce,
        action: "get_image_from_url"
      };
      axios.post(WPEssential.ajaxshort, Qs.stringify(get_data))["catch"](function (error) {
        _this.loader = false;

        _this.notify_error(error);
      }).then(function (response) {
        _this.loader = false;

        if (response.data.success == true) {
          _this.attachment = response.data.data;
        } else {
          _this.error_message = "No data founded";

          _this.notify_error();
        }
      });
    },
    add_media: function add_media(event) {
      var _this2 = this;

      var button = jQuery(event.target);
      var id = button.prev();

      wp.media.editor.send.attachment = function (props, attachment) {
        _this2.value.image = attachment.sizes.full.url;
        _this2.attachment = attachment;
      };

      wp.media.editor.open(button);
      return false;
    },
    btnText: function btnText() {
      if (this.field.settings !== undefined) {
        if (this.attachment.sizes) {
          return this.field.settings.update;
        } else {
          return this.field.settings["new"];
        }
      }
    },
    preset_set: function preset_set() {
      return {
        "default": 'Default',
        fill: 'Fill Screen',
        fit: 'Fit to Screen',
        repeat: 'Repeat',
        custom: 'Custom'
      };
    },
    position_set: function position_set() {
      return [{
        key: 'left top',
        label: 'fas fa-arrow-left',
        "class": 'left top'
      }, {
        key: 'center top',
        label: 'fas fa-arrow-left',
        "class": 'center top'
      }, {
        key: 'right top',
        label: 'fas fa-arrow-right',
        "class": 'right top'
      }, {
        key: 'left center',
        label: 'fas fa-arrow-left',
        "class": 'left center'
      }, {
        key: 'center center',
        label: 'fas fa-circle',
        "class": 'center center'
      }, {
        key: 'right center',
        label: 'fas fa-arrow-right',
        "class": 'right center'
      }, {
        key: 'left bottom',
        label: 'fas fa-arrow-left',
        "class": 'left bottom'
      }, {
        key: 'center bottom',
        label: 'fas fa-arrow-left',
        "class": 'center bottom'
      }, {
        key: 'right bottom',
        label: 'fas fa-arrow-right',
        "class": 'right bottom'
      }];
    },
    size_set: function size_set() {
      return {
        auto: 'Original',
        contain: 'Fit to Screen',
        cover: 'Fill Screen'
      };
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeButtonGroup.vue?vue&type=script&lang=js&":
/*!************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeButtonGroup.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _mixins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../mixins */ "./src/options/mixins.js");
//
//
//
//
//
//
//
//
//
//
//
//
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
      value: []
    };
  },
  mounted: function mounted() {
    this.get_value();
    this.field_args_check();
  },
  methods: {
    get_value: function get_value() {
      var _this = this;

      var data;
      data = this.options[this.field.id];

      if (data) {
        jQuery.each(data, function (item) {
          item = _this.field.id + "_" + item;
          return _this.value.push(item);
        });
      }

      data = this.field.defined;

      if (data) {
        jQuery.each(data, function (item) {
          item = _this.field.id + "_" + item;
          return _this.value.push(item);
        });
      }
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeButtonSet.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeButtonSet.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _mixins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../mixins */ "./src/options/mixins.js");
//
//
//
//
//
//
//
//
//
//
//
//
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
      data: []
    };
  },
  mounted: function mounted() {
    var _this = this;

    jQuery.each(this.field.options, function (key, label) {
      _this.data.push({
        key: key,
        label: label
      });
    });
    this.get_value();
    this.field_args_check();
    this.value = this.field.id + '_' + this.value;
    this.attributes();
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeColor.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeColor.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _mixins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../mixins */ "./src/options/mixins.js");
//
//
//
//
//
//
//
//
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
  mounted: function mounted() {
    this.get_value();
    this.field_args_check();
    this.attributes();
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeDateTime.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeDateTime.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _mixins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../mixins */ "./src/options/mixins.js");
//
//
//
//
//
//
//
//
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
  mounted: function mounted() {
    this.get_value();
    this.field_args_check();
    this.attributes();
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeDivider.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeDivider.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _mixins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../mixins */ "./src/options/mixins.js");
//
//
//
//
//
//
//
//
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
      title: '',
      content: '',
      position: 'left'
    };
  },
  mounted: function mounted() {
    this.field_args_check();

    if (this.field.settings !== undefined) {
      if (this.field.settings.content !== undefined) {
        this.content = this.field.settings.content;
      }

      if (this.field.settings.position !== undefined) {
        this.position = this.field.settings.position;
      }
    }

    if (this.field.title !== undefined) {
      this.title = this.field.title;
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeEditor.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeEditor.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _mixins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../mixins */ "./src/options/mixins.js");
//
//
//
//
//
//
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
  mounted: function mounted() {
    this.get_value();
    this.field_args_check();
    var field_id = 'wp_editor_' + this.field.id;
    setTimeout(function () {
      // text editor
      wp.editor.remove(field_id);
      var mydef = wp.editor.getDefaultSettings().tinymce;

      mydef.setup = function (ed) {
        ed.on('keyup', function (e) {
          this.value = ed.getContent();
        });
      };

      wp.editor.initialize(field_id, {
        tinymce: mydef,
        mediaButtons: true,
        quicktags: true
      });
    }, 500);
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeImageSelect.vue?vue&type=script&lang=js&":
/*!************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeImageSelect.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _mixins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../mixins */ "./src/options/mixins.js");
//
//
//
//
//
//
//
//
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
      data: []
    };
  },
  mounted: function mounted() {
    var _this = this;

    this.get_value();
    this.field_args_check();
    jQuery.each(this.field.options, function (key, label) {
      _this.data.push({
        key: key,
        label: label
      });
    });
    this.value = this.field.id + '_' + this.value;
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeInfo.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeInfo.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _mixins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../mixins */ "./src/options/mixins.js");
//
//
//
//
//
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
      description: '',
      title: ''
    };
  },
  mounted: function mounted() {
    this.field_args_check();
    this.description = this.field.desc;
    this.title = this.field.heading;
    this.attributes();
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeLinkColor.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeLinkColor.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _mixins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../mixins */ "./src/options/mixins.js");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
  mounted: function mounted() {
    this.get_value();
    this.field_args_check();
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeMedia.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeMedia.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _mixins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../mixins */ "./src/options/mixins.js");
//
//
//
//
//
//
//
//
//
//
//
//
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
      attachment: {},
      loading: false,
      is_done: false
    };
  },
  mounted: function mounted() {
    this.get_value();
    this.field_args_check();

    if (this.value >= 1) {
      this.get_media();
    }
  },
  methods: {
    get_media: function get_media() {
      var _this = this;

      this.loading = true;
      jQuery.ajax({
        url: url,
        type: 'post',
        data: {
          action: 'get-attachment',
          id: this.value
        },
        success: function success(res) {
          if (res.success === true) {
            _this.attachment = res.data;
          }
        },
        complete: function complete(res) {
          _this.loading = false;
          _this.is_done = true;
        }
      });
    },
    add_media: function add_media(event) {
      var _this2 = this;

      var button = jQuery(event.target);
      var id = button.prev();

      wp.media.editor.send.attachment = function (props, attachment) {
        _this2.value = attachment.id;
        _this2.attachment = attachment;
      };

      wp.media.editor.open(button);
      return false;
    },
    btnText: function btnText() {
      if (this.field.settings !== undefined) {
        if (this.attachment.sizes) {
          return this.field.settings.update;
        } else {
          return this.field.settings["new"];
        }
      }
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeNumber.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeNumber.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _mixins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../mixins */ "./src/options/mixins.js");
//
//
//
//
//
//
//
//
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
  mounted: function mounted() {
    this.get_value();
    this.field_args_check();
    this.attributes();
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeRadio.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeRadio.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _mixins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../mixins */ "./src/options/mixins.js");
//
//
//
//
//
//
//
//
//
//
//
//
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
      data: []
    };
  },
  mounted: function mounted() {
    var _this = this;

    this.get_value();
    this.field_args_check();
    jQuery.each(this.field.options, function (key, label) {
      _this.data.push({
        key: key,
        label: label
      });
    });
    this.value = this.field.id + '_' + this.value;
    this.attributes();
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeSection.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeSection.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _mixins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../mixins */ "./src/options/mixins.js");
//
//
//
//
//
//
//
//
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
  mounted: function mounted() {
    this.field_args_check();
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeSelect.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeSelect.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _mixins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../mixins */ "./src/options/mixins.js");
//
//
//
//
//
//
//
//
//
//
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
  mounted: function mounted() {
    this.get_value();
    this.field_args_check();
    this.attributes();
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeSlider.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeSlider.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _mixins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../mixins */ "./src/options/mixins.js");
//
//
//
//
//
//
//
//
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
  mounted: function mounted() {
    this.get_value();
    this.field_args_check();
    this.attributes();
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeText.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeText.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _mixins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../mixins */ "./src/options/mixins.js");
//
//
//
//
//
//
//
//
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
  mounted: function mounted() {
    this.get_value();
    this.field_args_check();
    this.attributes();
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeTextarea.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeTextarea.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _mixins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../mixins */ "./src/options/mixins.js");
//
//
//
//
//
//
//
//
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
  mounted: function mounted() {
    this.get_value();
    this.field_args_check();
    this.attributes();
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeTime.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeTime.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _mixins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../mixins */ "./src/options/mixins.js");
//
//
//
//
//
//
//
//
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
  mounted: function mounted() {
    this.get_value();
    this.field_args_check();
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeToggle.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeToggle.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _mixins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../mixins */ "./src/options/mixins.js");
//
//
//
//
//
//
//
//
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
  mounted: function mounted() {
    this.get_value();
    this.field_args_check();
    this.attributes();
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeTransfer.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeTransfer.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _mixins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../mixins */ "./src/options/mixins.js");
//
//
//
//
//
//
//
//
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
      data: []
    };
  },
  mounted: function mounted() {
    var _this = this;

    this.get_value();
    this.field_args_check();
    jQuery.each(this.field.options, function (key, label) {
      _this.data.push({
        key: key,
        label: label
      });
    });
    this.attributes();
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeUrl.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeUrl.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _mixins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../mixins */ "./src/options/mixins.js");
//
//
//
//
//
//
//
//
//
//
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
  mounted: function mounted() {
    this.get_value();
    this.field_args_check();
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/WpeHeading.vue?vue&type=template&id=3106b800&":
/*!*************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/WpeHeading.vue?vue&type=template&id=3106b800& ***!
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
    "el-col",
    { staticClass: "wpessential-field-label", attrs: { span: 8 } },
    [
      _c(
        "span",
        { staticClass: "wpessential-field-heading el-col el-col-24" },
        [_vm._v(_vm._s(_vm.heading))]
      ),
      _vm._v(" "),
      _vm.subtitle
        ? _c(
            "span",
            { staticClass: "wpessential-field-subtitle el-col el-col-24" },
            [_vm._v(_vm._s(_vm.subtitle))]
          )
        : _vm._e()
    ]
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/WpeHelp.vue?vue&type=template&id=69502a9a&":
/*!**********************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/WpeHelp.vue?vue&type=template&id=69502a9a& ***!
  \**********************************************************************************************************************************************************************************************/
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
    { staticClass: "wpessential-field-info-box", attrs: { span: 3 } },
    [
      _c(
        "el-popover",
        {
          attrs: {
            placement: "left",
            title: "Help",
            width: "200",
            trigger: "click",
            content: _vm.help
          }
        },
        [
          _c("el-button", { attrs: { slot: "reference" }, slot: "reference" }, [
            _c("i", { staticClass: "fas fa-question-circle" })
          ])
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeBackground.vue?vue&type=template&id=e1f1526a&":
/*!***************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeBackground.vue?vue&type=template&id=e1f1526a& ***!
  \***************************************************************************************************************************************************************************************************************/
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
    "transition",
    { attrs: { name: "fade" } },
    [
      _c(
        "el-row",
        { attrs: { gutter: 15, type: "flex" } },
        [
          _vm.field.heading
            ? _c("wpe-heading", {
                attrs: {
                  heading: _vm.field.heading,
                  subtitle: _vm.field.subtitle
                }
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
                "div",
                {
                  staticClass:
                    "wpessential-form-background-media el-col el-col-24"
                },
                [
                  _c(
                    "span",
                    {
                      staticClass: "wpessential-field-heading el-col el-col-24"
                    },
                    [_vm._v("Background Image")]
                  ),
                  _vm._v(" "),
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.value.image,
                        expression: "value.image"
                      }
                    ],
                    attrs: { type: "hidden" },
                    domProps: { value: _vm.value.image },
                    on: {
                      input: function($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.$set(_vm.value, "image", $event.target.value)
                      }
                    }
                  }),
                  _vm._v(" "),
                  _vm.attachment.sizes
                    ? _c("div", { staticClass: "image" }, [
                        _c("img", {
                          attrs: {
                            src: _vm.attachment.sizes.thumbnail.url,
                            alt: _vm.attachment.title
                          }
                        })
                      ])
                    : _vm._e(),
                  _vm._v(" "),
                  _c(
                    "el-button",
                    {
                      attrs: {
                        type: "primary",
                        icon: "fas fa-image",
                        plain: "",
                        loading: _vm.loading
                      },
                      on: {
                        click: function($event) {
                          $event.preventDefault()
                          return _vm.add_media($event)
                        }
                      }
                    },
                    [
                      _vm._v(
                        "\n                    " +
                          _vm._s(_vm.btnText()) +
                          "\n                "
                      )
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _vm.value.image
                ? _c(
                    "div",
                    {
                      staticClass:
                        "wpessential-form-background-preset el-col el-col-24"
                    },
                    [
                      _c(
                        "span",
                        {
                          staticClass:
                            "wpessential-field-heading el-col el-col-24"
                        },
                        [_vm._v("Preset")]
                      ),
                      _vm._v(" "),
                      _c(
                        "el-select",
                        _vm._b(
                          {
                            staticClass:
                              "wpessential-form-background-preset-select",
                            attrs: { name: _vm.field_id + "_perset" },
                            on: { change: _vm.select_change },
                            model: {
                              value: _vm.value.perset,
                              callback: function($$v) {
                                _vm.$set(_vm.value, "perset", $$v)
                              },
                              expression: "value.perset"
                            }
                          },
                          "el-select",
                          _vm.attr,
                          false
                        ),
                        _vm._l(_vm.preset_set(), function(label, key) {
                          return _c("el-option", {
                            key: key,
                            attrs: { value: key, label: label }
                          })
                        }),
                        1
                      )
                    ],
                    1
                  )
                : _vm._e(),
              _vm._v(" "),
              _vm.value.perset !== "default"
                ? _c(
                    "div",
                    {
                      staticClass:
                        "wpessential-form-background-position el-col el-col-24"
                    },
                    [
                      _c(
                        "span",
                        {
                          staticClass:
                            "wpessential-field-heading el-col el-col-24"
                        },
                        [_vm._v("Image Position")]
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        { staticClass: "el-col el-col-8" },
                        [
                          _c(
                            "el-radio-group",
                            {
                              staticClass:
                                "wpessential-form-background-position-radio",
                              on: { change: _vm.select_change },
                              model: {
                                value: _vm.value.position,
                                callback: function($$v) {
                                  _vm.$set(_vm.value, "position", $$v)
                                },
                                expression: "value.position"
                              }
                            },
                            _vm._l(_vm.position_set(), function(option) {
                              return _c(
                                "el-radio-button",
                                _vm._b(
                                  {
                                    key: option.key,
                                    class: option.class,
                                    attrs: {
                                      label:
                                        _vm.field_id +
                                        "_position_" +
                                        option.key,
                                      name:
                                        _vm.field_id + "_position_" + option.key
                                    }
                                  },
                                  "el-radio-button",
                                  _vm.attr,
                                  false
                                ),
                                [_c("i", { class: option.label })]
                              )
                            }),
                            1
                          )
                        ],
                        1
                      )
                    ]
                  )
                : _vm._e(),
              _vm._v(" "),
              _vm.value.perset == "custom"
                ? _c(
                    "div",
                    {
                      staticClass:
                        "wpessential-form-background-size el-col el-col-24"
                    },
                    [
                      _c(
                        "span",
                        {
                          staticClass:
                            "wpessential-field-heading el-col el-col-24"
                        },
                        [_vm._v("Image Size")]
                      ),
                      _vm._v(" "),
                      _c(
                        "el-select",
                        _vm._b(
                          {
                            staticClass: "wpessential-form-background-select",
                            attrs: { name: _vm.field_id + "_size" },
                            on: { change: _vm.select_change },
                            model: {
                              value: _vm.value.size,
                              callback: function($$v) {
                                _vm.$set(_vm.value, "size", $$v)
                              },
                              expression: "value.size"
                            }
                          },
                          "el-select",
                          _vm.attr,
                          false
                        ),
                        _vm._l(_vm.size_set(), function(label, key) {
                          return _c("el-option", {
                            key: key,
                            attrs: { value: key, label: label }
                          })
                        }),
                        1
                      )
                    ],
                    1
                  )
                : _vm._e(),
              _vm._v(" "),
              _vm.value.perset == "custom" || _vm.value.perset == "fit"
                ? _c(
                    "div",
                    {
                      staticClass:
                        "wpessential-form-background-repeat el-col el-col-24"
                    },
                    [
                      _c(
                        "span",
                        {
                          staticClass:
                            "wpessential-field-heading el-col el-col-24"
                        },
                        [_vm._v("Repeat")]
                      ),
                      _vm._v(" "),
                      _c(
                        "el-switch",
                        _vm._b(
                          {
                            staticClass:
                              "wpessential-form-background-repeat-toggle",
                            attrs: { name: _vm.field_id + "_repeat" },
                            on: { change: _vm.select_change },
                            model: {
                              value: _vm.value.repeat,
                              callback: function($$v) {
                                _vm.$set(_vm.value, "repeat", $$v)
                              },
                              expression: "value.repeat"
                            }
                          },
                          "el-switch",
                          _vm.attr,
                          false
                        )
                      )
                    ],
                    1
                  )
                : _vm._e(),
              _vm._v(" "),
              _vm.value.perset == "custom"
                ? _c(
                    "div",
                    {
                      staticClass:
                        "wpessential-form-background-scroll el-col el-col-24"
                    },
                    [
                      _c(
                        "span",
                        {
                          staticClass:
                            "wpessential-field-heading el-col el-col-24"
                        },
                        [_vm._v("Scroll with Page")]
                      ),
                      _vm._v(" "),
                      _c(
                        "el-switch",
                        _vm._b(
                          {
                            staticClass:
                              "wpessential-form-background-scroll-toggle",
                            attrs: { name: _vm.field_id + "_attachment" },
                            on: { change: _vm.select_change },
                            model: {
                              value: _vm.value.attachment,
                              callback: function($$v) {
                                _vm.$set(_vm.value, "attachment", $$v)
                              },
                              expression: "value.attachment"
                            }
                          },
                          "el-switch",
                          _vm.attr,
                          false
                        )
                      )
                    ],
                    1
                  )
                : _vm._e(),
              _vm._v(" "),
              _vm.field.desc
                ? _c(
                    "div",
                    { staticClass: "wpessential-field-desc el-col el-col-24" },
                    [_vm._v(_vm._s(_vm.field.desc))]
                  )
                : _vm._e()
            ]
          ),
          _vm._v(" "),
          _vm.field.help
            ? _c("wpe-help", { attrs: { help: _vm.field.help } })
            : _vm._e()
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeButtonGroup.vue?vue&type=template&id=478325c0&":
/*!****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeButtonGroup.vue?vue&type=template&id=478325c0& ***!
  \****************************************************************************************************************************************************************************************************************/
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
    "transition",
    { attrs: { name: "fade" } },
    [
      _c(
        "el-row",
        { attrs: { gutter: 15, type: "flex" } },
        [
          _vm.field.heading
            ? _c("wpe-heading", {
                attrs: {
                  heading: _vm.field.heading,
                  subtitle: _vm.field.subtitle
                }
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
              _vm.field.options
                ? _c(
                    "el-checkbox-group",
                    {
                      staticClass: "wpessential-form-button-group",
                      on: { change: _vm.select_change },
                      model: {
                        value: _vm.value,
                        callback: function($$v) {
                          _vm.value = $$v
                        },
                        expression: "value"
                      }
                    },
                    _vm._l(_vm.field.options, function(option) {
                      return _c(
                        "el-checkbox-button",
                        {
                          key: option.key,
                          attrs: {
                            name: _vm.field.id + "_" + option.key,
                            label: _vm.field.id + "_" + option.key
                          }
                        },
                        [
                          _vm._v(
                            "\n                    " +
                              _vm._s(option.label) +
                              "\n                "
                          )
                        ]
                      )
                    }),
                    1
                  )
                : _vm._e(),
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
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeButtonSet.vue?vue&type=template&id=4726d7c3&":
/*!**************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeButtonSet.vue?vue&type=template&id=4726d7c3& ***!
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
    "transition",
    { attrs: { name: "fade" } },
    [
      _c(
        "el-row",
        { attrs: { gutter: 15, type: "flex" } },
        [
          _vm.field.heading
            ? _c("wpe-heading", {
                attrs: {
                  heading: _vm.field.heading,
                  subtitle: _vm.field.subtitle
                }
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
              _vm.field.options
                ? _c(
                    "el-radio-group",
                    _vm._b(
                      {
                        staticClass: "wpessential-form-button-set",
                        on: { change: _vm.select_change },
                        model: {
                          value: _vm.value,
                          callback: function($$v) {
                            _vm.value = $$v
                          },
                          expression: "value"
                        }
                      },
                      "el-radio-group",
                      _vm.attr,
                      false
                    ),
                    _vm._l(_vm.data, function(option) {
                      return _c(
                        "el-radio-button",
                        {
                          key: option.key,
                          attrs: {
                            label: _vm.field.id + "_" + option.key,
                            name: _vm.field.id + "_" + option.key
                          }
                        },
                        [
                          _vm._v(
                            "\n                    " +
                              _vm._s(option.label) +
                              "\n                "
                          )
                        ]
                      )
                    }),
                    1
                  )
                : _vm._e(),
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
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeColor.vue?vue&type=template&id=5c007356&":
/*!**********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeColor.vue?vue&type=template&id=5c007356& ***!
  \**********************************************************************************************************************************************************************************************************/
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
    "transition",
    { attrs: { name: "fade" } },
    [
      _c(
        "el-row",
        { attrs: { gutter: 15, type: "flex" } },
        [
          _vm.field.heading
            ? _c("wpe-heading", {
                attrs: {
                  heading: _vm.field.heading,
                  subtitle: _vm.field.subtitle
                }
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
                "el-color-picker",
                _vm._b(
                  {
                    staticClass: "wpessential-form-color",
                    on: { change: _vm.select_change },
                    model: {
                      value: _vm.value,
                      callback: function($$v) {
                        _vm.value = $$v
                      },
                      expression: "value"
                    }
                  },
                  "el-color-picker",
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
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeDateTime.vue?vue&type=template&id=0794eff8&":
/*!*************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeDateTime.vue?vue&type=template&id=0794eff8& ***!
  \*************************************************************************************************************************************************************************************************************/
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
    "transition",
    { attrs: { name: "fade" } },
    [
      _c(
        "el-row",
        { attrs: { gutter: 15, type: "flex" } },
        [
          _vm.field.heading
            ? _c("wpe-heading", {
                attrs: {
                  heading: _vm.field.heading,
                  subtitle: _vm.field.subtitle
                }
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
                "el-date-picker",
                _vm._b(
                  {
                    staticClass: "wpessential-form-datetime",
                    on: { change: _vm.select_change },
                    model: {
                      value: _vm.value,
                      callback: function($$v) {
                        _vm.value = $$v
                      },
                      expression: "value"
                    }
                  },
                  "el-date-picker",
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
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeDivider.vue?vue&type=template&id=0d2d414c&":
/*!************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeDivider.vue?vue&type=template&id=0d2d414c& ***!
  \************************************************************************************************************************************************************************************************************/
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
    "transition",
    { attrs: { name: "fade" } },
    [
      _c(
        "el-row",
        { attrs: { gutter: 15, type: "flex" } },
        [
          _c(
            "el-col",
            { staticClass: "wpessential-field", attrs: { span: 24 } },
            [
              _vm.title
                ? _vm._t("default", [_vm._v(_vm._s(_vm.title))])
                : _vm._e(),
              _vm._v(" "),
              _c(
                "el-divider",
                {
                  staticClass: "wpessential-form-divider",
                  attrs: { "content-position": _vm.position }
                },
                [
                  _vm.content
                    ? _vm._t("default", [_vm._v(_vm._s(_vm.content))])
                    : _vm._e()
                ],
                2
              )
            ],
            2
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeEditor.vue?vue&type=template&id=7d0ab60a&":
/*!***********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeEditor.vue?vue&type=template&id=7d0ab60a& ***!
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
    "transition",
    { attrs: { name: "fade" } },
    [
      _c(
        "el-row",
        { attrs: { gutter: 15, type: "flex" } },
        [
          _vm.field.heading
            ? _c("wpe-heading", {
                attrs: {
                  heading: _vm.field.heading,
                  subtitle: _vm.field.subtitle
                }
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
              _c("div", { staticClass: "wpessential-form-editor" }, [
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.value,
                      expression: "value"
                    }
                  ],
                  attrs: { id: "wp_editor_" + _vm.field.id },
                  domProps: { value: _vm.value },
                  on: {
                    input: function($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.value = $event.target.value
                    }
                  }
                })
              ]),
              _vm._v(" "),
              _vm.field.desc
                ? _c(
                    "div",
                    { staticClass: "wpessential-field-desc el-col el-col-24" },
                    [_vm._v(_vm._s(_vm.field.desc))]
                  )
                : _vm._e()
            ]
          ),
          _vm._v(" "),
          _vm.field.help
            ? _c("wpe-help", { attrs: { help: _vm.field.help } })
            : _vm._e()
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeImageSelect.vue?vue&type=template&id=572403ea&":
/*!****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeImageSelect.vue?vue&type=template&id=572403ea& ***!
  \****************************************************************************************************************************************************************************************************************/
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
    "transition",
    { attrs: { name: "fade" } },
    [
      _c(
        "el-row",
        { attrs: { gutter: 15, type: "flex" } },
        [
          _vm.field.heading
            ? _c("wpe-heading", {
                attrs: {
                  heading: _vm.field.heading,
                  subtitle: _vm.field.subtitle
                }
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
              _vm.field.options
                ? _c(
                    "el-radio-group",
                    {
                      staticClass: "wpessential-form-select-image",
                      on: { change: _vm.select_change },
                      model: {
                        value: _vm.value,
                        callback: function($$v) {
                          _vm.value = $$v
                        },
                        expression: "value"
                      }
                    },
                    _vm._l(_vm.data, function(option) {
                      return _c(
                        "el-radio",
                        {
                          key: option.key,
                          attrs: {
                            label: _vm.field.id + "_" + option.key,
                            name: _vm.field.id + "_" + option.key
                          }
                        },
                        [_c("img", { attrs: { src: option.label } })]
                      )
                    }),
                    1
                  )
                : _vm._e(),
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
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeInfo.vue?vue&type=template&id=70ba63ea&":
/*!*********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeInfo.vue?vue&type=template&id=70ba63ea& ***!
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
    "transition",
    { attrs: { name: "fade" } },
    [
      _c(
        "el-row",
        { attrs: { gutter: 15, type: "flex" } },
        [
          _c(
            "el-col",
            { staticClass: "wpessential-field", attrs: { span: 24 } },
            [
              _c(
                "el-alert",
                _vm._b(
                  {
                    staticClass: "wpessential-form-info",
                    attrs: {
                      name: _vm.field.id,
                      description: _vm.description,
                      title: _vm.title
                    }
                  },
                  "el-alert",
                  _vm.attr,
                  false
                )
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeLinkColor.vue?vue&type=template&id=4f8e56fc&":
/*!**************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeLinkColor.vue?vue&type=template&id=4f8e56fc& ***!
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
    "transition",
    { attrs: { name: "fade" } },
    [
      _c(
        "el-row",
        { attrs: { gutter: 15, type: "flex" } },
        [
          _vm.field.heading
            ? _c("wpe-heading", {
                attrs: {
                  heading: _vm.field.heading,
                  subtitle: _vm.field.subtitle
                }
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
                "el-row",
                { attrs: { gutter: 15, type: "flex" } },
                [
                  _c(
                    "el-col",
                    { staticClass: "wpessential-field" },
                    [
                      _c(
                        "span",
                        {
                          staticClass: "wpessential-field-link-color-headings"
                        },
                        [_vm._v("Regular")]
                      ),
                      _vm._v(" "),
                      _c("el-color-picker", {
                        staticClass: "wpessential-form-link-color",
                        on: { change: _vm.select_change },
                        model: {
                          value: _vm.value.regular,
                          callback: function($$v) {
                            _vm.$set(_vm.value, "regular", $$v)
                          },
                          expression: "value.regular"
                        }
                      })
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _vm.field.settings.hover
                    ? _c(
                        "el-col",
                        { staticClass: "wpessential-field" },
                        [
                          _c(
                            "span",
                            {
                              staticClass:
                                "wpessential-field-link-color-headings"
                            },
                            [_vm._v("Hover")]
                          ),
                          _vm._v(" "),
                          _c("el-color-picker", {
                            staticClass: "wpessential-form-link-color",
                            on: { change: _vm.select_change },
                            model: {
                              value: _vm.value.hover,
                              callback: function($$v) {
                                _vm.$set(_vm.value, "hover", $$v)
                              },
                              expression: "value.hover"
                            }
                          })
                        ],
                        1
                      )
                    : _vm._e(),
                  _vm._v(" "),
                  _vm.field.settings.active
                    ? _c(
                        "el-col",
                        { staticClass: "wpessential-field" },
                        [
                          _c(
                            "span",
                            {
                              staticClass:
                                "wpessential-field-link-color-headings"
                            },
                            [_vm._v("Active")]
                          ),
                          _vm._v(" "),
                          _c("el-color-picker", {
                            staticClass: "wpessential-form-link-color",
                            on: { change: _vm.select_change },
                            model: {
                              value: _vm.value.active,
                              callback: function($$v) {
                                _vm.$set(_vm.value, "active", $$v)
                              },
                              expression: "value.active"
                            }
                          })
                        ],
                        1
                      )
                    : _vm._e()
                ],
                1
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
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeMedia.vue?vue&type=template&id=65828b57&":
/*!**********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeMedia.vue?vue&type=template&id=65828b57& ***!
  \**********************************************************************************************************************************************************************************************************/
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
    "transition",
    { attrs: { name: "fade" } },
    [
      _c(
        "el-row",
        { attrs: { gutter: 15, type: "flex" } },
        [
          _vm.field.heading
            ? _c("wpe-heading", {
                attrs: {
                  heading: _vm.field.heading,
                  subtitle: _vm.field.subtitle
                }
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
                "div",
                { staticClass: "wpessential-form-media" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.value,
                        expression: "value"
                      }
                    ],
                    attrs: { type: "hidden" },
                    domProps: { value: _vm.value },
                    on: {
                      input: function($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.value = $event.target.value
                      }
                    }
                  }),
                  _vm._v(" "),
                  _vm.attachment.sizes
                    ? _c("div", { staticClass: "image" }, [
                        _c("img", {
                          attrs: {
                            src: _vm.attachment.sizes.thumbnail.url,
                            alt: _vm.attachment.title
                          }
                        })
                      ])
                    : _vm._e(),
                  _vm._v(" "),
                  _c(
                    "el-button",
                    {
                      attrs: {
                        type: "primary",
                        icon: "fas fa-image",
                        plain: "",
                        loading: _vm.loading
                      },
                      on: {
                        click: function($event) {
                          $event.preventDefault()
                          return _vm.add_media($event)
                        }
                      }
                    },
                    [
                      _vm._v(
                        "\n                    " +
                          _vm._s(_vm.btnText()) +
                          "\n                "
                      )
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _vm.field.desc
                ? _c(
                    "div",
                    { staticClass: "wpessential-field-desc el-col el-col-24" },
                    [_vm._v(_vm._s(_vm.field.desc))]
                  )
                : _vm._e()
            ]
          ),
          _vm._v(" "),
          _vm.field.help
            ? _c("wpe-help", { attrs: { help: _vm.field.help } })
            : _vm._e()
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeNumber.vue?vue&type=template&id=7b21bc34&":
/*!***********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeNumber.vue?vue&type=template&id=7b21bc34& ***!
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
    "transition",
    { attrs: { name: "fade" } },
    [
      _c(
        "el-row",
        { attrs: { gutter: 15, type: "flex" } },
        [
          _vm.field.heading
            ? _c("wpe-heading", {
                attrs: {
                  heading: _vm.field.heading,
                  subtitle: _vm.field.subtitle
                }
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
                "el-input-number",
                _vm._b(
                  {
                    staticClass: "wpessential-form-number",
                    attrs: { name: _vm.field.id, type: "number" },
                    on: { input: _vm.on_change },
                    model: {
                      value: _vm.value,
                      callback: function($$v) {
                        _vm.value = $$v
                      },
                      expression: "value"
                    }
                  },
                  "el-input-number",
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
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeRadio.vue?vue&type=template&id=a7cd6824&":
/*!**********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeRadio.vue?vue&type=template&id=a7cd6824& ***!
  \**********************************************************************************************************************************************************************************************************/
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
    "transition",
    { attrs: { name: "fade" } },
    [
      _c(
        "el-row",
        { attrs: { gutter: 15, type: "flex" } },
        [
          _vm.field.heading
            ? _c("wpe-heading", {
                attrs: {
                  heading: _vm.field.heading,
                  subtitle: _vm.field.subtitle
                }
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
              _vm.field.options
                ? _c(
                    "el-radio-group",
                    {
                      staticClass: "wpessential-form-radio",
                      on: { change: _vm.select_change },
                      model: {
                        value: _vm.value,
                        callback: function($$v) {
                          _vm.value = $$v
                        },
                        expression: "value"
                      }
                    },
                    _vm._l(_vm.data, function(option) {
                      return _c(
                        "el-radio",
                        _vm._b(
                          {
                            key: option.key,
                            attrs: {
                              label: _vm.field.id + "_" + option.key,
                              name: _vm.field.id + "_" + option.key
                            }
                          },
                          "el-radio",
                          _vm.attr,
                          false
                        ),
                        [
                          _vm._v(
                            "\n                    " +
                              _vm._s(option.label) +
                              "\n                "
                          )
                        ]
                      )
                    }),
                    1
                  )
                : _vm._e(),
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
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeSection.vue?vue&type=template&id=f74431d0&":
/*!************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeSection.vue?vue&type=template&id=f74431d0& ***!
  \************************************************************************************************************************************************************************************************************/
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
    "transition",
    { attrs: { name: "fade" } },
    [
      _c(
        "el-row",
        { attrs: { gutter: 15, type: "flex" } },
        [
          _c(
            "el-col",
            { staticClass: "wpessential-field", attrs: { span: 24 } },
            [
              _vm.field.heading
                ? _c(
                    "h2",
                    {
                      staticClass: "wpessential-field-heading el-col el-col-24"
                    },
                    [_vm._v(_vm._s(_vm.field.heading))]
                  )
                : _vm._e(),
              _vm._v(" "),
              _c(
                "el-divider",
                {
                  staticClass: "wpessential-form-divider",
                  attrs: { "content-position": "left" }
                },
                [
                  _vm.field.desc
                    ? _vm._t("default", [_vm._v(_vm._s(_vm.field.desc))])
                    : _vm._e()
                ],
                2
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeSelect.vue?vue&type=template&id=771b6a19&":
/*!***********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeSelect.vue?vue&type=template&id=771b6a19& ***!
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
    "transition",
    { attrs: { name: "fade" } },
    [
      _c(
        "el-row",
        { attrs: { gutter: 15, type: "flex" } },
        [
          _vm.field.heading
            ? _c("wpe-heading", {
                attrs: {
                  heading: _vm.field.heading,
                  subtitle: _vm.field.subtitle
                }
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
                "el-select",
                _vm._b(
                  {
                    staticClass: "wpessential-form-select",
                    attrs: { name: _vm.field.id },
                    on: { change: _vm.select_change },
                    model: {
                      value: _vm.value,
                      callback: function($$v) {
                        _vm.value = $$v
                      },
                      expression: "value"
                    }
                  },
                  "el-select",
                  _vm.attr,
                  false
                ),
                _vm._l(_vm.field.options, function(label, key) {
                  return _c("el-option", {
                    key: key,
                    attrs: { value: key, label: label }
                  })
                }),
                1
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
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeSlider.vue?vue&type=template&id=1bbe337e&":
/*!***********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeSlider.vue?vue&type=template&id=1bbe337e& ***!
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
    "transition",
    { attrs: { name: "fade" } },
    [
      _c(
        "el-row",
        { attrs: { gutter: 15, type: "flex" } },
        [
          _vm.field.heading
            ? _c("wpe-heading", {
                attrs: {
                  heading: _vm.field.heading,
                  subtitle: _vm.field.subtitle
                }
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
                "el-slider",
                _vm._b(
                  {
                    staticClass: "wpessential-form-slider",
                    on: { change: _vm.on_change },
                    model: {
                      value: _vm.value,
                      callback: function($$v) {
                        _vm.value = $$v
                      },
                      expression: "value"
                    }
                  },
                  "el-slider",
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
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeText.vue?vue&type=template&id=fd9551ec&":
/*!*********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeText.vue?vue&type=template&id=fd9551ec& ***!
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
    "transition",
    { attrs: { name: "fade" } },
    [
      _c(
        "el-row",
        { attrs: { gutter: 15, type: "flex" } },
        [
          _vm.field.heading
            ? _c("wpe-heading", {
                attrs: {
                  heading: _vm.field.heading,
                  subtitle: _vm.field.subtitle
                }
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
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeTextarea.vue?vue&type=template&id=6c129017&":
/*!*************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeTextarea.vue?vue&type=template&id=6c129017& ***!
  \*************************************************************************************************************************************************************************************************************/
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
    "transition",
    { attrs: { name: "fade" } },
    [
      _c(
        "el-row",
        { attrs: { gutter: 15, type: "flex" } },
        [
          _vm.field.heading
            ? _c("wpe-heading", {
                attrs: {
                  heading: _vm.field.heading,
                  subtitle: _vm.field.subtitle
                }
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
                    staticClass: "wpessential-form-textarea",
                    attrs: { name: _vm.field.id, type: "textarea" },
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
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeTime.vue?vue&type=template&id=413594aa&":
/*!*********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeTime.vue?vue&type=template&id=413594aa& ***!
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
    "transition",
    { attrs: { name: "fade" } },
    [
      _c(
        "el-row",
        { attrs: { gutter: 15, type: "flex" } },
        [
          _vm.field.heading
            ? _c("wpe-heading", {
                attrs: {
                  heading: _vm.field.heading,
                  subtitle: _vm.field.subtitle
                }
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
              _c("el-time-picker", {
                staticClass: "wpessential-form-time",
                attrs: {
                  "arrow-control": "",
                  placeholder: _vm.fieldPlaceholder,
                  size: "large",
                  "value-format": _vm.fieldTimeformat
                },
                on: { change: _vm.select_change },
                model: {
                  value: _vm.value,
                  callback: function($$v) {
                    _vm.value = $$v
                  },
                  expression: "value"
                }
              }),
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
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeToggle.vue?vue&type=template&id=b1fff71e&":
/*!***********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeToggle.vue?vue&type=template&id=b1fff71e& ***!
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
    "transition",
    { attrs: { name: "fade" } },
    [
      _c(
        "el-row",
        { attrs: { gutter: 15, type: "flex" } },
        [
          _vm.field.heading
            ? _c("wpe-heading", {
                attrs: {
                  heading: _vm.field.heading,
                  subtitle: _vm.field.subtitle
                }
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
                "el-switch",
                _vm._b(
                  {
                    staticClass: "wpessential-form-toggle",
                    attrs: { name: _vm.field.id },
                    on: { change: _vm.select_change },
                    model: {
                      value: _vm.value,
                      callback: function($$v) {
                        _vm.value = $$v
                      },
                      expression: "value"
                    }
                  },
                  "el-switch",
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
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeTransfer.vue?vue&type=template&id=6375d048&":
/*!*************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeTransfer.vue?vue&type=template&id=6375d048& ***!
  \*************************************************************************************************************************************************************************************************************/
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
    "transition",
    { attrs: { name: "fade" } },
    [
      _c(
        "el-row",
        { attrs: { gutter: 15, type: "flex" } },
        [
          _vm.field.heading
            ? _c("wpe-heading", {
                attrs: {
                  heading: _vm.field.heading,
                  subtitle: _vm.field.subtitle
                }
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
                "el-transfer",
                _vm._b(
                  {
                    staticClass: "wpessential-form-transfer",
                    attrs: { data: _vm.data },
                    on: { change: _vm.select_change },
                    model: {
                      value: _vm.value,
                      callback: function($$v) {
                        _vm.value = $$v
                      },
                      expression: "value"
                    }
                  },
                  "el-transfer",
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
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeUrl.vue?vue&type=template&id=2d701e22&":
/*!********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/options/components/WpeUrl.vue?vue&type=template&id=2d701e22& ***!
  \********************************************************************************************************************************************************************************************************/
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
    "transition",
    { attrs: { name: "fade" } },
    [
      _c(
        "el-row",
        { attrs: { gutter: 15, type: "flex" } },
        [
          _vm.field.heading
            ? _c("wpe-heading", {
                attrs: {
                  heading: _vm.field.heading,
                  subtitle: _vm.field.subtitle
                }
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
                {
                  staticClass: "wpessential-form-url",
                  attrs: { name: _vm.field.id, type: "url" },
                  on: { input: _vm.on_change },
                  model: {
                    value: _vm.value,
                    callback: function($$v) {
                      _vm.value = $$v
                    },
                    expression: "value"
                  }
                },
                [_c("template", { slot: "prepend" }, [_vm._v("https://")])],
                2
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

/***/ "./src/options.js":
/*!************************!*\
  !*** ./src/options.js ***!
  \************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _options_components_WpeText__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./options/components/WpeText */ "./src/options/components/WpeText.vue");
/* harmony import */ var _options_components_WpeTextarea__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./options/components/WpeTextarea */ "./src/options/components/WpeTextarea.vue");
/* harmony import */ var _options_components_WpeUrl__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./options/components/WpeUrl */ "./src/options/components/WpeUrl.vue");
/* harmony import */ var _options_components_WpeNumber__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./options/components/WpeNumber */ "./src/options/components/WpeNumber.vue");
/* harmony import */ var _options_components_WpeSelect__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./options/components/WpeSelect */ "./src/options/components/WpeSelect.vue");
/* harmony import */ var _options_components_WpeColor__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./options/components/WpeColor */ "./src/options/components/WpeColor.vue");
/* harmony import */ var _options_components_WpeSlider__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./options/components/WpeSlider */ "./src/options/components/WpeSlider.vue");
/* harmony import */ var _options_components_WpeToggle__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./options/components/WpeToggle */ "./src/options/components/WpeToggle.vue");
/* harmony import */ var _options_components_WpeDateTime__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./options/components/WpeDateTime */ "./src/options/components/WpeDateTime.vue");
/* harmony import */ var _options_components_WpeTime__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./options/components/WpeTime */ "./src/options/components/WpeTime.vue");
/* harmony import */ var _options_components_WpeTransfer__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./options/components/WpeTransfer */ "./src/options/components/WpeTransfer.vue");
/* harmony import */ var _options_components_WpeButtonGroup__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./options/components/WpeButtonGroup */ "./src/options/components/WpeButtonGroup.vue");
/* harmony import */ var _options_components_WpeButtonSet__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ./options/components/WpeButtonSet */ "./src/options/components/WpeButtonSet.vue");
/* harmony import */ var _options_components_WpeRadio__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./options/components/WpeRadio */ "./src/options/components/WpeRadio.vue");
/* harmony import */ var _options_components_WpeLinkColor__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! ./options/components/WpeLinkColor */ "./src/options/components/WpeLinkColor.vue");
/* harmony import */ var _options_components_WpeInfo__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! ./options/components/WpeInfo */ "./src/options/components/WpeInfo.vue");
/* harmony import */ var _options_components_WpeDivider__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./options/components/WpeDivider */ "./src/options/components/WpeDivider.vue");
/* harmony import */ var _options_components_WpeImageSelect__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! ./options/components/WpeImageSelect */ "./src/options/components/WpeImageSelect.vue");
/* harmony import */ var _options_components_WpeEditor__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! ./options/components/WpeEditor */ "./src/options/components/WpeEditor.vue");
/* harmony import */ var _options_components_WpeMedia__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! ./options/components/WpeMedia */ "./src/options/components/WpeMedia.vue");
/* harmony import */ var _options_components_WpeBackground__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! ./options/components/WpeBackground */ "./src/options/components/WpeBackground.vue");
/* harmony import */ var _options_components_WpeSection__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! ./options/components/WpeSection */ "./src/options/components/WpeSection.vue");
/* harmony import */ var _options_WpeHeading__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! ./options/WpeHeading */ "./src/options/WpeHeading.vue");
/* harmony import */ var _options_WpeHelp__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! ./options/WpeHelp */ "./src/options/WpeHelp.vue");
/* harmony import */ var _options_WpeOptionsPage__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! ./options/WpeOptionsPage */ "./src/options/WpeOptionsPage.vue");

























Vue.component("wpe-text", _options_components_WpeText__WEBPACK_IMPORTED_MODULE_0__["default"]);
Vue.component("wpe-textarea", _options_components_WpeTextarea__WEBPACK_IMPORTED_MODULE_1__["default"]);
Vue.component("wpe-url", _options_components_WpeUrl__WEBPACK_IMPORTED_MODULE_2__["default"]);
Vue.component("wpe-number", _options_components_WpeNumber__WEBPACK_IMPORTED_MODULE_3__["default"]);
Vue.component("wpe-select", _options_components_WpeSelect__WEBPACK_IMPORTED_MODULE_4__["default"]);
Vue.component("wpe-color", _options_components_WpeColor__WEBPACK_IMPORTED_MODULE_5__["default"]);
Vue.component("wpe-slider", _options_components_WpeSlider__WEBPACK_IMPORTED_MODULE_6__["default"]);
Vue.component("wpe-toggle", _options_components_WpeToggle__WEBPACK_IMPORTED_MODULE_7__["default"]);
Vue.component("wpe-date-time", _options_components_WpeDateTime__WEBPACK_IMPORTED_MODULE_8__["default"]);
Vue.component("wpe-time", _options_components_WpeTime__WEBPACK_IMPORTED_MODULE_9__["default"]);
Vue.component("wpe-transfer", _options_components_WpeTransfer__WEBPACK_IMPORTED_MODULE_10__["default"]);
Vue.component("wpe-button-group", _options_components_WpeButtonGroup__WEBPACK_IMPORTED_MODULE_11__["default"]);
Vue.component("wpe-button-set", _options_components_WpeButtonSet__WEBPACK_IMPORTED_MODULE_12__["default"]);
Vue.component("wpe-radio", _options_components_WpeRadio__WEBPACK_IMPORTED_MODULE_13__["default"]);
Vue.component("wpe-link-color", _options_components_WpeLinkColor__WEBPACK_IMPORTED_MODULE_14__["default"]);
Vue.component("wpe-info", _options_components_WpeInfo__WEBPACK_IMPORTED_MODULE_15__["default"]);
Vue.component("wpe-divider", _options_components_WpeDivider__WEBPACK_IMPORTED_MODULE_16__["default"]);
Vue.component("wpe-image-select", _options_components_WpeImageSelect__WEBPACK_IMPORTED_MODULE_17__["default"]);
Vue.component("wpe-editor", _options_components_WpeEditor__WEBPACK_IMPORTED_MODULE_18__["default"]);
Vue.component("wpe-media", _options_components_WpeMedia__WEBPACK_IMPORTED_MODULE_19__["default"]);
Vue.component("wpe-background", _options_components_WpeBackground__WEBPACK_IMPORTED_MODULE_20__["default"]);
Vue.component("wpe-section", _options_components_WpeSection__WEBPACK_IMPORTED_MODULE_21__["default"]);
Vue.component("wpe-heading", _options_WpeHeading__WEBPACK_IMPORTED_MODULE_22__["default"]);
Vue.component("wpe-help", _options_WpeHelp__WEBPACK_IMPORTED_MODULE_23__["default"]);
Vue.component("wpe-options-page", _options_WpeOptionsPage__WEBPACK_IMPORTED_MODULE_24__["default"]);

/***/ }),

/***/ "./src/options/WpeHeading.vue":
/*!************************************!*\
  !*** ./src/options/WpeHeading.vue ***!
  \************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeHeading_vue_vue_type_template_id_3106b800___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeHeading.vue?vue&type=template&id=3106b800& */ "./src/options/WpeHeading.vue?vue&type=template&id=3106b800&");
/* harmony import */ var _WpeHeading_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeHeading.vue?vue&type=script&lang=js& */ "./src/options/WpeHeading.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeHeading_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeHeading_vue_vue_type_template_id_3106b800___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeHeading_vue_vue_type_template_id_3106b800___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/WpeHeading.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/WpeHeading.vue?vue&type=script&lang=js&":
/*!*************************************************************!*\
  !*** ./src/options/WpeHeading.vue?vue&type=script&lang=js& ***!
  \*************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeHeading_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/babel-loader/lib??ref--4-0!../../node_modules/vue-loader/lib??vue-loader-options!./WpeHeading.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/WpeHeading.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeHeading_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/WpeHeading.vue?vue&type=template&id=3106b800&":
/*!*******************************************************************!*\
  !*** ./src/options/WpeHeading.vue?vue&type=template&id=3106b800& ***!
  \*******************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeHeading_vue_vue_type_template_id_3106b800___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../node_modules/vue-loader/lib??vue-loader-options!./WpeHeading.vue?vue&type=template&id=3106b800& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/WpeHeading.vue?vue&type=template&id=3106b800&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeHeading_vue_vue_type_template_id_3106b800___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeHeading_vue_vue_type_template_id_3106b800___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/WpeHelp.vue":
/*!*********************************!*\
  !*** ./src/options/WpeHelp.vue ***!
  \*********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeHelp_vue_vue_type_template_id_69502a9a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeHelp.vue?vue&type=template&id=69502a9a& */ "./src/options/WpeHelp.vue?vue&type=template&id=69502a9a&");
/* harmony import */ var _WpeHelp_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeHelp.vue?vue&type=script&lang=js& */ "./src/options/WpeHelp.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeHelp_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeHelp_vue_vue_type_template_id_69502a9a___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeHelp_vue_vue_type_template_id_69502a9a___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/WpeHelp.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/WpeHelp.vue?vue&type=script&lang=js&":
/*!**********************************************************!*\
  !*** ./src/options/WpeHelp.vue?vue&type=script&lang=js& ***!
  \**********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeHelp_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/babel-loader/lib??ref--4-0!../../node_modules/vue-loader/lib??vue-loader-options!./WpeHelp.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/WpeHelp.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeHelp_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/WpeHelp.vue?vue&type=template&id=69502a9a&":
/*!****************************************************************!*\
  !*** ./src/options/WpeHelp.vue?vue&type=template&id=69502a9a& ***!
  \****************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeHelp_vue_vue_type_template_id_69502a9a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../node_modules/vue-loader/lib??vue-loader-options!./WpeHelp.vue?vue&type=template&id=69502a9a& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/WpeHelp.vue?vue&type=template&id=69502a9a&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeHelp_vue_vue_type_template_id_69502a9a___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeHelp_vue_vue_type_template_id_69502a9a___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



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

/***/ "./src/options/components/WpeBackground.vue":
/*!**************************************************!*\
  !*** ./src/options/components/WpeBackground.vue ***!
  \**************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeBackground_vue_vue_type_template_id_e1f1526a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeBackground.vue?vue&type=template&id=e1f1526a& */ "./src/options/components/WpeBackground.vue?vue&type=template&id=e1f1526a&");
/* harmony import */ var _WpeBackground_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeBackground.vue?vue&type=script&lang=js& */ "./src/options/components/WpeBackground.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeBackground_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeBackground_vue_vue_type_template_id_e1f1526a___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeBackground_vue_vue_type_template_id_e1f1526a___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/components/WpeBackground.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/components/WpeBackground.vue?vue&type=script&lang=js&":
/*!***************************************************************************!*\
  !*** ./src/options/components/WpeBackground.vue?vue&type=script&lang=js& ***!
  \***************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeBackground_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeBackground.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeBackground.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeBackground_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/components/WpeBackground.vue?vue&type=template&id=e1f1526a&":
/*!*********************************************************************************!*\
  !*** ./src/options/components/WpeBackground.vue?vue&type=template&id=e1f1526a& ***!
  \*********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeBackground_vue_vue_type_template_id_e1f1526a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeBackground.vue?vue&type=template&id=e1f1526a& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeBackground.vue?vue&type=template&id=e1f1526a&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeBackground_vue_vue_type_template_id_e1f1526a___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeBackground_vue_vue_type_template_id_e1f1526a___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/components/WpeButtonGroup.vue":
/*!***************************************************!*\
  !*** ./src/options/components/WpeButtonGroup.vue ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeButtonGroup_vue_vue_type_template_id_478325c0___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeButtonGroup.vue?vue&type=template&id=478325c0& */ "./src/options/components/WpeButtonGroup.vue?vue&type=template&id=478325c0&");
/* harmony import */ var _WpeButtonGroup_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeButtonGroup.vue?vue&type=script&lang=js& */ "./src/options/components/WpeButtonGroup.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeButtonGroup_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeButtonGroup_vue_vue_type_template_id_478325c0___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeButtonGroup_vue_vue_type_template_id_478325c0___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/components/WpeButtonGroup.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/components/WpeButtonGroup.vue?vue&type=script&lang=js&":
/*!****************************************************************************!*\
  !*** ./src/options/components/WpeButtonGroup.vue?vue&type=script&lang=js& ***!
  \****************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeButtonGroup_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeButtonGroup.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeButtonGroup.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeButtonGroup_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/components/WpeButtonGroup.vue?vue&type=template&id=478325c0&":
/*!**********************************************************************************!*\
  !*** ./src/options/components/WpeButtonGroup.vue?vue&type=template&id=478325c0& ***!
  \**********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeButtonGroup_vue_vue_type_template_id_478325c0___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeButtonGroup.vue?vue&type=template&id=478325c0& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeButtonGroup.vue?vue&type=template&id=478325c0&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeButtonGroup_vue_vue_type_template_id_478325c0___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeButtonGroup_vue_vue_type_template_id_478325c0___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/components/WpeButtonSet.vue":
/*!*************************************************!*\
  !*** ./src/options/components/WpeButtonSet.vue ***!
  \*************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeButtonSet_vue_vue_type_template_id_4726d7c3___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeButtonSet.vue?vue&type=template&id=4726d7c3& */ "./src/options/components/WpeButtonSet.vue?vue&type=template&id=4726d7c3&");
/* harmony import */ var _WpeButtonSet_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeButtonSet.vue?vue&type=script&lang=js& */ "./src/options/components/WpeButtonSet.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeButtonSet_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeButtonSet_vue_vue_type_template_id_4726d7c3___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeButtonSet_vue_vue_type_template_id_4726d7c3___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/components/WpeButtonSet.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/components/WpeButtonSet.vue?vue&type=script&lang=js&":
/*!**************************************************************************!*\
  !*** ./src/options/components/WpeButtonSet.vue?vue&type=script&lang=js& ***!
  \**************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeButtonSet_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeButtonSet.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeButtonSet.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeButtonSet_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/components/WpeButtonSet.vue?vue&type=template&id=4726d7c3&":
/*!********************************************************************************!*\
  !*** ./src/options/components/WpeButtonSet.vue?vue&type=template&id=4726d7c3& ***!
  \********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeButtonSet_vue_vue_type_template_id_4726d7c3___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeButtonSet.vue?vue&type=template&id=4726d7c3& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeButtonSet.vue?vue&type=template&id=4726d7c3&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeButtonSet_vue_vue_type_template_id_4726d7c3___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeButtonSet_vue_vue_type_template_id_4726d7c3___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/components/WpeColor.vue":
/*!*********************************************!*\
  !*** ./src/options/components/WpeColor.vue ***!
  \*********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeColor_vue_vue_type_template_id_5c007356___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeColor.vue?vue&type=template&id=5c007356& */ "./src/options/components/WpeColor.vue?vue&type=template&id=5c007356&");
/* harmony import */ var _WpeColor_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeColor.vue?vue&type=script&lang=js& */ "./src/options/components/WpeColor.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeColor_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeColor_vue_vue_type_template_id_5c007356___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeColor_vue_vue_type_template_id_5c007356___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/components/WpeColor.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/components/WpeColor.vue?vue&type=script&lang=js&":
/*!**********************************************************************!*\
  !*** ./src/options/components/WpeColor.vue?vue&type=script&lang=js& ***!
  \**********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeColor_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeColor.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeColor.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeColor_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/components/WpeColor.vue?vue&type=template&id=5c007356&":
/*!****************************************************************************!*\
  !*** ./src/options/components/WpeColor.vue?vue&type=template&id=5c007356& ***!
  \****************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeColor_vue_vue_type_template_id_5c007356___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeColor.vue?vue&type=template&id=5c007356& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeColor.vue?vue&type=template&id=5c007356&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeColor_vue_vue_type_template_id_5c007356___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeColor_vue_vue_type_template_id_5c007356___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/components/WpeDateTime.vue":
/*!************************************************!*\
  !*** ./src/options/components/WpeDateTime.vue ***!
  \************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeDateTime_vue_vue_type_template_id_0794eff8___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeDateTime.vue?vue&type=template&id=0794eff8& */ "./src/options/components/WpeDateTime.vue?vue&type=template&id=0794eff8&");
/* harmony import */ var _WpeDateTime_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeDateTime.vue?vue&type=script&lang=js& */ "./src/options/components/WpeDateTime.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeDateTime_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeDateTime_vue_vue_type_template_id_0794eff8___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeDateTime_vue_vue_type_template_id_0794eff8___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/components/WpeDateTime.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/components/WpeDateTime.vue?vue&type=script&lang=js&":
/*!*************************************************************************!*\
  !*** ./src/options/components/WpeDateTime.vue?vue&type=script&lang=js& ***!
  \*************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeDateTime_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeDateTime.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeDateTime.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeDateTime_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/components/WpeDateTime.vue?vue&type=template&id=0794eff8&":
/*!*******************************************************************************!*\
  !*** ./src/options/components/WpeDateTime.vue?vue&type=template&id=0794eff8& ***!
  \*******************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeDateTime_vue_vue_type_template_id_0794eff8___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeDateTime.vue?vue&type=template&id=0794eff8& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeDateTime.vue?vue&type=template&id=0794eff8&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeDateTime_vue_vue_type_template_id_0794eff8___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeDateTime_vue_vue_type_template_id_0794eff8___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/components/WpeDivider.vue":
/*!***********************************************!*\
  !*** ./src/options/components/WpeDivider.vue ***!
  \***********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeDivider_vue_vue_type_template_id_0d2d414c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeDivider.vue?vue&type=template&id=0d2d414c& */ "./src/options/components/WpeDivider.vue?vue&type=template&id=0d2d414c&");
/* harmony import */ var _WpeDivider_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeDivider.vue?vue&type=script&lang=js& */ "./src/options/components/WpeDivider.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeDivider_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeDivider_vue_vue_type_template_id_0d2d414c___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeDivider_vue_vue_type_template_id_0d2d414c___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/components/WpeDivider.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/components/WpeDivider.vue?vue&type=script&lang=js&":
/*!************************************************************************!*\
  !*** ./src/options/components/WpeDivider.vue?vue&type=script&lang=js& ***!
  \************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeDivider_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeDivider.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeDivider.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeDivider_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/components/WpeDivider.vue?vue&type=template&id=0d2d414c&":
/*!******************************************************************************!*\
  !*** ./src/options/components/WpeDivider.vue?vue&type=template&id=0d2d414c& ***!
  \******************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeDivider_vue_vue_type_template_id_0d2d414c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeDivider.vue?vue&type=template&id=0d2d414c& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeDivider.vue?vue&type=template&id=0d2d414c&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeDivider_vue_vue_type_template_id_0d2d414c___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeDivider_vue_vue_type_template_id_0d2d414c___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/components/WpeEditor.vue":
/*!**********************************************!*\
  !*** ./src/options/components/WpeEditor.vue ***!
  \**********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeEditor_vue_vue_type_template_id_7d0ab60a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeEditor.vue?vue&type=template&id=7d0ab60a& */ "./src/options/components/WpeEditor.vue?vue&type=template&id=7d0ab60a&");
/* harmony import */ var _WpeEditor_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeEditor.vue?vue&type=script&lang=js& */ "./src/options/components/WpeEditor.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeEditor_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeEditor_vue_vue_type_template_id_7d0ab60a___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeEditor_vue_vue_type_template_id_7d0ab60a___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/components/WpeEditor.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/components/WpeEditor.vue?vue&type=script&lang=js&":
/*!***********************************************************************!*\
  !*** ./src/options/components/WpeEditor.vue?vue&type=script&lang=js& ***!
  \***********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeEditor_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeEditor.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeEditor.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeEditor_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/components/WpeEditor.vue?vue&type=template&id=7d0ab60a&":
/*!*****************************************************************************!*\
  !*** ./src/options/components/WpeEditor.vue?vue&type=template&id=7d0ab60a& ***!
  \*****************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeEditor_vue_vue_type_template_id_7d0ab60a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeEditor.vue?vue&type=template&id=7d0ab60a& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeEditor.vue?vue&type=template&id=7d0ab60a&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeEditor_vue_vue_type_template_id_7d0ab60a___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeEditor_vue_vue_type_template_id_7d0ab60a___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/components/WpeImageSelect.vue":
/*!***************************************************!*\
  !*** ./src/options/components/WpeImageSelect.vue ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeImageSelect_vue_vue_type_template_id_572403ea___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeImageSelect.vue?vue&type=template&id=572403ea& */ "./src/options/components/WpeImageSelect.vue?vue&type=template&id=572403ea&");
/* harmony import */ var _WpeImageSelect_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeImageSelect.vue?vue&type=script&lang=js& */ "./src/options/components/WpeImageSelect.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeImageSelect_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeImageSelect_vue_vue_type_template_id_572403ea___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeImageSelect_vue_vue_type_template_id_572403ea___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/components/WpeImageSelect.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/components/WpeImageSelect.vue?vue&type=script&lang=js&":
/*!****************************************************************************!*\
  !*** ./src/options/components/WpeImageSelect.vue?vue&type=script&lang=js& ***!
  \****************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeImageSelect_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeImageSelect.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeImageSelect.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeImageSelect_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/components/WpeImageSelect.vue?vue&type=template&id=572403ea&":
/*!**********************************************************************************!*\
  !*** ./src/options/components/WpeImageSelect.vue?vue&type=template&id=572403ea& ***!
  \**********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeImageSelect_vue_vue_type_template_id_572403ea___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeImageSelect.vue?vue&type=template&id=572403ea& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeImageSelect.vue?vue&type=template&id=572403ea&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeImageSelect_vue_vue_type_template_id_572403ea___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeImageSelect_vue_vue_type_template_id_572403ea___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/components/WpeInfo.vue":
/*!********************************************!*\
  !*** ./src/options/components/WpeInfo.vue ***!
  \********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeInfo_vue_vue_type_template_id_70ba63ea___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeInfo.vue?vue&type=template&id=70ba63ea& */ "./src/options/components/WpeInfo.vue?vue&type=template&id=70ba63ea&");
/* harmony import */ var _WpeInfo_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeInfo.vue?vue&type=script&lang=js& */ "./src/options/components/WpeInfo.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeInfo_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeInfo_vue_vue_type_template_id_70ba63ea___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeInfo_vue_vue_type_template_id_70ba63ea___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/components/WpeInfo.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/components/WpeInfo.vue?vue&type=script&lang=js&":
/*!*********************************************************************!*\
  !*** ./src/options/components/WpeInfo.vue?vue&type=script&lang=js& ***!
  \*********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeInfo_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeInfo.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeInfo.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeInfo_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/components/WpeInfo.vue?vue&type=template&id=70ba63ea&":
/*!***************************************************************************!*\
  !*** ./src/options/components/WpeInfo.vue?vue&type=template&id=70ba63ea& ***!
  \***************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeInfo_vue_vue_type_template_id_70ba63ea___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeInfo.vue?vue&type=template&id=70ba63ea& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeInfo.vue?vue&type=template&id=70ba63ea&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeInfo_vue_vue_type_template_id_70ba63ea___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeInfo_vue_vue_type_template_id_70ba63ea___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/components/WpeLinkColor.vue":
/*!*************************************************!*\
  !*** ./src/options/components/WpeLinkColor.vue ***!
  \*************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeLinkColor_vue_vue_type_template_id_4f8e56fc___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeLinkColor.vue?vue&type=template&id=4f8e56fc& */ "./src/options/components/WpeLinkColor.vue?vue&type=template&id=4f8e56fc&");
/* harmony import */ var _WpeLinkColor_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeLinkColor.vue?vue&type=script&lang=js& */ "./src/options/components/WpeLinkColor.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeLinkColor_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeLinkColor_vue_vue_type_template_id_4f8e56fc___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeLinkColor_vue_vue_type_template_id_4f8e56fc___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/components/WpeLinkColor.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/components/WpeLinkColor.vue?vue&type=script&lang=js&":
/*!**************************************************************************!*\
  !*** ./src/options/components/WpeLinkColor.vue?vue&type=script&lang=js& ***!
  \**************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeLinkColor_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeLinkColor.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeLinkColor.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeLinkColor_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/components/WpeLinkColor.vue?vue&type=template&id=4f8e56fc&":
/*!********************************************************************************!*\
  !*** ./src/options/components/WpeLinkColor.vue?vue&type=template&id=4f8e56fc& ***!
  \********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeLinkColor_vue_vue_type_template_id_4f8e56fc___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeLinkColor.vue?vue&type=template&id=4f8e56fc& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeLinkColor.vue?vue&type=template&id=4f8e56fc&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeLinkColor_vue_vue_type_template_id_4f8e56fc___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeLinkColor_vue_vue_type_template_id_4f8e56fc___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/components/WpeMedia.vue":
/*!*********************************************!*\
  !*** ./src/options/components/WpeMedia.vue ***!
  \*********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeMedia_vue_vue_type_template_id_65828b57___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeMedia.vue?vue&type=template&id=65828b57& */ "./src/options/components/WpeMedia.vue?vue&type=template&id=65828b57&");
/* harmony import */ var _WpeMedia_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeMedia.vue?vue&type=script&lang=js& */ "./src/options/components/WpeMedia.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeMedia_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeMedia_vue_vue_type_template_id_65828b57___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeMedia_vue_vue_type_template_id_65828b57___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/components/WpeMedia.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/components/WpeMedia.vue?vue&type=script&lang=js&":
/*!**********************************************************************!*\
  !*** ./src/options/components/WpeMedia.vue?vue&type=script&lang=js& ***!
  \**********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeMedia_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeMedia.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeMedia.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeMedia_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/components/WpeMedia.vue?vue&type=template&id=65828b57&":
/*!****************************************************************************!*\
  !*** ./src/options/components/WpeMedia.vue?vue&type=template&id=65828b57& ***!
  \****************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeMedia_vue_vue_type_template_id_65828b57___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeMedia.vue?vue&type=template&id=65828b57& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeMedia.vue?vue&type=template&id=65828b57&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeMedia_vue_vue_type_template_id_65828b57___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeMedia_vue_vue_type_template_id_65828b57___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/components/WpeNumber.vue":
/*!**********************************************!*\
  !*** ./src/options/components/WpeNumber.vue ***!
  \**********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeNumber_vue_vue_type_template_id_7b21bc34___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeNumber.vue?vue&type=template&id=7b21bc34& */ "./src/options/components/WpeNumber.vue?vue&type=template&id=7b21bc34&");
/* harmony import */ var _WpeNumber_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeNumber.vue?vue&type=script&lang=js& */ "./src/options/components/WpeNumber.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeNumber_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeNumber_vue_vue_type_template_id_7b21bc34___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeNumber_vue_vue_type_template_id_7b21bc34___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/components/WpeNumber.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/components/WpeNumber.vue?vue&type=script&lang=js&":
/*!***********************************************************************!*\
  !*** ./src/options/components/WpeNumber.vue?vue&type=script&lang=js& ***!
  \***********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeNumber_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeNumber.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeNumber.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeNumber_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/components/WpeNumber.vue?vue&type=template&id=7b21bc34&":
/*!*****************************************************************************!*\
  !*** ./src/options/components/WpeNumber.vue?vue&type=template&id=7b21bc34& ***!
  \*****************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeNumber_vue_vue_type_template_id_7b21bc34___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeNumber.vue?vue&type=template&id=7b21bc34& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeNumber.vue?vue&type=template&id=7b21bc34&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeNumber_vue_vue_type_template_id_7b21bc34___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeNumber_vue_vue_type_template_id_7b21bc34___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/components/WpeRadio.vue":
/*!*********************************************!*\
  !*** ./src/options/components/WpeRadio.vue ***!
  \*********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeRadio_vue_vue_type_template_id_a7cd6824___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeRadio.vue?vue&type=template&id=a7cd6824& */ "./src/options/components/WpeRadio.vue?vue&type=template&id=a7cd6824&");
/* harmony import */ var _WpeRadio_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeRadio.vue?vue&type=script&lang=js& */ "./src/options/components/WpeRadio.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeRadio_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeRadio_vue_vue_type_template_id_a7cd6824___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeRadio_vue_vue_type_template_id_a7cd6824___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/components/WpeRadio.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/components/WpeRadio.vue?vue&type=script&lang=js&":
/*!**********************************************************************!*\
  !*** ./src/options/components/WpeRadio.vue?vue&type=script&lang=js& ***!
  \**********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeRadio_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeRadio.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeRadio.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeRadio_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/components/WpeRadio.vue?vue&type=template&id=a7cd6824&":
/*!****************************************************************************!*\
  !*** ./src/options/components/WpeRadio.vue?vue&type=template&id=a7cd6824& ***!
  \****************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeRadio_vue_vue_type_template_id_a7cd6824___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeRadio.vue?vue&type=template&id=a7cd6824& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeRadio.vue?vue&type=template&id=a7cd6824&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeRadio_vue_vue_type_template_id_a7cd6824___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeRadio_vue_vue_type_template_id_a7cd6824___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/components/WpeSection.vue":
/*!***********************************************!*\
  !*** ./src/options/components/WpeSection.vue ***!
  \***********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeSection_vue_vue_type_template_id_f74431d0___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeSection.vue?vue&type=template&id=f74431d0& */ "./src/options/components/WpeSection.vue?vue&type=template&id=f74431d0&");
/* harmony import */ var _WpeSection_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeSection.vue?vue&type=script&lang=js& */ "./src/options/components/WpeSection.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeSection_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeSection_vue_vue_type_template_id_f74431d0___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeSection_vue_vue_type_template_id_f74431d0___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/components/WpeSection.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/components/WpeSection.vue?vue&type=script&lang=js&":
/*!************************************************************************!*\
  !*** ./src/options/components/WpeSection.vue?vue&type=script&lang=js& ***!
  \************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeSection_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeSection.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeSection.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeSection_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/components/WpeSection.vue?vue&type=template&id=f74431d0&":
/*!******************************************************************************!*\
  !*** ./src/options/components/WpeSection.vue?vue&type=template&id=f74431d0& ***!
  \******************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeSection_vue_vue_type_template_id_f74431d0___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeSection.vue?vue&type=template&id=f74431d0& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeSection.vue?vue&type=template&id=f74431d0&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeSection_vue_vue_type_template_id_f74431d0___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeSection_vue_vue_type_template_id_f74431d0___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/components/WpeSelect.vue":
/*!**********************************************!*\
  !*** ./src/options/components/WpeSelect.vue ***!
  \**********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeSelect_vue_vue_type_template_id_771b6a19___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeSelect.vue?vue&type=template&id=771b6a19& */ "./src/options/components/WpeSelect.vue?vue&type=template&id=771b6a19&");
/* harmony import */ var _WpeSelect_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeSelect.vue?vue&type=script&lang=js& */ "./src/options/components/WpeSelect.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeSelect_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeSelect_vue_vue_type_template_id_771b6a19___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeSelect_vue_vue_type_template_id_771b6a19___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/components/WpeSelect.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/components/WpeSelect.vue?vue&type=script&lang=js&":
/*!***********************************************************************!*\
  !*** ./src/options/components/WpeSelect.vue?vue&type=script&lang=js& ***!
  \***********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeSelect_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeSelect.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeSelect.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeSelect_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/components/WpeSelect.vue?vue&type=template&id=771b6a19&":
/*!*****************************************************************************!*\
  !*** ./src/options/components/WpeSelect.vue?vue&type=template&id=771b6a19& ***!
  \*****************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeSelect_vue_vue_type_template_id_771b6a19___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeSelect.vue?vue&type=template&id=771b6a19& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeSelect.vue?vue&type=template&id=771b6a19&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeSelect_vue_vue_type_template_id_771b6a19___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeSelect_vue_vue_type_template_id_771b6a19___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/components/WpeSlider.vue":
/*!**********************************************!*\
  !*** ./src/options/components/WpeSlider.vue ***!
  \**********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeSlider_vue_vue_type_template_id_1bbe337e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeSlider.vue?vue&type=template&id=1bbe337e& */ "./src/options/components/WpeSlider.vue?vue&type=template&id=1bbe337e&");
/* harmony import */ var _WpeSlider_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeSlider.vue?vue&type=script&lang=js& */ "./src/options/components/WpeSlider.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeSlider_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeSlider_vue_vue_type_template_id_1bbe337e___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeSlider_vue_vue_type_template_id_1bbe337e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/components/WpeSlider.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/components/WpeSlider.vue?vue&type=script&lang=js&":
/*!***********************************************************************!*\
  !*** ./src/options/components/WpeSlider.vue?vue&type=script&lang=js& ***!
  \***********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeSlider_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeSlider.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeSlider.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeSlider_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/components/WpeSlider.vue?vue&type=template&id=1bbe337e&":
/*!*****************************************************************************!*\
  !*** ./src/options/components/WpeSlider.vue?vue&type=template&id=1bbe337e& ***!
  \*****************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeSlider_vue_vue_type_template_id_1bbe337e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeSlider.vue?vue&type=template&id=1bbe337e& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeSlider.vue?vue&type=template&id=1bbe337e&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeSlider_vue_vue_type_template_id_1bbe337e___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeSlider_vue_vue_type_template_id_1bbe337e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/components/WpeText.vue":
/*!********************************************!*\
  !*** ./src/options/components/WpeText.vue ***!
  \********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeText_vue_vue_type_template_id_fd9551ec___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeText.vue?vue&type=template&id=fd9551ec& */ "./src/options/components/WpeText.vue?vue&type=template&id=fd9551ec&");
/* harmony import */ var _WpeText_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeText.vue?vue&type=script&lang=js& */ "./src/options/components/WpeText.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeText_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeText_vue_vue_type_template_id_fd9551ec___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeText_vue_vue_type_template_id_fd9551ec___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/components/WpeText.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/components/WpeText.vue?vue&type=script&lang=js&":
/*!*********************************************************************!*\
  !*** ./src/options/components/WpeText.vue?vue&type=script&lang=js& ***!
  \*********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeText_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeText.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeText.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeText_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/components/WpeText.vue?vue&type=template&id=fd9551ec&":
/*!***************************************************************************!*\
  !*** ./src/options/components/WpeText.vue?vue&type=template&id=fd9551ec& ***!
  \***************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeText_vue_vue_type_template_id_fd9551ec___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeText.vue?vue&type=template&id=fd9551ec& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeText.vue?vue&type=template&id=fd9551ec&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeText_vue_vue_type_template_id_fd9551ec___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeText_vue_vue_type_template_id_fd9551ec___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/components/WpeTextarea.vue":
/*!************************************************!*\
  !*** ./src/options/components/WpeTextarea.vue ***!
  \************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeTextarea_vue_vue_type_template_id_6c129017___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeTextarea.vue?vue&type=template&id=6c129017& */ "./src/options/components/WpeTextarea.vue?vue&type=template&id=6c129017&");
/* harmony import */ var _WpeTextarea_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeTextarea.vue?vue&type=script&lang=js& */ "./src/options/components/WpeTextarea.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeTextarea_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeTextarea_vue_vue_type_template_id_6c129017___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeTextarea_vue_vue_type_template_id_6c129017___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/components/WpeTextarea.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/components/WpeTextarea.vue?vue&type=script&lang=js&":
/*!*************************************************************************!*\
  !*** ./src/options/components/WpeTextarea.vue?vue&type=script&lang=js& ***!
  \*************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeTextarea_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeTextarea.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeTextarea.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeTextarea_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/components/WpeTextarea.vue?vue&type=template&id=6c129017&":
/*!*******************************************************************************!*\
  !*** ./src/options/components/WpeTextarea.vue?vue&type=template&id=6c129017& ***!
  \*******************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeTextarea_vue_vue_type_template_id_6c129017___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeTextarea.vue?vue&type=template&id=6c129017& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeTextarea.vue?vue&type=template&id=6c129017&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeTextarea_vue_vue_type_template_id_6c129017___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeTextarea_vue_vue_type_template_id_6c129017___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/components/WpeTime.vue":
/*!********************************************!*\
  !*** ./src/options/components/WpeTime.vue ***!
  \********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeTime_vue_vue_type_template_id_413594aa___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeTime.vue?vue&type=template&id=413594aa& */ "./src/options/components/WpeTime.vue?vue&type=template&id=413594aa&");
/* harmony import */ var _WpeTime_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeTime.vue?vue&type=script&lang=js& */ "./src/options/components/WpeTime.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeTime_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeTime_vue_vue_type_template_id_413594aa___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeTime_vue_vue_type_template_id_413594aa___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/components/WpeTime.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/components/WpeTime.vue?vue&type=script&lang=js&":
/*!*********************************************************************!*\
  !*** ./src/options/components/WpeTime.vue?vue&type=script&lang=js& ***!
  \*********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeTime_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeTime.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeTime.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeTime_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/components/WpeTime.vue?vue&type=template&id=413594aa&":
/*!***************************************************************************!*\
  !*** ./src/options/components/WpeTime.vue?vue&type=template&id=413594aa& ***!
  \***************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeTime_vue_vue_type_template_id_413594aa___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeTime.vue?vue&type=template&id=413594aa& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeTime.vue?vue&type=template&id=413594aa&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeTime_vue_vue_type_template_id_413594aa___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeTime_vue_vue_type_template_id_413594aa___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/components/WpeToggle.vue":
/*!**********************************************!*\
  !*** ./src/options/components/WpeToggle.vue ***!
  \**********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeToggle_vue_vue_type_template_id_b1fff71e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeToggle.vue?vue&type=template&id=b1fff71e& */ "./src/options/components/WpeToggle.vue?vue&type=template&id=b1fff71e&");
/* harmony import */ var _WpeToggle_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeToggle.vue?vue&type=script&lang=js& */ "./src/options/components/WpeToggle.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeToggle_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeToggle_vue_vue_type_template_id_b1fff71e___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeToggle_vue_vue_type_template_id_b1fff71e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/components/WpeToggle.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/components/WpeToggle.vue?vue&type=script&lang=js&":
/*!***********************************************************************!*\
  !*** ./src/options/components/WpeToggle.vue?vue&type=script&lang=js& ***!
  \***********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeToggle_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeToggle.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeToggle.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeToggle_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/components/WpeToggle.vue?vue&type=template&id=b1fff71e&":
/*!*****************************************************************************!*\
  !*** ./src/options/components/WpeToggle.vue?vue&type=template&id=b1fff71e& ***!
  \*****************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeToggle_vue_vue_type_template_id_b1fff71e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeToggle.vue?vue&type=template&id=b1fff71e& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeToggle.vue?vue&type=template&id=b1fff71e&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeToggle_vue_vue_type_template_id_b1fff71e___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeToggle_vue_vue_type_template_id_b1fff71e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/components/WpeTransfer.vue":
/*!************************************************!*\
  !*** ./src/options/components/WpeTransfer.vue ***!
  \************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeTransfer_vue_vue_type_template_id_6375d048___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeTransfer.vue?vue&type=template&id=6375d048& */ "./src/options/components/WpeTransfer.vue?vue&type=template&id=6375d048&");
/* harmony import */ var _WpeTransfer_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeTransfer.vue?vue&type=script&lang=js& */ "./src/options/components/WpeTransfer.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeTransfer_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeTransfer_vue_vue_type_template_id_6375d048___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeTransfer_vue_vue_type_template_id_6375d048___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/components/WpeTransfer.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/components/WpeTransfer.vue?vue&type=script&lang=js&":
/*!*************************************************************************!*\
  !*** ./src/options/components/WpeTransfer.vue?vue&type=script&lang=js& ***!
  \*************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeTransfer_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeTransfer.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeTransfer.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeTransfer_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/components/WpeTransfer.vue?vue&type=template&id=6375d048&":
/*!*******************************************************************************!*\
  !*** ./src/options/components/WpeTransfer.vue?vue&type=template&id=6375d048& ***!
  \*******************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeTransfer_vue_vue_type_template_id_6375d048___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeTransfer.vue?vue&type=template&id=6375d048& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeTransfer.vue?vue&type=template&id=6375d048&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeTransfer_vue_vue_type_template_id_6375d048___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeTransfer_vue_vue_type_template_id_6375d048___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./src/options/components/WpeUrl.vue":
/*!*******************************************!*\
  !*** ./src/options/components/WpeUrl.vue ***!
  \*******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _WpeUrl_vue_vue_type_template_id_2d701e22___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WpeUrl.vue?vue&type=template&id=2d701e22& */ "./src/options/components/WpeUrl.vue?vue&type=template&id=2d701e22&");
/* harmony import */ var _WpeUrl_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WpeUrl.vue?vue&type=script&lang=js& */ "./src/options/components/WpeUrl.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _WpeUrl_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _WpeUrl_vue_vue_type_template_id_2d701e22___WEBPACK_IMPORTED_MODULE_0__["render"],
  _WpeUrl_vue_vue_type_template_id_2d701e22___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "src/options/components/WpeUrl.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./src/options/components/WpeUrl.vue?vue&type=script&lang=js&":
/*!********************************************************************!*\
  !*** ./src/options/components/WpeUrl.vue?vue&type=script&lang=js& ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeUrl_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeUrl.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeUrl.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeUrl_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./src/options/components/WpeUrl.vue?vue&type=template&id=2d701e22&":
/*!**************************************************************************!*\
  !*** ./src/options/components/WpeUrl.vue?vue&type=template&id=2d701e22& ***!
  \**************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeUrl_vue_vue_type_template_id_2d701e22___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./WpeUrl.vue?vue&type=template&id=2d701e22& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/options/components/WpeUrl.vue?vue&type=template&id=2d701e22&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeUrl_vue_vue_type_template_id_2d701e22___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WpeUrl_vue_vue_type_template_id_2d701e22___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



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

/***/ 1:
/*!******************************!*\
  !*** multi ./src/options.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! F:\MAMP\htdocs\wpe\wp-content\plugins\wpessential\src\options.js */"./src/options.js");


/***/ })

/******/ });