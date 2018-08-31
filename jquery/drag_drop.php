<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Droppable - Revert draggable position</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
    <link href="jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">
    <link href="jquery-ui-1.12.1.custom/jquery-ui.theme.css" rel="stylesheet">
    <script src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>  
  <style>
  .draggable { 
    width: 100px; 
    height: 100px; 
    padding: 0.5em; 
    float: left; 
    margin: 10px 10px 10px 0; 
  }
  #droppable { 
    width: 150px; 
    min-height: 150px; 
    padding: 0.5em; 
    /*float: left; */
    margin: 10px; 
  }
  #list li {
    border: 1px solid blue;
    list-style: none;
  }
  ul {
    padding: 0;
  }
  #message {
    margin-top: 185px;
    width: 500px;
    
  }
  </style>
  <script>
  $( function() {
    $( ".draggable" ).draggable({ revert: "invalid" });   

    $("#message").hide();
 
    $( "#droppable" ).droppable({
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },
      //what happens when dropping an object?
      drop: function( event, ui ) {
        info = ui.draggable.html();
        age = info.split("<p>")[1].split(" ")[0];
        freq = info.split(", ")[1].split(" ")[0];

        if (age < 21){
          ui.draggable.draggable( "option", "revert", true );          
          return false;
        }

        $( "#list" ).addClass( "ui-state-highlight" ).append("<li>" + info + "</li>");
        ui.draggable.hide();

        // AJAX call
        $.post("save_answers.php", 
          {
            age: age,
            freq: freq
          }, function(data, status){
            $("#message").html(data).fadeIn(2000).delay(3000).fadeOut(2000);
          }
        );
      }
    });
  });
  </script>
</head>
<body>
<div>
  <div id="droppable" class="ui-widget-header">
    <p>Drop data here. How much alcohol do you drink per week?</p>
    <ul id="list">
    </ul>
  </div>

  <div class="ui-widget-content draggable">
    <p>19 years old, 2 times</p>
  </div> 
  <div class="ui-widget-content draggable">
    <p>23 years old, 5 times</p>
  </div>
  <div class="ui-widget-content draggable">
    <p>30 years old, 4 times</p>
  </div>
  <div class="ui-widget-content draggable">
    <p>15 years old, 0 times</p>
  </div>
</div> 

<div id="message" class="ui-widget-content ui-state-highlight">
</div>

 
 
</body>
</html>