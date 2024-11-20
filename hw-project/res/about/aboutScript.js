

document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("scroll", function () {
        var aboutInfo = document.querySelector(".about-info");
        var ownerInfo = document.querySelector(".owner-info");
        var hr = document.querySelector("hr")
        var ownerDivElement = document.querySelector(".owner-info div");
        var ownerImgElement = document.querySelector(".owner-info img");
        var divElement = document.querySelector(".about-info div");
        var imgElement = document.querySelector(".about-info img");
        var position = aboutInfo.getBoundingClientRect().top;
        var ownerPosition = ownerInfo.getBoundingClientRect().top;
        var hrPosition = hr.getBoundingClientRect().top;
        var screenHeight = window.innerHeight;

        if (position < screenHeight * 0.75)
        {
            divElement.classList.add("animate");
            imgElement.classList.add("animate");
        } else
        {
            divElement.classList.remove("animate");
            imgElement.classList.remove("animate");
        }

        if (ownerPosition < screenHeight * 0.75) 
        {
            ownerDivElement.classList.add("animate");
            ownerImgElement.classList.add("animate");
        } else 
        {
            ownerDivElement.classList.remove("animate");
            ownerImgElement.classList.remove("animate");
        }
        if (hrPosition < screenHeight * 0.75) 
        {
            hr.classList.add("animate");
        } else 
        {
            hr.classList.remove("animate");
        }

    });
});

