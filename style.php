



function catc_inline_css() {
    ?>
          <style>
          /*this code is for image clicable*/
.catcPopup {
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    width: 100%;
    z-index: 9999;
    background-color: #00000090;
    backdrop-filter: blur(2px);
    display: flex;
    justify-content: center;
    align-items: center;
}
.catcinnerPopup {
    width: 40%;
    height: 65%;
}
.catcinnerPopup img {
    height: 100%;
    width: 100%;
	object-fit:contain;
}

span.catcClose {
    position: absolute;
    top: 14%;
    right: 8%;
    color:#000;
    font-size: 62px;
    line-height: 0;
    transform: rotate(45deg);
    cursor: pointer;
    user-select: none;
}

@media only screen and (max-width: 768px) {
    .catcinnerPopup {
    width: 80%;
    height: auto;
}
    span.catcClose {
        top: 15%;
        right: 4%;
        font-size: 40px;
    }
}
@media (max-width: 768px){
	.tc-epo-element-product-container-cart {
    margin-left: 0px !important;
}
	.tc-epo-element-product-container-left {
    width: 60% !important;
    -ms-flex: 0 0 20%;
    flex: 0 0 20%;
}
.tc-epo-element-product-container-cart {

    margin-left: 0px !important;
}
	.tc-epo-element-product-container-right {
    width: 35% !important;
    -ms-flex: 0 0 76%;
    flex: none !important;
    margin-left: 4%;
}
}

          </style>
    <?php
}
add_action('wp_head', 'catc_inline_css');