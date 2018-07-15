document.addEventListener('DOMContentLoaded', function () {

    var class_names= document.getElementsByClassName("num-box");

    for (var i = 0; i < class_names.length; i++) {
        class_names[i].addEventListener('click', function(){
            var numPage = this.innerHTML;
            window.location.href="/news.php?page=" + numPage;
        }, false);
    }
});