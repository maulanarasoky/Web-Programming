<!--
Author	: Maulana Rasoky Nasution
Website	: https://mul-code.blogspot.com/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Schedule</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script type="text/javascript"></script>
</head>
<body onload="viewData()">
<h1>Scheduling</h1>
<div class="container">
    <div class="input">
        <input type="text" class="todo" name="todo">
        <button class="add" onclick="sendData()">ADD</button>
    </div>
    <div class="output">
    </div>
</div>

<script>

    // function for see the data
    function viewData() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                loadData();
            }
        };
        xhttp.open("GET", "FUNCTION/get.php", true);
        xhttp.send();
    }

    // function for get the data from json
    function loadData() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var i = 0;
                var jsonData = JSON.parse(this.responseText);
                var jsonSize = jsonData.dataToDo.length;
                var output = "";
                while (i < jsonSize) {

                    output += "<div class=\"card\">" +
                        "<h3>" + jsonData.dataToDo[i].todo + "</h3>" + "<p id =\"date\">" + jsonData.dataToDo[i].date + "</p>" +
                        "<button class=\"checkButton\" onclick=\"deleteData(" + jsonData.dataToDo[i].id_todo + ")\">Done</button>" +
                        "</div>";
                    i++;
                }
                document.querySelector(".output").innerHTML = output;
            }
        };
        xhttp.open("GET", "JSON/get.json", true);
        xhttp.send();
    }

    // function for send the data
    function sendData() {
        var todo = document.querySelector(".todo").value;

        console.log(todo);
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                viewData();
            }
        }
        xhttp.open("GET", "FUNCTION/put.php?todo=" + todo, true);
        xhttp.send();
    }

    // function for delete the data
    function deleteData(deleteId) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                viewData();
            }
        }
        xhttp.open("GET", "FUNCTION/delete.php?deleteId=" + deleteId, true);
        xhttp.send();
    }

    // event when user click enter in input bar
    var input = document.querySelector(".todo");
    input.addEventListener("keyup", function (event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            sendData();
            input.value = '';
        }
    });

</script>
</body>
</html>
