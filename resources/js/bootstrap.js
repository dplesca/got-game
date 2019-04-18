
window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

$('#form-characters select').change(function(ev){
    let self = $(this), v = self.val(), cid = self.attr('name').replace('c', '');
    if ( v == 'dead'){
        $('#ww' + cid).removeAttr('disabled');
    } else {
        $('#ww' + cid).attr('disabled', 'disabled').prop('checked', false);
    }
    console.log(cid);
});