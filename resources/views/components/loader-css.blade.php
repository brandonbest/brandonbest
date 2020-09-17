<style>
    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, embed,
    figure, figcaption, footer, header, hgroup,
    menu, nav, output, ruby, section, summary,
    time, mark, audio, video {
        margin: 0;
        padding: 0;
        border: 0;
        vertical-align: baseline;
    }
    /* HTML5 display-role reset for older browsers */
    article, aside, details, figcaption, figure,
    footer, header, hgroup, menu, nav, section {
        display: block;
    }
    body {
        line-height: 1;
        overflow: hidden;
    }
    #app-loader {
        z-index: 9999999;
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: #000000;
    }
    #app-loader .logo {
        background-image: url('/images/brandon-best-icon.png');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: 150px 150px;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        animation: pulse 1s infinite;
    }

    @keyframes pulse {
        0% {
            background-size: 150px 150px;
        }
        30% {
            background-size: 150px 150px;
        }
        40% {
            background-size: 170px 170px;
        }
        50% {
            background-size: 160px 160px;
        }
        60% {
            background-size: 190px 190px;
        }
        30% {
            background-size: 150px 150px;
        }
        100% {
            background-size: 150px 150px;
        }
    }

    #app-loader .logo-repeat {
        background-image: url('/images/brandon-best-icon.png');
        background-size: 30px 30px;
        opacity: .2;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }
</style>