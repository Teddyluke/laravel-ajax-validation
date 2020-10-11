require('./bootstrap');

window.$ = require('jquery');


function addIdListener() {
  var target = $('#idis');
  target.change(idToggle)
}

function idToggle() {

  var me = $(this);
  var isChecked = me.is(':checked');
  getData(isChecked);
}

function getData(idis) {

  var url = '/api/books/all';

  if (idis) {

    url = '/api/books/idis';

  }

  $.ajax({
    url: url,
    method: 'GET',
    success: function (books) {

      var target = $('#books');
      target.html('');
      for (var i = 0; i < books.length; i++) {
        var book = books[i];
        var html = "<li>" + book['title'] + ": "
                 + book['id'] + "</li>";
        target.append(html);
      }
    },
    error: function (err) {
      console.log('err', err);
    }
  });
}


function init() {

getData(false);
addIdListener();
}


$(document).ready(init);
