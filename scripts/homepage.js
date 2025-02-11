const headerVideo = document.getElementById("header-bg-video");
headerVideo.playbackRate = 0.8;

const featuresCol = document.querySelectorAll(".features-col");
featuresCol.forEach((fetureCol) => {
    const productContainer = fetureCol.querySelectorAll(".feature-card-container");
    productContainer.forEach((product) => {
        product.addEventListener("mouseenter", () => {
            const productList = product.querySelectorAll(".feature-card-list");
            productList.forEach((list) => {
                list.style.height = list.scrollHeight + 5 + "px";
                fetureCol.style.height = product.scrollHeight + list.scrollHeight + 5 + "px";
            });
        });
        product.addEventListener("mouseleave", () => {
            const productList = product.querySelectorAll(".feature-card-list");
            productList.forEach((list) => {
                list.style.height = "0px";
                fetureCol.style.height = "550px";
            });
        });
    });
});