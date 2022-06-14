var canvas = document.getElementById("canvas"),
    stage = new createjs.StageGL(canvas, {antialias: true});
stage.setClearColor("#999");
createjs.Ticker.timingMode = createjs.Ticker.RAF;
createjs.Touch.enable(stage);
var cont = stage.addChild(new createjs.Container())
    .set({mouseEnabled: false, mouseChildren: false});

// Load the banana
var img = document.createElement("img");
img.crossOrigin = "Anonymous";
img.src = "https://s3-us-west-2.amazonaws.com/s.cdpn.io/1524180/Banana.png";
img.onload = init;
var bmp = new createjs.Bitmap(img);
handleResize();

var MAX_BANANAS = 500;

var bananas = [];

function init() {
    createjs.Ticker.on("tick", tick);
    for (var i = 0; i < 100; i++) {
        tick();
    }
}

// Tick Code
var clicked = false;

function tick(event) {
    addBanana();

    var factor = 1,
        DIST = canvas.width / 10,
        ADD = 10;
    if (clicked) {
        factor = 5;
        DIST = canvas.width / 5;
    }

    for (var i = bananas.length - 1; i >= 0; i--) {
        var b = bananas[i];
        b.y += b.speed;
        b.rotation = (b.rotation + b.rotationSpeed) % 360;
        b.speed *= 1.01;

        b.x += b.addX; // Add burst speed
        b.y += b.addY;
        b.addX *= 0.9; // Slow down the burst speed
        if (b.addY < 0) {
            b.addY *= 0.9;
        }

        var difX = stage.mouseX - b.x,
            difY = stage.mouseY - b.y,
            dist = Math.sqrt(difX * difX + difY * difY);
        if (Math.abs(dist) < DIST) {
            if (clicked) {
                b.rotationSpeed *= -difX / DIST * 10;
            }
            b.addX = -difX / DIST * ADD * (b.scale) * factor;
            b.addY = -difY / DIST * ADD * (b.scale) * factor;
        }

        if (b.y > canvas.height + 30) {
            addBanana(b, i); // Reset banana
        }
    }
    clicked = false;
    stage.update(event);
}

function addBanana(b) {
    if (b) {
        // Nothing, its banana reuse
    } else if (bananas.length > MAX_BANANAS) {
        return; // Too many bananas
    } else {
        // Make a new banana
        b = new createjs.Bitmap(img).set({
            regX: img.naturalWidth / 2,
            regY: img.naturalHeight / 2
        });
        bananas.push(b);
        cont.addChild(b);
    }

    // Reset banana props
    b.set({
        x: Math.random() * canvas.width,
        y: -30,
        speed: Math.random() * 6 + 1.5,
        rotation: Math.random() * 360,
        rotationSpeed: Math.random() * 3 - 1.5,
        addX: 0,
        addY: 0,
        power: 0
    });
    b.scale = b.speed / 7.5; // Speed is a factor of scale
}

// Resize Code
window.addEventListener("resize", handleResize, false);

function handleResize(event) {
    var w = window.innerWidth,
        h = window.innerHeight;
    canvas.width = w;
    canvas.height = h;
    stage.updateViewport(w, h);
    // Layout other assets
    stage.update();
}

stage.on("stagemousedown", function () {
    clicked = true;
})

createLockup(["EaselJS"]);
