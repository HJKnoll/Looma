 	<div id="toolbar-container-vertical" class="toolbar">
 		<div class="button-div" id="toolbar-vertical">

			<button id="translate" class="toolbar-button-vertical flag-vertical"><img id="flag" draggable="false" src="images/english-flag.png">
				<?php tooltip('अनुवाद');?>
			</button>

			<button onclick="parent.location.href = 'index.php';" class="toolbar-button-vertical next-prev">
 				<img draggable="false" src="images/home.png"  height = "70%" >
 				<?php tooltip('Home');?>
 			</button>

            <button onclick="LOOMA.setStore('libraryScroll', 0, 'session');
			                 LOOMA.setStore('saveForm',    0, 'session');
                             parent.location.href = 'looma-library-search.php?fp=../content/';" class="toolbar-button-vertical ">
				<!-- call looma-library.php with path to starting folder of the Library. -->
				<img draggable="false" src="images/library.png"  height= "70%" >
				<?php tooltip('Library');?>
			</button>

			<button onclick="parent.location.href = 'looma-dictionary.php';" class="toolbar-button-vertical ">
				<img draggable="false" src="images/dictionary.png"  height= "70%" >
				<?php tooltip('Dictionary');?>
			</button>

			<button onclick="parent.location.href = 'looma-paint.php?ModPagespeed=off';" class="toolbar-button-vertical ">
				<img draggable="false" src="images/paint.png" height = "70%"  >
				<?php tooltip('Paint');?>
			</button>

            <button onclick="parent.location.href = 'looma-clock.php';" class="toolbar-button-vertical ">
                <img draggable="false" src="images/clock.png"  height = "80%" >
                <?php tooltip("Clocks") ?>
            </button>

			<button onclick="parent.location.href = 'looma-map.php';" class="toolbar-button-vertical ">
				<img draggable="false" src="images/maps.png"  height = "70%" >
				<?php tooltip('Maps');?>
			</button>

            <button onclick="parent.location.href = 'looma-library.php?fp=../content/timelines/';" class="toolbar-button-vertical ">
                <img draggable="false" src="images/history.png"  height = "70%" >
                <?php tooltip("History") ?>
            </button>

			<button onclick="parent.location.href = 'looma-games.php';" class="toolbar-button-vertical ">
				<img draggable="false" src="images/games.png"  height = "70%" >
				<?php tooltip('Games');?>
			</button>

			<button onclick="parent.location.href = 'looma-calculator.php';" class="toolbar-button-vertical ">
				<img draggable="false" src="images/calc.png"  height = "70%" >
				<?php tooltip('Calculator');?>
			</button>

			<button onclick="parent.location.href = 'looma-web.php';" class="toolbar-button-vertical ">
				<img draggable="false" src="images/web.png"  height = "70%" >
				<?php tooltip('Web');?>
			</button>

			<button onclick="parent.location.href = 'looma-settings.php';" class="toolbar-button-vertical ">
				<img draggable="false" src="images/settings.png"  height = "70%" >
				<?php tooltip('Settings');?>
			</button>

			<button onclick="parent.location.href = 'looma-info.php';" class="toolbar-button-vertical ">
				<img draggable="false" src="images/info.png"  height = "70%" >
				<?php tooltip('Info');?>
			</button>

			<button  class="toolbar-button-vertical" onclick="parent.history.back();">
				<img draggable="false" src="images/back-arrow.png" height = "70%"  >
				<?php tooltip('Back');?>
			</button>

        <!--  padlock is not formatted correctly for vertical toolbar
            <img id="padlock" draggable="false" src="  <?php echo loggedIn() ? "images/padlock-open.png" : "images/padlock-closed.png"; ?>" >
        -->

			<!--<button  class="toolbar-button-vertical next-prev" onclick="parent.history.forward()">
				<img draggable="false" src="images/forward-arrow.png" width = "60px" height = "70%" ></button> -->

		</div>
		<!-- <span class="logo"><img  draggable="false" src="images/logos/LoomaLogoTransparent.png"></span>		 -->
	</div>
