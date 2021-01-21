buttonColours = [
  "green",
  "red",
  "yellow",
  "blue",
]

gamePattern = [];
userClickedPattern = [];

level = 0;
started = false;

$(".btn").click(function(event) {
  if (started === true) {
    var userChosenColour = event.target.id;
    playSound(userChosenColour);
    animatePress(userChosenColour);

    userClickedPattern.push(userChosenColour);
    checkAnswer(userClickedPattern.length - 1);
  }
});

$(document).keypress(function() {
  if (!started) {
    nextSequence();
    started = true;
  }
});

function nextSequence() {
  userClickedPattern = [];
  var randomNumber = (Math.floor(Math.random() * 4));
  var randomChosenColour = buttonColours[randomNumber];
  gamePattern.push(randomChosenColour);
  animatePress(randomChosenColour);

  playSound(randomChosenColour);
  $("h1").html("Level " + level);
  level++;
};

function playSound(colourName) {
  var audio = new Audio("sounds/" + colourName + ".mp3");
  audio.play();
};

function animatePress(currentColour) {
  $("#" + currentColour).addClass("pressed");

  setTimeout(function() {
    $("#" + currentColour).removeClass("pressed");
  }, 100);
};


function checkAnswer(currentLevel) {
  console.log(userClickedPattern[currentLevel]);
  console.log(gamePattern[currentLevel]);
  if (userClickedPattern[currentLevel] === gamePattern[currentLevel]) {
    if (userClickedPattern.length === gamePattern.length) {
      setTimeout(function() {
        nextSequence();
      }, 1000);
    };
  } else {
    var audio = new Audio("sounds/wrong.mp3");
    audio.play();
    $("body").addClass("game-over");
    setTimeout(function() {
      $("body").removeClass("game-over");
    }, 1000);
    $("h1").html("Game Over, Press Any Key to Restart");
    startover();
  };
};

function startover() {
  started = false;
  level = 0;
  gamePattern = [];
  userClickedPattern = [];
};
