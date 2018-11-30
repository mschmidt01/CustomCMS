/**
 * Created by Melvin on 24.07.2017.
 */
function loadContentData(str) {
    if (str.length == 0) {
        document.getElementById('content').innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                resObj = JSON.parse(this.responseText);
                var allMetaElements = document.getElementsByTagName('meta');
                //loop through and find the element you want

                for (var i = 0; i < allMetaElements.length; i++) {
                    if (allMetaElements[i].getAttribute("name") == "description") {

                        // allMetaElements[i].removeAttribute('content');
                        allMetaElements[i].setAttribute('content', resObj.title);
                    }
                    if (allMetaElements[i].getAttribute("name") == "author") {
                        //allMetaElements[i].removeAttribute('content');
                        allMetaElements[i].setAttribute('content', resObj.author);
                    }
                    if (allMetaElements[i].getAttribute("name") == "keywords") {
                        //allMetaElements[i].removeAttribute('content');
                        allMetaElements[i].setAttribute('content', resObj.keywords);
                    }
                }
                document.title = resObj.title;
                document.getElementById('content').innerHTML = resObj.content;
            }
        };
        xmlhttp.open("GET", "frontendHandler.php?ajax=true&page=" + str, true);
        xmlhttp.send();
    }
}
