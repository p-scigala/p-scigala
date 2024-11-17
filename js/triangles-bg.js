var canvas = document.getElementsByClassName("triangles")

var params = {
    darkMode: true,
    canvasSize: {
        x: 1920,
        y: 1080,
    },
    amount: 10,
    variation: 160,
    color: {
        h: 198, // hue: 0-255
        s: 81, // saturation: 0-100
        l: 89, // lightness: 0-100
        lv: 0.15, // lightness vartiation: 0-1
    }
}

var currentPosition = getPoints(params)

function getPoints(p) {
    var distance = p.canvasSize.x / p.amount
    var collection = []
    for (var x = 0; x < p.amount * 2; x++) {
        for (var y = 0; y < p.amount; y++) {
            //px = variation of random * length from neightbour - one length, so it will cover canvas edges
            var px = Math.random() * p.variation + x * distance - distance + (distance * y / 2) - p.canvasSize.x / 2
            var py = Math.random() * p.variation + y * distance * 1.333 - distance
            collection.push({ x: px, y: py })
        }
    }
    return collection
}

function drawBackground(p) {
    for (var c = 0; c < canvas.length; c++) {
        var ctx = canvas[c].getContext("2d")

        for (var y = 0; y < p.amount * 2 - 1; y++) {
            for (var x = 0; x < p.amount - 1; x++) {

                var lum = (p.darkMode) ? 20 : p.color.l
                var sat = (p.darkMode) ? p.color.s : 0

                var lsv = "hsl(" + p.color.h + "," + sat + "%," + (lum - Math.random() * 100 * p.color.lv) + "%)"
                ctx.fillStyle = lsv
                ctx.strokeStyle = lsv

                ctx.beginPath()
                ctx.moveTo(
                    currentPosition[p.amount * y + x].x,
                    currentPosition[p.amount * y + x].y
                )
                ctx.lineTo(
                    currentPosition[p.amount * y + x + 1].x,
                    currentPosition[p.amount * y + x + 1].y
                )
                ctx.lineTo(
                    currentPosition[p.amount * y + p.amount + x].x,
                    currentPosition[p.amount * y + p.amount + x].y
                )
                ctx.lineTo(
                    currentPosition[p.amount * y + x].x,
                    currentPosition[p.amount * y + x].y
                )
                ctx.fill()
                ctx.stroke()
                ctx.closePath()

                lsv = "hsl(" + p.color.h + "," + sat + "%," + (lum - Math.random() * 100 * p.color.lv) + "%)"
                ctx.fillStyle = lsv
                ctx.strokeStyle = lsv

                ctx.beginPath()
                ctx.moveTo(
                    currentPosition[p.amount * y + x + 1].x,
                    currentPosition[p.amount * y + x + 1].y
                )
                ctx.lineTo(
                    currentPosition[p.amount * y + p.amount + x + 1].x,
                    currentPosition[p.amount * y + p.amount + x + 1].y
                )
                ctx.lineTo(
                    currentPosition[p.amount * y + p.amount + x].x,
                    currentPosition[p.amount * y + p.amount + x].y
                )
                ctx.lineTo(
                    currentPosition[p.amount * y + x + 1].x,
                    currentPosition[p.amount * y + x + 1].y
                )
                ctx.fill()
                ctx.stroke()
                ctx.closePath()
            }
        }
    }
}

drawBackground(params)
