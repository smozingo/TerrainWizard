<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Terrain Wizard</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Standard -->
    <link href="css/styles.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


</head>

<body onload="setCellSize()" >
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="#" class="navbar-brand"><img id="logo" src="img/tw.png"/></a>

                <!--Collapsed nav menu icon-->
                <button id="btnNavBar" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div id="navBar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#welcome">Welcome</a></li>
                    <li data-toggle="collapse" data-target="#featuresBox"><a href="#features">Features</a></li>
                    <li data-toggle="collapse" data-target="#wizardBox"><a href="#wizard">Wizard</a></li>
                    <li data-toggle="collapse" data-target="#downloadBox"><a href="#download">Download</a></li>
                </ul>

                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" placeholder="username" class="form-control" />
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="password" class="form-control" />
                    </div>
                    <button type="button" class="btn wButton">Login</button>
                    <button type="button" class="btn wButton" data-toggle="modal" data-target="#registerModal">Register</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Registration Modal -->
    <div id="welcome" class="container">
        <div id="registerModal" class="modal">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">X</button>
                        <h4 class="modal-title">Create an Account</h4>
                        <div class="modal-body">
                            <form id="registrationForm">
                                <div class="form-group">
                                    <input type="text" id="username" placeholder="username" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password" placeholder="password" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <input type="password" id="passwordConfirm" placeholder="confirm password" class="form-control" />
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" value="Register" class="btn btn-success" data-dismiss="modal"/>
                        </div>
                        <div id="registrationError"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Registration Modal -->


    <div class="container contentDiv" id="topContainer">
        <div id="welcomeBox" class="row">
            <div class="col-lg-12">
                <div id="welcomeRow" class="row">
                    <!-- col-md-offset-n moves the col-md-6 over n columns (centers it in this case) - oops! took it out -->
                    <div id="welcomeText" class="col-md-6">
                        <h2 class="text-center">Terrain Wizard 1.0!</h2>
                        <p class="lead">Finally, now there's a miniature warfare terrain generator that keeps track of your terrain and distributes it fairly and impartially on the battlefield!</p>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" id="twLogoLg" src="img/TW-lg-diff1.png" />
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Features Div -->
    <div id="features" class="container contentDiv">
        <div class="collapseButton" data-toggle="collapse" data-target="#featuresBox"><img src="img/featuresBtn.png" /></div>
        <div id="featuresBox" class="collapse">
            <div class="row">
                <div class="col-lg-12">
                    <div id="featuresHeader" class="row">
                        <h1>What can the Wizard do for you?</h1>
                    </div>
                    <p class="lead">Since the very first guy that snuck out from behind a bush to swing a rock at the very first guy to be surprised by a rock in the face, battlefields have played a key role in combat strategy.  In miniature combat, terrain placement can make or break an army.  When something has such an influence on the outcome of a game, it is only fair when that the placement of terrain items is dispassionate and unbiased.  What better to do that task than a bit of computer code?  That's why Terrain Wizard is here to help!</p>
                    <div class="row marginTop text-center">
                        <div class="col-md-4 marginTop marginBottom">
                            <div class="glyphicon glyphicon-user" style="font-size:700%"></div>
                            <h3>Personalized</h3>
                            <p>You tell it what terrain you have.  You can even enter custom terrain pieces!</p>
                            <p>Purus odio morbi eget et sed. At viverra nulla nonummy eget commodo at velit ac lacinia ut a. Urna pellentesque nec. Justo diam diam fames feugiat in magna ut facilisis. Suspendisse nisl ipsum et id augue ut nullam vehicula. Tincidunt diam risus est eleifend eu. Ante cursus vel. Aliquid nostrud vitae sagittis eu mauris. Mattis pellentesque eleifend. Sed mauris conubia. Ligula tortor ante. Nisl ipsum nulla magnis lectus consectetuer volutpat ipsum nec. Molestie eu morbi vestibulum morbi vivamus non wisi sem. In cras sodales mollis praesent cras. Per eget sit.</p><p>Sit mi sit. Amet tincidunt interdum. Hendrerit pharetra auctor aliquam nec volutpat commodo condimentum lacinia. Donec semper eget ac dui eligendi. Molestie diam duis et urna eget lorem duis ornare tempor magna tristique. Erat habitasse dis qui id libero. Consectetur rutrum in.</p>
                        </div>
                        <div class="col-md-4 marginTop marginBottom">
                            <div class="glyphicon glyphicon-knight" style="font-size:700%"></div>
                            <h3>Adaptable</h3>
                            <p>Expandable for whatever table size your game required.</p>
                            <p>Sit magna nulla. Faucibus et sapien etiam sed duis pellentesque sollicitudin ut ac massa aliquam. Lacus id lectus nullam ullamcorper egestas. Id sem facilisis donec wisi mus. Ornare arcu suscipit.</p><p>Nonummy imperdiet sed. Donec nullam non. Pellentesque felis at dolor egestas nam nec maecenas quam leo sed con mi morbi ultricies. Massa praesent sem scelerisque viverra venenatis gravida feugiat sem. Duis nulla ac. Neque justo et. Donec donec beatae. Augue quia turpis. Ac et quisque tincidunt est id orci eu enim. Phasellus pharetra donec mi diam id. Nunc integer accumsan magnis repellat massa tortor suspendisse urna. Mi aliquam laoreet quam velit id nibh elit non egestas sagittis nonummy aenean non quis. Et viverra consequat consequat justo faucibus. Tincidunt in mattis. Neque platea arcu. Ipsum nostra ligula.</p>
                        </div>
                        <div class="col-md-4 marginTop marginBottom">
                            <div class="glyphicon glyphicon-cloud-upload" style="font-size:700%"></div>
                            <h3>Persistent</h3>
                            <p class="text-justify">Save your favorite terrain layouts!</p>
                            <p>Velit elit non est nibh etiam molestie magna lacus vivamus consequat quis nonummy varius interdum. Massa lorem mattis egestas pellentesque convallis amet vestibulum sed. Interdum lacus tincidunt. Id tortor laoreet elit amet et. Et magna convallis vitae dapibus tincidunt. Nulla quam tincidunt et eleifend vitae. Tincidunt libero tortor. Vel lorem incidunt. Nulla urna dui amet a pretium. Nunc et nam.</p><p>Quis nullam lacinia. Sociosqu justo lectus tortor nullam est semper mauris pede. Suscipit quisque vel pretium sit nec. Arcu velit a. Vel molestie lorem. Taciti phasellus augue amet fusce cras in feugiat tristique lectus felis vulputate neque varius aliquam. Elit ultricies sed ad officia donec ante eleifend condimentum. Et et sed placerat suscipit amet. Dictum sed proin. Et vestibulum lorem convallis venenatis vel dolor quisque sodales. A gravida mauris. Augue mauris urna. A et ut quam vitae in. Sed justo at velit ante donec et vestibulum est. Amet lectus vehicula.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="wizard" class="container contentDiv">
        <div class="collapseButton" data-toggle="collapse" data-target="#wizardBox"><img src="img/wizardBtn.png" /></div>
        <div id="wizardBox" class="collapse">
            <div class="col-lg-12">
                <div class="optionsWrapper">
                    <div class="row optionsRow">
                        <form action="wizard.php" method="post" onsubmit="AJAXSubmit(this); return false;" class="form-inline">
                            <table id="terrainTable" class="table">
                                <tr>
                                    <td>
                                        <label for="terrainCover">Cover</label>
                                    </td>
                                    <td class="form-group">
                                        <div id="terrainCover" class="input-group spinner">
                                            <input type="text" name="tCover" class="form-control" value="0">
                                            <div class="input-group-btn-vertical">
                                                <button id="terrainCoverPlus" class="btn btn-default" type="button"><i class="glyphicon-plus"></i></button>
                                                <button id="terrainCoverMinus" class="btn btn-default" type="button"><i class="glyphicon-minus"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <label for="terrainElevation">Elevation</label>
                                    </td>
                                    <td class="form-group">
                                        <div id="terrainElevation" class="input-group spinner">
                                            <input type="text" name="tElevation" class="form-control" value="0">
                                            <div class="input-group-btn-vertical">
                                                <button id="terrainElevationPlus" class="btn btn-default" type="button"><i class="glyphicon-plus"></i></button>
                                                <button id="terrainElevationMinus" class="btn btn-default" type="button"><i class="glyphicon-minus"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <label for="terrainFence">Fence</label>
                                    </td>
                                    <td class="form-group">
                                        <div id="terrainFence" class="input-group spinner">
                                            <input type="text" name="tFence" class="form-control" value="0">
                                            <div class="input-group-btn-vertical">
                                                <button id="terrainFencePlus" class="btn btn-default" type="button"><i class="glyphicon-plus"></i></button>
                                                <button id="terrainFenceMinus" class="btn btn-default" type="button"><i class="glyphicon-minus"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="terrainForest">Forest</label>
                                    </td>
                                    <td class="form-group">
                                        <div id="terrainForest" class="input-group spinner">
                                            <input type="text" name="tForest" class="form-control" value="0">
                                            <div class="input-group-btn-vertical">
                                                <button id="terrainForestPlus" class="btn btn-default" type="button"><i class="glyphicon-plus"></i></button>
                                                <button id="terrainForestMinus" class="btn btn-default" type="button"><i class="glyphicon-minus"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <label for="terrainObstruction">Obstruction</label>
                                    </td>
                                    <td class="form-group">
                                        <div id="terrainObstruction" class="input-group spinner">
                                            <input type="text" name="tObstruction" class="form-control" value="0">
                                            <div class="input-group-btn-vertical">
                                                <button id="terrainObstructionPlus" class="btn btn-default" type="button"><i class="glyphicon-plus"></i></button>
                                                <button id="terrainObstructionMinus" class="btn btn-default" type="button"><i class="glyphicon-minus"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <label for="terrainRough">Rough Terrain</label>
                                    </td>
                                    <td class="form-group">
                                        <div id="terrainRough" class="input-group spinner">
                                            <input type="text" name="tRough" class="form-control" value="0">
                                            <div class="input-group-btn-vertical">
                                                <button id="terrainRoughPlus" class="btn btn-default" type="button"><i class="glyphicon-plus"></i></button>
                                                <button id="terrainRoughMinus" class="btn btn-default" type="button"><i class="glyphicon-minus"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="terrainStructure">Structure</label>
                                    </td>
                                    <td class="form-group">
                                        <div id="terrainStructure" class="input-group spinner">
                                            <input type="text" name="tStructure" class="form-control" value="0">
                                            <div class="input-group-btn-vertical">
                                                <button id="terrainStructurePlus" class="btn btn-default" type="button"><i class="glyphicon-plus"></i></button>
                                                <button id="terrainStructureMinus" class="btn btn-default" type="button"><i class="glyphicon-minus"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <label for="terrainTrench">Trench</label>
                                    </td>
                                    <td class="form-group">
                                        <div id="terrainTrench" class="input-group spinner">
                                            <input type="text" name="tTrench" class="form-control" value="0">
                                            <div class="input-group-btn-vertical">
                                                <button id="terrainTrenchPlus" class="btn btn-default" type="button"><i class="glyphicon-plus"></i></button>
                                                <button id="terrainTrenchMinus" class="btn btn-default" type="button"><i class="glyphicon-minus"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <label for="terrainWater">Water</label>
                                    </td>
                                    <td class="form-group">
                                        <div id="terrainWater" class="input-group spinner">
                                            <input type="text" name="tWater" class="form-control" value="0">
                                            <div class="input-group-btn-vertical">
                                                <button id="terrainWaterPlus" class="btn btn-default" type="button"><i class="glyphicon-plus"></i></button>
                                                <button id="terrainWaterMinus" class="btn btn-default" type="button"><i class="glyphicon-minus"></i></button>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="6" style="text-align:center">
                                        <button type="submit" class="btn btn-default">Save Collection</button>
                                    </td>
                                </tr>
                            </table>
                            <table id="optionsTable" class="table">
                                <tbody>
                                    <tr>
                                        <td class="form-group">
                                            <div class="form-group-sm">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle wButton bigButton" type="button" id="backgroundMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        Background
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul id="backgroundSelector" class="dropdown-menu" aria-labelledby="backgroundMenu">
                                                        <li><a href="#wizard" id="street">City Streets</a></li>
                                                        <li><a href="#wizard" id="forest">Forest</a></li>
                                                        <li><a href="#wizard" id="grass">Grass</a></li>
                                                        <li><a href="#wizard" id="space">Space</a></li>
                                                        <li><a href="#wizard" id="swamp">Swamp</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="form-group optionsSlider">
                                            <div class="form-group-sm">
                                                Include terrain in <br />Deployment Zone?
                                                <div class="checkboxSlider checkboxDZTerrain">
                                                    <input type="checkbox" value="1" name="checkboxDZTerrain" id="checkboxDZTerrainInput" name="" />
                                                    <label for="checkboxDZTerrainInput"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="form-group">
                                            <button class="btn wButton bigButton" type="button" id="generateMap">Create a Map!</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="wizardContainer">
        <table id="wizardTable">
            <div id="leftPlayer" class="deploymentSecond deploymentZone deploymentLeft"></div>
            <div id="rightPlayer" class="deploymentFirst deploymentZone deploymentRight"></div>
            <tr>
                <th colspan="8">
                    <div class="form-group-sm">
                        <div class="checkboxSlider checkboxDZ">
                            <input type="checkbox" value="1" id="checkboxDZInput" name="" />
                            <label for="checkboxDZInput"></label>
                        </div>
                        <div id="checkboxDZSwap" class="checkboxSlider checkboxDZSwap">
                            <input type="checkbox" value="1" id="checkboxDZSwapInput" name="" />
                            <label for="checkboxDZSwapInput"></label>
                        </div>
                    </div>
                </th>
            </tr>
            <tr>
                <td id="c11" ></td>
                <td id="c12"></td>
                <td id="c13"></td>
                <td id="c14"><canvas id="c14water1"></canvas>Water</td>
                <td id="c15"></td>
                <td id="c16"></td>
                <td id="c17"><canvas id="c17cover1"></canvas>Cover</td>
                <td id="c18"></td>
            </tr>
            <tr>
                <td id="c21"></td>
                <td id="c22"><canvas id="c22rough1"></canvas>Rough</td>
                <td id="c23"></td>
                <td id="c24"></td>
                <td id="c25"><canvas id="c25hill1"></canvas>Hill</td>
                <td id="c26"></td>
                <td id="c27"></td>
                <td id="c28"></td>
            </tr>
            <tr>
                <td id="c31"><canvas id="c31forest1"></canvas>Forest</td>
                <td id="c32"></td>
                <td id="c33"></td>
                <td id="c34"></td>
                <td id="c35"></td>
                <td id="c36"></td>
                <td id="c37"></td>
                <td id="c38"></td>
            </tr>
            <tr>
                <td id="c41"></td>
                <td id="c42"></td>
                <td id="c43"></td>
                <td id="c44"></td>
                <td id="c45"></td>
                <td id="c46"></td>
                <td id="c47"></td>
                <td id="c48"></td>
            </tr>
            <tr>
                <td id="c51"></td>
                <td id="c52"></td>
                <td id="c53"></td>
                <td id="c54"></td>
                <td id="c55"></td>
                <td id="c56"></td>
                <td id="c57"></td>
                <td id="c58"></td>
            </tr>
            <tr>
                <td id="c61"><canvas id="c61trench1"></canvas>Trench</td>
                <td id="c62"></td>
                <td id="c63"></td>
                <td id="c64"></td>
                <td id="c65"></td>
                <td id="c66"></td>
                <td id="c67"></td>
                <td id="c68"></td>
            </tr>
            <tr>
                <td id="c71"></td>
                <td id="c72"></td>
                <td id="c73"></td>
                <td id="c74"></td>
                <td id="c75"><canvas id="c75structure1"></canvas>Structure</td>
                <td id="c76"></td>
                <td id="c77"></td>
                <td id="c78"></td>
            </tr>
            <tr>
                <td id="c81"><canvas id="c81cover1"></canvas>Cover</td>
                <td id="c82"></td>
                <td id="c83"></td>
                <td id="c84"></td>
                <td id="c85"></td>
                <td id="c86"></td>
                <td id="c87"></td>
                <td id="c88"></td>
            </tr>
        </table>
    </div>
    <div id="download" class="container contentDiv">
        <div class="collapseButton" data-toggle="collapse" data-target="#downloadBox"><img src="img/downloadBtn.png" />
            <div id="downloadBox" class="collapse">
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                            foreach ($_POST as $key => $value) {
                                echo "$key: $value<br />";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>


    $("canvas").each( function() {
        var cId = $(this)[0].id;
        var canvas = document.getElementById(cId);
        var ctx = canvas.getContext('2d');

        /*console.log("<EACH>");
        console.log($("#" + cId).width());*/
        // set the size of the canvas according to the size of the cell
        canvas.width = $("#" + cId).width();
        canvas.height = $("#" + cId).width();

        // set initial angle to 0 and stash it for rotation
        canvas.setAttribute("angleInDegrees",0);

        // create the image element for this cell and draw it onload
        image=getImgFromId(cId);
        console.log(image);
        image.className = "img-responsive";
        image.setAttribute("width","100px");
        console.log(image);

        image.onload=function() {
            ctx.drawImage($(this)[0],canvas.width/2-canvas.width/4,canvas.height/2-image.width/4,canvas.height/2,canvas.width/2);
            /*console.log("id:" + cId + " cW:" + canvas.width + " iW:" + image.width + " cH:" + canvas.height + " iH:" + image.height);
            console.log(image);*/

        };
        /*console.log("</EACH>");*/
    });

    $("canvas").click(function(){
        // determine the rotation value and execute rotation
        var canvas = document.getElementById($(this)[0].id);
        var currentDegrees = parseInt(canvas.getAttribute("angleInDegrees"));
        var angleInDegrees = currentDegrees == 270 ? 0 : currentDegrees + 90;
        canvas.setAttribute("angleInDegrees",angleInDegrees);
        drawRotated($(this)[0].id,angleInDegrees);
    });

    function drawRotated(cId, degrees){
        /*console.log("<ROTATE>");*/
        var canvas = document.getElementById(cId);
        var ctx = canvas.getContext('2d');
        // create a new element for the rotated image
        image=getImgFromId(cId);
        image.className = "img-responsive";

        // clear the canvas
        ctx.clearRect(0,0,canvas.width,canvas.height);
        // save the current settings
        ctx.save();
        // reset the center point
        ctx.translate(canvas.width/2,canvas.height/2);
        // rotate
        ctx.rotate(degrees*Math.PI/180);
        // and draw it!
        ctx.drawImage(image,-image.width/4,-image.width/4,canvas.height/2,canvas.width/2);
        // restore the saved settings
        ctx.restore();

        /*console.log("degrees:" + degrees + " RcW:" + canvas.width + " iW:" + image.width + " cH:" + canvas.height );*/
        /*console.log("</ROTATE>");*/
    }

    function getImgFromId (cId) {
        // we'll need to strip the id number to get the base class for this terrain
        var regEx = /c\d\d(.*)/;
        var imgStr = "img/" + regEx.exec(cId)[1] + ".png";
        console.log(imgStr);
        image = document.createElement("img");
        image.id = 'i' + cId;
        image.src = imgStr;
        return image;
    }

    function setCellSize() {
        var rowWidth = $("#c11").height() + 10;
        console.log($("#c11"));
        console.log( "rowWidth: " + rowWidth);
        $(".wCell").css("height",rowWidth);
        setBackground('grassCell');

        configureDZ();
    }

    function randomIntFromInterval(min,max)
    {
        return Math.floor(Math.random()*(max-min+1)+min);
    }


    var angle = 0;
    $(".terrainTile").click( function() {
        angle = (angle+90)%360;
        console.log("Id:" + $(this)[0].id + " Angle:" + angle);

        // we'll need to strip the id number to get the base class for this terrain
        var regEx = /(\D*)\d*/;
        var idStr = regEx.exec($(this)[0].id);

        // apply the rotation class
        $(this)[0].className = idStr[1] + " rotate" + angle;

        // apply the positional class
        $(this)[0].className += " " + (idStr[1] + angle);

    });


    $('#backgroundSelector li > a').click( function(e) {
        var background;
        console.log($("#backgroundMenu")[0].innerText);
        $("#backgroundMenu")[0].innerText = this.innerHTML;
        background = this.id + "Cell";
        console.log(background);
        setBackground(background);
    });

    var terrainList = {};



    function setBackground(background) {
        for( i=1; i < 9; i++) {
            for( k=1; k < 9; k++) {
                var cId = "#c" + i + k;
                var oldClass = $(cId)[0].className;
                var newClass = background + randomIntFromInterval(1,4);

                if (oldClass) {
                    $(cId).removeClass(oldClass);
                }
                $(cId).addClass(newClass);
                $(cId).toggleClass("wCell");
            }
        }
    }

    // Handle Terrain Count Spinners
    $('.spinner .btn:first-of-type').click( function() {
        var regEx = /(.*)Plus/;
        var counterStr = "#" + regEx.exec($(this)[0].id)[1] + " input";
        console.log(counterStr);
        var currentVal = $(counterStr)[0].value == 'MAX' ? 10 : parseInt($(counterStr)[0].value);
        console.log("up: " + currentVal);

        if( currentVal < 10 ) {
            $(counterStr)[0].value = ++currentVal;
        } else {
            $(counterStr)[0].value = 'MAX';
        }

    });

    $('.spinner .btn:last-of-type').on('click', function() {
        var regEx = /(.*)Minus/;
        var counterStr = "#" + regEx.exec($(this)[0].id)[1] + " input";
        var currentVal = $(counterStr)[0].value == 'MAX' ? 10 : parseInt($(counterStr)[0].value);
        console.log("dn: " + currentVal);
        if( currentVal > 0 ) {
            $(counterStr)[0].value = --currentVal;
        }
    });


    $("#checkboxDZSwapInput").click ( function() {
        var regEx = /(deploymentFirst|deploymentSecond)/;
        var leftClass = regEx.exec($(".deploymentLeft")[0].className);
        var rightClass = regEx.exec($(".deploymentRight")[0].className);

        configureDZ();

        $("#leftPlayer").toggleClass(rightClass[0]);
        $("#leftPlayer").toggleClass(leftClass[0]);
        $("#rightPlayer").toggleClass(rightClass[0]);
        $("#rightPlayer").toggleClass(leftClass[0]);
    });

    function configureDZ () {
        var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
        var rWidth = (width - $("#wizardContainer").width()) / 2;
        console.log("wW:" + width + "- cW: " + $("#wizardContainer").width() +  " = " + rWidth);
        $(".deploymentRight").css("right",rWidth);
        console.log($(".deploymentRight").css("right"));

        $(".deploymentZone").css("height",$("#wizardTable").height() - 18);
    }

    $("#checkboxDZInput").click( function() {

        configureDZ();

        if ($("#checkboxDZInput").is(':checked')) {
            console.log($("#checkboxDZInput"));
            $(".deploymentLeft").show();
            $(".deploymentRight").show();
            $("#checkboxDZSwap").show();
        }
        else {
            $(".deploymentLeft").hide();
            $(".deploymentRight").hide();
            $("#checkboxDZSwap").hide();
        }

    });

    $("#generateMap").click( function() {
       $("#wizardContainer").show();
    });


    function ajaxSuccess() {
        console.log("Schno AJAX Success");
        console.log(this);
    }

    function AJAXSubmit(oFormElement) {
        if (!oFormElement.action) { return; }
        var oReq = new XMLHttpRequest();
        oReq.onload = ajaxSuccess;
        oReq.open("post",oFormElement.action);
        oReq.send(new FormData(oFormElement));
    }

    /*   $("#registrationForm").submit( function(event) {
           var errorMessage="";

           console.log("validation");

           event.preventDefault();

           function isValidUsername(username) {
               /!*Username must be at least three characters*!/
               var pattern = new RegExp(/\w{3}/);
               return pattern.test(username);
           }

           if(!isValidUsername($("#username").val())) {
               errorMessage = errorMessage + "<br /> Your username cannot start with a number, contain special characters, or be fewer than three alpha number characters!"
           }

           if( $("#password").val() != $("#passwordConfirm").val()) {
               errorMessage = errorMessage + "<br /> Your password did not match your confirmation password!";
           }

           if (errorMessage == "") {
               $("#registrationError").innerHTML = "Thank you for registering!";

           }
           else {
               $("#registrationError").innerHTML = errorMessage;
           }



       });
   */
</script>

</body>
</html>