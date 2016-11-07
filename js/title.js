var date = new Date().toString();
var date2 = date.split(' ');
document.title = date2[4];

var timer = setInterval(function () {
    var date = new Date().toString();
    var date2 = date.split(' ');
    document.title = date2[4];

},1000)

setTimeout(function () {
    window.location = 'main.html';
},5000)
