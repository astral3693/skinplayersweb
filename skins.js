const image = document.getElementById("image")
const image2 = document.getElementById("image2")
const t_model = document.getElementById('t_model');
const ct_model = document.getElementById('ct_model');

function changingSelection(selection){
    const value = selection.value;
	ct_model.value = value;

    if (value == "leao"){
        image.src = "/img/657ca211c7f7d.jpg";
		img.value = image.src;
    } 
	else if (value == "rei") {
        image.src = "/img/657ca4c525a9a.jpg";
		img.value = image.src;

    }else if (value == "macaco") {
        image.src = "/img/657ca6f29829f.jpg";
		img.value = image.src;

    }else if (value == "gata") {
        image.src = "/img/6557a5921a38c.jpg";
		img.value = image.src;

    }else if (value == "samael") {
        image.src = "/img/659c438748d36.jpg";
		img.value = image.src;

    }
	else if (value == "roblox5") {
        image.src = "img/658f2216cffe3.jpg";
		img.value = image.src;

    }
	else if (value == "roblox7") {
        image.src = "/img/658f23c02710f.jpg";
		img.value = image.src;

    }
	else if (value == "roblox8") {
        image.src = "/img/6543f5fe7e2d2.jpg";
		img.value = image.src;

    }
	else if (value == "among") {
        image.src = "/img/6543f5fe7e2d2.jpg";
		img.value = image.src;

    }
	else if (value == "Default") {
        image.src = "img/counter-strike-2-changes.jpg";
		img.value = image.src;
		ct_model.value = "";

    }
	else if (value == "@random") {
        image.src = "img/counter-strike-2-changes.jpg";
		img.value = image.src;

    }
	else if (value == "gangle") {
        image.src = "img/65aac42075a2d.jpg";
		img.value = image.src;

    }
	else if (value == "gloria") {
        image.src = "img/657ca9243259f.jpg";
		img.value = image.src;

    }
}

function changingSelection2(selection){
    const value = selection.value;
	t_model.value = value;

    if (value == "robocop") {
        image2.src = "/img/6557bc96d4c1b.jpg";
		img2.value = image2.src;

    }else if (value == "anna") {
        image2.src = "/img/65a031bc946f6.jpg";
		img2.value = image2.src;

    }else if (value == "samael") {
        image2.src = "/img/659c438748d36.jpg";
		img2.value = image2.src;

    }
	else if (value == "roblox7") {
		image2.src = "/img/658f23c02710f.jpg";
		img2.value = image2.src;

    }
	else if (value == "uriel") {
        image2.src = "/img/65c67efd3a900.jpg";
		img2.value = image2.src;

    }
	else if (value == "lucifer") {
        image2.src = "/img/656f6ef93682a.jpg";
		img2.value = image2.src;

    }
	else if (value == "Default") {
        image2.src = "img/Is-Counter-Strike.jpg";
		img2.value = image2.src;
		t_model.value = "";

    }
	else if (value == "@random") {
        image2.src = "img/Is-Counter-Strike.jpg";
		img2.value = image2.src;

    }
	else if (value == "gangle") {
        image2.src = "img/65aac42075a2d.jpg";
		img2.value = image2.src;

    }
}
