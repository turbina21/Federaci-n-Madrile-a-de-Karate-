<!DOCTYPE html>
<html>

<head>
    <title>FEDERACION MADRILEÑA DE KARATE</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style class="cp-pen-styles">
        .wrapper {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        h1 {
            font-family: inherit;
            margin: 0 0 .75em 0;
            color: #728c8d;
            text-align: center;
        }

        .box {
            display: block;
            min-width: 300px;
            height: 300px;
            margin: 10px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            -webkit-transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            overflow: hidden;
        }

        .upload-options {
            position: relative;
            height: 75px;
            background-color: cadetblue;
            cursor: pointer;
            overflow: hidden;
            text-align: center;
            -webkit-transition: background-color ease-in-out 150ms;
            transition: background-color ease-in-out 150ms;
        }

        .upload-options:hover {
            background-color: #7fb1b3;
        }

        .upload-options input {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .upload-options label {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            height: 100%;
            font-weight: 400;
            text-overflow: ellipsis;
            white-space: nowrap;
            cursor: pointer;
            overflow: hidden;
        }

        .upload-options label::after {
            content: 'add';
            font-family: 'Material Icons';
            position: absolute;
            font-size: 2.5rem;
            color: #e6e6e6;
            top: calc(50% - 2.5rem);
            left: calc(50% - 1.25rem);
            z-index: 0;
        }

        .upload-options label span {
            display: inline-block;
            width: 50%;
            height: 100%;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            vertical-align: middle;
            text-align: center;
        }

        .upload-options label span:hover i.material-icons {
            color: lightgray;
        }

        .js--image-preview {
            height: 225px;
            width: 100%;
            position: relative;
            overflow: hidden;
            background-image: url("");
            background-color: white;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .js--image-preview::after {
            content: "photo_size_select_actual";
            font-family: 'Material Icons';
            position: relative;
            font-size: 4.5em;
            color: #e6e6e6;
            top: calc(50% - 3rem);
            left: calc(50% - 2.25rem);
            z-index: 0;
        }

        .js--image-preview.js--no-default::after {
            display: none;
        }

        i.material-icons {
            -webkit-transition: color 100ms ease-in-out;
            transition: color 100ms ease-in-out;
            font-size: 2.25em;
            line-height: 55px;
            color: white;
            display: block;
        }

        .drop {
            display: block;
            position: absolute;
            background: rgba(95, 158, 160, 0.2);
            border-radius: 100%;
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        .animate {
            -webkit-animation: ripple 0.4s linear;
            animation: ripple 0.4s linear;
        }

        @-webkit-keyframes ripple {
            100% {
                opacity: 0;
                -webkit-transform: scale(2.5);
                transform: scale(2.5);
            }
        }

        @keyframes ripple {
            100% {
                opacity: 0;
                -webkit-transform: scale(2.5);
                transform: scale(2.5);
            }
        }

        .foto {
            width: 100px;
            height: 100px;
        }

        img {
            width: 100px;
            height: 100px;
        }

        /* Switch Slide
==========================*/
        .switch-slide {
            padding: 0;
            margin: 15px 0 0;
            background: #FFF;
            border-radius: 0;
            background-image: none;
        }

        .switch-slide .switch-label {
            box-shadow: none;
            background: none;
            overflow: hidden;
        }

        .switch-slide .switch-label:after,
        .switch-slide .switch-label:before {
            width: 100%;
            height: 65%;
            top: 5px;
            left: 0;
            text-align: center;
            padding-top: 10%;
            box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.2), inset 0 0 3px rgba(0, 0, 0, 0.1);
        }

        .switch-slide .switch-label:after {
            color: #FFFFFF;
            background: #87CEEB;
            left: -100px;
        }

        .switch-slide .switch-label:before {
            background: #eceeef;
        }

        .switch-slide .switch-handle {
            display: none;
        }

        .switch-slide .switch-input:checked~.switch-label {
            background: #FFF;
            border-color: #0088cc;
        }

        .switch-slide .switch-input:checked~.switch-label:before {
            left: 100px;
        }

        .switch-slide .switch-input:checked~.switch-label:after {
            left: 0;
        }
    </style>
</head>

<body>

    <div class="container">
        @yield('content')
    </div>
    <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
    <script>
        function initImageUpload(box) {
            let uploadField = box.querySelector('.image-upload');

            uploadField.addEventListener('change', getFile);

            function getFile(e) {
                let file = e.currentTarget.files[0];
                checkType(file);
            }

            function previewImage(file) {
                let thumb = box.querySelector('.js--image-preview'),
                    reader = new FileReader();

                reader.onload = function() {
                    thumb.style.backgroundImage = 'url(' + reader.result + ')';
                }
                reader.readAsDataURL(file);
                thumb.className += ' js--no-default';
            }

            function checkType(file) {
                let imageType = /image.*/;
                if (!file.type.match(imageType)) {
                    throw 'Datei ist kein Bild';
                } else if (!file) {
                    throw 'Kein Bild gewählt';
                } else {
                    previewImage(file);
                }
            }

        }

        // initialize box-scope
        var boxes = document.querySelectorAll('.box');

        for (let i = 0; i < boxes.length; i++) {
            if (window.CP.shouldStopExecution(1)) {
                break;
            }
            let box = boxes[i];
            initDropEffect(box);
            initImageUpload(box);
        }
        window.CP.exitedLoop(1);




        /// drop-effect
        function initDropEffect(box) {
            let area, drop, areaWidth, areaHeight, maxDistance, dropWidth, dropHeight, x, y;

            // get clickable area for drop effect
            area = box.querySelector('.js--image-preview');
            area.addEventListener('click', fireRipple);

            function fireRipple(e) {
                area = e.currentTarget
                // create drop
                if (!drop) {
                    drop = document.createElement('span');
                    drop.className = 'drop';
                    this.appendChild(drop);
                }
                // reset animate class
                drop.className = 'drop';

                // calculate dimensions of area (longest side)
                areaWidth = getComputedStyle(this, null).getPropertyValue("width");
                areaHeight = getComputedStyle(this, null).getPropertyValue("height");
                maxDistance = Math.max(parseInt(areaWidth, 10), parseInt(areaHeight, 10));

                // set drop dimensions to fill area
                drop.style.width = maxDistance + 'px';
                drop.style.height = maxDistance + 'px';

                // calculate dimensions of drop
                dropWidth = getComputedStyle(this, null).getPropertyValue("width");
                dropHeight = getComputedStyle(this, null).getPropertyValue("height");

                // calculate relative coordinates of click
                // logic: click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center
                x = e.pageX - this.offsetLeft - (parseInt(dropWidth, 10) / 2);
                y = e.pageY - this.offsetTop - (parseInt(dropHeight, 10) / 2) - 30;

                // position drop and animate
                drop.style.top = y + 'px';
                drop.style.left = x + 'px';
                drop.className += ' animate';
                e.stopPropagation();

            }
        }


        //# sourceURL=pen.js
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>