var progress = document.getElementById('progressbar');
var totalHeigth = document.body.scrollHeight - window.innerHeight;
window.onscroll = function() {
    var progressHeigth = (window.pageYOffset / totalHeigth) * 100;
    progress.style.height = progressHeigth + "%";
}
