<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Menu</title>
        
        <link rel="stylesheet" href="ui/ui-lightness/jquery.ui.all.css">
	<script src="ui/jquery-1.9.1.js"></script>
	<script src="ui/jquery.ui.core.js"></script>
	<script src="ui/jquery.ui.widget.js"></script>
	<script src="ui/jquery.ui.mouse.js"></script>
	<script src="ui/jquery.ui.draggable.js"></script>
	<script src="ui/jquery.ui.sortable.js"></script>
	<script>
	$(function() {
		$( "#sortable" ).sortable({
			revert: true
		});
		$( "#draggable" ).draggable({
			connectToSortable: "#sortable",
			helper: "clone",
			revert: "invalid"
		});
		$( "ul, li" ).disableSelection();
	});
	</script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
        <ul id="sortable">
            <li class="ui-state-default" ><br><br>
                <ul class="topmenu" >
                    <li class="topmenu"><a href="#" ><span>Item 1</span></a>
                        <ul>
                                <li><a href="#">Item 1 0</a></li>
                                <li><a href="#">Item 1 3</a></li>
                                <li><a href="#">Item 1 1</a></li>
                                <li><a href="#">Item 1 2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="ui-state-default"><br><br>
                <ul class="topmenu">
                    <li class="topmenu"><a href="#" ><span>Item 2</span></a>
                        <ul>
                                <li><a href="#">Item 2 0</a></li>
                                <li><a href="#">Item 2 3</a></li>
                                <li><a href="#">Item 2 1</a></li>
                                <li><a href="#">Item 2 2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="ui-state-default"><br><br>
                <ul class="topmenu">
                    <li class="topmenu"><a href="#" ><span>Item 3</span></a>
                        <ul>
                                <li><a href="#">Item 3 0</a></li>
                                <li><a href="#">Item 3 3</a></li>
                                <li><a href="#">Item 3 1</a></li>
                                <li><a href="#">Item 3 2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="ui-state-default"><br><br>
                <ul class="topmenu">
                    <li class="topmenu"><a href="#" ><span>Item 4</span></a>
                        <ul>
                                <li><a href="#">Item 4 0</a></li>
                                <li><a href="#">Item 4 3</a></li>
                                <li><a href="#">Item 4 1</a></li>
                                <li><a href="#">Item 4 2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="ui-state-default"><br><br>
                <ul class="topmenu">
                    <li class="topmenu"><a href="#" ><span>Item 5</span></a>
                        <ul>
                                <li><a href="#">Item 5 0</a></li>
                                <li><a href="#">Item 5 3</a></li>
                                <li><a href="#">Item 5 1</a></li>
                                <li><a href="#">Item 5 2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        
    </body>
</html>
