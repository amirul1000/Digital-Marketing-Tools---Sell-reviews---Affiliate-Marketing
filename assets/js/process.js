"use strict";

var pageOverlay = pageOverlay || (function ($) {
  return {
    show: function (message, options) {
      if(!$('#page-overlay').hasClass('active')){
        $('#page-overlay').addClass('active');
        $('#page-overlay .page-loading-image').removeClass('d-none');
      }
    },

    hide: function () {
      if($('#page-overlay').hasClass('active')){
        $('#page-overlay').removeClass('active');
        $('#page-overlay .page-loading-image').addClass('d-none');
      }
    }
  };

})(jQuery);

var alertMessage = alertMessage || (function ($) {
  var $html = $('<div class="alert alert-icon content d-none" role="alert">' +
                '<i class="fe icon-symbol" aria-hidden="true"></i>' +
                '<span class="message">Message is in here</span>' +
              '</div>');
  return {
    show: function (_message, _type) {
      switch(_type) {
        case 'error':
          var _type = 'alert-warning',
              _icon = 'fe-alert-triangle';
              
          if ($('#alert-message .content').hasClass('alert-success')) {
            $('#alert-message .content').removeClass('alert-success');
          };
          break; 
        case 'success':
          var _type = 'alert-success',
              _icon = 'fe-check';
          if ($('#alert-message .content').hasClass('alert-warning')) {
            $('#alert-message .content').removeClass('alert-warning');
          };
          break;
        default:
          var _type = 'alert-warning',
              _icon = 'fe-bell';
      }
      $('#alert-message').html($html);
      $('#alert-message .content').addClass(_type);
      $('#alert-message .icon-symbol').addClass(_icon);
      $('#alert-message .content').removeClass('d-none');
      $('#alert-message .content .message').html(_message);
    },

    hide: function () {
      $('#alert-message').html('');
    }
  };

})(jQuery);

// Confirm notice
function confirm_notice(_ms) {
    switch(_ms) {
      case 'deleteItem':
          return confirm(deleteItem);
          break;
      case 'deleteItems':
          return confirm(deleteItems);
          break;
      default:
          return confirm(_ms);
  }
  return confirm(_ms);
}

/*----------  Check str or json data  ----------*/
function is_json(str) {
  try {
    JSON.parse(str);
  } catch (e) {
    return false;
  }
  return true;
}

// Reload page
function reloadPage(_url){
  if(_url != ''){
    setTimeout(function(){window.location = _url;}, 2500);
  }else{
    setTimeout(function(){location.reload()}, 2500);
  }
}

function notify(_ms, _type){
  switch(_type) {
    case 'error':
      var _text = _ms,
          _icon = 'warning';
      break; 

    case 'success':
      var _text = _ms,
          _icon = 'success';
      break;

    default:
  }
  $.toast({
      text: _text, 
      icon: _icon,
      showHideTransition: 'fade',
      allowToastClose: true,
      hideAfter: 3000,
      stack: 5,
      position: 'bottom-center', 
      textAlign: 'left',
      loader: true,
      loaderBg: '#0ef1f1',
      beforeShow: function () {},
      afterShown: function () {},
      beforeHide: function () {}, 
      afterHidden: function () {} 
  });
}

/*----------  Configure tinymce editor  ----------*/
function plugin_editor(selector, settings){
  selector = typeof(selector) == 'undefined' ? '.tinymce' : selector;
  var _settings = {
    selector: selector,
    theme: "modern",
    branding: false,
    paste_data_images: true,
    relative_urls: false,
    convert_urls: false,
    inline_styles: true,
    verify_html: false,
    cleanup: false,
    autoresize_bottom_margin: 25,
    plugins: [
      "advlist autolink lists link charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern codesample"
    ],
    toolbar1: " undo redo formatselect | fontselect fontsizeselect | forecolor backcolor | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | link image media | print preview emoticons | code codesample pagebreak",
    style_formats: [
    {title: 'Heading 2', format: 'h2'},
    {title: 'Heading 3', format: 'h3'},
    {title: 'Heading 4', format: 'h4'},
    {title: 'Heading 5', format: 'h5'},
    {title: 'Heading 6', format: 'h6'},
    {title: 'Normal', block: 'div'}
    ],
    file_browser_callback: elFinderBrowser,
  }

  if (typeof(settings) != 'undefined') {
    for (var key in settings) {
      if (key != 'append_plugins') {
        _settings[key] = settings[key];
      } else {
        _settings['plugins'].push(settings[key]);
      }
    }
  }
  var editor = tinymce.init(_settings);
  return editor;
}

function plugin_editor111(selector, settings){
  tinymce.init({
    selector: "#editor",
    theme: "silver",
    height: 300,
    plugins: [
      "advlist autolink link image media filemanager code responsivefilemanager"
    ],
    toolbar1: "undo redo | bold italic underline | forecolor backcolor",
    toolbar2: "| responsivefilemanager | link unlink | image media | code",
    image_advtab: true,
    external_filemanager_path: "filemanager/",
    filemanager_title: "File Manager",
    external_plugins: {
      "responsivefilemanager": "../../plugins/tinymce/plugins/responsivefilemanager/plugin.min.js",
      "filemanager": "../../plugins/tinymce/filemanager/plugin.min.js"
    },
  });
}


function elFinderBrowser (field_name, url, type, win) {
  tinymce.activeEditor.windowManager.open({
    file: PATH + 'file_manager/elfinder_init',// use an absolute path!
    title: 'File manager',
    width: 900,  
    height: 450,
    resizable: 'yes',
    inline:true
  }, {
    setUrl: function (url) {
      win.document.getElementById(field_name).value = url;
    }
  });
  return false;
}

/*----------  Upload media and return path to input selector  ----------*/
function getPathMediaByelFinderBrowser(_this, default_selector){
  var _that = _this;
  var _passToElement = typeof(default_selector) == 'undefined' ? _that.siblings('input')  : default_selector;
  tinymce.activeEditor.windowManager.open({
    file: PATH + 'file_manager/elfinder_init',
    title: 'File manager',
    width: 900,  
    height: 450,
    resizable: 'yes',
    inline:true
  }, {
    setUrl: function (url) {
      _passToElement.val(url);
    }
  });
  return false;
}
