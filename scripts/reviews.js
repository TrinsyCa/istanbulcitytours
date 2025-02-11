const imgObject = document.getElementById("imgSlideObject");
const imgObjectContent = document.querySelector('.imgSlider-content');
const imgObjectButtons = imgObjectContent.querySelectorAll('.imgSlider-content button');
const sliderBtns = document.querySelectorAll('.sliderBtn');
const sliderBtnLines = document.querySelectorAll('.sliderBtn-line');

let imgObjectMaxSlides = imgObjectButtons.length;

imgObjectContent.setAttribute("max-slides", imgObjectMaxSlides);

sliderBtns.forEach(function(sliderBtn, index) {
    sliderBtn.setAttribute("slide", (index + 1));

    sliderBtn.addEventListener('click', function() {
        clearInterval(AutoSlider);
        AutoSlider = setInterval(imgSliderFunc_Autoplay, 5000);
    });
});

function imgSliderFunc(imgLabel) {
    imgObject.classList.add("anim");
    imgObjectLabel = imgLabel;
    imgObjectTimeline = setTimeout(() => {
        imgObject.classList.remove("anim");
        imgObject.src = "/img/sliders/fleet/" + imgObjectLabel + ".webp";
        imgObject.setAttribute("aria-label",imgObjectLabel);
    }, 500);
    const matchedSlide = document.querySelector(`.sliderBtn[slide="${imgObjectLabel}"]`);
    sliderBtns.forEach(function(sliderBtn) {
        sliderBtn.classList.remove('active');
    });
    matchedSlide.classList.add('active');
    sliderBtnLines.forEach(function(sliderBtnLine) {
        sliderBtnLine.style.width = "0%";
    });
    const selectedSliderBtnLine = document.querySelector('.sliderBtn.active .sliderBtn-line');
    if(selectedSliderBtnLine) {
        selectedSliderBtnLine.style.width = "0%";
        setTimeout(() => {
            selectedSliderBtnLine.style.width = "100%";
        }, 10);
    }
}

function imgSliderFunc_Autoplay() {
    let imgObjectCount = parseInt(imgObject.getAttribute("aria-label")) + 1;
    if(imgObjectCount <= imgObjectMaxSlides) {
        imgObject.setAttribute("aria-label", parseInt(imgObjectCount));
    }
    else {
        imgObjectCount = 1;
    }
    imgSliderFunc(imgObjectCount);
}

AutoSlider = setInterval(imgSliderFunc_Autoplay, 5000);