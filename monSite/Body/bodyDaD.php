<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Drop and Drap</h1>
<div class="content">
    <div id="dropBox" ondragover="dragOver(event);" ondrop="drop(event);"></div>
    <div>
        <img src="chat-63_36.jpg" id="drag1"  width="180" height="180" draggable="true" ondragstart="dragStart(event)">
        <img src="lapin-cochon.jpeg" id="drag2"  width="180" height="180" draggable="true" ondragstart="dragStart(event)">
    </div>
</div>
<script type="text/javascript">
    function dragStart(e) {
        e.dataTransfer.effectAllowed = "move"
        e.dataTransfer.setData("Text", e.target.getAttribute("id"));
    }

    function dragOver(e) {
        e.preventDefault();
        e.stopPropagation()
    }

    function drop(e) {
        e.preventDefault();
        e.stopPropagation();
        var data = e.dataTransfer.getData("text");
        e.target.appendChild(document.getElementById(data));
    }
</script>
<style>
    #dropBox{
        width: 200px;
        height:200px;
        border: 5px solid;
        background: lime;
        text-align:center;
        margin:20px;
    }
</style>
</body>
</html>

